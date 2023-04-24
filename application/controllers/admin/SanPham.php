<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SanPham extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('logged_in')){
			return redirect(base_url('admin/dang-nhap'));
		}
		$this->load->model('admin/Model_SanPham');
	}

	public function index()
	{
		$data = array(
			'result' => $this->Model_SanPham->getSanPham(),
		);
		return $this->load->view('admin/SanPham', $data);
	}

	public function ThemSanPham(){

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$masanpham = $this->input->post('masanpham');
			$tensanpham = $this->input->post('tensanpham');
			$giatien = $this->input->post('giatien');
			$soluong = $this->input->post('soluong');
			$thuonghieu = $this->input->post('thuonghieu');
			$maloai = $this->input->post('maloai');
			$chatlieu = $this->input->post('chatlieu');
			$xuatxu = $this->input->post('xuatxu');
			$thongso = $this->input->post('thongso');

			$anhChinh = "";
			$anhPhu1 = "";
			$anhPhu2 = "";
			$anhPhu3 = "";
			$anhPhu4 = "";

			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('anhchinh')){
				$imageChinh = $this->upload->data();
				$anhChinh = $imageChinh['file_name'];
			}

			if ($this->upload->do_upload('anhphu1')){
				$imagePhu1 = $this->upload->data();
				$anhPhu1 = $imagePhu1['file_name'];
			}

			if ($this->upload->do_upload('anhphu2')){
				$imagePhu2 = $this->upload->data();
				$anhPhu2 = $imagePhu2['file_name'];
			}

			if ($this->upload->do_upload('anhphu3')){
				$imagePhu3 = $this->upload->data();
				$anhPhu3 = $imagePhu3['file_name'];
			}

			if ($this->upload->do_upload('anhphu4')){
				$imagePhu4 = $this->upload->data();
				$anhPhu4 = $imagePhu4['file_name'];
			}

			$listAnh = array($anhChinh, $anhPhu1, $anhPhu2, $anhPhu3, $anhPhu4);

			$listMau = array('white', 'pink', 'black', 'gray', 'blue', 'whitesmoke');


			if($this->Model_SanPham->addSanPham($masanpham,$maloai,$tensanpham,$soluong,$thuonghieu,$giatien,$chatlieu,$xuatxu,$thongso) == TRUE){
				for ($i = 0; $i < count($listAnh); $i++) { 
					$this->Model_SanPham->addAnh($masanpham,$listAnh[$i]);
				}
				for ($i = 0; $i < count($listMau); $i++) { 
					if(isset($_POST[$listMau[$i]])){
						$tenmau = $this->input->post($listMau[$i]);
						$this->Model_SanPham->addMau($masanpham,$tenmau);
					}
				}
				$data = array(
					'result' => $this->Model_SanPham->getLoaiSanPham(),
					'success' => "Thêm sản phẩm thành công!"
				);
				return $this->load->view('admin/ThemSanPham', $data);
			}else{
				$data = array(
					'result' => $this->Model_SanPham->getLoaiSanPham(),
					'err' => "Thêm sản phẩm không thành công, vui lòng kiểm tra lại thông tin!"
				);

				return $this->load->view('admin/ThemSanPham', $data);
			}
		}

		$data = array(
			'result' => $this->Model_SanPham->getLoaiSanPham(),
		);

		return $this->load->view('admin/ThemSanPham', $data);
	}

	public function SuaSanPham($masanpham){

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$tensanpham = $this->input->post('tensanpham');
			$giatien = $this->input->post('giatien');
			$soluong = $this->input->post('soluong');
			$thuonghieu = $this->input->post('thuonghieu');
			$maloai = $this->input->post('maloai');
			$chatlieu = $this->input->post('chatlieu');
			$xuatxu = $this->input->post('xuatxu');
			$thongso = $this->input->post('thongso');

			if(isset($this->Model_SanPham->getAnhById($masanpham)[0]['MaAnh'])){
				$anhChinh = $this->Model_SanPham->getAnhById($masanpham)[0]['MaAnh'];
			}
			
			if(isset($this->Model_SanPham->getAnhById($masanpham)[1]['MaAnh'])){
				$anhPhu1 = $this->Model_SanPham->getAnhById($masanpham)[1]['MaAnh'];
			}

			if(isset($this->Model_SanPham->getAnhById($masanpham)[2]['MaAnh'])){
				$anhPhu2 = $this->Model_SanPham->getAnhById($masanpham)[2]['MaAnh'];
			}
			
			if(isset($this->Model_SanPham->getAnhById($masanpham)[3]['MaAnh'])){
				$anhPhu3 = $this->Model_SanPham->getAnhById($masanpham)[3]['MaAnh'];
			}
			
			if(isset($this->Model_SanPham->getAnhById($masanpham)[4]['MaAnh'])){
				$anhPhu4 = $this->Model_SanPham->getAnhById($masanpham)[4]['MaAnh'];
			}
			
			


			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|webp';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('anhchinh')){
				$imageUpdate = $this->upload->data();
				$tenanh = $imageUpdate['file_name'];
				$this->Model_SanPham->updateAnh($anhChinh,$masanpham,$tenanh);
			}

			if ($this->upload->do_upload('anhphu1')){
				$imageUpdate = $this->upload->data();
				$tenanh = $imageUpdate['file_name'];
				$this->Model_SanPham->updateAnh($anhPhu1,$masanpham,$tenanh);
			}

			if ($this->upload->do_upload('anhphu2')){
				$imageUpdate = $this->upload->data();
				$tenanh = $imageUpdate['file_name'];
				$this->Model_SanPham->updateAnh($anhPhu2,$masanpham,$tenanh);
			}

			if ($this->upload->do_upload('anhphu3')){
				$imageUpdate = $this->upload->data();
				$tenanh = $imageUpdate['file_name'];
				$this->Model_SanPham->updateAnh($anhPhu3,$masanpham,$tenanh);
			}

			if ($this->upload->do_upload('anhphu4')){
				$imageUpdate = $this->upload->data();
				$tenanh = $imageUpdate['file_name'];
				$this->Model_SanPham->updateAnh($anhPhu4,$masanpham,$tenanh);
			}

			$listMau = array('white', 'pink', 'black', 'gray', 'blue', 'whitesmoke');

			$this->Model_SanPham->deleteMau($masanpham);

			if($this->Model_SanPham->updateSanPham($masanpham,$maloai,$tensanpham,$soluong,$thuonghieu,$giatien,$chatlieu,$xuatxu,$thongso)){
				for ($i = 0; $i < count($listMau); $i++) { 
					if(isset($_POST[$listMau[$i]])){
						$tenmau = $this->input->post($listMau[$i]);
						$this->Model_SanPham->addMau($masanpham,$tenmau);
					}
				}
				$data = array(
					'loaisanpham' => $this->Model_SanPham->getLoaiSanPham(),
					'sanpham' => $this->Model_SanPham->getSanPhamById($masanpham),
					'anh' => $this->Model_SanPham->getAnhById($masanpham),
					'success' => "Cập nhật sản phẩm thành công!"
				);
				return $this->load->view('admin/SuaSanPham', $data);
			}else{
				$data = array(
					'loaisanpham' => $this->Model_SanPham->getLoaiSanPham(),
					'sanpham' => $this->Model_SanPham->getSanPhamById($masanpham),
					'anh' => $this->Model_SanPham->getAnhById($masanpham),
					'err' => "Cập nhật sản phẩm không thành công! Vui lòng kiểm tra lại thông tin!"
				);
				return $this->load->view('admin/SuaSanPham', $data);
			}

		}


		$data = array(
			'loaisanpham' => $this->Model_SanPham->getLoaiSanPham(),
			'sanpham' => $this->Model_SanPham->getSanPhamById($masanpham),
			'anh' => $this->Model_SanPham->getAnhById($masanpham),
			'mau' => $this->Model_SanPham->getMauById($masanpham),
		);

		return $this->load->view('admin/SuaSanPham', $data);
	}

	public function XoaSanPham($masanpham){
		$this->Model_SanPham->deleteAnh($masanpham);
		$this->Model_SanPham->deleteMau($masanpham);
		$this->Model_SanPham->deleteSanPham($masanpham);
		return redirect(base_url('admin/san-pham'));
	}
}

/* End of file SanPham.php */
/* Location: ./application/controllers/SanPham.php */