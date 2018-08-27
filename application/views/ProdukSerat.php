<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Balittas</title>
		<meta charset="utf-8">		
		<meta name="description" content="A Tuts+ course">
		<meta name="author" content="Gusna Ikhsan">		
		<link rel="stylesheet" href="<?php echo base_url()?>bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url()?>bootstrap/css/balittas.css">
		<link rel="stylesheet" href="<?php echo base_url()?>bootstrap/css/serat.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/font-awesome-4.7.0/css/font-awesome.min.css">
		<link href="<?php echo base_url() ?>item img/Logo-Kementerian-Pertanian.png" rel="shortcut icon">
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
				      <a href="<?php echo base_url('Home') ?>"><img src="<?php echo base_url() ?>item img/logoBalittas2.png" style="width:280px;margin-top: -18px;margin-bottom: -6px;margin-left: 5px;"></a>
				      <button type="botton" class="navbar-toggle" data-toggle="collapse" data-target="#main" style="margin-top: 10px;">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
				    </div>			
				    <div class="collapse navbar-collapse">			    
					    <ul class="nav navbar-nav navbar-right" style="margin-top: 10px;margin-right: 75px;">
					      	<a href="#home" class="glyphicon glyphicon-home dropbtnHeader halaman" style="text-decoration-line: none;font-size: 14px;"></a>
					      	<div class="dropdownHeader">
							  	<div class="dropbtnHeader" style="font-family: Minion Pro">Tanaman Serat <span class="caret"></div>
							  	<div class="dropdownHeader-content" style="margin: 0px 0px 0px 6px;">
								  	<div class="container-fluid">
								  		<div class="row">
								  			<div class="col-sm-6 col-lg-6">
							          			<a href="<?php echo base_url('varietas/detailKapas') ?>" class="halaman" style="margin-top: 10px;">Kapas</a>
							          			<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
							          			<a href="<?php echo base_url('varietas/detailKapuk') ?>" class="halaman">Kapuk</a>
							          			<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
							          			<a href="<?php echo base_url('varietas/detailKenaf') ?>" class="halaman" style="margin-bottom: 10px;">Kenaf</a>
								  			</div>
								  			<div class="col-sm-6 col-lg-6">
								  				<a href="<?php echo base_url('varietas/detailRami') ?>" class="halaman" style="margin-top:10px;">Rami</a>	
								  				<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
								  				<a href="<?php echo base_url('varietas/detailRosela') ?>" class="halaman">Rosela</a>	
								  				<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
								  				<a href="<?php echo base_url('varietas/detailSisal') ?>" class="halaman">Sisal</a>	
								  			</div>
								  		</div>
								  	</div>							  	
							  	</div>
							</div>
							<div class="dropdownHeader">
							  	<div class="dropbtnHeader" style="font-family: Minion Pro">Budidaya Tanaman Serat <span class="caret"></div>
							  	<div class="dropdownHeader-content" style="margin: 0px 0px 0px -134px;">
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
								  				<a href="<?php echo base_url('produk/Benih')?>" style="margin-top: 10px;">Benih</a>	
								  				<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
								  				<a href="<?php echo base_url('produk/produk2')?>" class="halaman">Alat dan Mesin</a>
							          			<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
							          			<a href="<?php echo base_url('produk/produk3')?>">Formula</a>
							          			<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
							          			<a href="<?php echo base_url('produk/produk4')?>" style="margin-bottom: 10px;">Produk Hilir</a>
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
				
			<!-- </div> -->
			<!-- gambar tengah -->			
			<!-- <div class="containerImg">
				<video autoplay muted loop style="width: 100%">
					<source src="item img/tembakauFix.mp4" type="video/mp4">
				</video>		 -->	  	
			 	<!-- <div class="contentVid">
				    <h1>Heading</h1>
				    <p>Lorem ipsum..</p>
			  	</div> -->
			<!-- </div>	 -->
			<div class="containerImg" id="home">
				<img src="<?php echo base_url() ?>item img/tembakauHeader.jpg" alt="" style="width: 100%;">
			 	<div class="contentImg text-center">
				    <h1 class="hidden-xs hidden-sm" style="margin-top:12%;font-size:5vw;">Benih</h1>
				    <h1 class="hidden-md hidden-lg" style="margin-top:6vw;font-size:5vw;">Benih</h1>			    
			  	</div>
			</div>	
			
		</header>
		<br>
		<!-- content -->
		<div class="container">
			<div class="row">		
				<div class="col-sm-9 col-lg-9">
				    <ul class="breadcrumb" style="margin: -6px 0px -10px -15px;">
					  	<li><a href="<?php echo base_url() ?>">Beranda</a></li>
						<li class="active">Produk Benih</li>
					</ul>
				<a href="" style="text-decoration-line:none;"><h3 class="text-left" style="color:black; font-family: Minion Pro">Ketersediaan Benih</h3></a>
				<hr style="border-color: grey;margin-top: -8px;">
				<div class="table-responsive">
					<table class="table table-hover" style="text-align: center;">
						<thead style="text-align:center; background-color: rgba(28,69,26,0.9);border-bottom: 3px solid white; color:#fece00;">
							<th style="text-align:center;">No</th>
							<th style="text-align:center;">Varietas</th>
							<th style="text-align:center;">Asal</th>
							<th style="text-align:center;">Tahun Panen</th>
							<th style="text-align:center;">Kelas</th>
							<th style="text-align:center;">Stok Bulan Terakhir</th>
							<th style="text-align:center;">Stok Sampai</th>
						</thead >
						<tbody>
						
				 			<?php
				 			$count=0;
				 			 foreach ($stokbenih as $ben) 
				 			{
				 				$count++;
				 				?>
				 				<tr>
				 					<td><?php echo $count; ?></td>
				 					<td><?php echo $ben->nama_benih; ?></td>
				 					<td><?php echo $ben->asal; ?></td>
				 					<td><?php echo $ben->tahun_panen; ?></td>
				 					<td><?php echo $ben->kelas; ?></td>
				 					<td><?php echo $ben->stok_bulan_terakhir; ?></td>
				 					<td><?php echo $ben->stok_sampai; ?></td>
				 				</tr>
				 				<?php 
				 					} 
				 					?>
						</tbody>
					</table>
					</div>
					<h3>Distribusi Benih</h3>
					<hr style="border-color: grey;margin-top: -8px;">
					<div class="table-responsive" style="text-align: center;">
					<table class="table table-hover">
						<thead style="background-color: rgba(28,69,26,0.9);border-bottom: 3px solid white; color:#fece00;">
							<th style="text-align:center;">No</th>
							<th style="text-align:center;">Varietas</th>
							<th style="text-align:center;">Tanggal</th>
							<th style="text-align:center;">Tahun Panen</th>
							<th style="text-align:center;">Kelas Benih</th>
							<th style="text-align:center;">Jumlah Kg</th>
							<th style="text-align:center;">Keterangan</th>
						</thead>
						<tbody>
						<?php 
						$count=0;
						foreach($distribusi as $ben)
						{
						$count++; 
							 ?>
							<tr>
								<td><?php echo $count; ?></td>
								<td><?php echo $ben->nama_benih; ?></td>
								<td><?php echo $ben->tanggal; ?></td>
								<td><?php echo $ben->tahun_panen; ?></td>
								<td><?php echo $ben->kelas_benih; ?></td>
								<td><?php echo $ben->jumlah_kg; ?></td>
								<td><?php echo $ben->keterangan; ?></td>
							</tr>
						</tbody>
							<?php 
						}
					 ?>	
					</table>
					</div>	
				</div>		
				<div class="col-sm-3 col-lg-3">
					<br>
					<a href="" style="text-decoration-line:none;"><h3 class="text-left" style="color:black;font-family: Minion Pro">Pencarian</h3></a>
					<hr style="border-color: grey;margin-top: -8px;">
					<div class="container-fluid" style="background-color:rgba(28,69,26,0.9);border-radius: 5px;">
						<form action="" style="margin-top: 15px; margin-bottom: 15px;">
							<div class="input-group">
							    <input type="text" class="form-control" placeholder="Cari">
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
					$ganjil=true;
					foreach($leaflet as $subleaflet)
						{
							if($ganjil){
					 ?>
					<h5 style="color:black;"><?php echo $subleaflet->nama_leaflet; ?></h5>
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-lg-6">													 
							<img src="<?php echo base_url()?>item img/leafletgabungan/<?php echo $subleaflet->file; ?>" class="image" style="width: 110%;border-radius: 3px;">						
						</div>		
						<?php $ganjil=false; }else{ ?>				
						<div class="col-xs-6 col-sm-6 col-lg-6">
							<img src="<?php echo base_url()?>item img/leafletgabungan/<?php echo $subleaflet->file; ?>" class="image" style="width: 110%;border-radius: 3px;margin-left: -10px;">
						</div>						
					</div>	
					<?php 
						$ganjil=true;} }
					 ?>					
					<!-- <h5 style="color:black;">Penyakit Lanas</h5>
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-lg-6">													 
							<img src="<?php echo base_url()?>item img/1a.jpg" class="image" style="width: 110%;border-radius: 3px;">						
						</div>						
						<div class="col-xs-6 col-sm-6 col-lg-6">
							<img src="<?php echo base_url()?>item img/1a.jpg" class="image" style="width: 110%;border-radius: 3px;margin-left: -10px;">
						</div>						
					</div>					
					<h5 style="color:black;">Penyakit Lanas</h5>
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-lg-6">												 
							<img src="<?php echo base_url()?>item img/2a.jpg" class="image" style="width: 110%;border-radius: 3px;">						
						</div> 
						<div class="col-xs-6 col-sm-6 col-lg-6">
							<img src="<?php echo base_url()?>item img/2b.jpg" class="image" style="width: 110%;border-radius: 3px;margin-left: -10px;">
						</div>						
					</div>					
					<h5 style="color:black;">Penyakit Lanas</h5>
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-lg-6">													 
							<img src="<?php echo base_url()?>item img/1a.jpg" class="image" style="width: 110%;border-radius: 3px;">						
						</div>						
						<div class="col-xs-6 col-sm-6 col-lg-6">
							<img src="<?php echo base_url()?>item img/1a.jpg" class="image" style="width: 110%;border-radius: 3px;margin-left: -10px;">
						</div>						
					</div>	
					<h5 style="color:black;">Penyakit Lanas</h5>
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-lg-6">												 
							<img src="<?php echo base_url()?>item img/2a.jpg" class="image" style="width: 110%;border-radius: 3px;">						
						</div> 
						<div class="col-xs-6 col-sm-6 col-lg-6">
							<img src="<?php echo base_url()?>item img/2b.jpg" class="image" style="width: 110%;border-radius: 3px;margin-left: -10px;">
						</div>						
					</div>	 -->
				</div>
			</div>								
		</div>
	</body>	
	<br><br><br>
</html>