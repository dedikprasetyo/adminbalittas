<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_produk extends CI_Model{
	public function getBenih(){
		$data=$this->db->query("SELECT * FROM `benih` JOIN `stok_benih`on `benih`.`id_benih` = `stok_benih`.`id_benih`");
		return $data->result();

		// // versi 2
		// 	$sql = $this->db ->query("SELECT * FROM `benih` JOIN `stok_benih`on `benih`.`id_benih` = `stok_benih`.`id_benih`");
		// 	return $sql->result();
	}
	//masih belum bisa
	// public function selectStokBenihFiltered($komoditas){
	// 	$data=$this->db->query("SELECT * FROM `benih` JOIN `stok_benih`on `benih`.`id_benih` = `stok_benih`.`id_benih` WHERE `id_serat` = (SELECT `id_serat` FROM `serat` WHERE `nama_serat` = \"$komoditas\") ");
	// 	return $data->result();

	// 	// // versi 2
	// 	// $sql = $this->db ->query("SELECT * FROM `benih` JOIN `stok_benih`on `benih`.`id_benih` = `stok_benih`.`id_benih` WHERE `id_serat` = (SELECT `id_serat` FROM `serat` WHERE `nama_serat` = \"$komoditas\") ");
	//  //        return $sql->result();
	// }
	// dedik
		// public function load_stok_benih(){
		// 	$sql = $this->db ->query("SELECT * FROM `benih` JOIN `stok_benih`on `benih`.`id_benih` = `stok_benih`.`id_benih`");
		// 	return $sql->result_array();
		// }
		// public function load_stok_benih_filter($komoditas) {
		// 	$sql = $this->db ->query("SELECT * FROM `benih` JOIN `stok_benih`on `benih`.`id_benih` = `stok_benih`.`id_benih` WHERE `id_serat` = (SELECT `id_serat` FROM `serat` WHERE `nama_serat` = \"$komoditas\") ");
	 //        return $sql->result_array();
		// }
	//without query builder
	// public function FilterDistribusiBenih($tahun, $bulan){
	// 	$data=$this->db->query("SELECT s.id_distribusi, b.nama_benih, s.tanggal, s.tahun_panen, s.kelas_benih, s.jumlah_kg, s.keterangan
	// 							FROM distribusi_benih s
	// 							JOIN benih b on b.id_benih=s.id_benih
	// 							WHERE tanggal like '%2015-02%'
	// 							ORDER by s.id_distribusi ");
	// }
	//tidak di pake
	// public function getDistribusiBenih(){
	// 	$data=$this->db->query("SELECT b.nama_benih, s.tanggal, s.tahun_panen, s.kelas_benih, s.jumlah_kg, s.keterangan
	// 							FROM distribusi_benih s
	// 							JOIN benih b on b.id_benih=s.id_benih");
	// 	return $data->result();
	// }
	public function selectDistribusiBenih(){
		$query = $this->db->select("s.id_distribusi, b.nama_benih, s.tanggal, s.tahun_panen, s.kelas_benih, s.jumlah_kg, s.keterangan");
	        $query = $this->db->from("distribusi_benih s");
	        $query = $this->db->join("benih b", "b.id_benih=s.id_benih");
			$query = $this->db->where("s.tanggal like","2011-01-_%_%");
			$query = $this->db->order_by("s.id_distribusi", "asc");
	        $query = $this->db->get();
	        return $query->result();
	}

	public function selectDistribusiFiltered($tahun, $bulan) {
			$query = $this->db->select("s.id_distribusi, b.nama_benih, s.tanggal, s.tahun_panen, s.kelas_benih, s.jumlah_kg, s.keterangan");
	        $query = $this->db->from("distribusi_benih s");
	        $query = $this->db->join("benih b", "b.id_benih=s.id_benih");
			$query = $this->db->where("s.tanggal like",$tahun."-".$bulan."-_%_%");
			$query = $this->db->order_by("s.id_distribusi", "asc");
	        $query = $this->db->get();
	        return $query->result();
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