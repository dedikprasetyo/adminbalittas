<?php 
	class produk extends CI_Controller{

		public function __construct(){
			parent::__construct();
            $this->CI = & get_instance();
			$this->load->database();
			$this->load->model('m_produk');
		}
		
		public function benih(){
			$data['stokbenih']=$this->m_produk->getBenih();
			$data['leaflet']=$this->m_produk->selectLeafletTerbaru();
			$data['distribusi']=$this->m_produk->getDistribusiBenih();
			$this->load->view('ProdukSerat', $data);
			$this->load->view('Footer');
		}

		public function produk2(){
			$this->load->view('ProdukSerat2');
		}

		public function produk3(){
			$this->load->view('ProdukSerat3');
		}

		public function produk4(){
			$this->load->view('ProdukSerat4');
		}
	}
 ?>