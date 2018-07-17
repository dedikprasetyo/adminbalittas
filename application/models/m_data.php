<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('jarak_pagar');
	}
	// function input_data($data,$table){
	// 	$this->db->insert($table,$data);
	// }
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function simpan_data($post){
		//pastikan nama index post yang dipanggil sama seperti di form input
		$NAMA_JARAK_PAGAR = $this->db->escape($post['NAMA_JARAK_PAGAR']);
		$KOMODITAS = $this->db->escape($post['KOMODITAS']);
		$TAHUN_PELEPASAN = $this->db->escape($post['TAHUN_PELEPASAN']);
		$KARAKTERISTIK = $this->db->escape($post['KARAKTERISTIK']);
		$STATUS = $this->db->escape($post['STATUS']);
		$INSTANSI = $this->db->escape($post['INSTANSI']);
		$AGROEKOSISTEM = $this->db->escape($post['AGROEKOSISTEM']);
		$DESKRIPSI = $this->db->escape($post['DESKRIPSI']);
		$GAMBAR = $this->db->escape($post['GAMBAR']);

		// $sql = $this->db->query("INSERT INTO tb_karyawan VALUES (NULL, $nama, $alamat, $email, 1)");

		$sql = $this->db->query("INSERT INTO jarak_pagar VALUES (1, 1, $NAMA_JARAK_PAGAR, $KOMODITAS, $TAHUN_PELEPASAN, $KARAKTERISTIK, $STATUS, $INSTANSI, $AGROEKOSISTEM, $DESKRIPSI, $GAMBAR");

		if($sql)
			return true;
		return false;
	}
}