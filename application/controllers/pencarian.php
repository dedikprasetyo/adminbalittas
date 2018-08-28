<?php 
	class pencarian extends CI_Controller{

		function __construct(){
			parent::__construct();
            $this->CI = & get_instance();

            $this->load->model('m_leaflet');
            $this->load->model('m_produk');
            $this->load->model('m_serat');
            $this->load->model('m_varietas');
		}

		public function index(){	
			$cari=$this->input->get('keyword');
			$datapencarian['keyword'] = $cari;	
			$datapencarian['pencarianKomoditas']=$this->m_serat->pencarianSerat($cari);

			$this->load->view('Header');	
			$this->load->view('HalamanPencarian', $datapencarian);
			$this->load->view('Footer');
		}

	}
 ?>