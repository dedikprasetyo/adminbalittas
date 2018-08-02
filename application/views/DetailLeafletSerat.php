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
		<header>						
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
							<!-- <div class="dropdownHeader">
							  	<div class="dropbtnHeader" style="font-family: Minion Pro">Budidaya Tanaman Serat <span class="caret"></div>
							  	<div class="dropdownHeader-content" style="margin: 0px 0px 0px -126px;">
								  	<div class="container-fluid">		
							          	<a href="#" style="margin-top: 10px; margin-bottom: 10px;">Masing - masing Komoditas</a>					    
								  	</div>
							  	</div>
							</div> -->
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
			<div class="containerImg" id="home">
				<img src="item img/tembakauHeader.jpg" alt="" style="width: 100%;">
			 	<div class="contentImg text-center">
				    <h1 class="hidden-xs hidden-sm" style="margin-top:12%;font-size:5vw;">Detail Leaflet</h1>
				    <h1 class="hidden-md hidden-lg" style="margin-top:6vw;font-size:5vw;">Detail Leaflet</h1>				    
			  	</div>
			</div>	
		</header>

		<!-- CONTENT -->
		<div class="container">
			<ul class="breadcrumb" style="margin-bottom: 0px;margin-top: 15px;">
				<li><a href="#">Home</a></li>
				<li><a href="#">Private</a></li>
				<li><a href="#">Pictures</a></li>
				<li class="active">Vacation</li>
			</ul>
			<div class="row">
				<div class="col-sm-9 col-lg-9">
					<hr style="border-color: grey;margin-top: 10px;">
					<div class="row" id="Tebu" style="background-color: #eee;  margin-top:20px;">
						<div class="col-sm-3 col-lg-12">
							<h4 style="color:rgb(242,97,5);font-size: 24px; margin-left: 35px;"><strong>Tebu</strong></h4>
						<hr style="border-color: rgb(242,97,5);margin-top: -10px;">
						</div>
						<?php

							$ganjil = true;
							foreach ($leaflettb as $value) {
								if ($ganjil) {
						 ?>
						<div class="col-xs-12 col-sm-4 col-lg-4"> 
							<div class="thumbnail text-center" style="box-shadow: 5px 5px 7px 0px rgba(0,0,0,0.2);">

										<img class="leafletImg img-responsive" src="<?php echo base_url() ?>item img/Leaflettebu/<?php echo $value->file; ?>" alt="" style="width:100%;border-radius: 3px;">
						<?php 	$ganjil = false; } else { ?>
										<img class="leafletImg img-responsive" src="<?php echo base_url() ?>item img/Leaflettebu/<?php echo $value->file; ?>" alt="" style="width: 100%;border-radius: 3px; margin-top: 5px;">
									<h4 style="color:rgb(242,97,5);"><?php echo $value->nama_leaflet; ?></h4>
							</div>						
						</div>
						<?php 	$ganjil = true; } } ?>
						<!-- <div class="col-xs-12 col-sm-4 col-lg-4"> 
							<div class="thumbnail text-center" style="box-shadow: 5px 5px 7px 0px rgba(0,0,0,0.2);">
										<img class="leafletImg" src="item img/Leaflettebu/poj28781.jpg" alt="" style="width:100%;border-radius: 3px;">
										<img class="leafletImg" src="item img/Leaflettebu/poj28782.jpg" alt="" style="width: 100%;border-radius: 3px; margin-top: 5px;">
								<h4 style="color:rgb(242,97,5);">VARIETAS UNGGUL BARU POJ 2878 AGRIBUN KERINCI</h4>
							</div>						
						</div>
						<div class="col-xs-12 col-sm-4 col-lg-4"> 
							<div class="thumbnail text-center" style="box-shadow: 5px 5px 7px 0px rgba(0,0,0,0.2);">
									<img class="leafletImg" src="item img/Leaflettebu/hamatebu1.jpg" alt="" style="width: 100%;border-radius: 3px;">
									<img class="leafletImg" src="item img/Leaflettebu/hamatebu2.jpg" alt="" style="width: 100%;border-radius: 3px; margin-top: 5px;">
								<h4 style="color:rgb(242,97,5);">PENGENDALIAN SERANGGA HAMA PADA TANAMAN TEBU</h4>
							</div>						
						</div>
						<div class="col-xs-12 col-sm-4 col-lg-4"> 
							<div class="thumbnail text-center" style="box-shadow: 5px 5px 7px 0px rgba(0,0,0,0.2);">
									<img class="leafletImg" src="item img/Leaflettebu/kebuthanairtanamantebu1.jpg" alt="" style="width: 100%;border-radius: 3px;">
									<img class="leafletImg" src="item img/Leaflettebu/kebuthanairtanamantebu2.jpg" alt="" style="width: 100%;border-radius: 3px; margin-top: 5px;">
								<h4 style="color:rgb(242,97,5);">KEBUTUHAN AIR TANAMAN TEBU</h4>
							</div>						
						</div>
						<div class="col-xs-12 col-sm-4 col-lg-4"> 
							<div class="thumbnail text-center" style="box-shadow: 5px 5px 7px 0px rgba(0,0,0,0.2);">
									<img class="leafletImg" src="item img/Leaflettebu/penataanvarietastebu1.jpg" alt="" style="width: 100%;border-radius: 3px;">
									<img class="leafletImg" src="item img/Leaflettebu/penataanvarietastebu2.jpg" alt="" style="width: 100%;border-radius: 3px; margin-top: 5px;">
								<h4 style="color:rgb(242,97,5);">PENATAAN VARIETAS TEBU</h4>
							</div>						
						</div>
						<div class="col-xs-12 col-sm-4 col-lg-4"> 
							<div class="thumbnail text-center" style="box-shadow: 5px 5px 7px 0px rgba(0,0,0,0.2);">
									<img class="leafletImg" src="item img/Leaflettebu/rawatratontebu1.jpg" alt="" style="width: 100%;border-radius: 3px;">
									<img class="leafletImg" src="item img/Leaflettebu/rawatratontebu2.jpg" alt="" style="width: 100%;border-radius: 3px; margin-top: 5px;">
								<h4 style="color:rgb(242,97,5);">RAWAT RATOON TEBU DI LAHAN KERING</h4>
							</div>						
						</div>
						<div class="col-xs-12 col-sm-4 col-lg-4"> 
							<div class="thumbnail text-center" style="box-shadow: 5px 5px 7px 0px rgba(0,0,0,0.2);">
									<img class="leafletImg" src="item img/Leaflettebu/teknologiproduksibenihtebu1.jpg" alt="" style="height: 179px;border-radius: 3px;">
									<img class="leafletImg" src="item img/Leaflettebu/teknologiproduksibenihtebu2.jpg" alt="" style="height: 179px;border-radius: 3px; margin-top: 5px; margin-bottom: 0px;">
								<h4 style="color:rgb(242,97,5);">TEKNOLOGI PRODUKSI BENIH TEBU</h4>
							</div>						
						</div>
						<div class="col-xs-12 col-sm-4 col-lg-4"> 
							<div class="thumbnail text-center" style="box-shadow: 5px 5px 7px 0px rgba(0,0,0,0.2);">
									<img class="leafletImg" src="item img/Leaflettebu/tebangmuatangkuttebu1.jpg" alt="" style="width: 100%;border-radius: 3px;">
									<img class="leafletImg" src="item img/Leaflettebu/tebangmuatangkuttebu2.jpg" alt="" style="width: 100%;border-radius: 3px; margin-top: 5px;">
								<h4 style="color:rgb(242,97,5);">TEBANG MUAT ANGKUT TEBU</h4>
							</div>						
						</div> -->
					</div>
					<ul class="pager" >
						<li><a href=""><</a></li>
						<li><a href="">1</a></li>
						<li><a href="">2</a></li>
						<li><a href="">3</a></li>
						<li><a href="">></a></li>
					</ul>

					<div class="row" id="Jarakpagar" style="background-color: #eee;  margin-top:20px;">
							<div class="col-sm-3 col-lg-12">
							<h4 style="color:rgb(242,97,5);font-size: 24px; margin-left: 35px;"><strong>Jarak Pagar</strong></h4>
						<hr style="border-color: rgb(242,97,5);margin-top: -10px;">
						</div>
						<?php

							$ganjil = true;
							foreach ($leafletjp as $value) :
								if ($ganjil) {
						 ?>
						<div class="col-xs-12 col-sm-4 col-lg-4"> 
							<div class="thumbnail text-center" style="box-shadow: 5px 5px 7px 0px rgba(0,0,0,0.2);">

										<img class="leafletImg img-responsive" src="<?php echo base_url() ?>item img/Leafletjarakpagar/<?php echo $value->file; ?>" alt="" style="width:100%;border-radius: 3px;">
						<?php 	$ganjil = false; } else { ?>
										<img class="leafletImg img-responsive" src="<?php echo base_url() ?>item img/Leafletjarakpagar/<?php echo $value->file; ?>" alt="" style="width: 100%;border-radius: 3px; margin-top: 5px;">
									<h4 style="color:rgb(242,97,5);"><?php echo $value->nama_leaflet; ?></h4>
							</div>						
						</div>
						<?php 	$ganjil = true; } ?>
					<?php endforeach; ?>
						<!-- <div class="col-xs-12 col-sm-4 col-lg-4"> 
							<div class="thumbnail text-center" style="box-shadow: 5px 5px 7px 0px rgba(0,0,0,0.2);">
									<img class="leafletImg img-responsive" src="item img/Leafletjarakpagar/jarak pagar.jpg" alt="" style="width: 100%;border-radius: 3px;">
									<img class="leafletImg img-responsive" src="item img/Leafletjarakpagar/jarak pagar2.jpeg" alt="" style="width: 100%;border-radius: 3px; margin-top: 5px;">
								<h4 style="color:rgb(242,97,5);">JARAK PAGAR (Jatropha curcas L.) POTENSI DAN PENGEMBANGAN</h4>
							</div>						
						</div>
						<div class="col-xs-12 col-sm-4 col-lg-4"> 
							<div class="thumbnail text-center" style="box-shadow: 5px 5px 7px 0px rgba(0,0,0,0.2);">
									<img class="leafletImg" src="item img/Leafletjarakpagar/populasi komposit.jpg" alt="" style="width: 100%;border-radius: 3px;">
									<img class="leafletImg " src="item img/Leafletjarakpagar/populasi komposit2.jpeg" alt="" style="width: 100%;border-radius: 3px; margin-top: 5px;">
									<h4 style="color:rgb(242,97,5);">POPULASI KOMPOSIT JARAK PAGAR (Jatropha curcas L.) IP-2P, IP-2M, IP-2</h4>
							</div>						
						</div> -->
					</div>
					<ul class="pager" >
						<li><a href=""><</a></li>
						<li><a href="">1</a></li>
						<li><a href="">2</a></li>
						<li><a href="">3</a></li>
						<li><a href="">></a></li>
					</ul>

					<div class="row" id="Jarakkepyar"  style="background-color: #eee;  margin-top:20px;">
						<div class="col-sm-3 col-lg-12">
							<h4 style="color:rgb(242,97,5);font-size: 24px; margin-left: 35px;"><strong>Jarak Kepyar</strong></h4>
						<hr style="border-color: rgb(242,97,5);margin-top: -10px;">
						</div>
						<?php $ganjil = true; foreach($leafletjk as $value){
							 if ($ganjil){
						?>
						<div class="col-xs-12 col-sm-4 col-lg-4"> 
							<div class="thumbnail text-center" style="box-shadow: 5px 5px 7px 0px rgba(0,0,0,0.2);">
									<img class="leafletImg" src="<?php echo base_url() ?>item img/Leafletjarakkepyar/<?php echo $value->file; ?>" alt="" style="width: 100%;border-radius: 3px;">
						<?php $ganjil = false; } else{ ?>
							<img class="leafletImg" src="<?php echo base_url() ?>item img/Leafletjarakkepyar/<?php echo $value->file; ?>" alt="" style="width: 100%;border-radius: 3px; margin-top: 33px;">
								<h4 style="color:rgb(242,97,5);"><?php echo $value->nama_leaflet; ?></h4>
							</div>						
						</div>
						<?php $ganjil = true;} }?>
					
						<!-- <div class="col-xs-12 col-sm-4 col-lg-4"> 
							<div class="thumbnail text-center" style="box-shadow: 5px 5px 7px 0px rgba(0,0,0,0.2);">
									<img class="leafletImg" src="item img/Leafletjarakkepyar/teknikbudidayajarkep1.jpg" alt="" style="width: 100%;border-radius: 3px;">
									<img class="leafletImg" src="item img/Leafletjarakkepyar/teknikbudidayajarkep2.jpg" alt="" style="width: 100%;border-radius: 3px; margin-top: 33px;">
								<h4 style="color:rgb(242,97,5);">TEKNIK BUDIDAYA JARAK KEPYAR</h4>
							</div>						
						</div>
						<div class="col-xs-12 col-sm-4 col-lg-4"> 
							<div class="thumbnail text-center" style="box-shadow: 5px 5px 7px 0px rgba(0,0,0,0.2);">
									<img class="leafletImg" src="item img/Leafletjarakkepyar/jarak dan kegunaanya.jpg" alt="" style="width: 100%;border-radius: 3px;">
									<img class="leafletImg" src="item img/Leafletjarakkepyar/jarak dan kegunaanya2.jpg" alt="" style="width: 100%;border-radius: 3px; margin-top: 5px;">
								<h4 style="color:rgb(242,97,5);">JARAK DAN KEGUNAANNYA</h4>
							</div>						
						</div>
						<div class="col-xs-12 col-sm-4 col-lg-4">
							<div class="thumbnail text-center" style="box-shadow: 5px 5px 7px 0px rgba(0,0,0,0.2);">
									<img class="leafletImg" src="item img/Leafletjarakkepyar/var unggl jarak wijen.jpg" alt="" style="width: 100%;border-radius: 3px;">
									<img class="leafletImg" src="item img/Leafletjarakkepyar/var unggl jarak wijen2.jpg" alt="" style="width: 100%;border-radius: 3px; margin-top: 5px;">
								<h4 style="color:rgb(242,97,5);">VARIETAS UNGGUL JARAK DAN WIJEN</h4>
							</div>						
						</div> -->
						</div>
						<ul class="pager" >
						<li><a href=""><</a></li>
						<li><a href="">1</a></li>
						<li><a href="">2</a></li>
						<li><a href="">3</a></li>
						<li><a href="">></a></li>
						</ul>

						<div class="row" id="wijen"  style="background-color: #eee;  margin-top:20px;">
						<div class="col-sm-3 col-lg-12">
							<h4 style="color:rgb(242,97,5);font-size: 24px; margin-left: 35px;"><strong>Wijen</strong></h4>
						<hr style="border-color: rgb(242,97,5);margin-top: -10px;">
						</div>

						<?php

							$ganjil = true;
							foreach ($leafletwj as $value) {
								if ($ganjil) {
						 ?>
						<div class="col-xs-12 col-sm-4 col-lg-4"> 
							<div class="thumbnail text-center" style="box-shadow: 5px 5px 7px 0px rgba(0,0,0,0.2);">

										<img class="leafletImg img-responsive" src="<?php echo base_url() ?>item img/Leafletwijen/<?php echo $value->file; ?>" alt="" style="width:100%;border-radius: 3px;">
						<?php 	$ganjil = false; } else { ?>
										<img class="leafletImg img-responsive" src="<?php echo base_url() ?>item img/Leafletwijen/<?php echo $value->file; ?>" alt="" style="width: 100%;border-radius: 3px; margin-top: 5px;">
									<h4 style="color:rgb(242,97,5);"><?php echo $value->nama_leaflet; ?></h4>
							</div>						
						</div>
						<?php 	$ganjil = true; } } ?>

						<!-- <div class="col-xs-12 col-sm-4 col-lg-4"> 
							<div class="thumbnail text-center" style="box-shadow: 5px 5px 7px 0px rgba(0,0,0,0.2);">
									<img class="leafletImg" src="item img/Leafletwijen/winas1.jpg" alt="" style="width: 100%;border-radius: 3px;">
									<img class="leafletImg" src="item img/Leafletwijen/winas2.jpg" alt="" style="width: 100%;border-radius: 3px; margin-top: 5px;">
								<h4 style="color:rgb(242,97,5);">VARIETAS WIJEN UNGGUL BARU WINAS 1 DAN WINAS 2</h4>
							</div>						
						</div>
						<div class="col-xs-12 col-sm-4 col-lg-4"> 
							<div class="thumbnail text-center" style="box-shadow: 5px 5px 7px 0px rgba(0,0,0,0.2);">
									<img class="leafletImg" src="item img/Leafletwijen/budidaya wijen.jpg" alt="" style="width: 100%;border-radius: 3px;">
									<img class="leafletImg" src="item img/Leafletwijen/budidaya wijen2.jpg" alt="" style="width: 100%;border-radius: 3px; margin-top: 5px;">
								<h4 style="color:rgb(242,97,5);">BUDI DAYA WIJEN DI LAHAN KERING DAN SAWAH</h4>
							</div>						
						</div>
						<div class="col-xs-12 col-sm-4 col-lg-4"> 
							<div class="thumbnail text-center" style="box-shadow: 5px 5px 7px 0px rgba(0,0,0,0.2);">
									<img class="leafletImg" src="item img/Leafletwijen/varietas unggul wijen.jpg" alt="" style="width: 100%;border-radius: 3px;">
									<img class="leafletImg" src="item img/Leafletwijen/varietas unggul wijen2.jpg" alt="" style="width: 100%;border-radius: 3px; margin-top: 5px;">
								<h4 style="color:rgb(242,97,5);">VARIETAS UNGGUL BARU UNTUK PENGEMBANGAN WIJEN DI INDONESIA</h4>
							</div>				
						</div>
						<div class="col-xs-12 col-sm-4 col-lg-4"> 
							<div class="thumbnail text-center" style="box-shadow: 5px 5px 7px 0px rgba(0,0,0,0.2);">
									<img class="leafletImg" src="item img/Leafletwijen/penyakit wijen.jpg" alt="" style="width: 100%;border-radius: 3px;">
									<img class="leafletImg" src="item img/Leafletwijen/penyakit wijen2.jpg" alt="" style="width: 100%;border-radius: 3px; margin-top: 5px;">
								<h4 style="color:rgb(242,97,5);">MENGENAL PENYAKIT WIJEN DAN PENGENDALIANNYA</h4>
							</div>				
						</div>
						<div class="col-xs-12 col-sm-4 col-lg-4"> 
							<div class="thumbnail text-center" style="box-shadow: 5px 5px 7px 0px rgba(0,0,0,0.2);">
									<img class="leafletImg" src="item img/Leafletwijen/hama penting wijen.jpg" alt="" style="width: 100%;border-radius: 3px;">
									<img class="leafletImg" src="item img/Leafletwijen/hama penting wijen2.jpg" alt="" style="width: 100%;border-radius: 3px; margin-top: 5px;">
								<h4 style="color:rgb(242,97,5);">HAMA PENTING TANAMAN WIJEN DAN PENGENDALIANNYA</h4>
							</div>				
						</div> -->
						</div>
						<ul class="pager" >
						<li><a href=""><</a></li>
						<li><a href="">1</a></li>
						<li><a href="">2</a></li>
						<li><a href="">3</a></li>
						<li><a href="">></a></li>
						</ul>

						<div class="row" id="alsin"  style="background-color: #eee; margin-top:20px;">
						<div class="col-sm-3 col-lg-12">
							<h4 style="color:rgb(242,97,5);font-size: 24px; margin-left: 35px;"><strong>Alat dan Mesin</strong></h4>
						<hr style="border-color: rgb(242,97,5);margin-top: -10px;">
						</div>

						<?php 
						 $ganjil=true;
						 foreach($leafletalsin as $value) :
						 if($ganjil){
						 ?>
						<div class="col-xs-12 col-sm-4 col-lg-4"> 
							<div class="thumbnail text-center" style="box-shadow: 5px 5px 7px 0px rgba(0,0,0,0.2);">
									<img class="leafletImg" src="<?php echo base_url() ?>item img/Leafletalsin/<?= $value->file; ?>" alt="" style="width: 100%;border-radius: 3px;">
						<?php $ganjil=false;} else{?>
									<img class="leafletImg" src="<?php echo base_url() ?>item img/Leafletalsin/<?= $value->file; ?>" alt="" style="width: 100%;border-radius: 3px; margin-top: 5px;">
								<h4 style="color:rgb(242,97,5);"><?= $value->nama_leaflet; ?></h4>
							</div>						
						</div>
						<?php $ganjil=true;} ?>
						<?php endforeach; ?>


						<!-- <div class="col-xs-12 col-sm-4 col-lg-4"> 
							<div class="thumbnail text-center" style="box-shadow: 5px 5px 7px 0px rgba(0,0,0,0.2);">
									<img class="leafletImg" src="item img/Leafletalsin/budchips1 (1).jpg" alt="" style="width: 100%;border-radius: 3px;">
									<img class="leafletImg" src="item img/Leafletalsin/budchips1.jpg" alt="" style="width: 100%;border-radius: 3px; margin-top: 5px;">
								<h4 style="color:rgb(242,97,5);">TEKNIK PEMBIBITAN TEBU BUD CHIPS</h4>
							</div>						
						</div>
						<div class="col-xs-12 col-sm-4 col-lg-4"> 
							<div class="thumbnail text-center" style="box-shadow: 5px 5px 7px 0px rgba(0,0,0,0.2);">
									<img class="leafletImg" src="item img/Leafletalsin/mesinrajangtembakau1.jpg" alt="" style="width: 100%;border-radius: 3px;">
									<img class="leafletImg" src="item img/Leafletalsin/mesinrajangtembakau2.jpg" alt="" style="width: 100%;border-radius: 3px; margin-top: 5px;">
								<h4 style="color:rgb(242,97,5);">ALAT DAN MESIN PERAJANG DAUN TEMBAKAU</h4>
							</div>						
						</div>
						<div class="col-xs-12 col-sm-4 col-lg-4"> 
							<div class="thumbnail text-center" style="box-shadow: 5px 5px 7px 0px rgba(0,0,0,0.2);">
									<img class="leafletImg" src="item img/Leafletalsin/mesin pemecah.jpg" alt="" style="width: 100%;border-radius: 3px;">
									<img class="leafletImg" src="item img/Leafletalsin/mesin pemecah2.jpg" alt="" style="width: 100%;border-radius: 3px; margin-top: 5px;">
								<h4 style="color:rgb(242,97,5);">MESIN PEMECAH BUAH JARAK PAGAR</h4>
							</div>				
						</div>
						<div class="col-xs-12 col-sm-4 col-lg-4"> 
						<div class="thumbnail text-center" style="box-shadow: 5px 5px 7px 0px rgba(0,0,0,0.2);">
									<img class="leafletImg" src="item img/Leafletalsin/alat pengupas.jpg" alt="" style="width: 100%;border-radius: 3px;">
									<img class="leafletImg" src="item img/Leafletalsin/alat pengupas2.jpg" alt="" style="width: 100%;border-radius: 3px; margin-top: 5px;">
								<h4 style="color:rgb(242,97,5);">ALAT PENGUPAS BUAH JARAK</h4>
							</div>				
						</div> -->
					</div>
						<ul class="pager" >
						<li><a href=""><</a></li>
						<li><a href="">1</a></li>
						<li><a href="">2</a></li>
						<li><a href="">3</a></li>
						<li><a href="">></a></li>
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
					<div style="margin-top: -5px;">
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
					</div>
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
	<footer>
		<div class="container-fluid" style="background-color: rgba(28,69,26,1);">
				<div class="container" style="margin-top: 20px; color:white;">
					<div class="col-sm-3 col-lg-3">
						<!-- <div class="row">
							<div class="col-xs-2 col-sm-2 col-lg-2">
								<img src="item img/Logo-Kementerian-Pertanian.png" style="width: 270%;">
							</div>
							<div class="col-xs-10 col-sm-10 col-lg-10">
								<p style="margin-left: 7px;margin-top: 5px;">Balai Penelitian Tanaman Pemanis dan Serat</p>
							</div>
						</div>-->
						<img src="item img/logoBalittas2.png" style="width: 110%;margin:-27px 0px -8px -32px;">				
						<table style="color:white;"">
							<tbody>
								<tr>
									<td class="glyphicon glyphicon-map-marker">&nbsp</td>
									<td>Jalan. Raya Karangploso, Kotak Pos 199, Malang, Jawa timur, Indonesia</td>
								</tr>
								<tr>
									<td class="glyphicon glyphicon-envelope">&nbsp</td>
									<td>balittas@litbang.pertanian.go.id</td>
								</tr>
								<tr>
									<td class="glyphicon glyphicon-envelope">&nbsp</td>
									<td>balittas.malang@gmail.com</td>
								</tr>
								<tr>
									<td class="glyphicon glyphicon-earphone">&nbsp</td>
									<td>Telepon : (0341) 491447</td>
								</tr>
								<tr>
									<td class="glyphicon glyphicon-print">&nbsp</td>
									<td>Fax : (0341) 485 121</td>
								</tr>
							</tbody>
						</table>
						<br>
					</div>
					<div class="col-sm-9 col-lg-9">
						<div class="col-sm-4 col-lg-4 batasfooter">
							<h3 style="margin-top: 0px; font-family: Minion Pro;">Link Terkait</h3>
							<hr style="margin-top: 0px; margin-bottom: 10px; border-color: #fece00;">							
							<table>
								<tbody>
									<a href="">
										<tr class="headerHover">
											<td class="glyphicon glyphicon-ok">&nbsp</td>
											<td style="padding-top: 3px;">Kementrian Pertanian</td>
										</tr>
									</a>	
									<a href="">
										<tr class="headerHover">
											<td class="glyphicon glyphicon-ok">&nbsp</td>
											<td style="padding-top: 3px;">Badan Litbang Pertanian</td>
										</tr>
									</a>
									<a href="">
										<tr class="headerHover">
											<td class="glyphicon glyphicon-ok">&nbsp</td>
											<td style="padding-top: 3px;">UPT Badan Litbang Pertanian</td>
										</tr>
									</a>
									<a href="">
										<tr class="headerHover">
											<td class="glyphicon glyphicon-ok">&nbsp</td>
											<td style="padding-top: 3px;">Pustaka Balitbangtan</td>
										</tr>
									</a>
									<a href="">
										<tr class="headerHover">
											<td class="glyphicon glyphicon-ok">&nbsp</td>
											<td style="padding-top: 3px;">Pusat Unggulan Iptek Tanaman Serat</td>
										</tr>
									</a>								
								</tbody>
							</table>
							<br>														
						</div>
						<div class="col-sm-4 col-lg-4 batasfooter">
							<h3 style="margin-top: 0px; font-family: Minion Pro;">Sosial Media</h3>
							<hr style="margin-top: 0px; margin-bottom: 13px; border-color: #fece00;">
							<div class="row" style="margin: 2px; margin-left: -3px;" >
								<div class="col-xs-3 col-sm-3 col-lg-3 sosmed no-touch" ">
									<a href="" ><i class="fa fa-facebook-square" aria-hidden="true" style="font-size:45px;"></i>
										<!-- <img src="item img/fbb.png" class="icon-sosmed img-rounded" alt="Cinque Terre" width="50" height="50"> -->
									</a>
								</div>
								<div class="col-xs-3 col-sm-3 col-lg-3 sosmed no-touch" >
									<a href="">
										<i class="fa fa-twitter-square" aria-hidden="true" style="font-size:45px;"></i>
									</a>
								</div>
								<div class="col-xs-3 col-sm-3 col-lg-3 sosmed no-touch" >
									<a href=""  >
										<i class="fa fa-youtube-square" aria-hidden="true" style="font-size:45px;"></i>
									</a>
								</div>
								<div class="col-xs-3 col-sm-3 col-lg-3 sosmed no-touch" style="margin-top: -3px;">
									<a href=""  >
										<i class="fa fa-instagram" aria-hidden="true" style="font-size:45px;"></i>
									</a>
								</div>
							</div>
							<br>
						</div>						
						<div class="col-sm-4 col-lg-4 batasfooter">
							<div class="row">
								<div class="col-xs-9 col-sm-9 col-lg-9">
									<p style="margin-top: 5px;">Pengunjung Hari Ini</p>
								</div>
								<div class="col-xs-3 col-sm-3 col-lg-3">
									<p style="margin-top: 5px;">10</p>
								</div>								
							</div>
							<hr style="border-style: dashed; margin-top: 1px;margin-bottom: 10px; border-color: #fece00;">
							<div class="row">
								<div class="col-xs-9 col-sm-9 col-lg-9">
									<p style="margin-top: 2px;">Pengunjung Bulan Ini</p>
								</div>
								<div class="col-xs-3 col-sm-3 col-lg-3">
									<p style="margin-top: 2px;">10</p>
								</div>								
							</div>															
							<hr style="border-style: dashed; margin-top: 0px;margin-bottom: 10px; border-color: #fece00;">
							<div class="row">
								<div class="col-xs-9 col-sm-9 col-lg-9">
									<p style="margin-top: 2px;">Total Pengunjung</p>
								</div>
								<div class="col-xs-3 col-sm-3 col-lg-3">
									<p style="margin-top: 2px;">10</p>
								</div>								
							</div>		
						</div>
					</div>
				</div>
				<br><br><br>				
			</div>
			<div class="container-fluid text-center" style="color:white;background-color: black;">
				<div style=" margin-top: 10px;">
					<p style="font-family: calibri"><span class="glyphicon glyphicon-copyright-mark"></span> 2018 All Reserved Design By BALITTAS</p>
				</div>
			</div>
	</footer>
	<script src="<?php echo base_url() ?>bootstrap/js/bootstrap.min.js"></script>
	 <script src="<?php echo base_url() ?>bootstrap/js/jquery-3.3.1.min.js"></script> 
    <script src="<?php echo base_url() ?>bootstrap/js/jquery.easing.1.3.js"></script> 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   

    <script src="<?php echo base_url() ?>bootstrap/js/script.js"></script>
	
</html>

