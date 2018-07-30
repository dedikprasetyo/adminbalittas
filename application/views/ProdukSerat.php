<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Balittas</title>
		<meta charset="utf-8">		
		<meta name="description" content="A Tuts+ course">
		<meta name="author" content="Gusna Ikhsan">		
		<link rel="stylesheet" href="<?php echo base_url()?>bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url()?>bootstrap/css/balittas.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/font-awesome-4.7.0/css/font-awesome.min.css">
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
				      <a href=""><img src="<?php echo base_url()?>item img/logoBalittas2.png" style="width:280px;margin-top: -18px;margin-bottom: -6px;margin-left: 5px;"></a>
				      <button type="botton" class="navbar-toggle" data-toggle="collapse" data-target="#main" style="margin-top: 10px;">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
				    </div>			
				    <div class="collapse navbar-collapse">			    
					    <ul class="nav navbar-nav navbar-right" style="margin-top: 10px;margin-right: 75px;">
					      	<a href="halamanUtama.html" class="glyphicon glyphicon-home dropbtnHeader" style="text-decoration-line: none;font-size: 14px;"></a>
					      	<div class="dropdownHeader">
							  	<div class="dropbtnHeader" style="font-family: Minion Pro">Varietas <span class="caret"></div>
							  	<div class="dropdownHeader-content" style="margin: 0px 0px 0px -35px;">
								  	<div class="container-fluid">
								  		<div class="row">
								  			<div class="col-sm-6 col-lg-6">
								  				<a href="#" style="margin-top: 10px;">Jarak Pagar</a>	
								  				<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
								  				<a href="#">Jarak Kepyar</a>
							          			<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
							          			<a href="#">Kapas</a>
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
								  				<a href="#">Tebu</a>
								  				<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
								  				<a href="#">Wijen</a>
								  				<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
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
							  	<div class="dropbtnHeader" style="font-family: Minion Pro">Produk <span class="caret"></div>
							  	<div class="dropdownHeader-content" style="margin: 0px 0px 0px -338px;">
								  	<div class="container-fluid">
								  		<div class="row">
								  			<div class="col-sm-12 col-lg-12">
								  				<a href="#" style="margin-top: 10px;">Benih</a>	
								  				<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
								  				<a href="#">Alat dan Mesin</a>
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
			<div class="containerImg">
				<img src="<?php echo base_url() ?>item img/tembakauHeader.jpg" alt="" style="width: 100%;">
			 	<div class="contentImg text-center">
				    <h1 class="hidden-xs hidden-sm" style="margin-top:12%;font-size:5vw;">Produk</h1>
				    <h1 class="hidden-md hidden-lg" style="margin-top:6vw;font-size:5vw;">Produk</h1>			    
			  	</div>
			</div>	
			
		</header>
		<br>
		<!-- content -->
		<div class="container">
			<div class="row">		
				<div class="col-sm-9 col-lg-9">
				    <ul class="breadcrumb" style="margin: -6px 0px -10px -15px;">
					  	<li><a href="#">Home</a></li>
					  	<li><a href="#">Private</a></li>
					  	<li><a href="#">Pictures</a></li>
					  	<li class="active">Vacation</li> 
					</ul>
				<a href="" style="text-decoration-line:none;"><h3 class="text-left" style="color:black; font-family: Minion Pro">Benih</h3></a>
				<hr style="border-color: grey;margin-top: -8px;">
					<table class="table table-hover">
						<thead style="background-color: rgba(28,69,26,0.9);border-bottom: 3px solid white; color:#fece00;">
							<th>No</th>
							<th>Varietas</th>
							<th>Ketersediaan</th>
							<th>Jumlah</th>
						</thead >
						<tbody>
							<tr>
								<td>1</td>
								<td>N1</td>
								<td>20 Agustus 2018</td>
								<td>1000</td>
							</tr>
							<tr>
								<td>1</td>
								<td>N1</td>
								<td>20 Agustus 2018</td>
								<td>1000</td>
							</tr>
							<tr>
								<td>1</td>
								<td>N1</td>
								<td>20 Agustus 2018</td>
								<td>1000</td>
							</tr>
							<tr>
								<td>1</td>
								<td>N1</td>
								<td>20 Agustus 2018</td>
								<td>1000</td>
							</tr>
						</tbody>
					</table>				
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
					<a href="" style="text-decoration-line:none;"><h3 class="text-left" style="color:black;font-family: Minion Pro">Leaflet</h3></a>
					<hr style="border-color: grey;margin-top: -8px;">					
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
					</div>	
				</div>
			</div>								
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
							<div class="row">
								<div class="col-xs-3 col-sm-3 col-lg-3 sosmed no-touch" style="margin: 0px -7px 9px 0px;">
									<a href="" ><i class="fa fa-facebook-square" aria-hidden="true" style="font-size:50px;"></i>
										<!-- <img src="item img/fbb.png" class="icon-sosmed img-rounded" alt="Cinque Terre" width="50" height="50"> -->
									</a>
								</div>
								<div class="col-xs-3 col-sm-3 col-lg-3 sosmed no-touch" style="margin: 0px -7px 9px 0px;">
									<a href="">
										<i class="fa fa-twitter-square" aria-hidden="true" style="font-size:50px;"></i>
									</a>
								</div>
								<div class="col-xs-3 col-sm-3 col-lg-3 sosmed no-touch" style="margin: 0px -7px 9px 0px;">
									<a href=""  >
										<i class="fa fa-youtube-square" aria-hidden="true" style="font-size:50px;"></i>
									</a>
								</div>
								<div class="col-xs-3 col-sm-3 col-lg-3 sosmed no-touch" style="margin: -3px -7px 9px 0px;">
									<a href=""  >
										<i class="fa fa-instagram" aria-hidden="true" style="font-size:50px;"></i>
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
</html>