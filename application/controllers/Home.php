<?php 
	class Home extends CI_Controller
	{		
		public function index()
		{
			$this->load->view('HalamanUtama');
		}	
		

		public function agribisnis() {
			$this->load->view('HalamanDetailAgribisnis');
		}
	} 
?>