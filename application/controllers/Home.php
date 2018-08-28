<?php 
	class Home extends CI_Controller
	{		
		public function __construct() {
			parent::__construct();
            $this->CI = & get_instance();
            $this->load->database();
            // $this->load->library('pagination');
            $this->load->model('m_serat');
            $this->load->model('m_leaflet');
            $this->load->model('m_varietas');
            $this->load->model('m_budidaya');
		}
		public function index()
		{

		

			$data['subLeaflet'] = $this->m_leaflet->selectLeafletTerbaru();

			$data['serat'] = $this->m_serat->selectSerat();
			$data['monograf']= $this->m_budidaya->getMonograf();
			$data['budidaya'] = $this->m_serat->selectSerat();

            //Membuat link
            // $str_links = $this->pagination->create_links();
            // $data['links'] = explode('&nbsp;',$str_links );

            // $dataHeader['judul'] = "";
            // $this->load->view('header', $dataHeader);
			$this->load->view('HalamanUtamaSerat', $data);
			$this->load->view('Footer');
		
			// $this->load->view('HalamanUtamaSerat');
		}	

		public function agribisnis() {
			$this->load->view('HalamanDetailAgribisnis');
		}
	} 
?>