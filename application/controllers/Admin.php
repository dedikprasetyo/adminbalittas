<?php 
	class admin extends CI_Controller{
		public function index(){
			$data['judul'] = "Masuk - Balai Penelitian Tanaman Pemanis dan Serat";
			$this->load->view('login', $data);
		}
		public function login(){
			$username = $this->input->post('username'); 
			$password = $this->input->post('password');			
			if ($username == "balittas" && $password == "admin") {
				$this->load->model("m_data");
				$this->session->set_userdata(array(
						'akunAktif'=>"Administrator"),
				true);
				redirect(base_url('admin/serat'));
			}else{
				$data['coba'] = "salah";
				$data['judul'] = "Admin - Balai Penelitian Tanaman Pemanis dan Serat";
				$this->load->view('login', $data);
			}					
		}
		public function logout() {
			$this->session->sess_destroy();
			redirect(base_url('admin'));
		}
		public function serat(){		
			$this->load->model("m_data");
			$data['serat'] = $this->m_data->load_serat();
			$data['varietas'] = $this->m_data->load_varietas();
			$data['listJenis'] = $this->m_data->get_jenisleaflet();
			$data['leaflet'] = $this->m_data->load_leaflet();
			$data['gambarleaflet'] = $this->m_data->load_gambar_leaflet();
			$data['monograf'] = $this->m_data->load_budidaya();
			$data['stokbenih'] = $this->m_data->load_stok_benih();
			$data['listBenih'] = $this->m_data->get_benih();
			$data['distribusibenih'] = $this->m_data->load_distribusibenih();
			$data['alsin'] = $this->m_data->load_alsin();
			$data['gambaralsin'] = $this->m_data->load_gambar_alsin();
			$dataHeader['judul'] = "Admin";
			$this->load->view("headerAdmin",$dataHeader);
			$this->load->view("v_admin",$data);

		}

		//serat
		public function hapusSerat($idSerat){
			$this->load->model("m_data");
			$targetpathSeratgmbr = "item img/serat/";
			$dataserat = $this->m_data->get_serat_byId($idSerat);
			unlink($targetpathSeratgmbr.$dataserat[0]->gambar);
			$this->m_data->hapus_serat($idSerat);
			redirect(base_url('admin/serat#tabelSerat'));
		}
		public function tambahSerat(){
			$this->load->model("m_data");
			$namaSerat = $this->input->post('namaSerat');		
			$deskripsi = $this->input->post('deskripsi');		
			$targetpathSer = "item img/serat/";		
			if (empty($_FILES['gambar']['name'])) {
				$gambar = "noImg.jpg";
				$this->m_data->tambah_serat($namaSerat, $deskripsi, $gambar);	
			}else{
				$targetpathSerat = $targetpathSer.basename($_FILES['gambar']['name']);
				move_uploaded_file($_FILES['gambar']['tmp_name'],$targetpathSerat);
				$this->m_data->tambah_serat($namaSerat, $deskripsi, $_FILES['gambar']['name']);	
			}
			redirect(base_url('admin/serat#tabelSerat'));
		}
		public function editSerat(){
			$this->load->model("m_data");
			$idSerat = $this->input->post('idSerat');
			$namaSerat = $this->input->post('namaSerat');		
			$deskripsi = $this->input->post('editdeskripsi');		
			$gambar = $this->input->post('editserat');		
			$targetpathSer = "item img/serat/";	
			$dataserat = $this->m_data->get_serat_byId($idSerat);
			if (!empty($_FILES['editgambarserat']['name'])) {		
			 	unlink($targetpathSer.$dataserat[0]->gambar);
				$targetpathSeratgmbr = $targetpathSer.basename($_FILES['editgambarserat']['name']);
				move_uploaded_file($_FILES['editgambarserat']['tmp_name'],$targetpathSeratgmbr);
				$this->m_data->edit_serat($idSerat, $namaSerat, $deskripsi, $_FILES['editgambarserat']['name']);	
			} else { 
				$this->m_data->edit_serat_noimg($idSerat, $namaSerat, $deskripsi);	
			}		
			redirect(base_url('admin/serat#tabelSerat'));
		}

		//varietas
		public function filterVarietas() {
			$this->load->model("m_data");
			$komoditas = $this->input->post('serattt');
			if ($komoditas == "Semua Komoditas") {
				$data['dataVarietasFiltered'] = $this->m_data->load_varietas();
			} else {
				$data['dataVarietasFiltered'] = $this->m_data->load_varietas_filter($komoditas);
			}
			$this->load->view('FilterTableVarietas', $data);
		}
		public function hapusVarietas($idVarietas){
			$this->load->model("m_data");
			$datagambardansk = $this->m_data->get_imgsk_varietas_byId($idVarietas);
			unlink('item img/gambar/Edited/'.$datagambardansk[0]->file_gambar);
			unlink('file/SK/'.$datagambardansk[0]->file_SK);
			$this->m_data->hapus_varietas($idVarietas);
			redirect(base_url('admin/serat#tabelVarietas'));
		}

		//leaflet
		public function hapusLeaflet($idLeaflet){
			$this->load->model("m_data");
			$dataleaflet = $this->m_data->get_leaflet_byId($idLeaflet);
			$targetpathleaflet = "item img/leafletgabungan/";
			unlink($targetpathleaflet.$dataleaflet[0]->file);
			unlink($targetpathleaflet.$dataleaflet[1]->file);
			$this->m_data->hapus_leaflet($idLeaflet);
			redirect(base_url('admin/serat#tabelLeaflet'));
		}
		public function tambahLeaflet(){
			$this->load->model("m_data");
		    $nama = $this->input->post('namaLeaflet'); 
		    $idJenis = $this->m_data->getIdjenisleaflet($this->input->post('jenisLeaflet'));
		    if (!empty($idJenis)) {
		        $this->m_data->add_leaflet_name($nama,$idJenis); 
		    } else {
		    	$this->m_data->add_jenis_leaflet($this->input->post('jenisLeaflet'));
		    	$idJenis = $this->m_data->getIdjenisleaflet($this->input->post('jenisLeaflet'));
		    	$this->m_data->add_leaflet_name($nama,$idJenis); 
		    }
		    $targetpathleaflet = "item img/leafletgabungan/";  
		    $targetpathleaflet1 = $targetpathleaflet.basename($_FILES['gambar1']['name']);
		    move_uploaded_file($_FILES['gambar1']['tmp_name'],$targetpathleaflet1);
		    $this->m_data->add_leaflet_img($_FILES['gambar1']['name']); 
		    $targetpathleaflet2 = $targetpathleaflet.basename($_FILES['gambar2']['name']);
		    move_uploaded_file($_FILES['gambar2']['tmp_name'],$targetpathleaflet2);
		    $this->m_data->add_leaflet_img($_FILES['gambar2']['name']);
		    redirect(base_url('admin/serat#tabelLeaflet'));
		}
		public function editLeaflet(){
			$this->load->model("m_data");
			$idleaflet = $this->input->post('idleaflet');
			$idgmbr1 = $this->input->post('idimg1');		
			$idgmbr2 = $this->input->post('idimg2');	
			$nama = $this->input->post('namaLeaflet');	
			$idJenis = $this->m_data->getIdjenisleaflet($this->input->post('namajenisLeaflet'));


			$dataleaflet1 = $this->m_data->get_leaflet_img_byId($idgmbr1); 
			$dataleaflet2 = $this->m_data->get_leaflet_img_byId($idgmbr2); 
			$targetpathleaflet = "item img/leafletgabungan/";		

			//blm
			if (!empty($idJenis)) { //langsung update
				$this->m_data->updateLeafletNameJenis($idleaflet,$nama, $idJenis);	
			} else {
				//tambah jenis dulu
				$this->m_data->add_jenis_leaflet($this->input->post('jenisLeaflet'));
				$idJenis = $this->m_data->getIdjenisleaflet($this->input->post('jenisLeaflet'));
				//baru update
				$this->m_data->updateLeafletNameJenis($idleaflet, $nama, $idJenis);		
			}

			if (empty($_FILES['leaflet1']['name'])&&empty($_FILES['leaflet2']['name'])) {	
				//gambar1 dan gambar2 kosong
			} elseif (!empty($_FILES['leaflet1']['name'])&&!empty($_FILES['leaflet2']['name'])) {
				//gambar1 dan gambar2 tidak kosong
				unlink($targetpathleaflet.$dataleaflet1[0]->file);
				unlink($targetpathleaflet.$dataleaflet2[0]->file);
				$targetpathleaflet1 = $targetpathleaflet.basename($_FILES['leaflet1']['name']);
				move_uploaded_file($_FILES['leaflet1']['tmp_name'],$targetpathleaflet1);
				$targetpathleaflet2 = $targetpathleaflet.basename($_FILES['leaflet2']['name']);
				move_uploaded_file($_FILES['leaflet2']['tmp_name'],$targetpathleaflet2);
				$this->m_data->updateLeafletImg($idgmbr1,$_FILES['leaflet1']['name']); 
				$this->m_data->updateLeafletImg($idgmbr2,$_FILES['leaflet2']['name']); 
			} elseif (!empty($_FILES['leaflet1']['name'])) {
				//gambar1 kosong
				unlink($targetpathleaflet.$dataleaflet1[0]->file);
				$targetpathleaflet1 = $targetpathleaflet.basename($_FILES['leaflet1']['name']);
				move_uploaded_file($_FILES['leaflet1']['tmp_name'],$targetpathleaflet1);
				$this->m_data->updateLeafletImg($idgmbr1,$_FILES['leaflet1']['name']); 
			} elseif (!empty($_FILES['leaflet2']['name'])) {
				// gambar2 kosong
				unlink($targetpathleaflet.$dataleaflet2[0]->file);
				$targetpathleaflet2 = $targetpathleaflet.basename($_FILES['leaflet2']['name']);
				move_uploaded_file($_FILES['leaflet2']['tmp_name'],$targetpathleaflet2);
				$this->m_data->updateLeafletImg($idgmbr2,$_FILES['leaflet2']['name']); 
			}
			

			


			redirect(base_url('admin/serat#tabelLeaflet'));

		}

		
		//budidaya
		public function hapusBudidaya($idBudidaya){
			$this->load->model("m_data");
			$targetpathbudidaya = "file/unduhan/";
			$databudidaya = $this->m_data->get_budidaya_byId($idBudidaya);
			unlink($targetpathbudidaya.$databudidaya[0]->file);
			$this->m_data->hapus_budidaya($idBudidaya);
			redirect(base_url('admin/serat#tabelBudidaya'));
		}
		public function tambahBudidaya(){
			$this->load->model("m_data");
			$idserat = $this->input->post('selectkomoditas');
			$judul = $this->input->post('judul');
			$deskripsisingkat = $this->input->post('deskripsiSingkat');
			$penulis = $this->input->post('penulis');
			$targetpathbudidaya = "file/unduhan/";		
			$targetpathbudidayamonograf = $targetpathbudidaya.basename($_FILES['pdf']['name']);
			move_uploaded_file($_FILES['pdf']['tmp_name'],$targetpathbudidayamonograf);
			$this->m_data->add_budidaya($idserat,$deskripsisingkat,$penulis,$judul,$_FILES['pdf']['name']);
			redirect(base_url('admin/serat#tabelBudidaya'));
		}
		public function filterBudidaya() {
			$this->load->model("m_data");
			$komoditas = $this->input->post('serattt');
			if ($komoditas == "Semua Komoditas") {
				$data['dataBudidayaFiltered'] = $this->m_data->load_budidaya();
			} else {
				$data['dataBudidayaFiltered'] = $this->m_data->load_budidaya_filter($komoditas);
			}
			$this->load->view('FilterTableBudidaya', $data);
		}
		
		//stok benih
		public function hapusStokBenih($idStokBenih){
			$this->load->model("m_data");
			$this->m_data->hapus_stok_benih($idStokBenih);
			redirect(base_url('admin/serat#tabelStokBenih'));
		}
		public function tambahStokBenih(){
			$this->load->model("m_data");
			$asal = $this->input->post('asal');
			$tahunpanen = $this->input->post('tahunPanen');
			$kelas = $this->input->post('kelas');
			$stokbulanterakhir = $this->input->post('stokBulanTerakhir');
			$stoksampai = $this->input->post('stokSampai');
			$idBenih = $this->m_data->getIdnamaBenih($this->input->post('namaBenih'));
			if (!empty($idBenih)) { //ada
				$this->m_data->add_stok_benih($idBenih,$asal,$tahunpanen,$kelas,$stokbulanterakhir,$stoksampai);	
			} else { //tidak ada
				$this->m_data->add_benih($this->input->post('namaBenih'));
				$idBenih = $this->m_data->getIdnamaBenih($this->input->post('namaBenih'));
				$this->m_data->add_stok_benih($idBenih,$asal,$tahunpanen,$kelas,$stokbulanterakhir,$stoksampai);	
			}
			redirect(base_url('admin/serat#tabelStokBenih'));
		}
		
		//distribusi benih
		public function hapusDistribusiBenih($idDistribusi){
			$this->load->model("m_data");
			$this->m_data->hapus_distribusibenih($idDistribusi);
			redirect(base_url('admin/serat#tabelDistribusiBenih'));
		}
		public function filterDistribusi() {
			$this->load->model("m_data");
			$filtertahunbulan = $this->input->post('serattt');
			$Tahun = substr($filtertahunbulan, 0,4);	// echo $Tahun."<br>";
			$Bulan = substr($filtertahunbulan, 5,2);	// echo $Bulan."<br>";
			$Komoditas = substr($filtertahunbulan, 8,strlen($filtertahunbulan));	// echo $Komoditas;
			$if1 = "0000-00";
			$if2 = "0000-".$Bulan;
			$if3 = $Tahun."-00";
			$if4 = $Tahun.'-'.$Bulan;
			if ($filtertahunbulan == $if1) { //iki 00
				$data['dataDistribusiFiltered'] = $this->m_data->load_distribusibenih();
			} 
			else if ($filtertahunbulan == $if2) { //iki 01
				$data['dataDistribusiFiltered'] = $this->m_data->load_distribusibenih_filter_bulan($Bulan);
			}
			else if ($filtertahunbulan == $if3) { //iki 10
				$data['dataDistribusiFiltered'] = $this->m_data->load_distribusibenih_filter_tahun($Tahun);
			}
			else { //iki 11
				$data['dataDistribusiFiltered'] = $this->m_data->load_distribusibenih_filter_tahunbulan($Tahun,$Bulan);
			}
			$this->load->view('FilterTableDistribusi', $data);
		}
		public function tambahDistribusiBenih(){
			$this->load->model("m_data");
			$tanggal = $this->input->post('tanggalDistribusi');
			$tahunpanen = $this->input->post('tahunPanen');
			$kelas = $this->input->post('kelas');
			$jumlahkg = $this->input->post('jumlahkg');
			$keterangan = $this->input->post('keterangan');
			$idBenih = $this->m_data->getIdnamaBenih($this->input->post('namaBenih'));
			if (!empty($idBenih)) { //ada
				$this->m_data->add_distribusi_benih($idBenih,$tanggal,$tahunpanen,$kelas,$jumlahkg,$keterangan);	
			} else { //tidak ada
				$this->m_data->add_benih($this->input->post('namaBenih'));
				$idBenih = $this->m_data->getIdnamaBenih($this->input->post('namaBenih'));
				$this->m_data->add_distribusi_benih($idBenih,$tanggal,$tahunpanen,$kelas,$jumlahkg,$keterangan);	
			}
			redirect(base_url('admin/serat#tabelDistribusiBenih'));
		}

		//alsin
		public function hapusAlsin($idAlsin){
			$this->load->model("m_data");
			$dataleaflet = $this->m_data->get_alsin_byId($idAlsin);
			$targetpathleaflet = "item img/leafletgabungan/";
			unlink($targetpathleaflet.$dataleaflet[0]->file);
			unlink($targetpathleaflet.$dataleaflet[1]->file);
			$this->m_data->hapus_Alsin($idAlsin);
			redirect(base_url('admin/serat#tabelAlsin'));
		}
		public function tambahAlsin(){
			$this->load->model("m_data");
			$nama = $this->input->post('namaAlsin');	
			$this->m_data->add_alsin_name($nama);	
			$targetpathleaflet = "item img/leafletgabungan/";		
			$targetpathleaflet1 = $targetpathleaflet.basename($_FILES['gambaralsin1']['name']);
			move_uploaded_file($_FILES['gambaralsin1']['tmp_name'],$targetpathleaflet1);
			$this->m_data->add_alsin_img($_FILES['gambaralsin1']['name']);	
			$targetpathleaflet2 = $targetpathleaflet.basename($_FILES['gambaralsin2']['name']);
			move_uploaded_file($_FILES['gambaralsin2']['tmp_name'],$targetpathleaflet2);
			$this->m_data->add_alsin_img($_FILES['gambaralsin2']['name']);
			redirect(base_url('admin/serat#tabelAlsin'));
		}
	}
?>