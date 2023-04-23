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

	public function getSearchProduct($TenSP, $start, $limit){
		$TenSP = "%".$TenSP."%";
		$sql = "SELECT sanpham.*, anh.* FROM `sanpham`, `anh` WHERE sanpham.MaSP = anh.MaSP AND sanpham.TenSP LIKE ? GROUP BY sanpham.MaSP LIMIT ?, ?";
		$result = $this->db->query($sql,array($TenSP,$start, $limit));
		return $result->result_array();
	}

	public function getSumSearchProduct($TenSP){
		$TenSP = "%".$TenSP."%";
		$sql = "SELECT sanpham.*, anh.* FROM `sanpham`, `anh` WHERE sanpham.MaSP = anh.MaSP AND sanpham.TenSP LIKE ? GROUP BY sanpham.MaSP";
		$result = $this->db->query($sql,array($TenSP));
		return $result->num_rows();
	}

	public function getCategory($MaLoai,$TinhChat, $start, $limit){
		if($MaLoai == "L001"){
			$sql = "SELECT sanpham.*, loaisp.*, anh.* FROM `sanpham`, `loaisp`, `anh` WHERE sanpham.MaLoai = loaisp.MaLoai AND sanpham.MaSP = anh.MaSP AND sanpham.MaLoai = ? AND sanpham.ChatLieu = ? GROUP BY sanpham.MaSP LIMIT ?, ?";
			$result = $this->db->query($sql,array($MaLoai, $TinhChat, $start, $limit));
			return $result->result_array();
		}else if($MaLoai == "L002"){
			$sql = "SELECT sanpham.*, loaisp.*, anh.* FROM `sanpham`, `loaisp`, `anh` WHERE sanpham.MaLoai = loaisp.MaLoai AND sanpham.MaSP = anh.MaSP AND sanpham.MaLoai = ? AND sanpham.ThuongHieu = ? GROUP BY sanpham.MaSP LIMIT ?, ?";
			$result = $this->db->query($sql,array($MaLoai, $TinhChat, $start, $limit));
			return $result->result_array();
		}else if($MaLoai == "L003"){
			$sql = "SELECT sanpham.*, loaisp.*, anh.* FROM `sanpham`, `loaisp`, `anh` WHERE sanpham.MaLoai = loaisp.MaLoai AND sanpham.MaSP = anh.MaSP AND sanpham.MaLoai = ? GROUP BY sanpham.MaSP LIMIT ?, ?";
			$result = $this->db->query($sql,array($MaLoai,$start,$limit));
			return $result->result_array();
		}else if($MaLoai == "L004"){
			$TinhChat = "%".$TinhChat."%";
			$sql = "SELECT sanpham.*, loaisp.*, anh.* FROM `sanpham`, `loaisp`, `anh` WHERE sanpham.MaLoai = loaisp.MaLoai AND sanpham.MaSP = anh.MaSP AND sanpham.MaLoai = ? AND sanpham.TenSP LIKE ? GROUP BY sanpham.MaSP LIMIT ?, ?";
			$result = $this->db->query($sql,array($MaLoai, $TinhChat, $start, $limit));
			return $result->result_array();
		}
	}

	public function getSumProductCategory($MaLoai,$TinhChat){
		if($MaLoai == "L001"){
			$sql = "SELECT sanpham.*, loaisp.*, anh.* FROM `sanpham`, `loaisp`, `anh` WHERE sanpham.MaLoai = loaisp.MaLoai AND sanpham.MaSP = anh.MaSP AND sanpham.MaLoai = ? AND sanpham.ChatLieu = ? GROUP BY sanpham.MaSP";
			$result = $this->db->query($sql,array($MaLoai, $TinhChat));
			return $result->num_rows();
		}else if($MaLoai == "L002"){
			$sql = "SELECT sanpham.*, loaisp.*, anh.* FROM `sanpham`, `loaisp`, `anh` WHERE sanpham.MaLoai = loaisp.MaLoai AND sanpham.MaSP = anh.MaSP AND sanpham.MaLoai = ? AND sanpham.ThuongHieu = ? GROUP BY sanpham.MaSP";
			$result = $this->db->query($sql,array($MaLoai, $TinhChat));
			return $result->num_rows();
		}else if($MaLoai == "L003"){
			$sql = "SELECT sanpham.*, loaisp.*, anh.* FROM `sanpham`, `loaisp`, `anh` WHERE sanpham.MaLoai = loaisp.MaLoai AND sanpham.MaSP = anh.MaSP AND sanpham.MaLoai = ? GROUP BY sanpham.MaSP";
			$result = $this->db->query($sql,array($MaLoai));
			return $result->num_rows();
		}else if($MaLoai == "L004"){
			$TinhChat = "%".$TinhChat."%";
			$sql = "SELECT sanpham.*, loaisp.*, anh.* FROM `sanpham`, `loaisp`, `anh` WHERE sanpham.MaLoai = loaisp.MaLoai AND sanpham.MaSP = anh.MaSP AND sanpham.MaLoai = ? AND sanpham.TenSP LIKE ? GROUP BY sanpham.MaSP";
			$result = $this->db->query($sql,array($MaLoai, $TinhChat));
			return $result->num_rows();
		}
	}

	public function getCategoryProduct($MaLoai, $start, $limit){
		$sql = "SELECT sanpham.*, loaisp.*, anh.* FROM `sanpham`, `loaisp`, `anh` WHERE sanpham.MaLoai = loaisp.MaLoai AND sanpham.MaSP = anh.MaSP AND sanpham.MaLoai = ? GROUP BY sanpham.MaSP LIMIT ?, ?";
		$result = $this->db->query($sql,array($MaLoai, $start, $limit));
		return $result->result_array();
	}

	public function getSumCategoryProduct($MaLoai){
		$sql = "SELECT sanpham.*, loaisp.*, anh.* FROM `sanpham`, `loaisp`, `anh` WHERE sanpham.MaLoai = loaisp.MaLoai AND sanpham.MaSP = anh.MaSP AND sanpham.MaLoai = ? GROUP BY sanpham.MaSP";
		$result = $this->db->query($sql,array($MaLoai));
		return $result->num_rows();
	}

}

/* End of file Model_SanPham.php */
/* Location: ./application/models/Model_SanPham.php */