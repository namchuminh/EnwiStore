<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_index extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getNewProduct(){
		$sql = "SELECT sanpham.*, anh.* FROM `sanpham`, `anh` WHERE anh.MaSP = sanpham.MaSP ORDER BY sanpham.MaSP DESC LIMIT 12";
		$result = $this->db->query($sql);
		return $result->result_array();
	}
}

/* End of file Model_index.php */
/* Location: ./application/models/Model_index.php */