<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Balittas</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="<?php echo base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/styleadmin.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/simple-sidebar.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/img/Logo-Kementerian-Pertanian.png" rel="shortcut icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>



  <body>
<header>

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
       <div class="navbar-header">
       <!-- <a class="navbar-brand" href="#menu-toggle" id="menu-toggle" style="margin-top: 10px; margin-left: -15px;"> <i class="fa fa-list" aria-hidden="true" style="margin-left: -5px; font-size: 35px; padding-left: -50px"></i></a> -->
         <a href="#home" class="navbar-brand halaman">
        <img src="<?php echo base_url();?>/assets/img/balittaslitbang.png" width="270" style="margin-right:-90px; padding-right: 25px;">
      </a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bar" aria-expanded="false" style="margin-top:25px; margin-right: -20px;">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse">
        <ul class="nav navbar-nav navbar-right" >
             <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Varietas <span class="caret"></span></a>
                      <ul class="dropdown-menu" style="margin:-5px 0px 0px 0px; width:280px; background-color:#fece00;">
                        <div class="container-fluid">
                            <div class="col-sm-6 col-lg-6">
                            <li><a href="#Kapas" class="halaman">Kapas</a></li>
                            <hr style="margin-left:0px; margin: 1px 0px 1px 0px; text-align: left; width:95%;">
                            <li><a href="#Kapuk" class="halaman">Kapuk</a></li>
                            <hr style="margin-left:0px; margin: 1px 0px 1px 0px; text-align: left; width:95%;">
                              <li><a href="#Kenaf" class="halaman">Kenaf</a></li>
                        </div>
                            <div class="col-sm-6 col-lg-6">
                          <li><a href="#Rami" class="halaman">Rami</a></li>
                          <hr style="margin-left:0px; margin: 1px 0px 1px 0px; text-align: left; width:95%;">
                          <li><a href="#Rosela" class="halaman">Rosela</a></li>
                          <hr style="margin-left:0px; margin: 1px 0px 1px 0px; text-align: left; width:95%;">
                          <li><a href="#Sisal" class="halaman">Sisal</a></li>
                        </div>
                            </div>
                      </ul>
                  </li>
                    <li> <a href="#login" data-toggle="modal" data-target="#login-modal" class="halaman">Welcome Admin</a></li>
                    <li> <a href="index.html#layanan" class="halaman">Logout</a></li>
      </ul>
    </div> 

     <div class="collapse navbar-collapse" id="bar"  style="margin-top:5px; margin-left: -60px; margin-right: -60px; border:0;" >
        <ul class="nav navbar-nav navbar-right hidden-md hidden-lg" style="background-color:#57bb82;">
             <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Varietas <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                         <li><a href="#Welcome" class="halaman">Tembakau</a></li>
                          <li><a href="#JarakPagar" class="halaman">Jarak Pagar</a></li>
                          <li><a href="#JarakKepyar" class="halaman">Jarak Kepyar</a></li>
                          <li><a href="#Kapas" class="halaman">Kapas</a></li>
                          <li><a href="#Kapuk" class="halaman">Kapuk</a></li>
                          <li><a href="#Kenaf" class="halaman">Kenaf</a></li>
                          <li><a href="#Rami" class="halaman">Rami</a></li>
                          <li><a href="#Rosela" class="halaman">Rosela</a></li>
                          <li><a href="#Tebu" class="halaman">Tebu</a></li>
                          <li><a href="#Wijen" class="halaman">Wijen</a></li>
                      </ul>
                  </li>
                    <li> <a href="#login" data-toggle="modal" data-target="#login-modal" class="halaman">Welcome Admin</a></li>
                    <li> <a href="index.html#layanan" class="halaman">Logout</a></li>
      </ul>
    </div> 
    </div>
   
  </nav>  
<!-- gambar tengah -->
     <!--  <div class="jumbotron text-center" id="home" style="margin-bottom: 5px;">
        <h3>Selamat Datang Di Halaman Admin Balittas</h3>
        <hr align="center">
      </div>   -->
