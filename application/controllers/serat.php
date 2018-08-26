<?php 
class Serat extends CI_Controller{


	public function __construct(){
			parent::__construct();
            $this->CI = & get_instance();
			$this->load->database();
			$this->load->model('m_serat');
		}

	// public function detailSerat($namaSerat){
	// 	$data['serat']=$this->m_serat->selectIdBynamaSerat(urldecode($namaSerat));
	// 	$this->load->view('Header');
	// 	$this->load->view('DetailKapas2', $data);
	// 	$this->load->view('Footer');
	// }
}

 ?>