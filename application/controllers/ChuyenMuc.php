<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ChuyenMuc extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_SanPham');
	}

	public function index()
	{
		
	}

	public function ChuyenMucSanPham($MaLoai, $TinhChat){
		$start = 0;
		$limit = 8;
		$slug = "";
		if($TinhChat == "nhua-cung"){
			$TinhChat = "Nhựa cứng";
			$slug = "nhua-cung";
		}else if($TinhChat == "hop-kinh"){
			$TinhChat = "Hộp kính";
			$slug = "hop-kinh";
		}else if($TinhChat == "tui-tote"){
			$TinhChat = "Túi tote";
			$slug = "tui-tote";
		}else if($TinhChat == "khan-nano"){
			$TinhChat = "Khăn Nano";
			$slug = "khan-nano";
		}else if($TinhChat == "day-deo-kinh"){
			$TinhChat = "Dây đeo kính";
			$slug = "day-deo-kinh";
		}

		if(isset($_GET['sap_xep']) && !isset($_GET['trang'])){
			$start = 0;
			$limit = 8;
			$sapxep = $_GET['sap_xep'];

			$sumProduct = $this->Model_SanPham->getSumProductCategory($MaLoai, $TinhChat);

			$result = $this->Model_SanPham->getCategoryOrderASC($MaLoai, $TinhChat, 0, 8);
			if($sapxep == "giam"){
				$result = $this->Model_SanPham->getCategoryOrderDESC($MaLoai, $TinhChat, 0, 8);
			}

			if($sapxep == "tang"){
				$result = $this->Model_SanPham->getCategoryOrderASC($MaLoai, $TinhChat, 0, 8);
			}
			
			if($slug == ""){
				$data = array(
					'result' => $result,
					'page' => ceil($sumProduct / $limit),
					'MaLoai' => $MaLoai,
					'TinhChat' => $TinhChat
				);
				return $this->load->view('ChuyenMuc', $data);
			}else{
				$data = array(
					'result' => $result,
					'page' => ceil($sumProduct / $limit),
					'MaLoai' => $MaLoai,
					'TinhChat' => $slug
				);
				return $this->load->view('ChuyenMuc', $data);
			}
		}

		if(isset($_GET['trang']) && isset($_GET['sap_xep'])){
			$start = 0;
			$limit = 8;
			$sapxep = $_GET['sap_xep'];

			$start = ($_GET['trang'] - 1) * $limit; 
			$sumProduct = $this->Model_SanPham->getSumProductCategory($MaLoai, $TinhChat);

			$result = $this->Model_SanPham->getCategoryOrderASC($MaLoai, $TinhChat, $start, $limit);
			if($sapxep == "giam"){
				$result = $this->Model_SanPham->getCategoryOrderDESC($MaLoai, $TinhChat, $start, $limit);
			}

			if($sapxep == "tang"){
				$result = $this->Model_SanPham->getCategoryOrderASC($MaLoai, $TinhChat, $start, $limit);
			}
			

			if($slug == ""){
				$data = array(
					'result' => $result,
					'page' => ceil($sumProduct / $limit),
					'MaLoai' => $MaLoai,
					'TinhChat' => $TinhChat
				);
				return $this->load->view('ChuyenMuc', $data);
			}else{
				$data = array(
					'result' => $result,
					'page' => ceil($sumProduct / $limit),
					'MaLoai' => $MaLoai,
					'TinhChat' => $slug
				);
				return $this->load->view('ChuyenMuc', $data);
			}
		}
		
		
		if(isset($_GET['trang'])){
			if($_GET['trang'] <= 0){
				$_GET['trang'] = 1;
			}

			$start = ($_GET['trang'] - 1) * $limit; 
			$sumProduct = $this->Model_SanPham->getSumProductCategory($MaLoai, $TinhChat);

			$result = $this->Model_SanPham->getCategory($MaLoai, $TinhChat, $start, $limit);

			if($slug == ""){
				$data = array(
					'result' => $result,
					'page' => ceil($sumProduct / $limit),
					'MaLoai' => $MaLoai,
					'TinhChat' => $TinhChat
				);
				return $this->load->view('ChuyenMuc', $data);
			}else{
				$data = array(
					'result' => $result,
					'page' => ceil($sumProduct / $limit),
					'MaLoai' => $MaLoai,
					'TinhChat' => $slug
				);
				return $this->load->view('ChuyenMuc', $data);
			}
			
		}else{
			$sumProduct = $this->Model_SanPham->getSumProductCategory($MaLoai, $TinhChat);

			$result = $this->Model_SanPham->getCategory($MaLoai, $TinhChat, $start, $limit);

			if($slug == ""){
				$data = array(
					'result' => $result,
					'page' => ceil($sumProduct / $limit),
					'MaLoai' => $MaLoai,
					'TinhChat' => $TinhChat
				);
				return $this->load->view('ChuyenMuc', $data);
			}else{
				$data = array(
					'result' => $result,
					'page' => ceil($sumProduct / $limit),
					'MaLoai' => $MaLoai,
					'TinhChat' => $slug
				);
				return $this->load->view('ChuyenMuc', $data);
			}
			
		}
		
	}

	public function ChuyenMuc($MaLoai){
		$start = 0;
		$limit = 8;

		if(isset($_GET['sap_xep']) && !isset($_GET['trang'])){
			$sapxep = $_GET['sap_xep'];
			$sumProduct = $this->Model_SanPham->getSumCategoryProduct($MaLoai);

			$result = $this->Model_SanPham->getCategoryProductASC($MaLoai,0, 8);
			if($sapxep == "giam"){
				$result = $this->Model_SanPham->getCategoryProductDESC($MaLoai,0, 8);
			}

			if($sapxep == "tang"){
				$result = $this->Model_SanPham->getCategoryProductASC($MaLoai,0, 8);
			}

			$data = array(
				'result' => $result,
				'page' => ceil($sumProduct / $limit),
				'MaLoai' => $MaLoai,
			);
			return $this->load->view('ChuyenMucSanPham', $data);
		}

		if(isset($_GET['trang']) && isset($_GET['sap_xep'])){
			$sapxep = $_GET['sap_xep'];
			$start = ($_GET['trang'] - 1) * $limit; 
			$sumProduct = $this->Model_SanPham->getSumCategoryProduct($MaLoai);

			$result = $this->Model_SanPham->getCategoryProductASC($MaLoai,$start, $limit);
			if($sapxep == "giam"){
				$result = $this->Model_SanPham->getCategoryProductDESC($MaLoai,$start, $limit);
			}

			if($sapxep == "tang"){
				$result = $this->Model_SanPham->getCategoryProductASC($MaLoai,$start, $limit);
			}

			$data = array(
				'result' => $result,
				'page' => ceil($sumProduct / $limit),
				'MaLoai' => $MaLoai,
			);
			return $this->load->view('ChuyenMucSanPham', $data);
		}

		if(isset($_GET['trang'])){
			if($_GET['trang'] <= 0){
				$_GET['trang'] = 1;
			}
			$start = ($_GET['trang'] - 1) * $limit; 
			$sumProduct = $this->Model_SanPham->getSumCategoryProduct($MaLoai);
			$result = $this->Model_SanPham->getCategoryProduct($MaLoai, $start, $limit);

			$data = array(
				'result' => $result,
				'page' => ceil($sumProduct / $limit),
				'MaLoai' => $MaLoai,
			);
			return $this->load->view('ChuyenMucSanPham', $data);
		}else{
			$sumProduct = $this->Model_SanPham->getSumCategoryProduct($MaLoai);
			$result = $this->Model_SanPham->getCategoryProduct($MaLoai, $start, $limit);
			$data = array(
				'result' => $result,
				'page' => ceil($sumProduct / $limit),
				'MaLoai' => $MaLoai,
			);
			return $this->load->view('ChuyenMucSanPham', $data);
		}
	}

}

/* End of file ChuyenMuc.php */
/* Location: ./application/controllers/ChuyenMuc.php */