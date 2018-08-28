<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_varietas extends CI_Model{

	public function getJumlahBaris($id){
		$data=$this->db->query("SELECT * FROM varietas WHERE id_serat = '$id'");
		return $data->num_rows();
	}

	public function getVarietasByPagination($id, $perpage, $start){
		$data=$this->db->query("SELECT n.id_serat, n.id_varietas, n.nama_varietas, n.file_gambar, n.tanggal_upload, 								n.waktu_upload, n.deskripsi_varietas
								FROM varietas n
								WHERE n.id_serat = '$id' LIMIT $perpage OFFSET $start");
		return $data->result();
	}

	public function selectIdSerat($namaSerat){
		$data=$this->db->query("SELECT id_serat
								FROM serat 
								WHERE nama_serat="."'".$namaSerat."'");
		$hasil=$data->result();
		return $hasil[0]->id_serat;

	}

	public function getSerat($id){
		$data=$this->db->query("SELECT * FROM serat 
								WHERE id_serat =  "."'".$id."'");
		return $data->result();
	}

	public function selectIdVarietas($namaVarietas){
		$data=$this->db->query("SELECT n.id_varietas
								FROM varietas n 
								WHERE n.nama_varietas = "."'".$namaVarietas."'");
		$hasil=$data->result();
		return $hasil[0]->id_varietas;
	}

	public function getVarietas($id){
		$data=$this->db->query("SELECT n.id_serat, n.id_varietas, n.nama_varietas, n.file_gambar, n.tanggal_upload, 								n.waktu_upload, n.deskripsi_varietas
								FROM varietas n
								WHERE n.id_serat = "."'".$id."'");
		return $data->result();
	}

	public function getVarietasSpesifikasi($id){
		$data=$this->db->query("SELECT n.id_serat, n.id_varietas, n.nama_varietas, n.file_gambar, n.tanggal_upload, 								n.waktu_upload, n.deskripsi_varietas, n.file_SK
								FROM varietas n 
								WHERE n.id_varietas = "."'".$id."'");
		return $data->result();
	}
	// public function selectByidNamaSerat($namaSerat){
	// 	$data=$this->db->query("SELECT id_serat
	// 							FROM serat
	// 							WHERE nama_serat= "."'".$namaSerat."'");
	// 	return $data->result();
	// }
	public function getSpesifikasiVarietas($namavarietas){
		$data=$this->db->query("SELECT v.nama_varietas, a.nama_atribut, det.detail_value 
								FROM varietas v 
								JOIN detail_varietas det ON v.id_varietas = det.id_varietas
								JOIN atribut a ON det.id_atribut = a.id_atribut
								WHERE v.id_varietas = "."'".$namavarietas."'");
		return $data->result();
	}

	public function getDeskripsi($idSerat){
		$data=$this->db->query("SELECT detail_varietas.detail_value FROM varietas
								JOIN detail_varietas ON varietas.id_varietas = detail_varietas.id_varietas
								JOIN atribut on detail_varietas.id_atribut = atribut.id_atribut
								WHERE atribut.id_atribut = 'A0032' AND varietas.id_serat="."'".$idSerat."'");
		return $data->result();
	}

	 function selectVarietasOnSide(){
        	$data=$this->db->query("SELECT * From varietas ORDER BY tanggal_upload DESC  LIMIT 42");
        	return $data->result();
        }

     function selectLeafletOnSide(){
     		$data=$this->db->query("SELECT l.nama_leaflet, g.file
									FROM leaflet l 
									JOIN gambar_leaflet g ON l.id_leaflet=g.id_leaflet LIMIT 22");
     		return $data->result();
     }
}
?>