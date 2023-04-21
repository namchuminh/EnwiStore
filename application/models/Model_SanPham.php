<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_SanPham extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getProductById($MaSP){
		$sql = "SELECT sanpham.*, loaisp.* FROM `sanpham`, `loaisp` WHERE sanpham.MaLoai = loaisp.MaLoai AND sanpham.MaSP = ?";
		$result = $this->db->query($sql, $MaSP);
		return $result->result_array();
	}

	public function getImageByIdProduct($MaSP){
		$sql = "SELECT * FROM `anh` WHERE MaSP = ?";
		$result = $this->db->query($sql, $MaSP);
		return $result->result_array();
	}

	public function getColorByIdProduct($MaSP){
		$sql = "SELECT * FROM `mausac` WHERE MaSP = ?";
		$result = $this->db->query($sql, $MaSP);
		return $result->result_array();
	}

	public function getProductRelated($MaLoai){
		$sql = "SELECT sanpham.*, loaisp.*, anh.* FROM `sanpham`, `loaisp`, `anh` WHERE sanpham.MaLoai = loaisp.MaLoai AND sanpham.MaSP = anh.MaSP GROUP BY sanpham.MaSP ORDER BY RAND() LIMIT 4";
		$result = $this->db->query($sql, $MaLoai);
		return $result->result_array();
	}

}

/* End of file Model_SanPham.php */
/* Location: ./application/models/Model_SanPham.php */