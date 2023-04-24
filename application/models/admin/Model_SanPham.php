<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_SanPham extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getSanPham(){
		$sql = "SELECT sanpham.*, loaisp.* FROM sanpham, loaisp WHERE sanpham.MaLoai = loaisp.MaLoai";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function getLoaiSanPham(){
		$sql = "SELECT * FROM loaisp";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function addSanPham($masanpham,$maloai,$tensanpham,$soluong,$thuonghieu,$giatien,$chatlieu,$xuatxu,$thongso){
		$sql = "INSERT INTO `sanpham`(`MaSP`, `MaLoai`, `TenSP`, `SoLuong`, `ThuongHieu`, `GiaTien`, `ChatLieu`, `XuatXu`, `ThongSo`) VALUES (?,?,?,?,?,?,?,?,?)";
		$result = $this->db->query($sql, array($masanpham,$maloai,$tensanpham,$soluong,$thuonghieu,$giatien,$chatlieu,$xuatxu,$thongso));
		return $result;
	}

	public function addAnh($masanpham, $tenanh){
		$sql = "INSERT INTO `anh`(`MaSP`, `TenAnh`) VALUES (?,?)";
		$result = $this->db->query($sql, array($masanpham,$tenanh));
		return $result;
	}

	public function getSanPhamById($masanpham){
		$sql = "SELECT sanpham.*, loaisp.* FROM sanpham, loaisp WHERE sanpham.MaLoai = loaisp.MaLoai AND sanpham.MaSP = ?";
		$result = $this->db->query($sql, array($masanpham));
		return $result->result_array();
	}

	public function getAnhById($masanpham)
	{
		$sql = "SELECT * FROM anh WHERE MaSP = ?";
		$result = $this->db->query($sql, array($masanpham));
		return $result->result_array();
	}

	public function getMauById($masanpham)
	{
		$sql = "SELECT * FROM mausac WHERE MaSP = ?";
		$result = $this->db->query($sql, array($masanpham));
		return $result->result_array();
	}

	public function updateAnh($maanh,$masanpham,$tenanh){
		$sql = "UPDATE `anh` SET `TenAnh`= ? WHERE `MaAnh`= ? AND `MaSP`= ?";
		$result = $this->db->query($sql, array($tenanh,$maanh,$masanpham));
		return $result;
	}

	public function updateSanPham($masanpham,$maloai,$tensanpham,$soluong,$thuonghieu,$giatien,$chatlieu,$xuatxu,$thongso)
	{
		$sql = "UPDATE `sanpham` SET `MaLoai`=?,`TenSP`=?,`SoLuong`=?,`ThuongHieu`=?,`GiaTien`=?,`ChatLieu`=?,`XuatXu`=?,`ThongSo`=? WHERE `MaSP`=?";
		$result = $this->db->query($sql, array($maloai,$tensanpham,$soluong,$thuonghieu,$giatien,$chatlieu,$xuatxu,$thongso,$masanpham));
		return $result;
	}

	public function deleteAnh($masanpham){
		$sql = "DELETE FROM `anh` WHERE `MaSP`=?";
		$result = $this->db->query($sql, array($masanpham));
		return $result;
	}

	public function deleteSanPham($masanpham){
		$sql = "DELETE FROM `sanpham` WHERE `MaSP`=?";
		$result = $this->db->query($sql, array($masanpham));
		return $result;
	}

	public function addMau($masanpham, $tenmau){
		$sql = "INSERT INTO `mausac`(`MaSP`, `TenMau`) VALUES (?, ?)";
		$result = $this->db->query($sql, array($masanpham, $tenmau));
		return $result;
	}

	public function deleteMau($masanpham){
		$sql = "DELETE FROM mausac WHERE MaSP = ?";
		$result = $this->db->query($sql, array($masanpham));
		return $result;
	}
}

/* End of file Model_SanPham.php */
/* Location: ./application/models/Model_SanPham.php */