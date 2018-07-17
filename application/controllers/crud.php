<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
        $this->load->helper('url');
	}
 
	function index(){
		$data['jarak_pagar'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_admin',$data);
		// $this->load->view('v_tampil',$data);
	}


	//2 nambah
	function tambah(){
		$this->load->view('v_admin');
	}
	
	function tambah_aksi(){ //jarak_pagar
		$ID_DESKRIPSI_UMUM = '1';
		$NAMA_JARAK_PAGAR = $this->input->post('NAMA_JARAK_PAGAR');
		$KOMODITAS = $this->input->post('KOMODITAS');
		$TAHUN_PELEPASAN = $this->input->post('TAHUN_PELEPASAN');
		$KARAKTERISTIK = $this->input->post('KARAKTERISTIK');
		$STATUS = $this->input->post('STATUS');
		$INSTANSI = $this->input->post('INSTANSI');
		$AGROEKOSISTEM = $this->input->post('AGROEKOSISTEM');
		$DESKRIPSI = $this->input->post('DESKRIPSI');
		$GAMBAR = $this->input->post('GAMBAR');

 
		$data = array(
			'ID_JARAK_PAGAR' => '0',
			'ID_DESKRIPSI_UMUM' => '1',
			'NAMA_JARAK_PAGAR' => $NAMA_JARAK_PAGAR,
			'KOMODITAS' => $KOMODITAS,
			'TAHUN_PELEPASAN' => $TAHUN_PELEPASAN,
			'KARAKTERISTIK' => $KARAKTERISTIK,
			'STATUS' => $STATUS,
			'INSTANSI' => $INSTANSI,
			'AGROEKOSISTEM' => $AGROEKOSISTEM,
			'DESKRIPSI' => $DESKRIPSI,
			'GAMBAR' => $GAMBAR
			);

		$this->m_data->input_data($data,'jarak_pagar');
		redirect('http://localhost/adminbalittas');
	}

	//3 hapus
	function hapus($ID_JARAK_PAGAR){
		$where = array('ID_JARAK_PAGAR' => $ID_JARAK_PAGAR);
		$this->m_data->hapus_data($where,'jarak_pagar');
		redirect('http://localhost/adminbalittas');
	}

}