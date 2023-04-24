<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_ThanhToan extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	public function checkProductId($MaSP){
		$sql = "SELECT * FROM `sanpham` WHERE MaSP = ?";
		$result = $this->db->query($sql, array($MaSP));
		return $result->num_rows();
	}

	public function checkNumberOrder(){
		$sql = "SELECT * FROM `donhang` ORDER BY ThoiGian DESC LIMIT 1";
		$result = $this->db->query($sql);
		if($result->num_rows() == 0){
			return FALSE;
		}else{
			return $result->result_array()[0]['MaDH'];
		}
	}

	public function addOrder($MaDH, $MaKH, $PTTT, $HoTenKH, $SDT, $DiaChiNhanHang, $Email, $TongTien, $GhiChu)
	{
		$sql = "INSERT INTO `donhang`(`MaDH`, `MaKH`, `PTTT`, `HoTenKH`, `SDT`, `DiaChiNhanHang`, `Email`, `TongTien`, `GhiChu`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$result = $this->db->query($sql, array($MaDH, $MaKH, $PTTT, $HoTenKH, $SDT, $DiaChiNhanHang, $Email, $TongTien, $GhiChu));
		return $result;
	}

	public function addProductToOrder($MaSP,$MaDH,$SoLuong,$mau,$PhiShip){
		$sql = "INSERT INTO `sanpham_donhang`(`MaSP`, `MaDH`, `SoLuong`, `MauSac`, `PhiShip`) VALUES (?,?,?,?,?)";
		$result = $this->db->query($sql,array($MaSP,$MaDH,$SoLuong,$mau,$PhiShip));
		return $result;
	}

}

/* End of file Model_ThanhToan.php */
/* Location: ./application/models/Model_ThanhToan.php */