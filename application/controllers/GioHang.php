<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GioHang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('logged_in')){
			return redirect(base_url('dang-nhap/'));
		}

		$this->load->model('Model_KhachHang');
		$this->load->model('Model_GioHang');
	}

	public function index()
	{
		$MaKH = $this->Model_KhachHang->getInfoUser($this->session->userdata('username'));
		$data = array(
			'title' => "Giỏ hàng sản phẩm",
			'result' => $this->Model_GioHang->getAllProductOfCart($MaKH),
		);
		return $this->load->view('GioHang', $data);
	}

	public function ThemSanPham(){
		$MaKH = $this->Model_KhachHang->getInfoUser($this->session->userdata('username'));
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$MaSP = $this->input->post('masanpham');
			$SoLuong = $this->input->post('sl');
			$MauSac = $this->input->post('mau');
			$PhiShip = 30000;
			if($this->Model_GioHang->getIdOfCart() == FALSE){
				$MaGioHang = "GH000001";
				if($this->Model_GioHang->addCart($MaGioHang,$MaKH,$PhiShip)){
					if($this->Model_GioHang->addProductToCart($MaGioHang,$MaSP,$MauSac,$SoLuong)){
						$this->session->set_flashdata('mess', "Thêm sản phẩm vào giỏ hàng thành công!");
						return redirect(base_url('san-pham/'.$MaSP), 'refresh');
					}else{
						$this->session->set_flashdata('mess', "Có lỗi khi thêm sản phẩm vào giỏ hàng!");
						return redirect(base_url('san-pham/'.$MaSP), 'refresh');
					}
				}
			}else{
				if($this->Model_GioHang->checkUserOfCart($MaKH) == FALSE){
					$str = $this->Model_GioHang->getIdOfCart();
					preg_match_all('!\d+!', $str, $MaGioHang);
					$MaGioHang = $MaGioHang[0][0] + 1;

					if($MaGioHang > 0 && $MaGioHang < 10){
						$MaGioHang = "GH00000".$MaGioHang;
					}else if($MaGioHang >= 10 && $MaGioHang < 100){
						$MaGioHang = "GH0000".$MaGioHang;
					}else if($MaGioHang >= 100 && $MaGioHang < 1000){
						$MaGioHang = "GH000".$MaGioHang;
					}else if($MaGioHang >= 1000 && $MaGioHang < 10000){
						$MaGioHang = "GH00".$MaGioHang;
					}else if($MaGioHang >= 10000 && $MaGioHang < 100000){
						$MaGioHang = "GH0".$MaGioHang;
					}else if($MaGioHang >= 100000 && $MaGioHang < 1000000){
						$MaGioHang = "GH".$MaGioHang;
					}
					if($this->Model_GioHang->checkProductOfCart($MaGioHang,$MaSP) == 0){
						if($this->Model_GioHang->addCart($MaGioHang,$MaKH,$PhiShip)){
							if($this->Model_GioHang->addProductToCart($MaGioHang,$MaSP,$MauSac,$SoLuong)){
								$this->session->set_flashdata('mess', "Thêm sản phẩm vào giỏ hàng thành công!");
								return redirect(base_url('san-pham/'.$MaSP), 'refresh');
							}
						}
						$this->session->set_flashdata('mess', "Có lỗi khi thêm sản phẩm vào giỏ hàng!");
						return redirect(base_url('san-pham/'.$MaSP), 'refresh');
						
					}else{
						$this->session->set_flashdata('mess', "Sản phẩm đã có trong giỏ hàng!");
						return redirect(base_url('san-pham/'.$MaSP), 'refresh');
					}
				}else{
					$MaGioHang = $this->Model_GioHang->checkUserOfCart($MaKH);
					if($this->Model_GioHang->checkProductOfCart($MaGioHang,$MaSP) == 0){
						if($this->Model_GioHang->addProductToCart($MaGioHang,$MaSP,$MauSac,$SoLuong)){
							$this->session->set_flashdata('mess', "Thêm sản phẩm vào giỏ hàng thành công!");
							return redirect(base_url('san-pham/'.$MaSP), 'refresh');
						}else{
							$this->session->set_flashdata('mess', "Có lỗi khi thêm sản phẩm vào giỏ hàng!");
							return redirect(base_url('san-pham/'.$MaSP), 'refresh');
						}
					}else{
						$this->session->set_flashdata('mess', "Sản phẩm đã có trong giỏ hàng!");
						return redirect(base_url('san-pham/'.$MaSP), 'refresh');
					}
				}
			}
		}
	}

	public function SuaSanPham(){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$SoLuong = $this->input->post('sl');
			$MaSP = $this->input->post('msp');
			$MaKH = $this->Model_KhachHang->getInfoUser($this->session->userdata('username'));
			$MaGioHang = $this->Model_GioHang->checkUserOfCart($MaKH);
			$this->Model_GioHang->updateProductOfCart($SoLuong,$MaGioHang,$MaSP);
		}else{
			return redirect(base_url('gio-hang/'));
		}
	}

	public function XoaSanPham($MaSP){
		$MaKH = $this->Model_KhachHang->getInfoUser($this->session->userdata('username'));
		$MaGioHang = $this->Model_GioHang->checkUserOfCart($MaKH);
		$this->Model_GioHang->deleteProductOfCart($MaGioHang,$MaSP);
		return redirect(base_url('gio-hang/'));
	}
}

/* End of file GioHang.php */
/* Location: ./application/controllers/GioHang.php */