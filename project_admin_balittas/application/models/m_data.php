<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class M_data extends CI_Model{

	public function load_jarakpagar(){
		$sql = $this->db->query("SELECT * FROM jarak_pagar");
		return $sql->result_array();
	}

	public function simpan($post){ //gambar blm

		$NAMA_JARAK_PAGAR = $this->db->escape($post['NAMA_JARAK_PAGAR']);
		$KOMODITAS = $this->db->escape($post['KOMODITAS']);
		$TAHUN_PELEPASAN = $this->db->escape($post['TAHUN_PELEPASAN']);
		$KARAKTERISTIK = $this->db->escape($post['KARAKTERISTIK']);
		$STATUS = $this->db->escape($post['STATUS']);
		$INSTANSI = $this->db->escape($post['INSTANSI']);
		$AGROEKOSISTEM = $this->db->escape($post['AGROEKOSISTEM']);
		$DESKRIPSI = $this->db->escape($post['DESKRIPSI']);
		// $GAMBAR = $this->db->escape($post(['GAMBAR']));

		

		$sql = $this->db->query("INSERT INTO jarak_pagar (ID_JARAK_PAGAR, ID_DESKRIPSI_UMUM, NAMA_JARAK_PAGAR, KOMODITAS, TAHUN_PELEPASAN, KARAKTERISTIK, STATUS, INSTANSI, AGROEKOSISTEM, DESKRIPSI, GAMBAR) VALUES (NULL, '1', $NAMA_JARAK_PAGAR, $KOMODITAS, $TAHUN_PELEPASAN, $KARAKTERISTIK, $STATUS, $INSTANSI, $AGROEKOSISTEM, $DESKRIPSI, null);");

		
		if($sql)
			return true;
		return false;
	}

	public function get_default($id){
		$sql = $this->db->query("SELECT * FROM jarak_pagar WHERE ID_JARAK_PAGAR = ".intval($id));
		if($sql->num_rows() > 0)
			return $sql->row_array();
		return false;
	}

	public function ubah($post, $id){
		$NAMA_JARAK_PAGAR = $this->db->escape($post['NAMA_JARAK_PAGAR']);
		$KOMODITAS = $this->db->escape($post['KOMODITAS']);
		$TAHUN_PELEPASAN = $this->db->escape($post['TAHUN_PELEPASAN']);
		$KARAKTERISTIK = $this->db->escape($post['KARAKTERISTIK']);
		$STATUS = $this->db->escape($post['STATUS']);
		$INSTANSI = $this->db->escape($post['INSTANSI']);
		$AGROEKOSISTEM = $this->db->escape($post['AGROEKOSISTEM']);
		$DESKRIPSI = $this->db->escape($post['DESKRIPSI']);
		// $GAMBAR = $this->db->escape($post(['GAMBAR']));

		// $sql =	 $this->db->query("UPDATE tb_karyawan SET name = $nama, alamat = $alamat, email = $email WHERE id = ".intval($id));
		$sql = $this->db->query("UPDATE jarak_pagar SET NAMA_JARAK_PAGAR=$NAMA_JARAK_PAGAR, KOMODITAS=$KOMODITAS, TAHUN_PELEPASAN=$TAHUN_PELEPASAN, KARAKTERISTIK=$KARAKTERISTIK, STATUS=$STATUS, INSTANSI=$INSTANSI, AGROEKOSISTEM=$AGROEKOSISTEM, DESKRIPSI=$DESKRIPSI, GAMBAR=NULL WHERE ID_JARAK_PAGAR = ".intval($id));


		return true;
	}
	public function hapus($id){
		$sql = $this->db->query("DELETE FROM jarak_pagar WHERE ID_JARAK_PAGAR = ".intval($id));
	}	
}