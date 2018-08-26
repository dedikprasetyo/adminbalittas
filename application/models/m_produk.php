<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_produk extends CI_Model{

	public function getBenih(){
		// $data=$this->db->query("SELECT * FROM benih
		// 						WHERE id_serat='S0006'");
		// $data=$this->db->query("SELECT * FROM benih");
		// return $data->result();
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

	function selectLeafletTerbaru() {
        	$query = $this->db->limit(8);
	        $query = $this->db->select('leaflet.nama_leaflet, gambar_leaflet.file');
	        $query = $this->db->from('leaflet');        	
        	$query = $this->db->join('gambar_leaflet', 'leaflet.id_leaflet = gambar_leaflet.id_leaflet');
	        $query = $this->db->get();
	        return $query->result();	
        }
}
 ?>