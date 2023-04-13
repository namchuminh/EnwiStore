<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ChuyenMuc extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('logged_in')){
			return redirect(base_url('admin/dang-nhap'));
		}
		$this->load->model('admin/Model_ChuyenMuc');
	}

	public function index()
	{
		$data = array(
			'result' => $this->Model_ChuyenMuc->getChuyenMuc(),
		);
		return $this->load->view('admin/ChuyenMuc.php', $data);
	}

	public function ThemChuyenMuc(){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$maloai = $this->input->post('maloai');
			$tenloai = $this->input->post('tenloai');
			$check = $this->Model_ChuyenMuc->checkChuyenMuc($maloai, $tenloai);

			if($check == 1){
				$data = array(
					'success' => "Mã chuyên mục hoặc tên chuyên mục đã tồn tại!",
				);
				return $this->load->view('admin/ThemChuyenMuc', $data);
			}else{
				$result = $this->Model_ChuyenMuc->addChuyenMuc($maloai, $tenloai);
				$data = array(
					'success' => "Thêm chuyên mục thành công!",
				);
				return $this->load->view('admin/ThemChuyenMuc', $data);
			}

		}
		return $this->load->view('admin/ThemChuyenMuc');
	}

	public function SuaChuyenMuc($maloai){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$tenloai = $this->input->post('tenloai');

			$check = $this->Model_ChuyenMuc->checkTenChuyenMuc($tenloai);

			if($check == 1){
				$data = array(
					'success' => "Tên chuyên mục đã tồn tại!",
					'result' => $this->Model_ChuyenMuc->getChuyenMucById($maloai),
				);
				return $this->load->view('admin/SuaChuyenMuc', $data);
			}else{
				$result = $this->Model_ChuyenMuc->updateChuyenMuc($maloai, $tenloai);
				$data = array(
					'success' => "Cập nhật tên chuyên mục thành công!",
					'result' => $this->Model_ChuyenMuc->getChuyenMucById($maloai),
				);
				return $this->load->view('admin/SuaChuyenMuc', $data);
			}
		}

		$data = array(
			'result' => $this->Model_ChuyenMuc->getChuyenMucById($maloai),
		);
		return $this->load->view('admin/SuaChuyenMuc',$data);
	}

	public function XoaChuyenMuc($maloai)
	{
		$check = $this->Model_ChuyenMuc->checkDeleteChuyenMuc($maloai);
		if($check >= 1){
			$data = array(
				'result' => $this->Model_ChuyenMuc->getChuyenMuc(),
				'err' => 'Không thể xóa chuyên mục vì có sản phẩm thuộc chuyên mục này!',
			);
			return $this->load->view('admin/ChuyenMuc.php', $data);
		}else{
			$this->Model_ChuyenMuc->deleteChuyenMuc($maloai);
			return redirect(base_url('admin/chuyen-muc'));
		}
	}
}

/* End of file ChuyenMuc.php */
/* Location: ./application/controllers/ChuyenMuc.php */