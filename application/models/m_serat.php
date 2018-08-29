<?php 	
	class m_serat extends CI_Model
	{
		public function selectSerat() {
			$query = $this->db->get('serat');
   			return $query->result();
		}

		public function pencarianSerat($cari){
			if($cari == "#serat"){
				$cari="";
			}
			$data=$this->db->query("SELECT s.nama_serat, s.deskripsi_serat FROM serat s
									WHERE 
									s.nama_serat LIKE '%$cari%' OR s.deskripsi_serat LIKE '%$cari%'
									");
			return $data->result();
		}

		// public function pencarianSerat($cari){
		// 	if($cari == "#serat"){
		// 		$cari="";
		// 	}
		// 	$query=$this->db->distinct();
		// 	$query=$this->db->select("*");
		// 	$query=$this->db->from("serat");
		// 	$query=$this->db->group_start()
		// 					->where('nama_serat like', "%$cari%")
		// 					->or_where('deskripsi_serat like', "%%$cari")
		// 					->group_end();
		// 	$query=$this->db->get();
		// 	return $query->result();
		// }

			//buat nampilin nama di url
	// public function selectIdBynamaSerat($namaSerat){
	// 	$data=$this->db->query("SELECT id_serat
	// 							FROM serat
	// 							WHERE nama_serat= "."'".$namaSerat."'");
	// 	return $data->result();
	// }

	// public function selectIdVarietas($idVarietas){
	// 	$data=$this->db->query("SELECT n.id_serat, n.id_varietas, n.nama_varietas, n.file_gambar, n.tanggal_upload, 								n.waktu_upload
	// 							FROM varietas n 
	// 							WHERE n.id_serat = "."'".$idVarietas."'");
	// 	return $data->result();
	// }




	}
 ?>