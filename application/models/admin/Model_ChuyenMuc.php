<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_ChuyenMuc extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getChuyenMuc(){
		$sql = "SELECT * FROM loaisp";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function addChuyenMuc($maloai, $tenloai){
		$sql = "INSERT INTO `loaisp`(`MaLoai`, `TenLoai`) VALUES (?,?)";
		$result = $this->db->query($sql, array($maloai, $tenloai));
		return $result;
	}

	public function checkChuyenMuc($maloai, $tenloai){
		$sql = "SELECT * FROM loaisp WHERE maloai = ? OR tenloai = ?";
		$result = $this->db->query($sql, array($maloai, $tenloai));
		return $result->num_rows();
	}

	public function getChuyenMucById($maloai){
		$sql = "SELECT * FROM loaisp WHERE maloai = ?";
		$result = $this->db->query($sql, array($maloai));
		return $result->result_array();
	}

	public function updateChuyenMuc($maloai, $tenloai){
		$sql = "UPDATE `loaisp` SET `TenLoai`=? WHERE `MaLoai`=?";
		$result = $this->db->query($sql, array($tenloai, $maloai));
		return $result;
	}

	public function checkTenChuyenMuc($tenloai){
		$sql = "SELECT * FROM loaisp WHERE tenloai = ?";
		$result = $this->db->query($sql, array($tenloai));
		return $result->num_rows();
	}

	public function checkDeleteChuyenMuc($maloai){
		$sql = "SELECT sanpham.*, loaisp.* FROM loaisp, sanpham WHERE loaisp.MaLoai = sanpham.MaLoai AND loaisp.MaLoai = ?";
		$result = $this->db->query($sql, array($maloai));
		return $result->num_rows();
	}

	public function deleteChuyenMuc($maloai)
	{
		$sql = "DELETE FROM `loaisp` WHERE MaLoai = ?";
		$result = $this->db->query($sql, array($maloai));
		return $result;
	}

}

/* End of file Model_ChuyenMuc.php */
/* Location: ./application/models/Model_ChuyenMuc.php */