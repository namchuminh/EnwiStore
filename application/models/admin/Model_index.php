<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_index extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function DoanhThu()
	{
		$result = array();
		for ($i = 1; $i <= 12; $i++) { 
			$sql = "SELECT SUM(TongTien) AS TongTien FROM `donhang` WHERE TinhTrangDH = 3 AND MONTH(ThoiGian) = ? AND YEAR(ThoiGian) = YEAR(CURDATE())";
			$data = $this->db->query($sql, array($i))->result_array();
			if(isset($data[0]['TongTien']) && !empty($data[0]['TongTien'])){
				array_push($result,(int)$data[0]['TongTien']);
			}else{
				array_push($result,0);
			}
		}

		return $result;
		
	}

	public function TongDonNgay(){
		$sql = "SELECT * FROM `donhang` WHERE DAY(ThoiGian) = DAY(CURDATE()) AND MONTH(ThoiGian) = MONTH(CURDATE()) AND YEAR(CURDATE())";
		$result = $this->db->query($sql);
		return $result->num_rows();
	}

	public function DoanhThuNgay(){
		$sql = "SELECT SUM(TongTien) AS dt FROM `donhang` WHERE TinhTrangDH = 3 AND DAY(ThoiGian) = DAY(CURDATE()) AND MONTH(ThoiGian) = MONTH(CURDATE()) AND YEAR(CURDATE());";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function ChuaXuLy(){
		$sql = "SELECT * FROM `donhang` WHERE TinhTrangDH = 0";
		$result = $this->db->query($sql);
		return $result->num_rows();
	}

	public function TongKhachHangNgay(){
		$sql = "SELECT * FROM `khachhang` WHERE DAY(ThoiGian) = DAY(CURDATE()) AND MONTH(ThoiGian) = MONTH(CURDATE()) AND YEAR(CURDATE());";
		$result = $this->db->query($sql);
		return $result->num_rows();
	}

	public function SanPhamBanChay(){
		$sql = "SELECT sanpham_donhang.*, donhang.*, sanpham.*, SUM(sanpham_donhang.SoLuong) AS sl FROM `sanpham_donhang`, `donhang`, `sanpham` WHERE sanpham_donhang.MaDH = donhang.MaDH AND sanpham_donhang.MaSP = sanpham.MaSP GROUP BY sanpham_donhang.MaSP ORDER BY sl DESC LIMIT 10;";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

}

/* End of file Model_index.php */
/* Location: ./application/models/Model_index.php */