<?php
Class C_data extends CI_Controller{
	public function index(){
		$this->load->model("m_data");
		$data['jarak_pagar'] = $this->m_data->load_jarakpagar();
		$this->load->view("v_admin",$data);
		
	}
	public function tambah(){
		$this->load->model("m_data");
		$data['tipe'] = "Tambah";
		if(isset($_POST['tombol_submit'])){
			$this->m_data->simpan($_POST);
			redirect("c_data");
		}
		// $this->load->view("v_admin",$data);
		$this->load->view("form_jarakpagar",$data);
	}
	public function ubah($id){
		$this->load->model("m_data");
		$data['tipe'] = "Ubah";
		$data['default'] = $this->m_data->get_default($id);
		if(isset($_POST['tombol_submit'])){
			$this->m_data->ubah($_POST, $id);
			redirect("c_data");
		}
		$this->load->view("form_jarakpagar",$data);
	}
	public function hapus($id){
		$this->load->model("m_data");
		$this->m_data->hapus($id);
		redirect("c_data");
	}
}