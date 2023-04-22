<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_DangNhap extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function checkLogin($taikhoan,$matkhau){
		$sql = "SELECT COUNT(*) AS SL FROM taikhoan WHERE TenTK = ? AND MatKhau = ? AND ID = 1";
		$result = $this->db->query($sql, array($taikhoan,$matkhau));
		return $result->result_array();
	}

	public function checkRegister($taikhoan,$email){
		$sql = "SELECT taikhoan.*, khachhang.* FROM `taikhoan`, `khachhang` WHERE taikhoan.MaTK = khachhang.MaTK AND taikhoan.ID = 1 AND taikhoan.TenTK = ? OR khachhang.Email = ?";
		$result = $this->db->query($sql, array($taikhoan,$email));
		return $result->num_rows();
	}

	public function getLastInsert(){
		$sql = "SELECT * FROM `taikhoan` ORDER BY MaTK DESC LIMIT 1";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function getLastUserId(){
		$sql = "SELECT * FROM `khachhang` ORDER BY MaKH DESC LIMIT 1";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function insertUserRegister($taikhoan, $email, $matkhau){
		$mataikhoanmoi = $this->getLastInsert()[0]['MaTK'] + 1;
		$sql_insert_account= "INSERT INTO `taikhoan`(`MaTK`, `ID`, `TenTK`, `MatKhau`) VALUES (?,?,?,?)";
		$result_account = $this->db->query($sql_insert_account, array($mataikhoanmoi,1,$taikhoan,$matkhau));
		
		$mataikhoan = $this->getLastInsert()[0]['MaTK'];
		$makhachhangmoi = $this->getLastUserId()[0]['MaKH'] + 1;
		$sql_insert_user = "INSERT INTO `khachhang`(`MaKH`,`MaTK`,`Email`) VALUES (?,?,?)";
		$result_user = $this->db->query($sql_insert_user, array($makhachhangmoi,$mataikhoan,$email));

		if($result_account == TRUE && $result_user == TRUE){
			return TRUE;
		}else{
			return FALSE;
		}
	}
}

/* End of file Model_DangNhap.php */
/* Location: ./application/models/Model_DangNhap.php */