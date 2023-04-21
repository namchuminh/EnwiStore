<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class KhachHang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('logged_in')){
			return redirect(base_url('admin/dang-nhap'));
		}
		$this->load->model('admin/Model_KhachHang');
	}

	public function index()
	{
		$data = array(
			'result' => $this->Model_KhachHang->getKhachHang(),
		);
		return $this->load->view('admin/KhachHang', $data);
	}

	public function XuLyKhachHang($MaKH,$MaHoatDong)
	{
		$this->Model_KhachHang->updateKhachHang($MaKH,$MaHoatDong);
		return redirect('admin/khach-hang/');
	}

	public function KhachHangChan()
	{
		$data = array(
			'result' => $this->Model_KhachHang->getKhachHangChan(),
		);
		return $this->load->view('admin/KhachHangChan', $data);
	}


}

/* End of file KhachHang.php */
/* Location: ./application/controllers/KhachHang.php */