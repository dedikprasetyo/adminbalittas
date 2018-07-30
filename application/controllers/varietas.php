<?php 	
	class varietas extends CI_Controller
	{
		
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

		public function detailJarakKepyar(){
			$this->load->view('DetailJarakKepyar');
		}

		public function detailJarakPagar(){
			$this->load->view('DetailJarakPagar');
		}

		public function detailKapas(){
			$this->load->view('DetailKapas');
		}

		public function detailKapuk(){
			$this->load->view('DetailKapuk');
		}

		public function detailKenaf(){
			$this->load->view('DetailKenaf');
		}

		public function detailRami(){
			$this->load->view('DetailRami');
		}
		public function detailRosela(){
			$this->load->view('DetailRosela');
		}

		public function detailTebu(){
			$this->load->view('DetailTebu');
		}

		public function detailWijen(){
			$this->load->view('DetailWijen');
		}

		public function detailSisal(){
			$this->load->view('DetailSisal');
		}
	}
 ?>