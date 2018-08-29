<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Balittas</title>
		<meta charset="utf-8">		
		<meta name="description" content="A Tuts+ course">
		<meta name="author" content="Gusna Ikhsan">		
		<link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/css/balittas.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
		
		<br>
		<!-- content -->
		<div class="container">			
				<ul class="breadcrumb" style="margin: -6px 0px -10px -15px;">
					  	<li><a href="#">Beranda</a></li>
					  	<li class="active">Pencarian</li> 
				</ul>			
				<br><br>										
					<!-- <h3 class="text-left" style="color:black;font-family: Minion Pro">Pencarian</h3>
					<hr style="border-color: grey;margin-top: -8px;"> -->
				<div class="container-fluid" style="background-color:rgba(28,69,26,0.9);border-radius: 5px; width: 60%;">
					<form method="get" action="<?php echo base_url('pencarian')?>" style="margin-top: 15px; margin-bottom: 15px;">
						<div class="input-group">
							<input type="text" name="keyword" class="form-control" placeholder="Cari" id="fieldCari" value="<?php echo $keyword; ?>" required>
							<div class="input-group-btn">
							    <button class="btn btn-success" type="submit">
							    	<i class="glyphicon glyphicon-search"></i>
							    </button>
							</div>
						</div>
					</form>						
				</div>
				<br>
				<h3 style=" font-style: italic;">Hasil pencarian <span class="matche-cnt"><span id="jumlahTerkait"></span> terkait</span></h3>
				<hr style="margin-top: -6px;">
				<input hidden id="keyword" value="<?php echo $keyword; ?>">								
		

					<!-- Pencarian Tabel Serat -->
					<?php 
					$tempSerat="";
					$jumlahPencarian = 0;
					foreach($pencarianKomoditas as $cari) {
						if($tempSerat!=$cari->nama_serat) {
						?>
							<div class="pencarian">
								<a style="text-decoration-line:none; color:red;" href="<?php echo base_url('varietas/detail/').urlencode(strtolower($cari->nama_serat));?>"><h3><?php echo $cari->nama_serat; ?></h3></a>
								<?php 
									$deskripsi="";
									if(!empty($cari->deskripsi_serat)){
										$deskripsi=substr($cari->deskripsi_serat, 0,670)." [...]";
										echo '<p style="text-indent:0.5in; text-align:justify;">'.$deskripsi.'</p>';
									}else{
										$deskripsi="(Belum Ada Deskripsi)";
										echo '<p style="text-align:justify; font-style:italic;">'.$deskripsi.'</p>';
									}
								 ?>
								 <div>
								 <a href="<?php echo base_url('pencarian')?>?keyword=%23serat" style="text-decoration-line: none;"><span style="color: #fece00; font-style: italic;"><p class="glyphicon glyphicon-tags small"></p>&nbsp;&nbsp;Serat</span></a>	
								<hr style="margin-top: -2px;">
								</div>
							</div>
					<?php 
					$jumlahPencarian++;
							} 
							$tempSerat=$cari->nama_serat;
						}
							?>	

					<!-- Pencarian tabel varietas -->
					<?php 
					$tempVarietas="";
						foreach($pencarianVarietas as $cari) {
							if($tempVarietas!=$cari->nama_varietas){
							?>
								<div class="pencarian">
									<a style="text-decoration-line:none; color:red;" href="<?php echo base_url('varietas/spesifikasiVarietas/').urlencode(strtolower($cari->nama_varietas));?>"><h3><?php echo $cari->nama_varietas; ?></h3></a>
									<?php 
										$deskripsi="";
										if(!empty($cari->deskripsi_varietas)){
											$deskripsi=substr($cari->deskripsi_varietas, 0,670)." [...]";
											echo '<p style="text-indent:0.5in; text-align:justify;">'.$deskripsi.'</p>';
										}else{
											$deskripsi="(Belum Ada Deskripsi)";
											echo '<p style="text-align:justify; font-style:italic;">'.$deskripsi.'</p>';
										}
									 ?>
									 <div>
								 <a href="<?php echo base_url('pencarian')?>?keyword=%23varietas" style="text-decoration-line: none;"><span style="color: #fece00; font-style: italic;"><p class="glyphicon glyphicon-tags small"></p>&nbsp;&nbsp;varietas</span></a>	
								<hr style="margin-top: -2px;">
								</div>
								</div>
						<?php 
						$jumlahPencarian++;
								} 
								$tempVarietas=$cari->nama_varietas;
							}
								
								if($jumlahPencarian == 0){
									echo "<script>$(\"#jumlahTerkait\").text(\"$jumlahPencarian\");</script>";
									echo "<h3 class=\"text-center\" style=\"font-family: futura md bt;\">Hasil untuk <b style=\"color: rgb(242,97,5);\">$keyword</b> tidak ditemukan!</h3>"; 	
								}else{
									echo "<script>
									$(\"#jumlahTerkait\").text(\"$jumlahPencarian\");
									</script>";
								} 
								?>	
							<!-- <div>					
								<a href="" style="text-decoration-line: none;" class="teknologiBudidaya">						
									<h3 class="pencarian"><span>Kapas</span></h3>
								</a>
								<p style="text-indent: 0.5in;" class="pencarian"></p>
								<a href="" style="text-decoration-line: none;"><span style="color: #fece00; font-style: italic;"><p class="glyphicon glyphicon-tags small"></p>&nbsp;&nbsp;Serat</span></a>	
								<hr style="margin-top: -2px;">
							</div>	 -->
			</div>			
		</div>
	</body>	
	<br><br><br>
	
</html>