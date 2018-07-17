<!DOCTYPE html>
<html lang="en">
<head>
	<title>CRUD Jarak Pagar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="assets/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>
<body>
	<center><h1>Membuat CRUD dengan CodeIgniter</h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div style="overflow-x:auto;" class="table100 ver5 m-b-110">
					<table data-vertable="ver5">
						<thead>
							<tr class="row100 head">
								<th>ID Jarak Pagar</th>
								<th>ID Deskripsi Umum</th>
								<th>Nama Jarak Pagar</th>
								<th>Komoditas</th>
								<th>Tahun Pelepasan</th>
								<th>Karakteristik</th>
								<th>Status</th>
								<th>Instansi</th>
								<th>Agroekosistem</th>
								<th>Deskripsi</th>
								<th>Gambar</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$no = 1;
							foreach($jarak_pagar as $jp){ 
							?>
							<tr>
								<td><?php echo $jp->ID_JARAK_PAGAR ?></td>
								<td><?php echo $jp->ID_DESKRIPSI_UMUM ?></td>
								<td><?php echo $jp->NAMA_JARAK_PAGAR ?></td>
								<td><?php echo $jp->KOMODITAS ?></td>
								<td><?php echo $jp->TAHUN_PELEPASAN ?></td>
								<td><!-- <?php echo $jp->KARAKTERISTIK ?> --></td>
								<td><?php echo $jp->STATUS ?></td>
								<td><?php echo $jp->INSTANSI ?></td>
								<td><?php echo $jp->AGROEKOSISTEM ?></td>
								<td><!-- <?php echo $jp->DESKRIPSI ?> --></td>
								<td><!-- <?php echo $jp->GAMBAR ?> --></td>
								<td>
								      <?php echo anchor('crud/edit/'.$jp->ID_JARAK_PAGAR,'Edit'); ?>
					                   <?php echo anchor('crud/hapus/'.$jp->ID_JARAK_PAGAR,'Hapus'); ?>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>