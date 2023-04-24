<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_DonHang extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	public function getDonHang(){
		$sql = "SELECT * FROM donhang WHERE TinhTrangDH != 2 ORDER BY ThoiGian DESC";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function getChiTietDonHang($MaDH){
		$sql = "SELECT sanpham.MaSP, sanpham.TenSP, sanpham.GiaTien, sanpham_donhang.*, anh.* FROM `sanpham`, `sanpham_donhang`, `anh` WHERE sanpham.MaSP = sanpham_donhang.MaSP AND sanpham.MaSP = anh.MaSP AND MaDH = ? GROUP BY sanpham.MaSP";
		$result = $this->db->query($sql, array($MaDH));
		return $result->result_array();
	}

	public function updateTinhTrangDonHang($MaDH,$MaHoatDong){
		$sql = "UPDATE `donhang` SET `TinhTrangDH` = ? WHERE `MaDH`= ?";
		$result = $this->db->query($sql, array($MaHoatDong,$MaDH));
		return $result;
	}

	public function getDonHangHuy(){
		$sql = "SELECT * FROM donhang WHERE TinhTrangDH = 2 ORDER BY ThoiGian DESC";
		$result = $this->db->query($sql);
		return $result->result_array();
	}
}

/* End of file Model_DonHang.php */
/* Location: ./application/models/Model_DonHang.php */