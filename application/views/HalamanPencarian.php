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
		<header>
			<div class="hidden-md hidden-lg" style="background-color: rgb(28,69,26); height: 70px;"></div>					
			<nav class="navbar navbar-inverse navbar-fixed-top navbarHover">
				<div class="container-fluid">
				    <div class="navbar-header" style="margin-top: 5px; margin-bottom: 3px;">						    
				      <a href="<?php echo base_url()?>"><img src="<?php echo base_url() ?>item img/logoBalittas2.png" style="width:280px;margin-top: -18px;margin-bottom: -6px;margin-left: 5px;"></a>
				      <button type="botton" class="navbar-toggle" data-toggle="collapse" data-target="#main" style="margin-top: 10px;">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
				    </div>			
				    <div class="collapse navbar-collapse">			    
					    <ul class="nav navbar-nav navbar-right" style="margin-top: 10px;margin-right: 75px;">
					      	<a href="<?php echo base_url() ?>" class="glyphicon glyphicon-home dropbtnHeader" style="text-decoration-line: none;font-size: 14px;"></a>
					      	<div class="dropdownHeader">
							  	<div class="dropbtnHeader" style="font-family: Minion Pro">Jenis Tembakau <span class="caret"></div>
							  	<div class="dropdownHeader-content" style="margin: 0px 0px 0px -30px;">
								  	<div class="container-fluid">
								  		<a href="<?php echo base_url() ?>varietas/jenisAsal" style="margin-top: 10px;">Manurut Asal Usul</a>
								  		<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
							          	<a href="<?php echo base_url() ?>varietas/jenisKegunaan">Kegunaan</a>
							          	<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
							          	<a href="<?php echo base_url() ?>varietas/jenisWaktu">Waktu Tanam</a>
							          	<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
							          	<a href="<?php echo base_url() ?>varietas/jenisDaerah">Daerah Pengembangan</a>
							          	<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
							          	<a href="<?php echo base_url() ?>varietas/jenisProsesing" style="margin-bottom: 8px;">Prosesing</a>							          	
								  	</div>							  	
							  	</div>
							</div>
							<div class="dropdownHeader">
							  	<div class="dropbtnHeader" style="font-family: Minion Pro">Produk <span class="caret"></div>
							  	<div class="dropdownHeader-content" style="margin: 0px 0px 0px -178px;">
								  	<div class="container-fluid">	  		
							          	<a href="<?php echo base_url() ?>produk/produk1" style="margin-top: 10px;">Bernih</a>
								  		<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
							          	<a href="<?php echo base_url() ?>produk/produk2">Alat dan Mesin</a>
							          	<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
							          	<a href="<?php echo base_url() ?>produk/produk1">Formula</a>
							          	<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
							          	<a href="<?php echo base_url() ?>produk/produk2" style="margin-bottom: 8px;">Produk Hilir</a>					    
								  	</div>
							  	</div>
							</div>
							<div class="dropdownHeader">
							  	<div class="dropbtnHeader" style="font-family: Minion Pro">Teknologi Budidaya <span class="caret"></div>
							  	<div class="dropdownHeader-content" style="margin: 0px 0px 0px -265px;">
								  	<div class="container-fluid">
								  		<div class="row">
								  			<div class="col-sm-6 col-lg-6">
								  				<a href="<?php echo base_url() ?>teknologibudidaya/penangkaranBenih" style="margin-top: 10px;">Penangkaran Benih</a>	
								  				<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
								  				<a href="<?php echo base_url() ?>teknologibudidaya/pesemaian">Pesemaian</a>
							          			<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
							          			<a href="<?php echo base_url() ?>teknologibudidaya/pemupukan">Pemupukan</a>
							          			<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
							          			<a href="<?php echo base_url() ?>teknologibudidaya/bebasChlor">Pemupukan Bebas Chlor</a>
							          			<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
									          	<a href="<?php echo base_url() ?>teknologibudidaya/pengendalianPenyakit" style="margin-bottom: 8px;">Pengendalian Penyakit</a>
								  			</div>
								  			<div class="col-sm-6 col-lg-6">
								  				<a href="<?php echo base_url() ?>teknologibudidaya/pengendalianHama" style="margin-top: 10px;">Pengendalian Hama</a>	
								  				<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
								  				<a href="<?php echo base_url() ?>teknologibudidaya/panen">Panen dan Pasca Panen</a>	
								  				<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
								  				<a href="<?php echo base_url() ?>teknologibudidaya/kesesuaian">Kesesuaian Lahan</a>	
								  				<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
								  				<a href="<?php echo base_url() ?>teknologibudidaya/budidaya">Budidaya Tembakau Cerutu</a>
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
					        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Jenis Tembakau <span class="caret"></span></a>
						        <ul class="dropdown-menu">
						        	<li><a href="<?php echo base_url() ?>varietas/jenisAsal">Manurut Asal Usul</a></li>
						          	<li><a href="<?php echo base_url() ?>varietas/jenisKegunaan">Kegunaan</a></li>
						          	<li><a href="<?php echo base_url() ?>varietas/jenisWaktu">Waktu Tanam</a></li>
						          	<li><a href="<?php echo base_url() ?>varietas/jenisDaerah">Daerah Pengaembangan</a></li>
						          	<li><a href="<?php echo base_url() ?>varietas/jenisProsesing">Prosesing</a></li>
						       	</ul>
					      	</li>
					      	<li class="dropdown">
					        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Produk <span class="caret"></span></a>
						        <ul class="dropdown-menu">
						        	<li><a href="<?php echo base_url() ?>produk/produk1">Benih</a></li>
						          	<li><a href="<?php echo base_url() ?>produk/produk2">Alat dan Mesin</a></li>
						          	<li><a href="<?php echo base_url() ?>produk/produk1">Formula</a></li>
						          	<li><a href="<?php echo base_url() ?>produk/produk2">Produk Hilir</a></li>
						       	</ul>
					      	</li>
					      	<li class="dropdown">
					        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Teknologi Budidaya <span class="caret"></span></a>
						        <ul class="dropdown-menu">
						        	<li><a href="<?php echo base_url() ?>teknologibudidaya/penangkaranBenih">Penangkaran Benih</a></li>
						          	<li><a href="<?php echo base_url() ?>teknologibudidaya/pesemaian">Pesemaian</a></li>
						          	<li><a href="<?php echo base_url() ?>teknologibudidaya/pemupukan">Pemupukan</a></li>
						          	<li><a href="<?php echo base_url() ?>teknologibudidaya/bebasChlor">Pemupukan Bebas Chlor</a></li>
						          	<li><a href="<?php echo base_url() ?>teknologibudidaya/pengendalianPenyakit">Pengendalian Penyakit</a></li>
						          	<li><a href="<?php echo base_url() ?>teknologibudidaya/pengendalianHama">Pengendalian Hama</a></li>
						          	<li><a href="<?php echo base_url() ?>teknologibudidaya/panen">Panen dan Pasca Panen</a></li>
						          	<li><a href="<?php echo base_url() ?>teknologibudidaya/kesesuaian">Kesesuaian Lahan</a></li>
						          	<li><a href="<?php echo base_url() ?>teknologibudidaya/budidaya">Budidaya Tembakau Cerutu</a></li>
						       	</ul>
					      	</li>				      	
					    </ul>				    
				    </div>
				</div>
			</nav>										
			<!-- gambar tengah -->						
			<div class="containerImg">
				<img src="<?php echo base_url() ?>item img/tembakauHeader.jpg" alt="" style="width: 100%;">
			 	<div class="contentImg text-center">
				    <h1 style="margin-top:9vw ;font-size:5vw;">Pencarian</h1>				    
			  	</div>
			</div>				
		</header>
		<br>
		<!-- content -->
		<div class="container">			
				<ul class="breadcrumb" style="margin: -6px 0px -10px -15px;">
					  	<li><a href="#">Home</a></li>
					  	<li><a href="#">Private</a></li>
					  	<li><a href="#">Pictures</a></li>
					  	<li class="active">Vacation</li> 
				</ul>			
				<br><br>										
					<!-- <h3 class="text-left" style="color:black;font-family: Minion Pro">Pencarian</h3>
					<hr style="border-color: grey;margin-top: -8px;"> -->
				<div class="container-fluid" style="background-color:rgba(28,69,26,0.9);border-radius: 5px; width: 60%;">
					<form method="get" action="<?php echo base_url('pencarian')?>" style="margin-top: 15px; margin-bottom: 15px;">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Cari" required>
							<div class="input-group-btn">
							    <button class="btn btn-success" type="submit">
							    	<i class="glyphicon glyphicon-search"></i>
							    </button>
							</div>
						</div>
					</form>						
				</div>
				<br><br>
				<div>					
						<a href="" style="text-decoration-line: none;" class="teknologiBudidaya">						
							<h3>Tembakau</h3>
						</a>					
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates tenetur eum molestiae alias, incidunt vitae, beatae ratione adipisci repellendus iusto, ut! Magnam dignissimos unde autem nihil minus, reiciendis eius sunt vitae sequi possimus suscipit quibusdam maxime totam est repudiandae provident illum sit quaerat excepturi, sapiente. Minima, ad quis voluptatibus debitis.</p>
						<hr>
				</div>	
				<div>
						<a href="" style="text-decoration-line: none;" class="teknologiBudidaya">						
							<h3>Tembakau</h3>
						</a>	
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates tenetur eum molestiae alias, incidunt vitae, beatae ratione adipisci repellendus iusto, ut! Magnam dignissimos unde autem nihil minus, reiciendis eius sunt vitae sequi possimus suscipit quibusdam maxime totam est repudiandae provident illum sit quaerat excepturi, sapiente. Minima, ad quis voluptatibus debitis.</p>					
						<hr>
				</div>																
			<!-- </div>								 -->
		</div>
	</body>	
	<br><br><br>
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
						<img src="<?php echo base_url() ?>item img/logoBalittas2.png" style="width: 110%;margin:-27px 0px -8px -32px;">				
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
									<td>&nbsp</td>
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
							<h3 style="margin-top: 4px;font-family: Minion Pro;">Link Terkait</h3>
							<hr style="margin-top: -4px; margin-bottom: 10px; border-color: #fece00">							
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
							<h3 style="margin-top: 4px;font-family: Minion Pro;">Sosial Media</h3>
							<hr style="margin-top: -4px; margin-bottom: 13px;border-color: #fece00">
							<div class="row">
								<div class="col-xs-3 col-sm-3 col-lg-3" style="margin: 0px -7px 9px 0px;">
									<a href="">
										<img src="<?php echo base_url() ?>item img/fbb.png" class="img-rounded" alt="Cinque Terre" width="50" height="50">
									</a>
								</div>
								<div class="col-xs-3 col-sm-3 col-lg-3" style="margin: 0px -7px 9px 0px;">
									<a href="">
										<img src="<?php echo base_url() ?>item img/twitterBig.png" class="img-rounded" alt="Cinque Terre" width="50" height="50">
									</a>
								</div>
								<div class="col-xs-3 col-sm-3 col-lg-3" style="margin: 0px -7px 9px 0px;">
									<a href="">
										<img src="<?php echo base_url() ?>item img/youtube.png" class="img-rounded" alt="Cinque Terre" width="50" height="50">
									</a>
								</div>
								<div class="col-xs-3 col-sm-3 col-lg-3" style="margin: -3px -7px 9px 0px;">
									<a href="">
										<img src="<?php echo base_url() ?>item img/insta.png" class="img-rounded" alt="Cinque Terre" width="58" height="auto">
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
							<hr style="border-style: dashed; margin-top: 1px;margin-bottom: 10px;border-color: #fece00">
							<div class="row">
								<div class="col-xs-9 col-sm-9 col-lg-9">
									<p style="margin-top: 2px;">Pengunjung Bulan Ini</p>
								</div>
								<div class="col-xs-3 col-sm-3 col-lg-3">
									<p style="margin-top: 2px;">10</p>
								</div>								
							</div>															
							<hr style="border-style: dashed; margin-top: 0px;margin-bottom: 10px;border-color: #fece00">
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
				<div style=" margin-top: 13px;">
					<p style="font-family: calibri"><span class="glyphicon glyphicon-copyright-mark"></span> 2018 All Reserved Design By BALITTAS</p>
				</div>
			</div>
	</footer>
</html>