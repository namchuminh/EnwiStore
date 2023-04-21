<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class index extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('logged_in')){
			return redirect(base_url('admin/dang-nhap'));
		}
		$this->load->model('admin/Model_index');
	}

	public function index()
	{
		return $this->load->view('admin/index');
	}

	public function ThongKeDoanhThu(){
		$result = json_encode($this->Model_index->DoanhThu());
		echo $result;
	}

}

/* End of file index.php */
/* Location: ./application/controllers/index.php */