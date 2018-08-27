<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	Class M_data extends CI_Model{
		
		//Serat
		public function load_serat(){
			$sql = $this->db->query("SELECT `id_serat`,`nama_serat`, `deskripsi_serat`, `gambar` FROM `serat`");
			return $sql->result_array();
		}
		public function tambah_serat($namaSerat, $deskripsi, $gambar){
			$sql = $this->db->query("INSERT INTO `serat`(`id_serat`, `nama_serat`, `deskripsi_serat`, `gambar`) VALUES (\"\",\"$namaSerat\",\"$deskripsi\",\"$gambar\")");		
		}
		public function hapus_serat($idSerat){
			$sql = $this->db->query("DELETE FROM `serat` WHERE `id_serat` = \"$idSerat\"");		
		}
		public function get_serat_byId($idSerat){ 
			$sql = $this->db->query("SELECT * FROM `serat` WHERE `id_serat` = \"$idSerat\"");
			return $sql->result();
		}
		public function edit_serat($idSerat,$namaSerat, $deskripsi, $gambar){ //with image
			$sql = $this->db->query("UPDATE `serat` SET `nama_serat`=\"$namaSerat\",`deskripsi_serat`=\"$deskripsi\",`gambar`=\"$gambar\" WHERE `id_serat`=\"$idSerat\"");		
		}
		public function edit_serat_noimg($idSerat,$namaSerat, $deskripsi){ //with no image
			$sql = $this->db->query("UPDATE `serat` SET `nama_serat`=\"$namaSerat\",`deskripsi_serat`=\"$deskripsi\" WHERE `id_serat`=\"$idSerat\"");		
		}

		//Varietas
		public function load_varietas(){
			$sql = $this->db ->query("SELECT * FROM `varietas`");
			return $sql->result_array();
		}

		//Leaflet	
		public function load_leaflet(){
			$sql = $this->db ->query("SELECT * FROM `leaflet`");
			return $sql->result_array();
		}
		public function load_gambar_leaflet(){
			$sql = $this->db ->query("SELECT * FROM `gambar_leaflet`");
			return $sql->result();
		}

		//Budidaya
		public function load_budidaya(){
			$sql = $this->db ->query("SELECT * FROM `monograf`");
			return $sql->result_array();
		}

		//Benih
		public function load_benih(){
			$sql = $this->db ->query("SELECT * FROM `benih` JOIN `stok_benih`on `benih`.`id_benih` = `stok_benih`.`id_benih`");
			return $sql->result_array();
		}

		//Distribusi Benih
		public function load_distribusibenih(){
			$sql = $this->db ->query("SELECT * FROM `benih` JOIN `distribusi_benih` ON `benih`.`id_benih` = `distribusi_benih`.`id_benih`");
			return $sql->result_array();
		}
	}
?>