</header>

    <section class="Kapas" id="Kapas">
                      <div class="container">
                        <div class="col-md-12">
                        <div class="table table-wrapper">
                         <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                        <h2>Data <b>Kapas</b></h2>
                      </div>
                      <div class="col-sm-6">
                        <a href="#tambahkapas" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus-square" aria-hidden="true"></i><span>Tambah Data</span></a>            
                      </div>
                            </div>
                        </div>
                            <div class="table-responsive">
                              <table class="table table-striped table-hover">
                            <thead style="font-size: 0.9em;">
                                <tr>
                        <th>
                          <span class="custom-checkbox">
                            <input type="checkbox" id="checkAll4">
                            <label for="checkAll4"></label>
                          </span>
                        </th>
                                      <th>No</th>
                                      <th>Nama Tanaman</th>
                                      <th>Deskripsi Kapas</th>
                                      <th>Tahun Pelepasan</th>
                                      <th>Umum Panen</th>
                                      <th>Produktivitas</th>
                                      <th>Potensi Produksi</th>
                                      <th>Kandungan Serat</th>
                                      <th>Mutu Serat</th>
                                      <th>Ketahanan</th>
                                      <th>Status</th>
                                      <th>Peneliti</th>
                                      <th>Instansi</th>
                                      <th>Gambar</th>
                                      <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="font-size: 0.9em;">
                        <td>
                          <span class="custom-checkbox">
                            <input type="checkbox" class="checkbox4" name="options[]" value="1">
                            <label for="checkbox4"></label>
                          </span>
                        </td>
                        <td>1</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>
                            <a href="#editkapas" class="edit" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <a href="#hapuskapas" class="delete" data-toggle="modal"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
                </div>
            </div>
            </div>
    </div>
    </section>

    <section class="Kapuk" id="Kapuk">
                      <div class="container">
                        <div class="col-md-12">
                        <div class="table table-wrapper">
                         <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                        <h2>Data <b>Kapuk</b></h2>
                      </div>
                      <div class="col-sm-6">
                        <a href="#tambahkapuk" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus-square" aria-hidden="true"></i> <span>Tambah Data</span></a>            
                      </div>
                            </div>
                        </div>
                            <div class="table-responsive">
                              <table class="table table-striped table-hover">
                            <thead style="font-size: 0.9em;">
                                <tr>
                        <th>
                          <span class="custom-checkbox">
                            <input type="checkbox" id="checkAll5">
                            <label for="checkAll5"></label>
                          </span>
                        </th>
                        <th>No</th>
                          <th>Nama Tanaman</th>
                          <th>Deskripsi Kapuk</th>
                          <th>Tahun Pelepasan</th>
                          <th>Tipe Pertumbuhan</th>
                          <th>Produktivitas</th>
                          <th>Berat Gelondong</th>
                          <th>Kandungan Serat</th>
                          <th>Kadar Minyak Biji</th>
                          <th>Warna Serat</th>
                          <th>Penjelasan</th>
                          <th>Status</th>
                          <th>Peneliti</th>
                          <th>Instansi</th>
                          <th>Gambar</th>
                          <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="font-size: 0.9em;">
                      <td>
                        <span class="custom-checkbox">
                          <input type="checkbox" class="checkbox5" name="options[]" value="1">
                          <label for="checkbox5"></label>
                        </span>
                      </td>
                           <td>1</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>
                                 <a href="#editkapuk" class="edit" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <a href="#hapuskapuk" class="delete" data-toggle="modal"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
                </div>
            </div>
            </div>
    </div>
    </section>

    <section class="Kenaf" id="Kenaf">
          <div class="container">
            <div class="col-md-12">
            <div class="table table-wrapper">
             <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
            <h2>Data <b>Kenaf</b></h2>
          </div>
          <div class="col-sm-6">
            <a href="#tambahkenaf" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus-square" aria-hidden="true"></i> <span>Tambah Data</span></a>            
          </div>
                </div>
            </div>
                <div class="table-responsive">
                  <table class="table table-striped table-hover">
                <thead style="font-size: 0.9em;">
                    <tr>
            <th>
              <span class="custom-checkbox">
                <input type="checkbox" id="checkAll6">
                <label for="checkAll6"></label>
              </span>
            </th>
                         <th>No</th>
                          <th>Nama Tanaman</th>
                          <th>Deskripsi Kenaf</th>
                          <th>Permukaan Batang</th>
                          <th>Warna Batang</th>
                          <th>Percabangan</th>
                          <th>Bentuk Daun</th>
                          <th>Umum Berbunga</th>
                          <th>Warna Bunga</th>
                          <th>Umur Panen</th>
                          <th>Tinggi Tanaman</th>
                          <th>Diameter Batang</th>
                          <th>Potensi Hasil</th>
                          <th>Berat 100 Biji</th>
                          <th>Panjang Serat</th>
                          <th>Kekuatan Serat</th>
                          <th>Persentase Serat</th>
                          <th>Gambar</th>
                          <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="font-size: 0.9em;">
            <td>
              <span class="custom-checkbox">
                <input type="checkbox" class="checkbox6" name="options[]" value="1">
                <label for="checkbox6"></label>
              </span>
            </td>
                        <td>1</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>
                                 <a href="#editkenaf" class="edit" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <a href="#hapuskenaf" class="delete" data-toggle="modal"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
                </div>
            </div>
            </div>
    </div>
    </section>

    <section class="Rami" id="Rami">
          <div class="container">
            <div class="col-md-12">
            <div class="table table-wrapper">
              <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
            <h2>Data <b>Rami</b></h2>
          </div>
          <div class="col-sm-6">
            <a href="#tambahrami" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus-square" aria-hidden="true"></i> <span>Tambah Data</span></a>            
          </div>
                </div>
            </div>
               <div class="table-responsive">
                 <table class="table table-striped table-hover">
                <thead style="font-size: 0.9em;">
                    <tr>
            <th>
              <span class="custom-checkbox">
                <input type="checkbox" id="checkAll7">
                <label for="checkAll7"></label>
              </span>
            </th>
                        <th>No</th>
                          <th>Nama Tanaman</th>
                          <th>Deskripsi Rami</th>
                          <th>Asal Varietas</th>
                          <th>Tipe Pertumbuhan</th>
                          <th>Warna Batang</th>
                          <th>Warna Daun Permukaan Atas</th>
                          <th>Warna Pucuk Daun</th>
                          <th>Bentuk Daun</th>
                          <th>Warna Bunga Jantan</th>
                          <th>Warna Bunga Betina</th>
                          <th>Umur Mulai Berbunga</th>
                          <th>Tinggi Tanaman</th>
                          <th>Diameter Batang</th>
                          <th>Jumlah Batang Per Rumpun</th>
                          <th>Umur Panen Serat</th>
                          <th>Berat Serat</th>
                          <th>Produktivitas Serat</th>
                          <th>Rendemen Serat</th>
                          <th>Kualitas Serat</th>
                          <th>Kesesuaisan Daerah</th>
                          <th>Gambar</th>
                          <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="font-size: 0.9em;">
            <td>
              <span class="custom-checkbox">
                <input type="checkbox" class="checkbox7" name="options[]" value="1">
                <label for="checkbox7"></label>
              </span>
            </td>
                        <td>1</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>
                                 <a href="#editrami" class="edit" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <a href="#hapusrami" class="delete" data-toggle="modal"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                   
                </tbody>
            </table>
               </div>
            </div>
            </div>
    </div>
    </section>

    <section class="Rosela" id="Rosela">

          <div class="container">
            <div class="col-md-12">
            <div class="table table-wrapper">
              <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
            <h2>Data <b>Rosela</b></h2>
          </div>
          <div class="col-sm-6">
            <a href="#tambahrosela" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus-square" aria-hidden="true"></i> <span>Tambah Data</span></a>            
          </div>
                </div>
            </div>
                <div class="table-responsive">
                  <table class="table table-striped table-hover">
                <thead style="font-size: 0.9em;">
                    <tr>
            <th>
              <span class="custom-checkbox">
                <input type="checkbox" id="checkAll8">
                <label for="checkAll8"></label>
              </span>
            </th>
                          <th>No</th>
                          <th>Nama Tanaman</th>
                          <th>Nama Aksesi</th>
                          <th>Asal</th>
                          <th>Proses Pemuliaan</th>
                          <th>Spesies</th>
                          <th>Permukaan Batang</th>
                          <th>Warna Batang</th>
                          <th>Warna Tangkai Daun</th>
                          <th>Warna Helaian Daun</th>
                          <th>Warna Tulang Daun</th>
                          <th>Warna Tepi Daun</th>
                          <th>Warna Mahkota Bunga</th>
                          <th>Warna Kelopak Bunga</th>
                          <th>Warna Anak Kelopak</th>
                          <th>Warna Kuncup Bunga</th>
                          <th>Warna Buah</th>
                          <th>Warna Biji</th>
                          <th>Bentuk Daun</th>
                          <th>Bentuk Ujung Kapsul</th>
                          <th>Percabangan</th>
                          <th>Tinggi Tanaman</th>
                          <th>Diameter Batang</th>
                          <th>Umur Tanaman</th>
                          <th>Berat 1000 Biji</th>
                          <th>Kandungan Nutrisi Kelopak Bunga</th>
                          <th>Panjang Kapsul</th>
                          <th>Diameter Kapsul</th>
                          <th>Bobot 100 Kelopak Kering</th>
                          <th>Ketahanan Terhadap Penyakit</th>
                          <th>Ketahanan Terhadap Foto Perioditas</th>
                          <th>Adaptasi</th>
                          <th>Peneliti</th>
                          <th>Gambar</th>
                          <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="font-size: 0.9em;">
            <td>
              <span class="custom-checkbox">
                <input type="checkbox" class="checkbox8" name="options[]" value="1">
                <label for="checkbox8"></label>
              </span>
            </td>
                        <td>1</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>
                                 <a href="#editrosela" class="edit" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <a href="#hapusrosela" class="delete" data-toggle="modal"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                        </td>
                    </tr>

                </tbody>
            </table>
                </div>
            </div>
            </div>
    </div>
    </section>

    <section class="Sisal" id="Sisal">
   
          <div class="container">
             <div class="table table-wrapper">
     <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
            <h2>Data <b>Sisal</b></h2>
          </div>
          <div class="col-sm-6">
            <a href="#tambahsisal" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus-square" aria-hidden="true"></i><span>Tambah Data</span></a>            
          </div>
                </div>
            </div>
                <div class="table-responsive">
                  <table class="table table-striped table-hover">
                <thead style="font-size: 0.9em;">
                    <tr>
            <th>
              <span class="custom-checkbox">
                <input type="checkbox" id="checkAll10">
                <label for="checkAll10"></label>
              </span>
            </th>
                        <th>No</th>
                          <th>Nama Tanaman</th>
                          <th>Jenis</th>
                          <th>Habitus</th>
                          <th>Umur Panen</th>
                          <th>Jumlah Ruang Polong</th>
                          <th>Potensi Produk</th>
                          <th>Sesuai Daya Adaptasi</th>
                          <th>Adaptasi</th>
                          <th>Ketahanan Terhadap</th>
                          <th>Gambar</th>
                          <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
            <tr style="font-size: 0.9em;">
            <td>
              <span class="custom-checkbox">
                <input type="checkbox" class="checkbox10" name="options[]" value="1">
                <label for="checkbox10"></label>
              </span>
            </td>
                        <td>1</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>Ada</td>
                        <td>
                                 <a href="#editsisal" class="edit" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <a href="#hapussisal" class="delete" data-toggle="modal"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                </tbody>
                  </table>
                </div>
          </div> 
          </div>
          </div>
    </section>


   <!-- Tambah Modal HTML Kapas -->
   <div id="tambahkapas" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Tambah Data Varietas</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
                 <form action="<?php echo base_url('c_data/tambahVarietas'); ?>" method="post" class="form-horizontal">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Varietas</label>
                            <input type="text" name="namaVarietas" class="form-control" required>
                        </div>
                        <div class="form-group" style="padding-bottom: 0px">
                            <label>Upload Gambar</label>
                            <div class="input-group image-preview">
                                <input type="text" class="form-control image-preview-filename" disabled="disabled">    
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                        <span class="glyphicon glyphicon-remove"></span> Clear
                                    </button>                                    
                                    <div class="btn btn-default image-preview-input">                                        
                                        <span class="image-preview-input-title">Pilih File</span>
                                        <input type="file" style="width:100px" accept="image/png, image/jpeg, image/gif," name="gambar">                                        
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="form-group" style="padding-bottom: 0px">
                            <label>Upload SK</label>
                            <div class="input-group">                                
                                <input type="file" id="picked" name="sk" style="display:none" onchange="document.getElementById('filename').value=this.value">
                                <input type="text" id="filename" style="width: 468px;height: 35px;" disabled="disable">
                                <input type="button" value="Pilih File" onclick="document.getElementById('picked').click()" style="height: 35px;margin-top: -2px;" class="btn btn-default">
                            </div>
                        </div>
                         <div class="form-group">
                            <label>Tanggal Pelepasan</label>
                            <input type="text" name="tanggalPelepasan" class="form-control" placeholder="ex : 2018/07/27" required>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea type="text" name="deskripsi" class="form-control" required ></textarea>
                        </div>
                        <div class="form-group"> 
                            <label>Spesifikasi</label>                            
                            <table style="margin-left: 0px;">
                              <thead style="background-color: none;">
                                  <tr>
                                      <th style="font-weight: unset;">Atribut</th>
                                      <th style="font-weight: unset;padding-left: 10px;">Value</th>
                                      <th></th>
                                  </tr>
                              </thead>
                              <!--elemet sebagai target append-->
                              <tbody id="itemlist">
                                <tr>
                                  <td><input name="atribut0" class="" type="text" style="border-radius: 0px;width: 224px; height: 35px;"></td>
                                      <td><input name="value0" class="" type="text" style="border-radius: 0px;margin:0px 10px;width: 224px;height: 35px;"></td>
                                      <td></td>
                                </tr> 
                                <tr>
                                      <td><input name="atribut1" class="" type="text" style="margin-top: 10px;width: 224px;height: 35px;"></td>
                                      <td><input name="value1" class="" type="text" style="margin:10px 10px 0px 10px;width:224px;height: 35px;"></td>
                                      <td></td>
                                  </tr>
                                  <tr>
                                      <td><input name="atribut2" class="" type="text" style="margin-top: 10px;width: 224px;height: 35px;"></td>
                                      <td><input name="value2" class="" type="text" style="margin:10px 10px 0px 10px;width: 224px;height: 35px;"></td>
                                      <td></td>
                                  </tr>
                                  <tr>
                                      <td><input name="atribut3" class="" type="text" style="margin-top: 10px;width: 224px;height: 35px;"></td>
                                      <td><input name="value3" class="" type="text" style="margin:10px 10px 0px 10px;width: 224px;height: 35px;"></td>
                                      <td></td>
                                  </tr>                               
                                  <tr>
                                      <td><input name="atribut4" class="" type="text" style="margin-top: 10px; width: 224px;height: 35px;"></td>
                                      <td><input name="value4" class="" type="text" style="margin:10px 10px 0px 10px; width: 224px;height: 35px;"></td>
                                      <td class="text-center"></td>
                                  </tr>
                              </tbody>
                              <form method="post" action="<?php base_url('c_data/tambahVarietas') ?>"><input hidden name="temp" id="temp"></form>
                              <tfoot>
                                <tr>
                                  <td></td>
                                  <td class="text-right"><button class="btn btn-small btn-default" onclick="additem(); return false" style="margin-top: 10px;height: 35px;margin-right: 10px;"><i class="fa fa-plus" style="margin-top: -25px;"></i></button></td>
                                  <td></td>
                                </tr>
                              </tfoot>                                                                     
                          </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                        <input type="submit" class="btn btn-success" value="Tambah">
                    </div>
                </form>              
            </div>
        </div>
    </div>
  <!-- Edit Modal HTML kapas-->
 <div id="editkapas" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data Varietas</h4>`
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <form action="<?php echo base_url('c_data/editVarietas'); ?>" method="post" class="form-horizontal">
                    <div class="modal-body">
                        <input hidden id="idvar" name="idVarietas">
                        <div class="form-group">
                            <label>Nama Varietas</label>
                            <input type="text" name="namaVarietas" class="form-control" id="nama" required>
                        </div>
                        <div class="form-group" style="padding-bottom: 0px">
                            <label>Upload Gambar</label>
                            <div class="input-group image-preview">
                                <input type="text" class="form-control image-preview-filename" disabled="disabled" id="gmbr">    
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                        <span class="glyphicon glyphicon-remove"></span> Clear
                                    </button>                                    
                                    <div class="btn btn-default image-preview-input">                                        
                                        <span class="image-preview-input-title">Pilih File</span>
                                        <input type="file" style="width:100px" accept="image/png, image/jpeg, image/gif," id="gmbr" name="gambar">
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="form-group" style="padding-bottom: 0px">
                            <label>Upload SK</label>
                            <div class="input-group">                                
                                <input type="file" id="pic" name="sk" style="display:none" onchange="document.getElementById('sklur').value=this.value">
                                <input type="text" id="sklur" style="width: 468px;height: 35px;" disabled="disable">
                                <input type="button" value="Pilih File" onclick="document.getElementById('pic').click()" style="height: 35px;margin-top: -2px;" class="btn btn-default">                                
                            </div>
                        </div>
                         <div class="form-group">
                            <label>Tanggal Pelepasan</label>
                            <input type="text" name="tanggalPelepasan" class="form-control" placeholder="ex : 2018/07/27" required id="tgl">
                        </div>                                            
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function modal_edit(idvar,nama,gmbr,sk,tgl,nar)
        {
          $('#editkapas').modal('show', {backdrop: 'static'});          
          document.getElementById('idvar').value = idvar;
          document.getElementById('nama').value = nama;
          document.getElementById('gmbr').value = gmbr;
          document.getElementById('sklur').value = sk;
          document.getElementById('tgl').value = tgl;         
        }
    </script>
  <!-- Delete Modal HTML kapas -->
  <div id="hapuskapas" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">            
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">          
            <p>Yakin ingin menghapus data ini?</p>
            <p class="text-warning"><small></small></p>
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
            <input type="submit" class="btn btn-danger" value="Hapus">
          </div>
        </form>
      </div>
    </div>
  </div>

 <!-- Tambah Modal HTML Kapuk -->
  <!-- Edit Modal HTML kapuk-->
  <div id="editkapuk" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">            
            <h4 class="modal-title">Edit Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">          
            <div class="form-group">
              <label>Komoditas</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Tahun Pelepasan</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Karakteristik</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Status</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Instansi</label>
              <input type="text" class="form-control" required>
            </div>          
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
            <input type="submit" class="btn btn-info" value="Simpan">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Delete Modal HTML kapuk -->
  <div id="hapuskapuk" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">            
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">          
            <p>Yakin ingin menghapus data ini?</p>
            <p class="text-warning"><small></small></p>
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
            <input type="submit" class="btn btn-danger" value="Hapus">
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Tambah Modal HTML Kenaf -->
  <div id="tambahkenaf" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">            
            <h4 class="modal-title">Tambah Data Tanaman Kenaf</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">          
            <div class="form-group">
              <label>Nama Tanaman</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Deskripsi Kenaf</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Permukaan Batang</label>
              <input type="text" class="form-control" required>
            </div>  
            <div class="form-group">
              <label>Warna Batang</label>
              <input type="text" class="form-control" required>
            </div>  
            <div class="form-group">
              <label>Percabangan</label>
              <input type="text" class="form-control" required>
            </div>   
            <div class="form-group">
              <label>Bentuk Daun</label>
              <input type="text" class="form-control" required>
            </div>   
            <div class="form-group">
              <label>Umum Berbunga</label>
              <input type="text" class="form-control" required>
            </div>   
            <div class="form-group">
              <label>Warna Bunga</label>
              <input type="text" class="form-control" required>
            </div>        
            <div class="form-group">
              <label>Umur Panen</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Tinggi Tanaman</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Diameter Batang</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Potensi Hasil</label>
              <input type="text" class="form-control" required>
            </div>
             <div class="form-group">
              <label>Berat Biji</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Panjang Serat</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Kekuatan Serat</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Persentase Serat</label>
              <input type="text" class="form-control" required>
            </div>
              <div class="form-group" style="padding-bottom: 160px">
              <label>Upload Gambar</label>
              <div class="input-group image-preview">
                <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->

                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Browse</span>
                        <input type="file" style="width:100px" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->
                    </div>
                </span>
            </div> 
            </div> 
          </div>  
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
            <input type="submit" class="btn btn-success" value="Tambah">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Edit Modal HTML kenaf-->
  <div id="editkenaf" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">            
            <h4 class="modal-title">Edit Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">          
            <div class="form-group">
              <label>Komoditas</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Tahun Pelepasan</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Karakteristik</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Status</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Instansi</label>
              <input type="text" class="form-control" required>
            </div>          
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
            <input type="submit" class="btn btn-info" value="Simpan">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Delete Modal HTML kenaf -->
  <div id="hapuskenaf" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">            
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">          
            <p>Yakin ingin menghapus data ini?</p>
            <p class="text-warning"><small></small></p>
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
            <input type="submit" class="btn btn-danger" value="Hapus">
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Tambah Modal HTML Rami -->
  <div id="tambahrami" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">            
            <h4 class="modal-title">Tambah Data Tanaman Rami</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">          
             <div class="form-group">
              <label>Nama Tanaman</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Deskripsi Rami</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Asal Varietas</label>
              <input type="text" class="form-control" required>
            </div>  
            <div class="form-group">
              <label>Tipe Pertumbuhan</label>
              <input type="text" class="form-control" required>
            </div>  
            <div class="form-group">
              <label>Warna Batang</label>
              <input type="text" class="form-control" required>
            </div>   
            <div class="form-group">
              <label>Warna Daun Permukaan Atas</label>
              <input type="text" class="form-control" required>
            </div>   
            <div class="form-group">
              <label>Warna Pucuk Daun</label>
              <input type="text" class="form-control" required>
            </div>   
            <div class="form-group">
              <label>Bentuk Daun</label>
              <input type="text" class="form-control" required>
            </div>        
            <div class="form-group">
              <label>Warna Bungan Jantan</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Warna Bungan Betina</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Umur Mulai Berbunga</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Tinggi Tanaman</label>
              <input type="text" class="form-control" required>
            </div>
             <div class="form-group">
              <label>Diameter Batang</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Jumlah Batang</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Umur Panen Serat</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Berat Serat</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Produktivitas Serat</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Rendemen Serat</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Kualitas Serat</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Kesesuain Daerah</label>
              <input type="text" class="form-control" required>
            </div>
              <div class="form-group" style="padding-bottom: 160px">
              <label>Upload Gambar</label>
              <div class="input-group image-preview">
                <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->

                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Browse</span>
                        <input type="file" style="width:100px" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->
                    </div>
                </span>
            </div> 
            </div>     
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
            <input type="submit" class="btn btn-success" value="Tambah">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Edit Modal HTML Rami-->
  <div id="editrami" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">            
            <h4 class="modal-title">Edit Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">          
            <div class="form-group">
              <label>Komoditas</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Tahun Pelepasan</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Karakteristik</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Status</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Instansi</label>
              <input type="text" class="form-control" required>
            </div>          
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
            <input type="submit" class="btn btn-info" value="Simpan">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Delete Modal HTML Rami -->
  <div id="hapusrami" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">            
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">          
            <p>Yakin ingin menghapus data ini?</p>
            <p class="text-warning"><small></small></p>
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
            <input type="submit" class="btn btn-danger" value="Hapus">
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Tambah Modal HTML Rosela -->
  <div id="tambahrosela" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">            
            <h4 class="modal-title">Tambah Data Tanaman Rosela</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">          
            <div class="form-group">
              <label>Nama Tanaman</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>No Aksesi</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Nama Aksesi</label>
              <input type="text" class="form-control" required>
            </div>  
            <div class="form-group">
              <label>Asal</label>
              <input type="text" class="form-control" required>
            </div>  
            <div class="form-group">
              <label>Proses Pemuliaan</label>
              <input type="text" class="form-control" required>
            </div>   
            <div class="form-group">
              <label>Spesies</label>
              <input type="text" class="form-control" required>
            </div>   
            <div class="form-group">
              <label>Permukaan Batang</label>
              <input type="text" class="form-control" required>
            </div>   
            <div class="form-group">
              <label>Warna Batang</label>
              <input type="text" class="form-control" required>
            </div>        
            <div class="form-group">
              <label>Warna Tangkai Daun</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Warna Helaian Daun</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Warna Tulang Daun</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Warna Tepi Daun</label>
              <input type="text" class="form-control" required>
            </div>
             <div class="form-group">
              <label>Warna Mahkota Bunga</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Warna Kelopak Bunga</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Warna Anak Kelopak</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Warna Kuncup Bunga</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Warna Buah</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Warna Biji</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Bentuk Daun</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Bentuk Ujung Kapsul</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Percabangan</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Tinggi Tanaman</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Diameter Batang</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Umur Tanaman</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Berat 1000 Biji</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Kandungan Nutrisi Kelopak Bunga</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Panjang Kapsul</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Diameter Kapsul</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Bobot 100 Kelopak Kering</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Potensi Hasil Kelopak Kering</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Ketahanan Terhadap Penyakit</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Ketahanan Terhadap Fotoperioditas</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Adaptasi</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Peneliti</label>
              <input type="text" class="form-control" required>
            </div>
             <div class="form-group" style="padding-bottom: 160px">
              <label>Upload Gambar</label>
              <div class="input-group image-preview">
                <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->

                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Browse</span>
                        <input type="file" style="width:100px" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->
                    </div>
                </span>
            </div> 
            </div> 
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
            <input type="submit" class="btn btn-success" value="Tambah">
          </div>
        </form>
      </div>
    </div>
  </div>
 <!-- Edit Modal HTML Rosela-->
  <div id="editrosela" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">            
            <h4 class="modal-title">Edit Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">          
            <div class="form-group">
              <label>Komoditas</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Tahun Pelepasan</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Karakteristik</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Status</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Instansi</label>
              <input type="text" class="form-control" required>
            </div>          
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
            <input type="submit" class="btn btn-info" value="Simpan">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Delete Modal HTML Rosela -->
  <div id="hapusrosela" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">            
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">          
            <p>Yakin ingin menghapus data ini?</p>
            <p class="text-warning"><small></small></p>
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
            <input type="submit" class="btn btn-danger" value="Hapus">
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Tambah Modal HTML Tebu -->
  <div id="tambahtebu" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">            
            <h4 class="modal-title">Tambah Data Tebu</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">          
            <div class="form-group">
              <label>Komoditas</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Tahun Pelepasan</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Karakteristik</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Status</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Instansi</label>
              <input type="text" class="form-control" required>
            </div> 
             <div class="form-group" style="padding-bottom: 160px">
              <label>Upload Gambar</label>
              <div class="input-group image-preview">
                <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->

                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Browse</span>
                        <input type="file" style="width:100px" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->
                    </div>
                </span>
            </div> 
            </div>  
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
            <input type="submit" class="btn btn-success" value="Tambah">
          </div>
        </form>
      </div>
    </div>
  </div>
 <!-- Edit Modal HTML Tebu-->
  <div id="edittebu" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">            
            <h4 class="modal-title">Edit Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">          
            <div class="form-group">
              <label>Komoditas</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Tahun Pelepasan</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Karakteristik</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Status</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Instansi</label>
              <input type="text" class="form-control" required>
            </div>          
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
            <input type="submit" class="btn btn-info" value="Simpan">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Delete Modal HTML Tebu -->
  <div id="hapustebu" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">            
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">          
            <p>Yakin ingin menghapus data ini?</p>
            <p class="text-warning"><small></small></p>
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
            <input type="submit" class="btn btn-danger" value="Hapus">
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Tambah Modal HTML wijen -->
  <div id="tambahwijen" class="modal fade">
    <div class="modal-dialog" width="2000px">
      <div class="modal-content" >
        <form>
          <div class="modal-header">            
            <h4 class="modal-title">Tambah Data Wijen</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body" >          
            <div class="form-group">
              <label>Nama Tanaman</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Jenis</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Habitus</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Umur Panen</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Jumlah Ruang Polong</label>
              <input type="text" class="form-control" required>
            </div>  
             <div class="form-group">
              <label>Potensi Produksi</label>
              <input type="text" class="form-control" required>
            </div>
             <div class="form-group">
              <label>Daya Adaptasi</label>
              <input type="text" class="form-control" required>
            </div> 
             <div class="form-group">
              <label>Adaptasi</label>
              <input type="text" class="form-control" required>
            </div>  
             <div class="form-group">
              <label>Ketahanan Terhadap</label>
              <input type="text" class="form-control" required>
            </div> 
             <div class="form-group" style="padding-bottom: 160px">
              <label>Upload Gambar</label>
              <div class="input-group image-preview">
                <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->

                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Browse</span>
                        <input type="file" style="width:100px" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->
                    </div>
                </span>
            </div> 
            </div>  
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
            <input type="submit" class="btn btn-success" value="Tambah">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Edit Modal HTML Wijen-->
  <div id="editwijen" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">            
            <h4 class="modal-title">Edit Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">          
            <div class="form-group">
              <label>Komoditas</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Tahun Pelepasan</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Karakteristik</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Status</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Instansi</label>
              <input type="text" class="form-control" required>
            </div>          
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
            <input type="submit" class="btn btn-info" value="Simpan">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Delete Modal HTML Wijen -->
  <div id="hapuswijen" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">            
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">          
            <p>Yakin ingin menghapus data ini?</p>
            <p class="text-warning"><small></small></p>
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
            <input type="submit" class="btn btn-danger" value="Hapus">
          </div>
        </form>
      </div>
    </div>
  </div>


<footer>
  <!-- <div class="container-fluid">
    <div class="container" style="margin-top: 50px; margin-bottom: 40px;">
    <figure style="margin-bottom: 30px;">
      <img src="<?php echo base_url();?>/assets/img/adminbalittas.png" width=250 alt="Logo">
    </figure> -->
       <!--  <p >&copy; Copyright 2018 | Built with <i id="cp" class="glyphicon glyphicon-heart"></i> by Magang</p>
        <p> <i class="glyphicon glyphicon-phone-alt"></i> 000 000 000 000 | <i class="glyphicon glyphicon-envelope"></i> wkwkwkwkwk@gmail.com</p>
        <div class="row table-center" >
          <div class="col-sm-2 col-lg-2">
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
        </div>
        </div>

        
      </div>
  </div> -->
  <div class="container-fluid text-center" style="color:white;background-color: black;">
        <div style=" margin-top: 10px;">
          <p style="font-family: calibri"><span class="glyphicon glyphicon-copyright-mark"></span> 2018 All Reserved Design By BALITTAS</p>
        </div>
      </div>
  
</footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>/assets/js/jquery-3.3.1.min.js"></script> 
    <script src="<?php echo base_url();?>/assets/js/jquery.easing.1.3.js"></script> 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url();?>/assets/js/script.js"></script>
    <script src="<?php echo base_url();?>/assets/perfect-scrollbar/perfect-scrollbar.min.js"></script>

  </body>
</html>