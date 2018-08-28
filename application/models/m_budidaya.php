<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_budidaya extends CI_Model{

	public function getMonograf(){
		$data=$this->db->query("SELECT * FROM monograf");
		return $data->result();
	}

	public function getDetailMonograf($id){
		$data=$this->db->query("SELECT * FROM detail_monograf d 
								JOIN monograf m on d.id_monograf=m.id_monograf
								WHERE m.id_monograf='$id'");
		return $data->result();
	}

	public function getIdByNamaMonograf($namaMonograf){
		$data=$this->db->query("SELECT m.id_monograf 
							   FROM monograf m
							   WHERE m.nama_monograf = '$namaMonograf'");
		$hasil=$data->result();
		return $hasil[0]->id_monograf;
	}

	 function selectVarietasOnSide(){
        	$data=$this->db->query("SELECT * From varietas ORDER BY tanggal_upload DESC  LIMIT  6");	
        	return $data->result();

        	// $data=$this->db->query("SELECT * FROM varietas 
        	// 					   WHERE id_serat = '$id' 
        	// 					   ORDER BY tanggal_upload DESC LIMIT 6");
        	// return $data->result();
        }

     function detailMonografBerdasarkanID($id){
     	$data=$this->db->query("SELECT * FROM detail_monograf d
								join monograf m on d.id_monograf=m.id_monograf
								where m.id_serat='$id'");
     	return $data->result();
     }

     public function getJumlahDetailMonografBerdasarkanIDSerat($id){
     	$data=$this->db->query("SELECT * FROM detail_monograf d
								join monograf m on d.id_monograf=m.id_monograf
								where m.id_serat='$id'");
		return $data->num_rows();
     }
     public function getDetailMonografBerdasarkanIDSerat($id, $perpage, $start){
		$data=$this->db->query("SELECT * FROM detail_monograf d 
								JOIN monograf m on d.id_monograf=m.id_monograf
								WHERE m.id_serat='$id' LIMIT $perpage OFFSET $start");
		return $data->result();
	}

	// content tester pagination
	// hitung tabel detail monograf
	public function getJumlahBaris($id){
		$data=$this->db->query("SELECT * FROM detail_monograf d 
								JOIN monograf m on d.id_monograf=m.id_monograf
								WHERE m.id_monograf='$id'");
		return $data->num_rows();
	}

	// public function getJumlahBaris2(){
	// 	$data=$this->db->query("SELECT * FROM detail_monograf d 
	// 							JOIN monograf m on d.id_monograf=m.id_monograf");
	// 	return $data->num_rows();
	// }


	//with active record or query builder
	public function getMonografId($id, $perpage, $start){
		$query=$this->db->select("*");
		$query=$this->db->from("detail_monograf d");
		$query=$this->db->join("monograf m", "d.id_monograf=m.id_monograf");
		$query=$this->db->where("m.id_monograf='$id'");
		$query=$this->db->limit($perpage, $start);
		$query=$this->db->get();
		return $query->result();
	}

		//without query builder or basic query
		public function getMonografIdVer2($id, $perpage, $start){
		$data=$this->db->query("SELECT * FROM detail_monograf d 
								JOIN monograf m on d.id_monograf=m.id_monograf
								WHERE m.id_monograf='$id' LIMIT $perpage OFFSET $start");
		return $data->result();
	}
}
 ?>  				 