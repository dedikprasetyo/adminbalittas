<?php
	Class C_data extends CI_Controller{
		public function index(){
			$this->load->model("m_data");
			$data['serat'] = $this->m_data->load_serat();
			$data['varietas'] = $this->m_data->load_varietas();
			$data['leaflet'] = $this->m_data->load_leaflet();
			$data['gambarleaflet'] = $this->m_data->load_gambar_leaflet();		
			$this->load->view("v_admin",$data);
		}

		//serat
		public function tambahSerat(){
			$this->load->model("m_data");
			$namaSerat = $this->input->post('namaSerat');		
			$deskripsi = $this->input->post('deskripsi');		
			$targetpathSer = "serat/gambar_serat/";		
			if (empty($_FILES['gambar']['name'])) {
				$gambar = "noImg.jpg";
				$this->m_data->tambah_serat($namaSerat, $deskripsi, $gambar);	
			}else{
				$targetpathSerat = $targetpathSer.basename($_FILES['gambar']['name']);
				move_uploaded_file($_FILES['gambar']['tmp_name'],$targetpathSerat);
				$this->m_data->tambah_serat($namaSerat, $deskripsi, $_FILES['gambar']['name']);	
			}
			redirect(base_url('c_data/'));
		}
		public function editSerat(){
			$this->load->model("m_data");
			$idSerat = $this->input->post('idSerat');
			$namaSerat = $this->input->post('namaSerat');		
			$deskripsi = $this->input->post('editdeskripsi');		
			$gambar = $this->input->post('editserat');		

			$targetpathSer = "serat/gambar_serat/";	

			if (empty($_FILES['editgambarserat']['name'])) {			
				$this->m_data->edit_serat($idSerat, $namaSerat, $deskripsi, $gambar);	
			}else{
				$dataserat = $this->m_data->get_serat_byId($idSerat);
				unlink($targetpathSer.$dataSer[0]->gambar_ser);
				$targetpathSerat = $targetpathSer.basename($_FILES['editgambarserat']['name']);
				move_uploaded_file($_FILES['editgambarserat']['tmp_name'],$targetpathSerat);
				$this->m_data->edit_serat($idSerat, $namaSerat, $deskripsi, $_FILES['editgambarserat']['name']);	
			}		
			redirect(base_url('c_data/'));
		}
		public function hapusSerat($idSerat){
			$this->load->model("m_data");
			$this->m_data->hapus_serat($idSerat);
			redirect(base_url('c_data/'));
		}


	}
?>
