<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class KhachHang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('logged_in')){
			return redirect(base_url('dang-nhap/'));
		}
		$this->load->model('Model_KhachHang');
		$this->load->model('admin/Model_DonHang');
	}

	public function index()
	{
		$customer = $this->Model_KhachHang->getInfoDetailUser($this->session->userdata('username'));
		$MaTK = $customer[0]['MaTK'];
		$MaKH = $this->Model_KhachHang->getInfoUser($this->session->userdata('username'));
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$hoten = $this->input->post('hoten');
			$sodienthoai = $this->input->post('sodienthoai');
			$email = $this->input->post('email');
			$ngaysinh = $this->input->post('ngaysinh');
			$diachi = $this->input->post('diachi');
			$matkhau = $customer[0]['MatKhau'];

			if(isset($_POST['matkhau']) && !empty($_POST['matkhau'])){
				$matkhau = $this->input->post('matkhau');
			}

			if($this->Model_KhachHang->updateUser($hoten, $email, $diachi, $ngaysinh, $MaKH)){
				if($this->Model_KhachHang->updateAccount($sodienthoai, $matkhau, $MaTK)){
					if($this->session->has_userdata('updateInfo')){
						$this->session->unset_userdata('updateInfo');
						return redirect(base_url('thanh-toan/'));
					}else{
						$data = array(
							'title' => "Thông tin khách hàng!",
							'result' => $this->Model_KhachHang->getOrderByIdUser($MaKH),
							'customer' => $this->Model_KhachHang->getInfoDetailUser($this->session->userdata('username')),
							'success' => "Cập nhật thông tin thành công!",
						);
						return $this->load->view('KhachHang',$data);
					}
				}
			}

			$data = array(
				'title' => "Thông tin khách hàng!",
				'result' => $this->Model_KhachHang->getOrderByIdUser($MaKH),
				'customer' => $this->Model_KhachHang->getInfoDetailUser($this->session->userdata('username')),
				'err' => "Cập nhật thông tin không thành công, vui lòng kiểm tra lại!",
			);
			return $this->load->view('KhachHang',$data);
		}

		$data = array(
			'title' => "Thông tin khách hàng!",
			'result' => $this->Model_KhachHang->getOrderByIdUser($MaKH),
			'customer' => $this->Model_KhachHang->getInfoDetailUser($this->session->userdata('username')),
		);
		return $this->load->view('KhachHang',$data);
	}

	public function DonHang($MaDH){
		$data = array(
			'title' => "Chi tiết đơn hàng".$MaDH,
			'result' => $this->Model_DonHang->getChiTietDonHang($MaDH),
			'MaDH' => $MaDH,
		);
		return $this->load->view('ChiTietDonHang', $data);
	}

	public function HuyDon($MaDH){
		$this->Model_DonHang->updateTinhTrangDonHang($MaDH,2);
		return redirect(base_url('khach-hang/'));
	}

	public function GiaoDon($MaDH){
		$this->Model_DonHang->updateTinhTrangDonHang($MaDH,3);
		return redirect(base_url('khach-hang/'));
	}
}

/* End of file KhachHang.php */
/* Location: ./application/controllers/KhachHang.php */