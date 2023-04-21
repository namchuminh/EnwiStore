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

}

/* End of file Model_index.php */
/* Location: ./application/models/Model_index.php */