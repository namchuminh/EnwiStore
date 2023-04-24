<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_GioHang extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getAllProductOfCart($MaKH){
		$sql = "SELECT giohang.*, sanpham_giohang.*, sanpham.MaSP, sanpham.TenSP, sanpham.GiaTien, anh.* FROM `sanpham_giohang`, `giohang`, `sanpham`, `anh` WHERE sanpham_giohang.MaGioHang = giohang.MaGioHang AND sanpham_giohang.MaSP = sanpham.MaSP AND sanpham.MaSP = anh.MaSP AND giohang.MaKH = ? GROUP BY sanpham.MaSP";
		$result = $this->db->query($sql, array($MaKH));
		return $result->result_array();
	}

	public function getIdOfCart(){
		$sql = "SELECT * FROM `giohang` ORDER BY MaGioHang DESC LIMIT 1";
		$result = $this->db->query($sql);
		if($result->num_rows() == 0){
			return FALSE;
		}else{
			return $result->result_array()[0]['MaGioHang'];
		}
	}

	public function addCart($MaGioHang,$MaKH, $PhiShip){
		$sql = "INSERT INTO `giohang`(`MaGioHang`, `MaKH`, `PhiShip`) VALUES (?,?,?)";
		$result = $this->db->query($sql,array($MaGioHang,$MaKH, $PhiShip));
		return $result;
	}

	public function addProductToCart($MaGioHang,$MaSP,$MauSac,$SoLuong){
		$sql = "INSERT INTO `sanpham_giohang`(`MaGioHang`, `MaSP`, `MauSac`, `SoLuong`) VALUES (?,?,?,?)";
		$result = $this->db->query($sql,array($MaGioHang,$MaSP,$MauSac,$SoLuong));
		return $result;
	}

	public function checkProductOfCart($MaGioHang,$MaSP){
		$sql = "SELECT * FROM `sanpham_giohang` WHERE MaGioHang = ? AND MaSP = ?";
		$result = $this->db->query($sql,array($MaGioHang,$MaSP));
		return $result->num_rows();
	}

	public function checkUserOfCart($MaKH){
		$sql = "SELECT * FROM `giohang` WHERE MaKH = ? LIMIT 1";
		$result = $this->db->query($sql, array($MaKH));
		if($result->num_rows() == 0){
			return FALSE;
		}else{
			return $result->result_array()[0]['MaGioHang'];
		}
	}

	public function updateProductOfCart($SoLuong,$MaGioHang,$MaSP){
		$sql = "UPDATE `sanpham_giohang` SET `SoLuong`= ? WHERE `MaGioHang`= ? AND `MaSP`= ?";
		$result = $this->db->query($sql, array($SoLuong,$MaGioHang,$MaSP));
		return $result;
	}

	public function deleteProductOfCart($MaGioHang,$MaSP){
		$sql = "DELETE FROM `sanpham_giohang` WHERE MaGioHang = ? AND MaSP = ?";
		$result = $this->db->query($sql, array($MaGioHang,$MaSP));
		return $result;
	}

}

/* End of file Model_GioHang.php */
/* Location: ./application/models/Model_GioHang.php */