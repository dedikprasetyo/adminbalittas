<?php 
	class m_leaflet extends CI_Model
	{
		
		public function getleaflet($id){
	        $query = $this->db->select('leaflet.nama_leaflet, gambar_leaflet.file');
	        $query = $this->db->from('leaflet');
			$query = $this->db->join('gambar_leaflet', 'leaflet.id_leaflet = gambar_leaflet.id_leaflet');
			$query = $this->db->join('jenis_leaflet', 'leaflet.id_jenis_leaflet = jenis_leaflet.id_jenis_leaflet');
			$query = $this->db->where('jenis_leaflet.id_jenis_leaflet', $id);
	        $query = $this->db->get();
	        return $query->result();

			// $db2 = $this->load->database('db',TRUE);
			// $sql = $db2->query("SELECT `leaflet`.`nama_leaflet`, `gambar_leaflet`.`file` 
			// 					FROM `leaflet` 
			// 					JOIN `gambar_leaflet` ON `leaflet`.`id_leaflet` = `gambar_leaflet`.`id_leaflet`
			// 					JOIN `jenis_leaflet` ON `leaflet`.`id_jenis_leaflet` = `jenis_leaflet`.`id_jenis_leaflet`
			// 					WHERE `jenis_leaflet`.`id_jenis_leaflet`= \"".$id."\";");
			// return $sql->result_array();
		}

		public function getIdJenis($nama) {
			$query = $this->db->select('jl.id_jenis_leaflet');
	        $query = $this->db->from('jenis_leaflet jl');
			$query = $this->db->where('jl.nama_jenis', $nama);
	        $query = $this->db->get();
	        $hasil = $query->result();
			return $hasil[0]->id_jenis_leaflet;

			// $db2 = $this->load->database('db',TRUE);
			// $sql = $db2->query("select jl.id_jenis_leaflet
			// 					from jenis_leaflet jl
			// 					where jl.nama_jenis = \"".$nama."\"");
			// $hasil = $sql->result_array();
			// return $hasil[0]->id_jenis_leaflet;
		}

		function selectLeafletTerbaru() {
        	$query = $this->db->limit(12);
	        $query = $this->db->select('leaflet.nama_leaflet, gambar_leaflet.file');
	        $query = $this->db->from('leaflet');        	
        	$query = $this->db->join('gambar_leaflet', 'leaflet.id_leaflet = gambar_leaflet.id_leaflet');
	        $query = $this->db->get();
	        return $query->result();	
        }

       
	} 
?>