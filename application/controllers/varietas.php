<?php 	
	class varietas extends CI_Controller
	{
		
		public function jenisAsal(){
			$this->load->view('HalamanJenisTembakau');
		}

		public function jenisKegunaan(){
			$this->load->view('HalamanJenisTembakau');
		}

		public function jenisWaktu(){
			$this->load->view('HalamanJenisTembakau');
		}

		public function jenisDaerah(){
			$this->load->view('HalamanJenisTembakau');
		}

		public function jenisProsesing(){
			$this->load->view('HalamanJenisTembakau');
		}

		public function detailVarietas(){
			$this->load->view('HalamanDetailVarietas');
		}
	}
 ?>