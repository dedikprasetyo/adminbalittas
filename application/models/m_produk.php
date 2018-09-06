<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_produk extends CI_Model{
	public function getBenih(){
		$data=$this->db->query("SELECT b.nama_benih, s.asal, s.tahun_panen, s.kelas, s.stok_bulan_terakhir, s.stok_sampai
								FROM stok_benih s
								JOIN benih b on s.id_benih = b.id_benih");
		return $data->result();
		
	}
	public function getDistribusiBenih(){
		$data=$this->db->query("SELECT b.nama_benih, s.tanggal, s.tahun_panen, s.kelas_benih, s.jumlah_kg, s.keterangan
								FROM distribusi_benih s
								JOIN benih b on b.id_benih=s.id_benih");
		return $data->result();
	}

	// public function FilterDistribusiBenih($tahun, $bulan){
	// 	$data=$this->db->query("SELECT s.id_distribusi, b.nama_benih, s.tanggal, s.tahun_panen, s.kelas_benih, s.jumlah_kg, s.keterangan
	// 							FROM distribusi_benih s
	// 							JOIN benih b on b.id_benih=s.id_benih
	// 							WHERE tanggal like '%2015-02%'
	// 							ORDER by s.id_distribusi ");
	// }

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