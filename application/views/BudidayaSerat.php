<!DOCTYPE html>
<html>
	<head>
		<title>Balittas</title>
		<meta charset="utf-8">
		<!-- <link href="gambar/logo.png" rel="shortcut icon"> -->
		<meta name="description" content="A Tuts+ course">
		<meta name="author" content="Denlei Diyorossi">
		<!-- <link rel="stylesheet" href="webdesa.css"> -->
		<link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/css/balittas.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/font-awesome-4.7.0/css/font-awesome.min.css">
		<link href="<?php echo base_url() ?>item img/Logo-Kementerian-Pertanian.png" rel="shortcut icon">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
	</head>
	<body>
		<!-- CONTENT -->
		<div class="container">
			<ul class="breadcrumb" style="margin-bottom: 0px;margin-top: 15px;">
				<li><a href="<?php echo base_url() ?>">Beranda</a></li>
				<li class="active">Budidaya</li>
			</ul>
			<div class="row">
				<div class="col-sm-9 col-lg-9">
					<hr style="border-color: black">
					<div class="row" style="margin-bottom: 20px;">
					
						<?php 
						if(!empty($budidaya)){
						foreach($budidaya as $cup) {
							?>
							<!-- <?php //var_dump($cup->cuplikan_monograf); ?>		 -->
						<!-- content 1 -->
						<div class="col-xs-12 col-sm-12 col-lg-12">
								<div class="thumbnail" style=" border-radius: 5px; background-color: #eee;">
									<div class="container-fluid">
									<br>
									<h4 style="color:rgb(242,97,5);font-size: 24px;"><?php echo $cup->judul; ?></h4>
									<p style="text-indent: 0.5in; text-align: justify;"><?php echo $cup->cuplikan_monograf; ?></p>
									<p>Penulis : <b style="font-style:italic;"><?php echo $cup->penulis; ?></b></p>
									<p>File selengkapnya mengenai <b><?php echo $cup->judul; ?></b> dapat di unduh <a href="<?php echo base_url() ?>file/unduhan/<?php echo $cup->file; ?>" style="text-decoration-line: none">Di sini</a></p>
									</div>
									<br>
									<br>
									<div style="text-align: right; margin-bottom: 10px;margin-right: 10px;">
									    <span style="font-size: 12px;">Bagikan &nbsp</span>
										<a href=""><span><img src="<?php echo base_url() ?>item img/fb.png" alt=""></span></a>
										<a href=""><span><img src="<?php echo base_url() ?>item img/twitter.png" alt=""></span></a>
										<a href=""><span><img src="<?php echo base_url() ?>item img/gplus.png" alt=""></span></a>
									</div>									
								</div>
						</div>	
						<?php 
						} } else{
							?>
						<div class="col-xs-12 col-sm-12 col-lg-12">
								<div class="standar thumbnail" style=" border-radius: 5px; background-color: #eee;">
									<div class="container-fluid text-center">
									<br>
									<h2  style="padding-top : 250px; color:red;"><b>Mohon maaf untuk saat ini Referensi Buku yang anda cari dari komoditas Terkait Belum Tersedia :))</b></h2>
									</div>
									<br>
									<br>
									<!-- <div style="text-align: right; margin-bottom: 10px;margin-right: 10px;">
									    <span style="font-size: 12px;">Bagikan &nbsp</span>
										<a href=""><span><img src="<?php echo base_url() ?>item img/fb.png" alt=""></span></a>
										<a href=""><span><img src="<?php echo base_url() ?>item img/twitter.png" alt=""></span></a>
										<a href=""><span><img src="<?php echo base_url() ?>item img/gplus.png" alt=""></span></a>
									</div>	 -->								
								</div>
						</div>	

						<?php 
							}
						 ?>
						
					</div>
		                   
						<ul class="pager" >
						<?php foreach($link as $pagination) {
							echo "<li>". $pagination."</li>";
						}?>
					</ul> 
				</div>
				<div class="col-sm-3 col-lg-3">
					<a href="" style="text-decoration-line:none;"><h3 class="text-left" style="color:black; margin-top: -25px;">Pencarian</h3></a>
					<hr style="border-color: black">
					<div class="container-fluid" style="background-color:rgba(28,69,26,0.9);border-radius: 5px;">
						<form action="" style="margin-top: 15px; margin-bottom: 15px;">
							<div class="input-group" style="z-index: 0;">
							    <input type="text" class="form-control" placeholder="Cari">
							    <div class="input-group-btn">
							      <button class="btn btn-success" type="submit">
							        <i class="glyphicon glyphicon-search"></i>
							      </button>
							    </div>
							 </div>
						</form>						
					</div>
					<h3 class="text-left" style="color:black;font-family: Monion pro">Varietas Terbaru</h3>
					<hr style="border-color: grey;margin-top: -5px;">
					<?php foreach($budidayavarietas as $varside)
						{
							$deskripsi="";
					 ?>
					<div style="margin-top: -5px;">
						<a href="<?php echo base_url('varietas/spesifikasiVarietas/').urlencode(strtolower($varside->nama_varietas));?>" style="color:black;text-decoration-line: none;">
							<p style="color:rgb(242,97,5);font-size: 15px;margin-bottom: 5px;"><?php echo $varside->nama_varietas; ?></p>
							<div class="row">
								<div class="col-xs-5 col-sm-5 col-lg-5">
									<?php 
										if(empty($varside->file_gambar)){
									 ?>
									 <img src="<?php echo base_url() ?>item img/gambar/Edited/serat.jpg ?>" alt="" style="width: 115px;">
									 <?php
									} else{?>
										<img src="<?php echo base_url() ?>item img/gambar/Edited/<?php echo $varside->file_gambar; ?>" alt="" style="width: 115px;">
									 <?php } ?>
								</div>
								<div class="col-xs-7 col-sm-7 col-lg-7">
									<?php 
										if(!empty($varside->deskripsi_varietas)){
											$deskripsi=substr($varside->deskripsi_varietas, 0,80)." [..]";
											echo "<p style=\"margin-top: -5px;\">$deskripsi</p>";
										}else{
											$deskripsi="(Belum memiliki deksripsi mengenai masing - masing varietas tersebut)";
											echo "<p style=\"margin-top: -5px;\">$deskripsi</p>";
										}
									 ?>
									 <!-- <p style="margin-top: -5px;"><?php echo $varside->deskripsi_varietas;?></p> -->
								</div>		
							</div>
						</a>
					</div>
					<?php 
						}
					 ?>
						
				</div>

			</div>
		</div>


		<!-- MODALS -->
		<div id="myModal" class="modalLeaflet">
		  <span class="closeModal" style="margin-top: 50px; margin-left: 15px;">&times;</span>
		  <img class="modalLeaflet-content" id="imgModal">
		</div>
		<script>
		// Get the modal
		var modal = document.getElementById('myModal');

		// Get the image and insert it inside the modal - use its "alt" text as a caption
		var max = document.getElementsByClassName("leafletImg");
		for (var i = 0; i < max.length; i++) {
			var img = document.getElementsByClassName("leafletImg")[i];
			var modalImg = document.getElementById("imgModal");
			img.onclick = function(){
			    modal.style.display = "block";
			    modalImg.src = this.src;
			}
		}

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("closeModal")[0];

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() { 
		    modal.style.display = "none";
		}
		</script>
		<!-- END OF MODALS -->

		<div class='scrolltop'>
		    <div class='scroll icon' style="width: 50px; height: 40px;">
		    	<i class="glyphicon glyphicon-chevron-up"></i>
		    </div>
		</div>
	</body>
	<br><br>
</html>