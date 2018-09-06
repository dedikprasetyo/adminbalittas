<?php 
	class produk extends CI_Controller{

		public function __construct(){
			parent::__construct();
            $this->CI = & get_instance();
			$this->load->database();
			$this->load->model('m_produk');
			$this->load->model('m_varietas');
			$this->load->model('m_leaflet');
		}
		
		public function benih(){

			// //counter pengunjung 
            date_default_timezone_set('Asia/Jakarta');
            $ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
            $tanggal = date("Y-m-d");
            $bulanIni = date("m");
            $waktu   = date('H:i');
            $this->load->model("m_data");
                        
            if(empty($this->session->userdata('pengunjung'))){
                  $this->m_data->addUser($ip,$tanggal,$waktu);
                  $this->session->set_userdata('pengunjung','aktif');                  
            }
            $counter['pengunjungTotal'] = $this->m_data->getTotalVisitor();
            $counter['pengunjungHariIni'] = $this->m_data->getTotalToday($tanggal); 
            $counter['pengunjungBulanIni'] = $this->m_data->getTotalByMonth($bulanIni); 

			$dataheader['JudulBenih']="Benih";
			$data['leaflet']=$this->m_produk->selectLeafletTerbaru();
			$data['stokbenih']=$this->m_produk->getBenih();
			$data['distribusi']=$this->m_produk->getDistribusiBenih();
			$this->load->view('Header', $dataheader);
			$this->load->view('ProdukSerat', $data);
			$this->load->view('Footer', $counter);
		}

		public function alsin(){
			// pagination
			$row=$this->m_leaflet->getJumlahLeafletAlsin('JL005');
			// var_dump($row);
			$config['base_url'] = base_url('produk/alsin');
			$config['total_rows'] = $row;
			$config['per_page'] = 8;
			$config['num_links'] = $row;
		    $config['num_tag_open'] = '<li>';
	        $config['num_tag_close'] = '</li>';
	        $config['cur_tag_open'] = '&nbsp<a class="current">';
	        $config['cur_tag_close'] = '</a>';
	        $config['next_tag_open'] = "<li>";
	        $config['next_tagl_close'] = "</li>";
	        $config['prev_tag_open'] = "<li>";
	        $config['prev_tagl_close'] = "</li>";
	        $config['first_tag_open'] = "<li>";
	        $config['first_tagl_close'] = "</li>";
	        $config['last_tag_open'] = "<li>";
	        $config['last_tagl_close'] = "</li>";
	        $config['next_link'] = '<i class="glyphicon glyphicon-chevron-right"></i>';
            $config['prev_link'] = '<i class="glyphicon glyphicon-chevron-left"></i>';
	        $start = (!$this->uri->segment(3)) ? 0 : $this->uri->segment(3);
	       	$this->pagination->initialize($config);
			$link=$this->pagination->create_links();
			$data['link']= explode('&nbsp', $link);

			// //counter pengunjung 
            date_default_timezone_set('Asia/Jakarta');
            $ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
            $tanggal = date("Y-m-d");
            $bulanIni = date("m");
            $waktu   = date('H:i');
            $this->load->model("m_data");
                        
            if(empty($this->session->userdata('pengunjung'))){
                  $this->m_data->addUser($ip,$tanggal,$waktu);
                  $this->session->set_userdata('pengunjung','aktif');                  
            }
            $counter['pengunjungTotal'] = $this->m_data->getTotalVisitor();
            $counter['pengunjungHariIni'] = $this->m_data->getTotalToday($tanggal); 
            $counter['pengunjungBulanIni'] = $this->m_data->getTotalByMonth($bulanIni); 

			$data['varietas'] = $this->m_varietas->selectVarietasOnSide();
			$data['leafletalsin'] = $this->m_leaflet->getLeafletAlsinByPagination('JL005', $config['per_page'], $start);
			$this->load->view('Header');
			$this->load->view('ProdukSerat2', $data);
			$this->load->view('Footer', $counter);
		}

		public function produk3(){
			$this->load->view('ProdukSerat3');
		}

		public function produk4(){
			$this->load->view('ProdukSerat4');
		}
	}
 ?>