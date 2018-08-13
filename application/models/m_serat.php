<?php 	
	class m_serat extends CI_Model
	{
		public function selectSerat() {
			$query = $this->db->get('serat');
   			return $query->result();
		}

			//buat nampilin nama di url
	public function selectIdBynamaSerat($namaSerat){
		$data=$this->db->query("SELECT id_serat
								FROM serat
								WHERE nama_serat= "."'".$namaSerat."'");
		return $data->result();
	}

	public function selectIdVarietas($idVarietas){
		$data=$this->db->query("SELECT n.id_serat, n.id_varietas, n.nama_varietas, n.file_gambar, n.tanggal_upload, 								n.waktu_upload
								FROM varietas n 
								WHERE n.id_serat = "."'".$idVarietas."'");
		return $data->result();
	}




	}
 ?>