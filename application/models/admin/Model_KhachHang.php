<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_KhachHang extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getKhachHang()
	{
		$sql = "SELECT khachhang.*, taikhoan.* FROM `khachhang`, `taikhoan` WHERE khachhang.MaTK = taikhoan.MaTK AND taikhoan.ID = 1 AND khachhang.TrangThai = 1 ORDER BY ThoiGian DESC";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function updateKhachHang($MaKH,$MaHoatDong)
	{
		$sql = "UPDATE `khachhang` SET `TrangThai`= ? WHERE `MaKH`= ?";
		$result = $this->db->query($sql, array($MaHoatDong, $MaKH));
		return $result;
	}

	public function getKhachHangChan()
	{
		$sql = "SELECT khachhang.*, taikhoan.* FROM `khachhang`, `taikhoan` WHERE khachhang.MaTK = taikhoan.MaTK AND taikhoan.ID = 1 AND khachhang.TrangThai = 0 ORDER BY ThoiGian DESC";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

}

/* End of file Model_KhachHang.php */
/* Location: ./application/models/Model_KhachHang.php */