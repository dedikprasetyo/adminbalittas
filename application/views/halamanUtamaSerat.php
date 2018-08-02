<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Balittas</title>
		<meta charset="utf-8">
		<meta name="description" content="A Tuts+ course">
		<meta name="author" content="Gusna Ikhsan">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/balittas.css">
		<link rel="stylesheet" href="bootstrap/font-awesome-4.7.0/css/font-awesome.min.css">
		<link href="<?php echo base_url() ?>item img/Logo-Kementerian-Pertanian.png" rel="shortcut icon">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="thetop"></div>
		<header>			
			<nav class="navbar navbar-inverse navbar-fixed-top navbarHover">
				<div class="container-fluid">
				<div class="navbar-header" style="margin-top: 5px; margin-bottom: 3px;">		
				    <a href="#home" class="halaman"><img src="item img/logoBalittas2.png" style="width:280px;margin-top: -18px;margin-bottom: -6px;margin-left: 5px;"></a>
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
					  	<div class="dropbtnHeader" style="font-family: Minion Pro">Tanaman Serat <span class="caret"></div>
						<div class="dropdownHeader-content" style="margin: 0px 0px 0px 9px;">
						  	<div class="container-fluid">
						  		<div class="row">
						  			<div class="col-sm-6 col-lg-6">
						       			<a href="#1" class="halaman" style="margin-top: 10px;">Kapas</a>
						       			<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
						       			<a href="#2" class="halaman">Kapuk</a>
						       			<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
						       			<a href="#3" class="halaman" style="margin-bottom: 10px;">Kenaf</a>
						  			</div>
									<div class="col-sm-6 col-lg-6">
									    <a href="#4" class="halaman" style="margin-top:10px;">Rami</a>	
										<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
										<a href="#5" class="halaman">Rosela</a>	
								  		<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
								  		<a href="#6" class="halaman">Sisal</a>	
								  	</div>
								</div>
							</div>							  	
						</div>
					</div>
					<div class="dropdownHeader">
					  	<div class="dropbtnHeader" style="font-family: Minion Pro">Budidaya Tanaman Serat <span class="caret"></div>
						<div class="dropdownHeader-content" style="margin: 0px 0px 0px -133px;">
						  	<div class="container-fluid">		
						       	<a href="#" style="margin-top: 10px; margin-bottom: 10px;">Masing - masing Komoditas</a>					    
						  	</div>
						</div>
					</div>
					<div class="dropdownHeader">
					  	<div class="dropbtnHeader" style="font-family: Minion Pro">Produk <span class="caret"></div>
					 	<div class="dropdownHeader-content" style="margin: 0px 0px 0px -348px;">
						  	<div class="container-fluid">
						  		<div class="row">
						  			<div class="col-sm-12 col-lg-12">
						  				<a href="<?php echo base_url('produk/produk1')?>" style="margin-top: 10px;">Benih</a>	
						  				<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
						  				<a href="<?php echo base_url('produk/produk2') ?>" class="halaman">Alat dan Mesin</a>
						       			<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
						       			<a href="<?php echo base_url('produk/produk3') ?>">Formula</a>
						       			<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
						       			<a href="<?php echo base_url('produk/produk4') ?>" style="margin-bottom: 10px;">Produk Hilir</a>
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
			<!-- gambar tengah -->			
			<div class="containerImg text-center" id="home">
				<video autoplay muted loop style="width: 100%">
					<source src="item img/SeratRoselaFixNew.mp4" type="video/mp4">
				</video>	
			</div>					
		</header>
		<br>
		<!-- content -->
		<section class="varietas" id="varietas">
			<div class="container">
				<div class="row">		
					<div class="col-sm-9 col-lg-9">
					    <ul class="breadcrumb" style="margin: -6px 0px -10px -15px;">
						  	<li><a href="#">Home</a></li>
						  	<li><a href="#">Private</a></li>
						  	<li><a href="#">Pictures</a></li>
						  	<li class="active">Vacation</li> 
						</ul>
					<h3 class="text-left" style="color:black; font-family: Minion Pro">Tanaman Serat</h3>
					<hr style="border-color: grey; margin-top: -8px;">
					<div class="row">
						<?php 
							$no = 1;
							foreach ($serat as $row) {
								$deskripsi = "";
						 ?>

						<div class="col-xs-12 col-sm-4 col-lg-4" > 
							<div class="thumbnail thumbku" style="box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.2);" id="<?php echo $no++ ?>">
								<a href="" style="text-decoration-line: none;">
									<img src="<?php echo base_url() ?>item img/serat/<?php echo $row->gambar; ?>" alt="" style="width: 100%;">
									<h4 style="color:#fece00;"><?php echo $row->nama_serat; ?></h4>
								</a>
								<?php 
									if (!empty($row->deskripsi_serat)) {
										$deskripsi = substr($row->deskripsi_serat, 0, 50)." [..]";
										echo "<p>$deskripsi</p>";
									} else {
										$deskripsi = "(Belum ada deskripsi)";
										echo "<p style=\"font-style: italic;\">$deskripsi</p><br>";
									}
								 ?>
								<br>							
								<div style="text-align: right; margin-bottom: 10px;margin-right: 10px;">
									<a href="<?php echo base_url('varietas/detailKapas')?>" style="text-decoration-line: none;" class="hoverThumbnail"><i>Selengkapnya</i></a>
								</div>
							</div>						
						</div>
						<?php
							}
						?>
					</div>
						
						<br>
					</div>				
					<div class="col-sm-3 col-lg-3">
						<br>
						<h3 class="text-left" style="color:black;font-family: Minion Pro">Pencarian</h3>
						<hr style="border-color: grey;margin-top: -8px;">
						<div class="container-fluid" style="background-color:rgba(28,69,26,0.9);border-radius: 5px;">
							<form method="get" action="<?php echo base_url('pencarian')?>" style="margin-top: 15px; margin-bottom: 15px;">
								<div class="input-group" style="z-index: 0;">
								    <input type="text" class="form-control" placeholder="Cari" required>
								    <div class="input-group-btn">
								      <button class="btn btn-success" type="submit">
								        <i class="glyphicon glyphicon-search"></i>
								      </button>
								    </div>
								 </div>
							</form>						
						</div>
						<a href="<?php echo base_url('leaflet') ?>" style="text-decoration-line:none;"><h3 class="text-left" style="color:black;font-family: Minion Pro">Leaflet</h3></a>
						<hr style="border-color: grey;margin-top: -8px;">
						<?php 
							$ganjil = true;
							foreach ($subLeaflet as $leafletSide) {
								if ($ganjil) {
						?>		
						<h5 style="color:black;"><?php echo $leafletSide->nama_leaflet; ?></h5>
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-lg-6">												
								<img class="leafletImg" src="<?php echo base_url() ?>item img/leafletgabungan/<?php echo $leafletSide->file; ?>" class="image" style="width: 110%;border-radius: 3px;">		
							</div> 
						<?php $ganjil = false; } else { ?> 
							<div class="col-xs-6 col-sm-6 col-lg-6">
								<img class="leafletImg" src="<?php echo base_url() ?>item img/leafletgabungan/<?php echo $leafletSide->file; ?>" class="image" style="width: 110%;border-radius: 3px; margin-left: -10px;">
							</div>	
						</div>	
						<?php $ganjil = true; } } ?>						
					</div>
				</div>
			</div>
		</section>
		<!-- akhir div container atas -->

		<!-- Budidaya Tanaman Serat -->
		<section class="budidaya" id="budidaya">
			<div class="container">
				<div class="row">
					<div class="col-sm-3 col-lg-3">
						<h3 class="text-center" style="color:black;margin-top: 0px;font-family: Minion Pro;">Budidaya Tanaman Serat</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, quae iure blanditiis veniam adipisci, facilis ab necessitatibus! Reiciendis, praesentium, accusamus.</p>
					</div>
					<div class="col-sm-9 col-lg-9">
						<div class="row">
							<div class="col-sm-4 col-lg-4">
							 	<a href="<?php echo base_url('teknologibudidaya/penangkaranBenih'); ?>" style="text-decoration-line: none;" class="teknologiBudidaya">
							 		<div class="thumbnail" style="background-color: white; border-style: none">
								 		<div class="itemZoom" style="box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.2);">
											<img src="item img/tembakau.jpg" class="imageZoom" >
											<div class="itemZoom-overlay top"></div>
										</div>
										<h4 style="font-family: Minion Pro;">Penangkaran Benih </h4>
										<hr style="margin:-6px 0px 5px 0px; border-color: orange;">
										<div class="overlayhr"></div>
										<p style="color:black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure inventore nisi quo, praesentium aspernatur deleniti.</p>
							 		</div>
							 	</a>
							</div>
							<div class="col-sm-4 col-lg-4">
							 	<a href="" style="text-decoration-line: none;" class="teknologiBudidaya">
							 		<div class="thumbnail" style="background-color: white; border-style: none">
							 			<div class="itemZoom" style="box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.2);">
											<img src="item img/tembakau.jpg" class="imageZoom" >
											<div class="itemZoom-overlay top"></div>
										</div>
										<h4 style="font-family: Minion Pro;">Pesemaian</h4>
										<hr style="margin:-6px 0px 5px 0px; border-color: orange;">
										<div class="overlayhr"></div>
										<p style="color:black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure inventore nisi quo, praesentium aspernatur deleniti.</p>
							 		</div>
							 	</a>
							</div>
							<div class="col-sm-4 col-lg-4">
							 	<a href="" style="text-decoration-line: none;" class="teknologiBudidaya">
							 		<div class="thumbnail" style="background-color: white; border-style: none">
							 			<div class="itemZoom" style="box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.2);">
											<img src="item img/tembakau.jpg" class="imageZoom" >
											<div class="itemZoom-overlay top"></div>
										</div>
										<h4 style="font-family: Minion Pro;">Pemupukan</h4>
										<hr style="margin:-6px 0px 5px 0px; border-color: orange;">
										<div class="overlayhr"></div>
										<p style="color:black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure inventore nisi quo, praesentium aspernatur deleniti.</p>
							 		</div>
							 	</a>
							</div>
							<div class="col-sm-4 col-lg-4">
							 	<a href="" style="text-decoration-line: none;" class="teknologiBudidaya">
							 		<div class="thumbnail" style="background-color: white; border-style: none">
							 			<div class="itemZoom" style="box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.2);">
											<img src="item img/tembakau.jpg" class="imageZoom" >
											<div class="itemZoom-overlay top"></div>
										</div>
										<h4 style="font-family: Minion Pro;">Pemupukan Bebas Chlor</h4>
										<hr style="margin:-6px 0px 5px 0px; border-color: orange;">
										<div class="overlayhr"></div>
										<p style="color:black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure inventore nisi quo, praesentium aspernatur deleniti.</p>
							 		</div>
							 	</a>
							</div>
							<div class="col-sm-4 col-lg-4">
							 	<a href="" style="text-decoration-line: none;" class="teknologiBudidaya">
							 		<div class="thumbnail" style="background-color: white; border-style: none">
							 			<div class="itemZoom" style="box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.2);">
											<img src="item img/tembakau.jpg" class="imageZoom" >
											<div class="itemZoom-overlay top"></div>
										</div>
										<h4 style="font-family: Minion Pro;">Pengendalian Penyakit </h4>
										<hr style="margin:-6px 0px 5px 0px; border-color: orange;">
										<div class="overlayhr"></div>
										<p style="color:black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure inventore nisi quo, praesentium aspernatur deleniti.</p>
							 		</div>
							 	</a>
							</div>
							<div class="col-sm-4 col-lg-4">
							 	<a href="" style="text-decoration-line: none;" class="teknologiBudidaya">
							 		<div class="thumbnail" style="background-color: white; border-style: none">
							 			<div class="itemZoom" style="box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.2);">
											<img src="item img/tembakau.jpg" class="imageZoom" >
											<div class="itemZoom-overlay top"></div>
										</div>
										<h4 style="font-family: Minion Pro;">Pengendalian Hama </h4>
										<hr style="margin:-6px 0px 5px 0px; border-color: orange;">
										<div class="overlayhr"></div>
										<p style="color:black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure inventore nisi quo, praesentium aspernatur deleniti.</p>
							 		</div>
							 	</a>
							</div>
							<div class="col-sm-4 col-lg-4">
							 	<a href="" style="text-decoration-line: none;" class="teknologiBudidaya">
							 		<div class="thumbnail" style="background-color: white; border-style: none">
							 			<div class="itemZoom" style="box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.2);">
											<img src="item img/tembakau.jpg" class="imageZoom" >
											<div class="itemZoom-overlay top"></div>
										</div>
										<h4 style="font-family: Minion Pro;">Panen dan Pasca Panen </h4>
										<hr style="margin:-6px 0px 5px 0px; border-color: orange;">
										<div class="overlayhr"></div>
										<p style="color:black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure inventore nisi quo, praesentium aspernatur deleniti.</p>
							 		</div>
							 	</a>
							</div>
							<div class="col-sm-4 col-lg-4">
							 	<a href="" style="text-decoration-line: none;" class="teknologiBudidaya">
							 		<div class="thumbnail" style="background-color: white; border-style: none">
							 			<div class="itemZoom" style="box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.2);">
											<img src="item img/tembakau.jpg" class="imageZoom" >
											<div class="itemZoom-overlay top"></div>
										</div>
										<h4 style="font-family: Minion Pro;">Kesesuaian Lahan </h4>
										<hr style="margin:-6px 0px 5px 0px; border-color: orange;">
										<div class="overlayhr"></div>
										<p style="color:black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure inventore nisi quo, praesentium aspernatur deleniti.</p>
							 		</div>
							 	</a>
							</div>
							<div class="col-sm-4 col-lg-4">
							 	<a href="" style="text-decoration-line: none;" class="teknologiBudidaya">
							 		<div class="thumbnail" style="background-color: white; border-style: none">
							 			<div class="itemZoom" style="box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.2);">
											<img src="item img/tembakau.jpg" class="imageZoom" >
											<div class="itemZoom-overlay top"></div>
										</div>
										<h4 style="font-family: Minion Pro;">Budidaya Tembakau Cerutu</h4>
										<hr style="margin:-6px 0px 5px 0px; border-color: orange;">
										<div class="overlayhr"></div>
										<p style="color:black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure inventore nisi quo, praesentium aspernatur deleniti.</p>
							 		</div>
							 	</a>
							</div>
						</div>
					</div>				
				</div>
			</div>
		</section> 
		
		<!-- Produk -->
		<section class="produk" id="produk">
			<div class="container-fluid" style="background-color: rgba(28,69,26,0.8);">
				<div class="container">
				<!-- Produk -->
					<h3 class="text-center" style="color:white;font-family: Minion Pro;">Produk</h3>
					<p class="text-center" style="color: white;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda, facere. Alias deserunt pariatur magnam rerum quod voluptates, quidem id labore quam. Illum nemo minus repellat veritatis aliquid, consequatur, dolorem, laborum magnam voluptatibus consequuntur voluptate tempora! Vel, odio. Corporis nam maiores nemo, dicta temporibus et.</p>
					<br><br>
					<div class="row">
					    <div class="col-sm-3 col-lg-3">
						    <a href="<?php echo base_url() ?>produk/produk1" style="text-decoration-line: none;" onmouseover="hvr(this, 'in')" onmouseleave="hvr(this, 'out')">
						    	<div class="thumbnail text-center produk" style="background-color: rgba(28,69,26,0); border-style: none;" >
						    		<img src="item img/hazelnutWh.png" style="width: 40%" col="g">
						    		<img src="item img/hazelnutY.png" style="width: 40%; display:none;" col="b">
						    		<br>
									<h4>Benih</h4><br><br>
						    	</div>
						    </a>
					    </div>
					    <div class="col-sm-3 col-lg-3">
						    <a href="<?php echo base_url() ?>produk/produk2" style="text-decoration-line: none;" onmouseover="hvr(this, 'in')" onmouseleave="hvr(this, 'out')">
						    	<div class="thumbnail text-center produk" style="background-color: rgba(28,69,26,0); border-style: none">
						    		<img src="item img/toolsWh.png" style="width: 40%" col="g">
						    		<img src="item img/toolsY.png" style="width: 40%; display:none;" col="b">
						    		<br>
									<h4>Alat & Mesin</h4><br><br>
						    	</div>
						    </a>
					    </div>
					    <div class="col-sm-3 col-lg-3">
						    <a href="<?php echo base_url() ?>produk/produk1" style="text-decoration-line: none;" onmouseover="hvr(this, 'in')" onmouseleave="hvr(this, 'out')">
						    	<div class="thumbnail text-center produk" style="background-color: rgba(28,69,26,0); border-style: none">
						    		<img src="item img/flaskWh.png" style="width: 40%" col="g">
						    		<img src="item img/flaskY.png" style="width: 40%; display:none;" col="b">
						    		<br>
									<h4>Formula</h4><br><br>
						    	</div>
						    </a>
					    </div>
					    <div class="col-sm-3 col-lg-3">
						    <a href="<?php echo base_url() ?>produk/produk2" style="text-decoration-line: none;" onmouseover="hvr(this, 'in')" onmouseleave="hvr(this, 'out')">
						    	<div class="thumbnail text-center produk" style="background-color: rgba(28,69,26,0); border-style: none">
						    		<img src="item img/pipeWh.png" style="width: 40%" col="g">
						    		<img src="item img/pipeY.png" style="width: 40%; display:none;" col="b">
						    		<br>
									<h4>Produk Hilir</h4><br><br>
						    	</div>
						    </a>
					    </div>
					</div>
					<br>
				</div>
			</div>
			</section>
			
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
	<!-- <br><br><br> -->
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
						<table>
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
								<div class="col-xs-3 col-sm-3 col-lg-3 sosmed no-touch">
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
	<script>
		function hvr(dom, action)
		{
		    if (action == 'in')
		    {
		        $(dom).find("[col=g]").css("display", "none");
		        $(dom).find("[col=b]").css("display", "block");
		    }

		    else
		    {
		        $(dom).find("[col=b]").css("display", "none");
		        $(dom).find("[col=g]").css("display", "block");
		    }
		}

		//JS for scroll to top
		$(window).scroll(function() {
		    if ($(this).scrollTop() > 50 ) {
		        $('.scrolltop:hidden').stop(true, true).fadeIn();
		    } else {
		        $('.scrolltop').stop(true, true).fadeOut();
		    }
		});
		$(function(){$(".scroll").click(function(){$("html,body").animate({scrollTop:$(".thetop").offset().top},"1000");return false})})
	</script>
	 <script src="<?php echo base_url() ?>bootstrap/js/bootstrap.min.js"></script>
	 <script src="<?php echo base_url() ?>bootstrap/js/jquery-3.3.1.min.js"></script> 
    <script src="<?php echo base_url() ?>bootstrap/js/jquery.easing.1.3.js"></script> 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   

    <script src="<?php echo base_url() ?>bootstrap/js/script.js"></script>
</html>