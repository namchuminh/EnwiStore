<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DangNhap extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/Model_DangNhap');
	}

	public function index()
	{
		if($this->session->has_userdata('logged_in')){
			return redirect(base_url('admin'));
		}
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$taikhoan = $this->input->post('taiKhoan');
			$matkhau = $this->input->post('matKhau');
			$result = $this->Model_DangNhap->checkAdmin($taikhoan,$matkhau);

			if ($result == 1) {
				$infoAdmin = $this->Model_DangNhap->getInfoAdmin($taikhoan);
				$newdata = array(
			        'username'  => $taikhoan,
			        'logged_in' => TRUE,
			        'fullname' => $infoAdmin[0]['HoTenAdmin'],
			        'avatar' => $infoAdmin[0]['avatar'],
				);
				$this->session->set_userdata($newdata);
				return redirect(base_url('admin'));
			}else{
				$data = array(
					'err' => "Sai tài khoản hoặc mật khẩu!",
				);
				return $this->load->view('admin/DangNhap', $data);
			}
		}

		return $this->load->view('admin/DangNhap');
	}

	public function DangXuat(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('logged_in');
		return redirect(base_url('admin/dang-nhap')); 
	}

}

/* End of file DangNhap.php */
/* Location: ./application/controllers/DangNhap.php */