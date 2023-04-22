<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DangNhap extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_DangNhap');
	}

	public function DangNhap()
	{
		if($this->session->has_userdata('logged_in')){
			return redirect(base_url('khach-hang/'));
		}
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$taikhoan = $this->input->post('taikhoan');
			$matkhau = $this->input->post('matkhau');

			$result = $this->Model_DangNhap->checkLogin($taikhoan,$matkhau);

			if($result[0]['SL'] == 0){
				$data = array(
					'err' => "Sai tài khoản hoặc mật khẩu!"
				);
				return $this->load->view('DangNhap', $data);
			}else{
				$newdata = array(
			        'username'  => $taikhoan,
			        'logged_in' => TRUE,
				);
				$this->session->set_userdata($newdata);
				return redirect(base_url('khach-hang/'));
			}
		}
		return $this->load->view('DangNhap');
	}

	public function DangKy()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$taikhoan = $this->input->post('tentaikhoan');
			$email = $this->input->post('email');
			$matkhau = $this->input->post('matkhau');

			$result = $this->Model_DangNhap->checkRegister($taikhoan,$email);

			if($result >= 1){
				$data = array(
					'err' => "Tên tài khoản hoặc email đã tồn tại!"
				);
				return $this->load->view('DangKy',$data);
			}else{
				if($this->Model_DangNhap->insertUserRegister($taikhoan,$email,$matkhau) == TRUE){
					$data = array(
						'success' => "Đăng ký thành công!"
					);
					return $this->load->view('DangKy',$data);
				}else{
					$data = array(
						'err' => "Đăng ký thất bại, vui lòng thử lại!"
					);
					return $this->load->view('DangKy',$data);
				}
			}
		}
		return $this->load->view('DangKy');
	}

	public function DangXuat(){
		$this->session->sess_destroy();
		return redirect(base_url('dang-nhap')); 
	}

}

/* End of file DangNhap.php */
/* Location: ./application/controllers/DangNhap.php */