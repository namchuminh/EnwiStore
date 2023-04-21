<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class index extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_index');
	}

	public function index()
	{
		$data = array(
			'result' => $this->Model_index->getNewProduct(),
		);
		return $this->load->view('index', $data);
	}

}

/* End of file index.php */
/* Location: ./application/controllers/index.php */