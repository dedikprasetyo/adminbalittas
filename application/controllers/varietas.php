<?php 	
	class varietas extends CI_Controller
	{
			public function __construct(){
			parent::__construct();
            $this->CI = & get_instance();
			$this->load->database();
			$this->load->model('m_varietas');
			$this->load->model('m_leaflet');
		}
		
		// public function jenisAsal(){
		// 	$this->load->view('HalamanJenisTembakau');
		// }

		// public function jenisKegunaan(){
		// 	$this->load->view('HalamanJenisTembakau');
		// }

		// public function jenisWaktu(){
		// 	$this->load->view('HalamanJenisTembakau');
		// }

		// public function jenisDaerah(){
		// 	$this->load->view('HalamanJenisTembakau');
		// }

		// public function jenisProsesing(){
		// 	$this->load->view('HalamanJenisTembakau');
		// }

		public function detail($namaSerat){

			$idSerat=$this->m_varietas->selectIdSerat(urldecode($namaSerat));
			//Menghitung Jumlah Data pada varietas
			$row=$this->m_varietas->getJumlahBaris($idSerat);
			// var_dump($row);

			//mengatur configuration pagination
			$config['base_url'] = base_url()."varietas/detail/$namaSerat";
			$config['total_rows'] = $row;
			$config['per_page'] = 6;

			$config['num_links'] = $row;
		    $config['full_tag_open'] = "<ul class='pagination'>";
	        $config['full_tag_close'] ="</ul>";
	        $config['num_tag_open'] = '<li>';
	        $config['num_tag_close'] = '</li>';
	        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
	        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
	        $config['next_tag_open'] = "<li>";
	        $config['next_tagl_close'] = "</li>";
	        $config['prev_tag_open'] = "<li>";
	        $config['prev_tagl_close'] = "</li>";
	        $config['first_tag_open'] = "<li>";
	        $config['first_tagl_close'] = "</li>";
	        $config['last_tag_open'] = "<li>";
	        $config['last_tagl_close'] = "</li>";

	        //mengatur uri segment
	        $start = (!$this->uri->segment(4)) ? 0 : $this->uri->segment(4);
	        $this->pagination->initialize($config);
			$link=$this->pagination->create_links();
			$data['link']= explode('&nbsp', $link);


			//$this->load->model('m_varietas');
			// $data=array('varietas' => $data);
			// $data['varietas']=$this->m_varietas->selectAll();
			
			$dataHeader['Judul'] =$this->m_varietas->getSerat($idSerat);
			// $dataHeader['Judul'] = "Varietas";
			$data['subleaflet']=$this->m_varietas->selectLeafletOnSide();
			$data['serat']=$this->m_varietas->getSerat($idSerat);
			//ori
			// $data['varietas']=$this->m_varietas->getVarietas($idSerat);
			$data['varietas']=$this->m_varietas->getVarietasByPagination($idSerat, $config['per_page'], $start);
			$data['Deskripsi']=$this->m_varietas->getDeskripsi($idSerat);
			$this->load->view('Header', $dataHeader);
			$this->load->view('DetailVarietas', $data);
			$this->load->view('Footer');
		}

		// public function spesifikasiVarietas($namaVarietas){
		// 	$dataHeader['Judul'] = "Detail Varietas";
		// 	$data['spesifikasi']=$this->m_varietas->getSpesifikasiVarietas(urldecode($namaVarietas));
		// 	// $data['varietas']=$this->m_varietas->getVarietas();
		// 	$this->load->view('Header', $dataHeader);
		// 	$this->load->view('IsiVarietas', $data);
		// 	$this->load->view('Footer');
		// }

		public function spesifikasiVarietas($namaVarietas){
			$idVarietas=$this->m_varietas->selectIdVarietas(urldecode($namaVarietas));
			$dataHeader['Judul2'] = $this->m_varietas->getVarietasSpesifikasi($idVarietas);
			$data['subleaflet']=$this->m_leaflet->selectLeafletTerbaru();
			$data['varietas']=$this->m_varietas->getVarietasSpesifikasi($idVarietas);
			$data['spesifikasi']=$this->m_varietas->getSpesifikasiVarietas($idVarietas);
			// $data['varietas']=$this->m_varietas->getVarietas();
			$this->load->view('Header', $dataHeader);
			$this->load->view('IsiVarietas', $data);
			$this->load->view('Footer');
		}



		

		// public function detailKapuk(){
		// 	$data['varietas']=$this->m_varietas->getVarietas('S0003');
		// 	$this->load->view('DetailKapuk', $data);
		// }

		// public function detailKenaf(){
		// 	$this->load->view('DetailKenaf');
		// }

		// public function detailRami(){
		// 	$this->load->view('DetailRami');
		// }
		// public function detailRosela(){
		// 	$this->load->view('DetailRosela');
		// }

		// public function detailTebu(){
		// 	$this->load->view('DetailTebu');
		// }

		// public function detailWijen(){
		// 	$this->load->view('DetailWijen');
		// }

		// public function detailSisal(){
		// 	$this->load->view('DetailSisal');
		// }
	}
 ?>