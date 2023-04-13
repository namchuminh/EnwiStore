<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CaNhan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('logged_in')){
			return redirect(base_url('admin/dang-nhap'));
		}
		$this->load->model('admin/Model_DangNhap');
		$this->load->model('admin/Model_CaNhan');
	}

	public function index()
	{
		$taikhoan = $this->session->userdata('username');
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$infoAdmin = $this->Model_DangNhap->getInfoAdmin($taikhoan);
			$hoten = $this->input->post('hoten');
			$sodienthoai = $this->input->post('sodienthoai');
			$avatar = $infoAdmin[0]['avatar'];
			$matkhau = $infoAdmin[0]['MatKhau'];



			$config['upload_path'] = './uploads/avatar/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('avatar')){
				$imageChinh = $this->upload->data();
				$avatar = $imageChinh['file_name'];
			}
			
			if(isset($_POST['matkhau']) && !empty($_POST['matkhau'])){
				$matkhau = $this->input->post('matkhau');
			}

			if($this->Model_CaNhan->updateCaNhan($hoten,$sodienthoai,$matkhau,$avatar,$infoAdmin[0]['TenTK'])){
				$newdata = array(
			        'fullname' => $hoten,
			        'avatar' => $avatar,
				);
				$this->session->set_userdata($newdata);

				$data = array(
					'result' => $this->Model_DangNhap->getInfoAdmin($taikhoan),
					'success' => "Cập nhật thông tin thành công!"
				);
				return $this->load->view('admin/CaNhan', $data);
			}else{
				$data = array(
					'result' => $this->Model_DangNhap->getInfoAdmin($taikhoan),
					'err' => "Cập nhật thông tin không thành công, vui lòng kiểm tra lại!"
				);
				return $this->load->view('admin/CaNhan', $data);
			}
		}

		$data = array(
			'result' => $this->Model_DangNhap->getInfoAdmin($taikhoan)
		);
		return $this->load->view('admin/CaNhan', $data);
	}

}

/* End of file CaNhan.php */
/* Location: ./application/controllers/CaNhan.php */