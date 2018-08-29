<!DOCTYPE <html>
<html>
	<head>
		<title>Balittas</title>
		<meta charset="utf-8">
		<!-- <link href="gambar/logo.png" rel="shortcut icon"> -->
		<meta name="description" content="A Tuts+ course">
		<meta name="author" content="Gusna Ikhsan">
		<!-- <link rel="stylesheet" href="webdesa.css"> -->
		<link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/css/balittas.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/css/serat.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/font-awesome-4.7.0/css/font-awesome.min.css">
		<link href="<?php echo base_url() ?>item img/Logo-Kementerian-Pertanian.png" rel="shortcut icon">
		<!-- <link href="item img/Logo-Kementerian-Pertanian.png" rel="shortcut icon"> -->

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>	
	<body>
		<!-- <header>						
			<div class="hidden-md hidden-lg" style="background-color: rgb(28,69,26); height: 70px;"></div>			
			<nav class="navbar navbar-inverse navbar-fixed-top navbarHover">
				<div class="container-fluid">
				    <div class="navbar-header" style="margin-top: 5px; margin-bottom: 3px;">						    
				      <a href="<?php echo base_url() ?>"><img src="item img/logoBalittas2.png" style="width:280px;margin-top: -18px;margin-bottom: -6px;margin-left: 5px;"></a>
				      <button type="botton" class="navbar-toggle" data-toggle="collapse" data-target="#main" style="margin-top: 10px;">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
				    </div>			
				    <div class="collapse navbar-collapse no-touch">			    
					    <ul class="nav navbar-nav navbar-right" style="margin-top: 10px;margin-right: 75px;">
					      	<a href="#home" class="halaman" style="text-decoration-line: none;font-size: 14px;"><i style="font-size:14px; color:white;" class="glyphicon glyphicon-home "></i></a>
					      	<div class="dropdownHeader">
							  	<div class="dropbtnHeader" style="font-family: Minion Pro">Leaflet Serat<span class="caret"></div>
							  	<div class="dropdownHeader-content" style="margin: 0px 0px 0px -55px; min-width: 350px;">
								  	<div class="container-fluid">
								  		<div class="row">
								  			<div class="col-sm-6 col-lg-6">
							          			<a href="#" style="margin-top: 10px;">Kapas</a>
							          			<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
							          			<a href="#">Kapuk</a>
							          			<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
							          			<a href="#" style="margin-bottom: 10px;">Kenaf</a>
								  			</div>
								  			<div class="col-sm-6 col-lg-6">
								  				<a href="#" style="margin-top:10px;">Rami</a>	
								  				<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
								  				<a href="#">Rosela</a>	
								  				<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
								  				<a href="#">Rosela</a>	
								  			</div>
								  		</div>
								  	</div>							  	
							  	</div>
							</div>
							<div class="dropdownHeader">
							  	<div class="dropbtnHeader" style="font-family: Minion Pro">Budidaya Tanaman Serat <span class="caret"></div>
							  	<div class="dropdownHeader-content" style="margin: 0px 0px 0px -126px;">
								  	<div class="container-fluid">		
							          	<a href="#" style="margin-top: 10px; margin-bottom: 10px;">Masing - masing Komoditas</a>					    
								  	</div>
							  	</div>
							</div>
							<div class="dropdownHeader">
							  	<div class="dropbtnHeader" style="font-family: Minion Pro">Leaflet Produk <span class="caret"></div>
							  	<div class="dropdownHeader-content" style="margin: 0px 0px 0px -175px; min-width: 350px;">
								  	<div class="container-fluid">
								  		<div class="row">
								  			<div class="col-sm-12 col-lg-12">
								  				<a href="#" style="margin-top: 10px;">Benih</a>	
								  				<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
								  				<a href="#alsin" class="halaman">Alat dan Mesin</a>
							          			<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
							          			<a href="#">Formula</a>
							          			<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
							          			<a href="#" style="margin-bottom: 10px;">Produk Hilir</a>
								  			</div>
								  		</div>							  		
								  	</div>							  								          
							  	</div>
							</div>					      			      
					    </ul>				    
				    </div>

				    <div class="collapse navbar-collapse" id="main">			    
					    <ul class="nav navbar-nav navbar-right hidden-md hidden-lg" style="margin-top: 8px;margin-right: 75px;">
					      	<a href="<?php echo base_url() ?>" class="glyphicon glyphicon-home dropbtnHeader" style="text-decoration-line: none;font-size: 14px;margin-left: 8px;"></a>
					      	<li class="dropdown">
					        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Varietas <span class="caret"></span></a>
						        <ul class="dropdown-menu">
						        	<li><a href="<?php echo base_url() ?>varietas/jenisAsal">Jarak Pagar</a></li>
						          	<li><a href="<?php echo base_url() ?>varietas/jenisKegunaan">Jarak Kepyar</a></li>
						          	<li><a href="<?php echo base_url() ?>varietas/jenisWaktu">Kapas</a></li>
						          	<li><a href="<?php echo base_url() ?>varietas/jenisDaerah">Kapuk</a></li>
						          	<li><a href="<?php echo base_url() ?>varietas/jenisProsesing">Kenaf</a></li>
						          	<li><a href="<?php echo base_url() ?>varietas/jenisProsesing">Rami</a></li>
						          	<li><a href="<?php echo base_url() ?>varietas/jenisProsesing">Rosela</a></li>
						          	<li><a href="<?php echo base_url() ?>varietas/jenisProsesing">Tebu</a></li>
						          	<li><a href="<?php echo base_url() ?>varietas/jenisProsesing">Wijen</a></li>
						       	</ul>
					      	</li>
					      	<li class="dropdown">
					        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Budidaya Tanaman Serat<span class="caret"></span></a>
						        <ul class="dropdown-menu">
						        	<li><a href="<?php echo base_url() ?>produk/produk1">Masing-masing Komoditas</a></li>
						       	</ul>
					      	</li>
					      	<li class="dropdown">
					        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Produk<span class="caret"></span></a>
						        <ul class="dropdown-menu">
						        	<li><a href="<?php echo base_url() ?>teknologibudidaya/penangkaranBenih">Benih</a></li>
						          	<li><a href="<?php echo base_url() ?>teknologibudidaya/pesemaian">Alat dan Mesin</a></li>
						          	<li><a href="<?php echo base_url() ?>teknologibudidaya/pemupukan">Formula</a></li>
						          	<li><a href="<?php echo base_url() ?>teknologibudidaya/bebasChlor">Produk Hilir</a></li>
						       	</ul>
					      	</li>				      	
					    </ul>				    
				    </div>
				</div>
			</nav>	
			<!-- Gambar tengah -->									 
			<!-- <div class="containerImg" id="home">
				<img src="item img/tembakauHeader.jpg" alt="" style="width: 100%;">
			 	<div class="contentImg text-center">
				    <h1 class="hidden-xs hidden-sm" style="margin-top:12%;font-size:5vw;">Detail Leaflet</h1>
				    <h1 class="hidden-md hidden-lg" style="margin-top:6vw;font-size:5vw;">Detail Leaflet</h1>				    
			  	</div>
			</div>	
		</header> -->

		<!-- CONTENT -->
		<div class="container">
			<ul class="breadcrumb" style="margin-bottom: 0px;margin-top: 15px;">
				<li><a href="<?php echo base_url() ?>">Beranda</a></li>
				<li class="active">Leaflet</li>
			</ul>
			<div class="row">
				<div class="col-sm-9 col-lg-9">
					<hr style="border-color: grey;margin-top: 10px;">
					<div class="row" id="Tebu" style="background-color: #eee;  margin-top:20px;">
						<div class="col-sm-3 col-lg-12">
							<h4 style="color:rgb(242,97,5);font-size: 24px; margin-left: 35px;"><strong>Leaflet</strong></h4>
						<hr style="border-color: rgb(242,97,5);margin-top: -10px;">
						</div>
						<?php

							$ganjil = true;
							foreach ($leafletsemua as $value) {
								if ($ganjil) {
						 ?>
						<div class="col-xs-12 col-sm-4 col-lg-4"> 
							<div class="thumbnail text-center" style="box-shadow: 5px 5px 7px 0px rgba(0,0,0,0.2);">

										<img class="leafletImg img-responsive" src="<?php echo base_url() ?>item img/Leafletgabungan/<?php echo $value->file; ?>" alt="" style="width:100%;border-radius: 3px;">
						<?php 	$ganjil = false; } else { ?>
										<img class="leafletImg img-responsive" src="<?php echo base_url() ?>item img/Leafletgabungan/<?php echo $value->file; ?>" alt="" style="width: 100%;border-radius: 3px; margin-top: 5px;">
									<h4 style="color:rgb(242,97,5);"><?php echo $value->nama_leaflet; ?></h4>
							</div>						
						</div>
						<?php 	$ganjil = true; } } ?>
						
					</div>
					<ul class="pager" >
						<?php foreach($link as $pagination) {
							echo "<li>". $pagination."</li>";
						}?>
					</ul> 

					
				</div>

				<div class="col-sm-3 col-lg-3">
					<h3 class="text-left" style="color:black; margin-top: -21px;font-family: Monion pro">Pencarian</h3>
					<hr style="border-color: grey;margin-top: -5px;">
					<div class="container-fluid" style="background-color:rgba(28,69,26,0.9); border-radius: 5px;">
						<form method="get" action="<?php echo base_url('pencarian')?>" style="margin-top: 15px; margin-bottom: 15px;">
							<div class="input-group" style="z-index: 0">
							    <input type="text" class="form-control" placeholder="Cari" required>
							    <div class="input-group-btn">
							      <button class="btn btn-success" type="submit" style="color: #5cb85c;">
							        <i class="glyphicon glyphicon-search" style="color: white;"></i>.
							      </button>
							    </div>
							 </div>
						</form>						
					</div>
					<h3 class="text-left" style="color:black;font-family: Monion pro">Varietas Terbaru</h3>
					<hr style="border-color: grey;margin-top: -5px;">
					<?php foreach($varietas as $varside)
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

					<!-- <div style="margin-top: -5px;">
						<a href="" style="color:black;text-decoration-line: none;">
							<p style="color:rgb(242,97,5);font-size: 15px;margin-bottom: 5px;">VARIETAS NC 471</p>
							<div class="row">
								<div class="col-xs-5 col-sm-5 col-lg-5">
									<img src="item img/3a.jpg" alt="" style="width: 115px;">	
								</div>
								<div class="col-xs-7 col-sm-7 col-lg-7">
									<p style="margin-top: -5px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, nobis.</p>					
								</div>		
							</div>
						</a>
					</div>
					<hr style="margin-top: 10px;margin-bottom: 10px;">
					<div>
						<a href="" style="color:black;text-decoration-line: none;">
							<p style="color:rgb(242,97,5);font-size: 15px;margin-bottom: 5px;">VARIETAS NC 471</p>												
							<div class="row">
								<div class="col-xs-5 col-sm-5 col-lg-5">
									<img src="item img/3b.jpg" alt="" style="width: 115px;">	
								</div>
								<div class="col-xs-7 col-sm-7 col-lg-7">
									<p style="margin-top: -5px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, nobis.</p>					
								</div>		
							</div>
						</a>
					</div>
					<hr style="margin-top: 10px;margin-bottom: 10px;">
					<div>
						<a href="" style="color:black;text-decoration-line: none;">
							<p style="color:rgb(242,97,5);font-size: 15px;margin-bottom: 5px;">VARIETAS NC 471</p>												
							<div class="row">
								<div class="col-xs-5 col-sm-5 col-lg-5">
									<img src="item img/3a.jpg" alt="" style="width: 115px;">	
								</div>
								<div class="col-xs-7 col-sm-7 col-lg-7">
									<p style="margin-top: -5px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, nobis.</p>					
								</div>		
							</div>
						</a>
					</div>
					<hr style="margin-top: 10px;margin-bottom: 10px;">
					<div>
						<a href="" style="color:black;text-decoration-line: none;">
							<p style="color:rgb(242,97,5);font-size: 15px;margin-bottom: 5px;">VARIETAS NC 471</p>												
							<div class="row">
								<div class="col-xs-5 col-sm-5 col-lg-5">
									<img src="item img/3b.jpg" alt="" style="width: 115px;">	
								</div>
								<div class="col-xs-7 col-sm-7 col-lg-7">
									<p style="margin-top: -5px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, nobis.</p>					
								</div>		
							</div>
						</a>
					</div>
					<hr style="margin-top: 10px;margin-bottom: 10px;">
					<div>
						<a href="" style="color:black;text-decoration-line: none;">
							<p style="color:rgb(242,97,5);font-size: 15px;margin-bottom: 5px;">VARIETAS NC 471</p>												
							<div class="row">
								<div class="col-xs-5 col-sm-5 col-lg-5">
									<img src="item img/3a.jpg" alt="" style="width: 115px;">	
								</div>
								<div class="col-xs-7 col-sm-7 col-lg-7">
									<p style="margin-top: -5px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, nobis.</p>					
								</div>		
							</div>
						</a>
					</div> -->
				</div>
			</div>
		</div>
		<!-- END OF CONTENT -->

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

	</body>
	<br><br><br><br>
	
</html>

