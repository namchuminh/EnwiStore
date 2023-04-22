<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_KhachHang extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getInfoUser($TenTK){
		$sql = "SELECT taikhoan.*, khachhang.* FROM `taikhoan`, `khachhang` WHERE taikhoan.MaTK = khachhang.MaTK AND taikhoan.ID = 1 AND taikhoan.TenTK = ?";
		$result = $this->db->query($sql, array($TenTK));
		return $result->result_array()[0]['MaKH'];
	}

	public function getOrderByIdUser($MaKH){
		$sql = "SELECT * FROM `donhang` WHERE MaKH = ? ORDER BY ThoiGian DESC";
		$result = $this->db->query($sql, array($MaKH));
		return $result->result_array();
	}

	public function getInfoDetailUser($TenTK){
		$sql = "SELECT khachhang.*, taikhoan.* FROM `khachhang`, `taikhoan` WHERE khachhang.MaTK = taikhoan.MaTK AND taikhoan.TenTK = ? AND taikhoan.ID = 1";
		$result = $this->db->query($sql, array($TenTK));
		return $result->result_array();
	}

	public function updateUser($hoten, $email, $diachi, $ngaysinh, $MaKH){
		$sql = "UPDATE `khachhang` SET `TenKH`= ?,`Email`= ?,`DiaChi`= ?,`NgaySinh`= ? WHERE `MaKH`=?";
		$result = $this->db->query($sql, array($hoten, $email, $diachi, $ngaysinh, $MaKH));
		return $result;
	}

	public function updateAccount($sodienthoai, $matkhau, $MaTK){
		$sql = "UPDATE `taikhoan` SET `SDT`= ?,`MatKhau`= ? WHERE `MaTK`=?";
		$result = $this->db->query($sql, array($sodienthoai, $matkhau, $MaTK));
		return $result;
	}
}

/* End of file KhachHang.php */
/* Location: ./application/models/KhachHang.php */