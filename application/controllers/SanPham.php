<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SanPham extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_SanPham');
	}

	public function index($MaSP)
	{
		$data = array(
			'title' => $this->Model_SanPham->getProductById($MaSP)[0]['TenSP'],
			'product' => $this->Model_SanPham->getProductById($MaSP),
			'image' => $this->Model_SanPham->getImageByIdProduct($MaSP),
			'color' => $this->Model_SanPham->getColorByIdProduct($MaSP),
			'related' => $this->Model_SanPham->getProductRelated($this->Model_SanPham->getProductById($MaSP)[0]['MaLoai']),
		);
		return $this->load->view('SanPham', $data);
	}


	public function TimKiem(){
		$TenSP = $this->input->get('s');
		$start = 0;
		$limit = 8;

		if(!isset($TenSP) || empty($TenSP)){
			return redirect(base_url('san-pham/'));
		}


		if(isset($_GET['trang'])){
			if($_GET['trang'] <= 0){
				$_GET['trang'] = 1;
			}

			$start = ($_GET['trang'] - 1) * $limit; 

			$sumProduct = $this->Model_SanPham->getSumSearchProduct($TenSP);
			$result = $this->Model_SanPham->getSearchProduct($TenSP, $start, $limit);

			$data = array(
				'title' => "Tìm kiếm sản phẩm ".$TenSP,
				'result' => $result,
				'page' => ceil($sumProduct / $limit),
				'TenSP'=> $TenSP,
			);
			return $this->load->view('TimKiem',$data);
		}else{
			$sumProduct = $this->Model_SanPham->getSumSearchProduct($TenSP);
			$result = $this->Model_SanPham->getSearchProduct($TenSP, $start, $limit);

			$data = array(
				'title' => "Tìm kiếm sản phẩm ".$TenSP,
				'result' => $result,
				'page' => ceil($sumProduct / $limit),
				'TenSP'=> $TenSP,
			);
			return $this->load->view('TimKiem',$data);
		}

		
	}
}

/* End of file SanPham.php */
/* Location: ./application/controllers/SanPham.php */