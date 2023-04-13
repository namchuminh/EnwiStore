<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DonHang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('logged_in')){
			return redirect(base_url('admin/dang-nhap'));
		}
		$this->load->model('admin/Model_DonHang');
	}

	public function index()
	{
		$newdata = array(
	        'chuyen-huong' => 'admin/don-hang/',
		);
		$this->session->set_userdata($newdata);
		$data = array(
			'result' => $this->Model_DonHang->getDonHang(),
		);
		return $this->load->view('admin/DonHang', $data);
	}

	public function ChiTiet($MaDH)
	{
		$data = array(
			'result' => $this->Model_DonHang->getChiTietDonHang($MaDH),
			'MaDH' => $MaDH,
			'back' => $this->session->userdata('chuyen-huong'),
		);
		return $this->load->view('admin/ChiTietDonHang', $data);
	}

	public function XuLyDon($MaDH,$MaHoatDong){
		$this->Model_DonHang->updateTinhTrangDonHang($MaDH,$MaHoatDong);
		return redirect(base_url('admin/don-hang'));
	}

	public function DonDaHuy(){
		$newdata = array(
	        'chuyen-huong' => 'admin/don-hang-huy/',
		);
		$this->session->set_userdata($newdata);
		$data = array(
			'result' => $this->Model_DonHang->getDonHangHuy(),
		);
		return $this->load->view('admin/DonHangHuy', $data);
	}

	public function KhoiPhucDon($MaDH,$MaHoatDong){
		$this->Model_DonHang->updateTinhTrangDonHang($MaDH,$MaHoatDong);
		return redirect(base_url('admin/don-hang-huy'));
	}

}

/* End of file DonHang.php */
/* Location: ./application/controllers/DonHang.php */