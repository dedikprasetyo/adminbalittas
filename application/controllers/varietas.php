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
			//$this->load->model('m_varietas');
			// $data=array('varietas' => $data);
			// $data['varietas']=$this->m_varietas->selectAll();
			$idSerat=$this->m_varietas->selectIdSerat(urldecode($namaSerat));
			$dataHeader['Judul'] = "Detail Varietas";
			$data['subleaflet']=$this->m_leaflet->selectLeafletTerbaru();
			$data['serat']=$this->m_varietas->getSerat($idSerat);
			$data['varietas']=$this->m_varietas->getVarietas($idSerat);
			$data['Deskripsi']=$this->m_varietas->getDeskripsi($idSerat);
			// $data['varietas']=$this->m_varietas->getVarietas(urldecode($id));
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
			$dataHeader['Judul'] = "Detail Varietas";
			$data['subleaflet']=$this->m_leaflet->selectLeafletTerbaru();
			$idVarietas=$this->m_varietas->selectIdVarietas(urldecode($namaVarietas));
			$data['varietas']=$this->m_varietas->getVarietasSendiri($idVarietas);
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