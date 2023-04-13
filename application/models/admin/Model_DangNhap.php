<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_DangNhap extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function checkAdmin($taikhoan, $matkhau)
	{
		$sql = "SELECT * FROM taikhoan WHERE TenTK = ? AND MatKhau = ? AND ID = 0";
		$result = $this->db->query($sql,array($taikhoan, $matkhau));
		return $result->num_rows();
	}

	public function getInfoAdmin($taikhoan){
		$sql = "SELECT * FROM taikhoan WHERE TenTK = ?";
		$result = $this->db->query($sql,array($taikhoan));
		return $result->result_array();
	}

}

/* End of file DangNhap.php */
/* Location: ./application/models/DangNhap.php */