<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class KhachHang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('logged_in')){
			return redirect(base_url('dang-nhap/'));
		}
	}

	public function index()
	{
		$data = array(
			'title' => "Thông tin khách hàng!",
		);
		return $this->load->view('KhachHang',$data);
	}

}

/* End of file KhachHang.php */
/* Location: ./application/controllers/KhachHang.php */