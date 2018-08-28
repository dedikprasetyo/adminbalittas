<?php 
	class admin extends CI_Controller{
		public function index(){
			$data['judul'] = "Masuk - Balai Penelitian Tanaman Pemanis dan Serat";
			$this->load->view('login', $data);
		}
		public function login(){
			$username = $this->input->post('username'); 
			$password = $this->input->post('password');			
			if ($username == "balittas" && $password == "admin") {
				$this->load->model("m_data");
				$this->session->set_userdata(array(
						'akunAktif'=>"Administrator"),
				true);

				redirect(base_url('admin/serat'));
			}else{
				$data['coba'] = "salah";
				$data['judul'] = "Admin - Balai Penelitian Tanaman Pemanis dan Serat";
				$this->load->view('login', $data);
			}					
		}
		public function logout() {
			$this->session->sess_destroy();
			redirect(base_url('admin'));
		}
		public function serat(){		
			$this->load->model("m_data");
			$data['serat'] = $this->m_data->load_serat();
			$data['varietas'] = $this->m_data->load_varietas();
			$data['leaflet'] = $this->m_data->load_leaflet();
			$data['gambarleaflet'] = $this->m_data->load_gambar_leaflet();
			$data['monograf'] = $this->m_data->load_budidaya();
			$data['benih'] = $this->m_data->load_benih();
			$data['distribusibenih'] = $this->m_data->load_distribusibenih();
			$data['alsin'] = $this->m_data->load_alsin();
			$data['gambaralsin'] = $this->m_data->load_gambar_alsin();
			$dataHeader['judul'] = "Admin";
			$this->load->view("headerAdmin",$dataHeader);
			$this->load->view("v_admin",$data);

		}

		//serat
		public function hapusSerat($idSerat){
			$this->load->model("m_data");
			$targetpathSeratgmbr = "item img/serat/";
			$dataserat = $this->m_data->get_serat_byId($idSerat);
			unlink($targetpathSeratgmbr.$dataserat[0]->gambar);
			$this->m_data->hapus_serat($idSerat);
			redirect(base_url('admin/serat#tabelSerat'));
		}
		public function tambahSerat(){
			$this->load->model("m_data");
			$namaSerat = $this->input->post('namaSerat');		
			$deskripsi = $this->input->post('deskripsi');		
			$targetpathSer = "item img/serat/";		
			if (empty($_FILES['gambar']['name'])) {
				$gambar = "noImg.jpg";
				$this->m_data->tambah_serat($namaSerat, $deskripsi, $gambar);	
			}else{
				$targetpathSerat = $targetpathSer.basename($_FILES['gambar']['name']);
				move_uploaded_file($_FILES['gambar']['tmp_name'],$targetpathSerat);
				$this->m_data->tambah_serat($namaSerat, $deskripsi, $_FILES['gambar']['name']);	
			}
			redirect(base_url('admin/serat#tabelSerat'));
		}
		public function editSerat(){
			$this->load->model("m_data");
			$idSerat = $this->input->post('idSerat');
			$namaSerat = $this->input->post('namaSerat');		
			$deskripsi = $this->input->post('editdeskripsi');		
			$gambar = $this->input->post('editserat');		
			$targetpathSer = "item img/serat/";	
			$dataserat = $this->m_data->get_serat_byId($idSerat);
			if (!empty($_FILES['editgambarserat']['name'])) {		
			 	unlink($targetpathSer.$dataserat[0]->gambar);
				$targetpathSeratgmbr = $targetpathSer.basename($_FILES['editgambarserat']['name']);
				move_uploaded_file($_FILES['editgambarserat']['tmp_name'],$targetpathSeratgmbr);
				$this->m_data->edit_serat($idSerat, $namaSerat, $deskripsi, $_FILES['editgambarserat']['name']);	
			} else { 
				$this->m_data->edit_serat_noimg($idSerat, $namaSerat, $deskripsi);	
			}		
			redirect(base_url('admin/serat#tabelSerat'));
		}

		//alsin
		public function hapusAlsin($idAlsin){
			$this->load->model("m_data");
			// $targetpathSeratgmbr = "item img/serat/";
			// $dataserat = $this->m_data->get_serat_byId($idSerat);
			// unlink($targetpathSeratgmbr.$dataserat[0]->gambar);
			$this->m_data->hapus_Alsin($idAlsin);
			redirect(base_url('admin/serat#tabelAlsin'));
		}


		public function filterVarietas() {
			$this->load->model("m_data");
			$komoditas = $this->input->post('serattt');
			if ($komoditas == "Semua Komoditas") {
				$data['dataVarietasFiltered'] = $this->m_data->load_varietas($komoditas);
			} else {
				$data['dataVarietasFiltered'] = $this->m_data->load_varietas_filter($komoditas);
			}
			$this->load->view('FilterTable', $data);
		}

	}
 ?>