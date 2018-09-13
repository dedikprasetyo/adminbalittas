<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	Class M_data extends CI_Model{
		
		//Serat
		public function load_serat(){
			$sql = $this->db->query("SELECT `id_serat`,`nama_serat`, `deskripsi_serat`, `gambar` FROM `serat`");
			return $sql->result_array();
		}
		public function tambah_serat($namaSerat, $deskripsi, $gambar){
			$sql = $this->db->query("INSERT INTO `serat`(`id_serat`, `nama_serat`, `deskripsi_serat`, `gambar`) VALUES (\"\",\"$namaSerat\",\"$deskripsi\",\"$gambar\")");		
		}
		public function hapus_serat($idSerat){
			$sql = $this->db->query("DELETE FROM `serat` WHERE `id_serat` = \"$idSerat\"");		
		}
		public function get_serat_byId($idSerat){ 
			$sql = $this->db->query("SELECT * FROM `serat` WHERE `id_serat` = \"$idSerat\"");
			return $sql->result();
		}
		public function edit_serat($idSerat,$namaSerat, $deskripsi, $gambar){ //with image
			$sql = $this->db->query("UPDATE `serat` SET `nama_serat`=\"$namaSerat\",`deskripsi_serat`=\"$deskripsi\",`gambar`=\"$gambar\" WHERE `id_serat`=\"$idSerat\"");		
		}
		public function edit_serat_noimg($idSerat,$namaSerat, $deskripsi){ //with no image
			$sql = $this->db->query("UPDATE `serat` SET `nama_serat`=\"$namaSerat\",`deskripsi_serat`=\"$deskripsi\" WHERE `id_serat`=\"$idSerat\"");		
		}

		//Varietas
		public function load_varietas(){
			$sql = $this->db ->query("SELECT * FROM `varietas`");
			return $sql->result_array();
		}
		public function load_varietas_filter($komoditas) {
			$sql = $this->db ->query("SELECT * FROM `varietas` JOIN `serat` ON `varietas`.`id_serat` = `serat`.`id_serat` WHERE `serat`.`nama_serat` = \"$komoditas\"");
	        return $sql->result_array();
		}
		public function get_imgsk_varietas_byId($idVarietas){
			$sql = $this->db->query("SELECT file_SK, file_gambar FROM varietas WHERE id_varietas = \"$idVarietas\"");
			return $sql->result();
		}
		public function hapus_varietas($idVarietas){
			$sql = $this->db->query("DELETE FROM `varietas` WHERE `id_varietas` = \"$idVarietas\"");		
		}

		//Leaflet	
		public function load_leaflet(){
			$sql = $this->db ->query("SELECT * FROM `leaflet`");
			return $sql->result_array();
		}
		public function load_gambar_leaflet(){
			$sql = $this->db ->query("SELECT * FROM `gambar_leaflet`");
			return $sql->result();
		}
		public function get_leaflet_byId($idLeaflet){
			$sql = $this->db->query("SELECT * FROM gambar_leaflet WHERE id_leaflet = \"$idLeaflet\"");
			return $sql->result();
		}
		public function hapus_leaflet($idLeaflet){
			$sql = $this->db->query("DELETE FROM `leaflet` WHERE `id_leaflet` = \"$idLeaflet\"");		
		}
		public function add_leaflet_name($nama,$jenisLeaflet){		
			$sql = $this->db->query("INSERT INTO leaflet (id_leaflet, nama_leaflet, id_jenis_leaflet) 
				VALUES (\"\",\"$nama\",\"$jenisLeaflet\")");			
		}
		public function add_leaflet_img($img){			
			$this->db->query("INSERT INTO gambar_leaflet(id_leaflet, id_gambar, file) VALUES ((SELECT id_leaflet FROM leaflet ORDER BY id_leaflet DESC LIMIT 1),\"\",\"$img\")");
		}
		public function get_jenisleaflet(){
			$sql = $this->db ->query("SELECT `nama_jenis` FROM `jenis_leaflet`");
			return $sql->result();
		}
		public function getIdjenisleaflet($namaJenis) { //blm		
			$sql = $this->db->query("SELECT id_jenis_leaflet FROM jenis_leaflet WHERE nama_jenis = \"$namaJenis\"");
			$hasil = $sql->result();
			return $hasil[0]->id_jenis_leaflet;
		}
		public function add_jenis_leaflet($namaJenis) { //blm		
			$this->db->query("INSERT INTO `jenis_leaflet`(`id_jenis_leaflet`, `nama_jenis`) VALUES (\"\",\"$namaJenis\")");
		}

		//Budidaya
		public function load_budidaya(){
			$sql = $this->db ->query("SELECT * FROM `detail_monograf`");
			return $sql->result_array();
		}
		public function load_budidaya_filter($komoditas) {
			$sql = $this->db ->query("SELECT * FROM `detail_monograf` WHERE `id_serat` = (SELECT `id_serat` FROM `serat` WHERE `nama_serat` = \"$komoditas\")");
	        return $sql->result_array();
		}
		public function hapus_budidaya($idBudidaya){
			$sql = $this->db->query("DELETE FROM `detail_monograf` WHERE `id_detail_monograf` = \"$idBudidaya\"");		
		}
		public function get_budidaya_byId($idBudidaya){						
			$sql = $this->db->query("SELECT `file` FROM `detail_monograf` WHERE `id_detail_monograf` = \"$idBudidaya\"");
			return $sql->result();
		}

		//Stok Benih
		public function load_stok_benih(){
			$sql = $this->db ->query("SELECT * FROM `benih` JOIN `stok_benih`on `benih`.`id_benih` = `stok_benih`.`id_benih`");
			return $sql->result_array();
		}
		public function hapus_stok_benih($idStokBenih){
			$sql = $this->db->query("DELETE FROM `stok_benih` WHERE `id_stok_benih` = \"$idStokBenih\"");		
		}
		public function get_benih(){
			$sql = $this->db ->query("SELECT * FROM `benih`");
			return $sql->result();
		}
		public function add_stok_benih($idBenih,$asal,$tahunpanen,$kelas,$stokbulanterakhir,$stoksampai){		
			$sql = $this->db->query("
				INSERT INTO `stok_benih`(`id_stok_benih`, `id_benih`, `asal`, `tahun_panen`, `kelas`, `stok_bulan_terakhir`, `stok_sampai`) VALUES (\"\",\"$idBenih\",\"$asal\",\"$tahunpanen\",\"$kelas\",\"$stokbulanterakhir\",\"$stoksampai\");");			
		}

		//untuk stok benih dan distribusi
		public function getIdnamaBenih($namaBenih) { 
			$sql = $this->db->query("SELECT `id_benih` FROM `benih` WHERE nama_benih = \"$namaBenih\"");
			$hasil = $sql->result();
			return $hasil[0]->id_benih;
		}
		//untuk stok benih dan distribusi
		public function add_benih($namabenih) { 	
			$this->db->query("INSERT INTO `benih`(`nama_benih`, `id_benih`) VALUES (\"$namabenih\",\"\")");
		}

		//Distribusi Benih
		public function load_distribusibenih(){
			$sql = $this->db ->query("SELECT * FROM `benih` JOIN `distribusi_benih` ON `benih`.`id_benih` = `distribusi_benih`.`id_benih` ORDER BY `distribusi_benih`.`id_distribusi` ASC");
			return $sql->result_array();
		}
		public function add_distribusi_benih($idBenih,$tanggal,$tahunpanen,$kelas,$jumlahkg,$keterangan){		
			$sql = $this->db->query("INSERT INTO `distribusi_benih`(`id_benih`, `id_distribusi`, `tanggal`, `tahun_panen`, `kelas_benih`, `jumlah_kg`, `keterangan`) VALUES (\"$idBenih\",\"\",\"$tanggal\",\"$tahunpanen\",\"$kelas\",\"$jumlahkg\",\"$keterangan\")");			
		}
		public function load_distribusibenih_filter_bulan($bulan) {
			$like = "_%_%_%_%-".$bulan."-_%_%";
			$sql = $this->db ->query("
				SELECT * FROM `benih` 
				JOIN `distribusi_benih` ON `benih`.`id_benih` = `distribusi_benih`.`id_benih` 
				WHERE `distribusi_benih`.`tanggal` 
				LIKE \"$like\" ORDER BY `distribusi_benih`.`tanggal` ASC ");
	        return $sql->result_array();
		}
		public function load_distribusibenih_filter_tahun($tahun) {
			$like = $tahun."-_%_%-_%_%";
			$sql = $this->db ->query("
				SELECT * FROM `benih` 
				JOIN `distribusi_benih` ON `benih`.`id_benih` = `distribusi_benih`.`id_benih` 
				WHERE `distribusi_benih`.`tanggal` 
				LIKE \"$like\" ORDER BY `distribusi_benih`.`tanggal` ASC ");
	        return $sql->result_array();
		}
		public function load_distribusibenih_filter_tahunbulan($tahun,$bulan) { 
			$like = $tahun."-".$bulan."-_%_%";
			$sql = $this->db ->query("
				SELECT * FROM `benih` 
				JOIN `distribusi_benih` ON `benih`.`id_benih` = `distribusi_benih`.`id_benih` 
				WHERE `distribusi_benih`.`tanggal` 
				LIKE \"$like\" ORDER BY `distribusi_benih`.`tanggal` ASC ");
	        return $sql->result_array();
		}
		public function hapus_distribusibenih($idDistribusi){
			$sql = $this->db->query("DELETE FROM `distribusi_benih` WHERE `id_distribusi` = \"$idDistribusi\"");		
		}

		//Alat dan Mesin
		public function load_alsin(){
			$sql = $this->db ->query("SELECT * FROM `leaflet` JOIN `jenis_leaflet` ON `leaflet`.`id_jenis_leaflet` = `jenis_leaflet`.`id_jenis_leaflet` WHERE `jenis_leaflet`.`nama_jenis` = \"Alat dan Mesin\"");
			return $sql->result_array();
		}
		public function load_gambar_alsin(){
			$sql = $this->db ->query("SELECT `gambar_leaflet`.`id_leaflet`, `gambar_leaflet`.`id_gambar`, `gambar_leaflet`.`file` FROM `leaflet` JOIN `jenis_leaflet` ON `leaflet`.`id_jenis_leaflet` = `jenis_leaflet`.`id_jenis_leaflet` JOIN `gambar_leaflet` ON `leaflet`.`id_leaflet` = `gambar_leaflet`.`id_leaflet` WHERE `jenis_leaflet`.`nama_jenis` = \"Alat dan Mesin\"");
			return $sql->result();
		}
		public function get_alsin_byId($idAlsin){				
			$sql = $this->db->query("SELECT * FROM gambar_leaflet WHERE id_leaflet = \"$idAlsin\"");
			return $sql->result();
		}
		public function hapus_alsin($idAlsin){
			$sql = $this->db->query("DELETE FROM `leaflet` WHERE `id_leaflet` = \"$idAlsin\"");		

		}

		public function add_alsin_name($nama){		
			$sql = $this->db->query("INSERT INTO leaflet (id_leaflet, nama_leaflet, id_jenis_leaflet) VALUES (\"\",\"$nama\",\"JL005\")");	
		}
		public function add_alsin_img($img){			
			$this->db->query("INSERT INTO gambar_leaflet(id_leaflet, id_gambar, file) VALUES ((SELECT id_leaflet FROM leaflet ORDER BY id_leaflet DESC LIMIT 1),\"\",\"$img\")");
		}

		// PENGUNJUNG
		public function getTotalVisitor(){
			$sql = $this->db->query("SELECT SUM(hits) as total FROM statistik_pengunjung");
			return $sql->result();
		}
		public function getTotalToday($tanggal){
			$sql = $this->db->query("SELECT SUM(hits) as totalHariIni FROM statistik_pengunjung WHERE tanggal = \"$tanggal\"");
			return $sql->result();		
		}	
		public function getTotalByMonth($tanggal){
			$sql = $this->db->query("SELECT SUM(hits) as totalBulanIni FROM statistik_pengunjung WHERE month(tanggal) = \"$tanggal\"");
			return $sql->result();		
		}
		public function addUser($ip,$tanggal,$online){
			$sql = $this->db->query("INSERT INTO statistik_pengunjung (id_pengunjung, tanggal, hits, online) VALUES(\"$ip\",\"$tanggal\",'1',\"$online\")");			
		}
	}

?>