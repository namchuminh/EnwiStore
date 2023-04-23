<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class index extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('logged_in')){
			return redirect(base_url('admin/dang-nhap'));
		}
		$this->load->model('admin/Model_index');
	}

	public function index()
	{
		$data = array(
			'soDon' => $this->Model_index->TongDonNgay(),
			'doanhThuNgay' => $this->Model_index->DoanhThuNgay()[0]['dt'],
			'chuaXuLy' => $this->Model_index->ChuaXuLy(),
			'khachHangNgay' => $this->Model_index->TongKhachHangNgay(),
			'banChay' => $this->Model_index->SanPhamBanChay(),
		);
		return $this->load->view('admin/index', $data);
	}

	public function ThongKeDoanhThu(){
		$result = json_encode($this->Model_index->DoanhThu());
		echo $result;
	}

}

/* End of file index.php */
/* Location: ./application/controllers/index.php */