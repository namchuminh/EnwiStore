<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_CaNhan extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function updateCaNhan($hoten,$sodienthoai,$matkhau,$avatar,$taikhoan)
	{
		$sql = "UPDATE `taikhoan` SET `HoTenAdmin`=?,`SDT`=?,`MatKhau`=?,`avatar`=? WHERE `TenTK`=?";
		$result = $this->db->query($sql,array($hoten,$sodienthoai,$matkhau,$avatar,$taikhoan));
		return $result;
	}

}

/* End of file Model_CaNhan.php */
/* Location: ./application/models/Model_CaNhan.php */