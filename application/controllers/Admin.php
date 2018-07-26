<?php 
	class admin extends CI_Controller{
		public function index(){
			$data['judul'] = "Balittas";
			$this->load->view('login', $data);
		}

		public function login(){
			$coba = "";
			$username = $_POST['username']; 
			$password = $_POST['password'];			
			if ($username=="balittas"&&$password=="magang") {
				echo "Selamat datang cah magang";
			}else{
				$data['coba']="gusna";
				$this->load->view('login', $data);
			}			
		}
	}
 ?>