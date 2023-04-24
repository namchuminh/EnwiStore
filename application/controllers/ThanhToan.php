<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ThanhToan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('logged_in')){
			return redirect(base_url('dang-nhap/'));
		}

		$this->load->model('Model_KhachHang');
		$this->load->model('Model_ThanhToan');
		$this->load->model('Model_SanPham');
		$this->load->model('Model_GioHang');
	}

	public function KiemTraThanhToan($MaSP)
	{
		$this->session->unset_userdata('mau');
		$this->session->unset_userdata('sl');
		$this->session->unset_userdata('MaSP');
		if($this->Model_ThanhToan->checkProductId($MaSP) == 1){
			$mau = $this->input->get('mau');
			$sl = $this->input->get('sl');
			$this->session->set_userdata('mau', $mau);
			$this->session->set_userdata('sl', $sl);
			$this->session->set_userdata('MaSP', $MaSP);
			return redirect(base_url('thanh-toan/'));
		}else if($MaSP == 'cart' && $this->Model_ThanhToan->checkProductId($MaSP) != 1){
			$this->session->unset_userdata('mau');
			$this->session->unset_userdata('sl');
			$this->session->unset_userdata('MaSP');
			return redirect(base_url('thanh-toan/'));
		}else{
			return redirect(base_url('gio-hang/'));
		}
	}


	public function ThanhToanSanPham()
	{
		$customer = $this->Model_KhachHang->getInfoDetailUser($this->session->userdata('username'));
		$MaKH = $customer[0]['MaKH'];
		$TenKH = $customer[0]['TenKH'];
		$DiaChi = $customer[0]['DiaChi'];
		$NgaySinh = $customer[0]['NgaySinh'];
		$SDT = $customer[0]['SDT'];
		if(empty($TenKH) || empty($DiaChi) || empty($NgaySinh) || empty($SDT)) {
			$this->session->set_flashdata('info', "Vui lòng cập nhật thông tin thanh toán!");
			$this->session->set_userdata('updateInfo', TRUE);
			return redirect(base_url('khach-hang/'), 'refresh');
		}

		if($this->session->has_userdata('MaSP')){
			$MaSP = $this->session->userdata('MaSP');
			$data = array(
				'title' => "Thanh toán sản phẩm!",
				'result' => $this->Model_KhachHang->getInfoDetailUser($this->session->userdata('username')),
				'product' => $this->Model_SanPham->getProductById($MaSP),
				'sl' => $this->session->userdata('sl'),
				'mau' => $this->session->userdata('mau'),
			);
			return $this->load->view('ThanhToan', $data, FALSE);
		}else{
			$data = array(
				'title' => "Thanh toán sản phẩm trong giỏ hàng!",
				'result' => $this->Model_KhachHang->getInfoDetailUser($this->session->userdata('username')),
				'product' => $this->Model_GioHang->getAllProductOfCart($MaKH),
			);
			return $this->load->view('ThanhToanGioHang', $data, FALSE);
		}
	}

	public function XuLyThanhToan(){
		$customer = $this->Model_KhachHang->getInfoDetailUser($this->session->userdata('username'));
		$MaKH = $customer[0]['MaKH'];
		$PhiShip = 30000;
		if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['product'])){
			$MaSP = $this->session->userdata('MaSP');
			$HoTenKH = $this->input->post('ht');
			$SDT = $this->input->post('sdt');
			$Email = $this->input->post('email');
			$DiaChiNhanHang = $this->input->post('dc').', '.$this->input->post('x').', '.$this->input->post('q').', '.$this->input->post('tp');
			$PTTT = $this->input->post('pttt');
			$TongTien = $this->Model_SanPham->getProductById($MaSP)[0]['GiaTien'] + $PhiShip;
			$GhiChu = $this->input->post('gc');
			$sl = $this->session->userdata('sl');
			$mau = $this->session->userdata('mau');
			if($this->Model_ThanhToan->checkNumberOrder() == FALSE){
				$MaDH = "DH000001";
				if($this->Model_ThanhToan->addOrder($MaDH, $MaKH, $PTTT, $HoTenKH, $SDT, $DiaChiNhanHang, $Email, $TongTien, $GhiChu)){
					if($this->Model_ThanhToan->addProductToOrder($MaSP,$MaDH,$sl,$mau,$PhiShip)){
						$data = array(
							'title' => "Đặt hàng thành công!"
						);
						return $this->load->view('DatHangThanhCong', $data);
					}
				}
			}else{
				$str = $this->Model_ThanhToan->checkNumberOrder();
				preg_match_all('!\d+!', $str, $MaDH);
				$MaDH = $MaDH[0][0] + 1;

				if($MaDH > 0 && $MaDH < 10){
					$MaDH = "DH00000".$MaDH;
				}else if($MaDH >= 10 && $MaDH < 100){
					$MaDH = "DH0000".$MaDH;
				}else if($MaDH >= 100 && $MaDH < 1000){
					$MaDH = "DH000".$MaDH;
				}else if($MaDH >= 1000 && $MaDH < 10000){
					$MaDH = "DH00".$MaDH;
				}else if($MaDH >= 10000 && $MaDH < 100000){
					$MaDH = "DH0".$MaDH;
				}else if($MaDH >= 100000 && $MaDH < 1000000){
					$MaDH = "DH".$MaDH;
				}

				if($this->Model_ThanhToan->addOrder($MaDH, $MaKH, $PTTT, $HoTenKH, $SDT, $DiaChiNhanHang, $Email, $TongTien, $GhiChu)){
					if($this->Model_ThanhToan->addProductToOrder($MaSP,$MaDH,$sl,$mau,$PhiShip)){
						$data = array(
							'title' => "Đặt hàng thành công!"
						);
						return $this->load->view('DatHangThanhCong', $data);
					}
				}
			}
		}else if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['cart'])){
			$product = $this->Model_GioHang->getAllProductOfCart($MaKH);
			$HoTenKH = $this->input->post('ht');
			$SDT = $this->input->post('sdt');
			$Email = $this->input->post('email');
			$DiaChiNhanHang = $this->input->post('dc').', '.$this->input->post('x').', '.$this->input->post('q').', '.$this->input->post('tp');
			$PTTT = $this->input->post('pttt');
			$GhiChu = $this->input->post('gc');
			$TongTien = 0;
			foreach ($product as $key => $value) {
				$TongTien += $value['GiaTien'] * $value['SoLuong'];
			}
			$TongTien += $product[0]['PhiShip'];

			if($this->Model_ThanhToan->checkNumberOrder() == FALSE){
				$MaDH = "DH000001";
				if($this->Model_ThanhToan->addOrder($MaDH, $MaKH, $PTTT, $HoTenKH, $SDT, $DiaChiNhanHang, $Email, $TongTien, $GhiChu)){
					foreach ($product as $key => $value) {
						$this->Model_ThanhToan->addProductToOrder($value['MaSP'],$MaDH,$value['SoLuong'],$value['MauSac'],$value['PhiShip']);
						$this->Model_GioHang->deleteProductOfCart($value['MaGioHang'],$value['MaSP']);
					}

					$data = array(
						'title' => "Đặt hàng thành công!"
					);
					return $this->load->view('DatHangThanhCong', $data);
				}
			}else{
				$str = $this->Model_ThanhToan->checkNumberOrder();
				preg_match_all('!\d+!', $str, $MaDH);
				$MaDH = $MaDH[0][0] + 1;

				if($MaDH > 0 && $MaDH < 10){
					$MaDH = "DH00000".$MaDH;
				}else if($MaDH >= 10 && $MaDH < 100){
					$MaDH = "DH0000".$MaDH;
				}else if($MaDH >= 100 && $MaDH < 1000){
					$MaDH = "DH000".$MaDH;
				}else if($MaDH >= 1000 && $MaDH < 10000){
					$MaDH = "DH00".$MaDH;
				}else if($MaDH >= 10000 && $MaDH < 100000){
					$MaDH = "DH0".$MaDH;
				}else if($MaDH >= 100000 && $MaDH < 1000000){
					$MaDH = "DH".$MaDH;
				}

				if($this->Model_ThanhToan->addOrder($MaDH, $MaKH, $PTTT, $HoTenKH, $SDT, $DiaChiNhanHang, $Email, $TongTien, $GhiChu)){
					foreach ($product as $key => $value) {
						$this->Model_ThanhToan->addProductToOrder($value['MaSP'],$MaDH,$value['SoLuong'],$value['MauSac'],$value['PhiShip']);
						$this->Model_GioHang->deleteProductOfCart($value['MaGioHang'],$value['MaSP']);
					}

					$data = array(
						'title' => "Đặt hàng thành công!"
					);
					return $this->load->view('DatHangThanhCong', $data);
				}
			}
		}
	}
}

/* End of file ThanhToan.php */
/* Location: ./application/controllers/ThanhToan.php */