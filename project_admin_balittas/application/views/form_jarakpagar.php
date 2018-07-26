<!doctype html>
<html lang="en">
<head>
	<base href="<?=base_url()?>">
	<meta charset="UTF-8">
	<title>Latihan CRUD</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1><?=$tipe?> Jarak Pagar</h1>
		
		<form method="post" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-sm-3">Nama Jarak Pagar</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="NAMA_JARAK_PAGAR" value="<?=isset($default['NAMA_JARAK_PAGAR'])? $default['NAMA_JARAK_PAGAR'] : ""?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Komoditas</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="KOMODITAS" value="<?=isset($default['KOMODITAS'])? $default['KOMODITAS'] : ""?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Tahun Pelepasan</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="TAHUN_PELEPASAN" value="<?=isset($default['TAHUN_PELEPASAN'])? $default['TAHUN_PELEPASAN'] : ""?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Karakteristik</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="KARAKTERISTIK" value="<?=isset($default['KARAKTERISTIK'])? $default['KARAKTERISTIK'] : ""?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Status</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="STATUS" value="<?=isset($default['STATUS'])? $default['STATUS'] : ""?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Instansi</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="INSTANSI" value="<?=isset($default['INSTANSI'])? $default['INSTANSI'] : ""?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Agroekosistem</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="AGROEKOSISTEM" value="<?=isset($default['AGROEKOSISTEM'])? $default['AGROEKOSISTEM'] : ""?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Deskripsi</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="DESKRIPSI" value="<?=isset($default['DESKRIPSI'])? $default['DESKRIPSI'] : ""?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Upload Gambar</label>
				<div class="col-sm-10">
					<input type="file" class="form-control" name="GAMBAR" onchange="readURL(this);" value="<?=isset($default['GAMBAR'])? $default['GAMBAR'] : ""?>"><br>
					<img id="blah" src="http://placehold.it/180" alt="your image" />
				</div>
			</div>
			<center>
				<button name="tombol_submit" class="btn btn-primary">
					Simpan
				</button>
			</center>

			<!-- <div class="form-group">
				<label class="control-label col-sm-2">
					Alamat					
				</label>
				<div class="col-sm-10">
					<textarea name="alamat" class="form-control"><?=isset($default['alamat'])? $default['alamat'] : ""?></textarea>
			</div> -->
		</form>
</body>
</html>