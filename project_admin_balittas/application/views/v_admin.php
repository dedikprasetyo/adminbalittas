<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Balittas</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/styleadmin.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/simple-sidebar.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/img/Logo-Kementerian-Pertanian.png" rel="shortcut icon">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="<?php echo base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/css/styleadmin.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/css/simple-sidebar.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/img/Logo-Kementerian-Pertanian.png" rel="shortcut icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </head>
  <body>
  <header>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
         <div class="navbar-header">
            <a href="#home" class="navbar-brand halaman">
              <img src="<?php echo base_url(); ?>/assets/img/balittaslitbang.png" width="270" style="margin-right:-90px; padding-right: 25px;">
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
                           <li><a href="<?php echo base_url();?>c_data/tembakau" class="halaman">Tembakau</a></li>
                            <hr style="margin-left:0px; margin: 1px 0px 1px 0px; text-align: left; width:95%;">
                            <li><a href="#JarakPagar" class="halaman">Jarak Pagar</a></li>
                            <hr style="margin-left:0px; margin: 1px 0px 1px 0px; text-align: left; width:95%;">
                            <li><a href="#JarakKepyar" class="halaman">Jarak Kepyar</a></li>
                            <hr style="margin-left:0px; margin: 1px 0px 1px 0px; text-align: left; width:95%;">
                            <li><a href="#Kapas" class="halaman">Kapas</a></li>
                            <hr style="margin-left:0px; margin: 1px 0px 1px 0px; text-align: left; width:95%;">
                            <li><a href="#Kapuk" class="halaman">Kapuk</a></li>
                            <hr style="margin-left:0px; margin: 1px 0px 1px 0px; text-align: left; width:95%;">
                        </div>
                            <div class="col-sm-6 col-lg-6">
                          <li><a href="#Kenaf" class="halaman">Kenaf</a></li>
                           <hr style="margin-left:0px; margin: 1px 0px 1px 0px; text-align: left; width:95%;">
                          <li><a href="#Rami" class="halaman">Rami</a></li>
                          <hr style="margin-left:0px; margin: 1px 0px 1px 0px; text-align: left; width:95%;">
                          <li><a href="#Rosela" class="halaman">Rosela</a></li>
                          <hr style="margin-left:0px; margin: 1px 0px 1px 0px; text-align: left; width:95%;">
                          <li><a href="#Tebu" class="halaman">Tebu</a></li>
                          <hr style="margin-left:0px; margin: 1px 0px 1px 0px; text-align: left; width:95%;">
                          <li><a href="#Wijen" class="halaman">Wijen</a></li>
                          <hr style="margin-left:0px; margin: 1px 0px 1px 0px; text-align: left; width:95%;">
                        </div>
                            </div>
                      </ul>
                  </li>
                    <li> <a href="#login" data-toggle="modal" data-target="#login-modal" class="halaman">Welcome Admin</a></li>
                    <li> <a href="index.html#layanan" class="halaman">Logout</a></li>
      </ul>
    </div> 
    
        <div class="collapse navbar-collapse" id="bar"  style="margin-top:5px; margin-left: -60px; margin-right: -60px; border:0;" >
          <ul class="nav navbar-nav navbar-right hidden-md hidden-lg" style="background-color:rgba(28,69,26,0.95);">
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
  </header>


  <section class="Deskripsi" id="Deskripsi" style="padding-top: 2px; margin-top: 100px;">
    <div class="container">
      <div class="table table-wrapper" >
        <div class="table-title">
          <div class="row">
            <div class="col-sm-6 ">
              <h2>Data <b>Deskripsi</b></h2>
            </div>
            <div class="col-sm-6 ">
                <a href="#tambahdeskripsi" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus-square" aria-hidden="true"></i> <span>Tambah Data</span></a>            
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead style="font-size: 0.9em;">
              <tr>
                <th>No</th>
                <th>Nama Serat</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no = 1;
                foreach($serat as $row) {
                  $deskripsi_cut = "";
                  if (strlen($row['deskripsi_serat']) != 0){
                    $deskripsi_cut = substr($row['deskripsi_serat'], 0, 500) . ' ...';
                  }
              ?>
              <tr style="font-size: 0.9em;">
                <td><?php echo $no++ ?></td>
                <td><?php echo "$row[nama_serat]" ?></td>
                <td><?php echo "$deskripsi_cut" ?></td>
                <td>
                  <a href='c_data/ubah/<?php  echo "$row[id_serat]" ?>' class="edit" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                  <a href="#hapusdeskripsi" class="delete" data-toggle="modal"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                  </td>
                </tr>
              <?php
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

  <section class="Deskripsi" id="Deskripsi" style="padding-top: 2px; margin-top: 100px;">
    <div class="container">
      <div class="table table-wrapper" >
        <div class="table-title">
          <div class="row">
            <div class="col-sm-6 ">
              <h2>Data <b>Deskripsi</b></h2>
            </div>
            <div class="col-sm-6 ">
                <a href="#tambahdeskripsi" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus-square" aria-hidden="true"></i> <span>Tambah Data</span></a>            
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead style="font-size: 0.9em;">
              <tr>
                <th>No</th>
                <th>Nama Serat</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no = 1;
                foreach($serat as $row) {
                  $deskripsi_cut = "";
                  if (strlen($row['deskripsi_serat']) != 0){
                    $deskripsi_cut = substr($row['deskripsi_serat'], 0, 500) . ' ...';
                  }
              ?>
              <tr style="font-size: 0.9em;">
                <td><?php echo $no++ ?></td>
                <td><?php echo "$row[nama_serat]" ?></td>
                <td><?php echo "$deskripsi_cut" ?></td>
                <td>
                  <a href='c_data/ubah/<?php  echo "$row[id_serat]" ?>' class="edit" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                  <a href="#hapusdeskripsi" class="delete" data-toggle="modal"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                  </td>
                </tr>
              <?php
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>


  <section class="jarakpagar" id="JarakPagar" style="padding-top: 2px; margin-top: 100px;">
    <div class="container">
      <div class="col-md-12">
        <div class="table table-wrapper" >
          <div class="table-title">
            <div class="row">
              <div class="col-sm-6 ">
                <h2>Data <b>Jarak Pagar</b></h2>
              </div>
              <div class="col-sm-6 ">
                <a href="#tambahjarakpagar" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus-square" aria-hidden="true"></i> <span>Tambah Data</span></a>            
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead style="font-size: 0.9em;">
                <tr>
                  <th>No</th>
                  <th>ID Jarak Pagar</th>
                  <th>ID Deskripsi Umum</th>
                  <th style="width:100%">Nama Jarak Pagar</th>
                  <th>Komoditas</th>
                  <th>Tahun Pelepasan</th>
                  <th>Karakteristik</th>
                  <th>Status</th>
                  <th>Instansi</th>
                  <th>Agroekosistem</th>
                  <th>Deskripsi</th>
                  <th>Gambar</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $no = 1;
                  foreach($jarak_pagar as $row) {
                    $karakteristik_cut = "";
                    $deskripsi_cut = "";
                    if (strlen($row['KARAKTERISTIK']) != 0){
                      $karakteristik_cut = substr($row['KARAKTERISTIK'], 0, 50) . ' ...';
                    }
                    if (strlen($row['DESKRIPSI']) != 0){
                      $deskripsi_cut = substr($row['DESKRIPSI'], 0, 50) . ' ...';
                    }
                ?>
                <tr style="font-size: 0.9em;">
                  <td><?php echo $no++ ?></td>
                  <td><?php echo "$row[ID_JARAK_PAGAR]" ?></td>
                  <td><?php echo "$row[ID_DESKRIPSI_UMUM]" ?></td>
                  <td><?php echo "$row[NAMA_JARAK_PAGAR]" ?></td>
                  <td><?php echo "$row[KOMODITAS]" ?></td>
                  <td><?php echo "$row[TAHUN_PELEPASAN]" ?></td>
                  <td><?php echo "$karakteristik_cut" ?></td>
                  <td><?php echo "$row[STATUS]" ?></td>
                  <td><?php echo "$row[INSTANSI]" ?></td>
                  <td><?php echo "$row[AGROEKOSISTEM]" ?></td>
                  <td><?php echo "$deskripsi_cut" ?></td>
                  <td>1</td> <!-- gambar blm-->
                  <td>
                    <a href='c_data/ubah/<?php  echo "$row[ID_JARAK_PAGAR]" ?>' class="edit" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    <!-- <a href='c_data/hapus/<?php  echo "$row[ID_JARAK_PAGAR]" ?>' class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="hapus">&#xE872;</></a> -->
                    <a href="#hapusjarakpagar" class="delete" data-toggle="modal"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                  </td>
                </tr>
                <?php
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>      
    </div>
  </section>
  

  <section class="JarakKepyar" id="JarakKepyar">
                  <div class="container">
                    <div class="col-md-12">
                       <div class="table table-wrapper">
                      <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6">
                    <h2>Data <b>Jarak Kepyar</b></h2>
                  </div>
                  <div class="col-sm-6">
                    <a href="#tambahjarakkepyar" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus-square" aria-hidden="true"></i><span>Tambah Data</span></a>            
                  </div>
                        </div>
                    </div>
                        <div class="table-responsive">
                          <table class="table table-striped table-hover">
                        <thead style="font-size: 0.9em;">
                            <tr>
                    <th>
                      <span class="custom-checkbox">
                        <input type="checkbox" id="checkAll3">
                        <label for="checkAll3"></label>
                      </span>
                    </th>
                                <th>No</th>
                                  <th>Nama Tanaman</th>
                                  <th>Warna Batang</th>
                                  <th>Warna Tangkai Daun</th>
                                  <th>Warna Biji</th>
                                  <th>Diameter Batang</th>
                                  <th>Tinggi Tanaman</th>
                                  <th>Umur Panen</th>
                                  <th>Jumlah Tandan Buah</th>
                                  <th>Jumlah Buah</th>
                                  <th>Potensi Produksi</th>
                                  <th>Berat</th>
                                  <th>Proses Pembijian</th>
                                  <th>Kandungan Minyak</th>
                                  <th>Gambar</th>
                                  <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="font-size: 0.9em;">
                    <td>
                      <span class="custom-checkbox">
                        <input type="checkbox" class="checkbox3" name="options[]" value="1">
                        <label for="checkbox3"></label>
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
                            <a href="#editjarakkepyar" class="edit" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <a href="#hapusjarakkepyar" class="delete" data-toggle="modal"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
                </div>
            </div>
          </div> 
        </div>
    </section>

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
                        <a href="#tambahjarakkepyar" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus-square" aria-hidden="true"></i><span>Tambah Data</span></a>            
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
<section class="Tebu" id="Tebu">
                        <div class="container">
                          <div class="col-md-12">
                          <div class="table table-wrapper">
                           <div class="table-title">
                              <div class="row">
                                  <div class="col-sm-6">
                          <h2>Data <b>Tebu</b></h2>
                        </div>
                        <div class="col-sm-6">
                          <a href="#tambahtebu" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus-square" aria-hidden="true"></i> <span>Tambah Data</span></a>            
                        </div>
                              </div>
                          </div>
                              <div class="table-responsive" >
                                <table class="table table-striped table-hover">
                              <thead style="font-size: 0.9em;">
                                  <tr>
                          <th>
                            <span class="custom-checkbox">
                              <input type="checkbox" id="checkAll9">
                              <label for="checkAll9"></label>
                            </span>
                          </th>
                                        <th>No</th>
                                        <th>Nama Pemuliaan Tanaman</th>
                                        <th>Aksi</th>
                                  </tr>
                              </thead>
                              <tbody>
                          <tr style="font-size: 0.9em;">
                          <td>
                            <span class="custom-checkbox">
                              <input type="checkbox" class="checkbox9" name="options[]" value="1">
                              <label for="checkbox9"></label>
                            </span>
                          </td>
                        <td>1</td>
                        <td>Ada</td>
                        <td>
                                 <a href="#edittebu" class="edit" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <a href="#hapustebu" class="delete" data-toggle="modal"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                        </td>
                     </tr>
                </tbody>
            </table>
                </div>
            </div>
    </div>
    </section>
    <section class="Wijen" id="Wijen">
   
          <div class="container">
             <div class="table table-wrapper">
     <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
            <h2>Data <b>Wijen</b></h2>
          </div>
          <div class="col-sm-6">
            <a href="#tambahwijen" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus-square" aria-hidden="true"></i><span>Tambah Data</span></a>            
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
                                 <a href="#editwijen" class="edit" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <a href="#hapuswijen" class="delete" data-toggle="modal"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                </tbody>
                  </table>
                </div>
          </div> 
          </div>
          </div>
    </section>
<!-- Tambah Modal HTML Tembakau-->
  <div id="tambahtembakau" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">            
            <h4 class="modal-title">Tambah Data Tanaman Tembakau</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">          
            <div class="form-group">
              <label>Nama Tanaman</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Deskripsi</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Kode Seleksi</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Jenis Tanaman</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Asal</label>
              <input type="text" class="form-control" required>
            </div>    
            <div class="form-group">
              <label>Metode Pemuliaan</label>
              <input type="text" class="form-control" required>
            </div> 
             <div class="form-group">
              <label>Spesies</label>
              <input type="text" class="form-control" required>
            </div>   
            <div class="form-group">
              <label>Tipe Varietas</label>
              <input type="text" class="form-control" required>
            </div>  
            <div class="form-group">
              <label>Tetua Betina</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Tetua Jantan</label>
              <input type="text" class="form-control" required>
            </div>  
            <div class="form-group">
              <label>Habitus</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Tinggi Tanaman</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Panjang Ruas</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Warna Batang</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Bulu Batang</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Jumlah Daun Produksi</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Sudut Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Ujung Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Tepi Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Permukaan Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Tebal Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Sirung</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Tipe Tangkai Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Panjang Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Lebar Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Phylotaksi</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Tangkai Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Nisbah Indeks Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Lebar Sayap Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Kekasaran Urat Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Bentuk Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Irisan Melintang Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Bendol Muka Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Ombak Tepi Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Telinga Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Warna Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Umur Berbunga</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Panjang Bunga</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Diameter Tabung Bunga</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Penggembungan Bunga</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Ukuran Mahkota</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Warna Mahkota Bunga</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Perkembangan Putik</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Ujung Mahkota</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Benang Sari Vs Putik</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Bentuk Bunga</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Posisi Bunga Vs Daun Atas</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Kekompakan Bunga</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Bentuk Buah</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Warna Biji</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Hasil Per Ha</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Umur Panen</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Krosok</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Rajangan Kering</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Nilai Indek Mutu</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Nilai Indek Tanaman</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Kadar Nikotin</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Ketahanan</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Kesesuaian Lokasi</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Metode Curing</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Pemulia</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Peneliti Pendukung</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Teknisi</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Pemilik Varietas</label>
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
  <!-- Edit Modal HTML Tembakau-->
  <div id="edittembakau" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">            
            <h4 class="modal-title">Edit Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">          
            <div class="form-group">
              <label>Nama Tanaman</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Deskripsi</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Kode Seleksi</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Jenis Tanaman</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Asal</label>
              <input type="text" class="form-control" required>
            </div>    
            <div class="form-group">
              <label>Metode Pemuliaan</label>
              <input type="text" class="form-control" required>
            </div> 
             <div class="form-group">
              <label>Spesies</label>
              <input type="text" class="form-control" required>
            </div>   
            <div class="form-group">
              <label>Tipe Varietas</label>
              <input type="text" class="form-control" required>
            </div>  
            <div class="form-group">
              <label>Tetua Betina</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Tetua Jantan</label>
              <input type="text" class="form-control" required>
            </div>  
            <div class="form-group">
              <label>Habitus</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Tinggi Tanaman</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Panjang Ruas</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Warna Batang</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Bulu Batang</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Jumlah Daun Produksi</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Sudut Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Ujung Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Tepi Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Permukaan Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Tebal Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Sirung</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Tipe Tangkai Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Panjang Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Lebar Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Phylotaksi</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Tangkai Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Nisbah Indeks Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Lebar Sayap Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Kekasaran Urat Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Bentuk Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Irisan Melintang Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Bendol Muka Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Ombak Tepi Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Telinga Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Warna Daun</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Umur Berbunga</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Panjang Bunga</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Diameter Tabung Bunga</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Penggembungan Bunga</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Ukuran Mahkota</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Warna Mahkota Bunga</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Perkembangan Putik</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Ujung Mahkota</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Benang Sari Vs Putik</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Bentuk Bunga</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Posisi Bunga Vs Daun Atas</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Kekompakan Bunga</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Bentuk Buah</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Warna Biji</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Hasil Per Ha</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Umur Panen</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Krosok</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Rajangan Kering</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Nilai Indek Mutu</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Nilai Indek Tanaman</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Kadar Nikotin</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Ketahanan</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Kesesuaian Lokasi</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Metode Curing</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Pemulia</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Peneliti Pendukung</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Teknisi</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Pemilik Varietas</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Upload Gambar</label>
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
  <!-- Delete Modal HTML Tembakau-->
  <div id="hapustembakau" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">            
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">          
            <p>Yakin Ingin menghapus data ini ?</p>
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

  <!-- Tambah Modal HTML Jarak Pagar-->
  <div id="tambahjarakpagar" class="modal fade">
    <div class="modal-dialog" >
      <div class="modal-content" >
        <form>
          <div class="modal-header">            
            <h4 class="modal-title">Tambah Data Tanaman Jarak Pagar</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
          <div class="form-group">
              <label>Nama Jarak Pagar</label>
              <input type="text" class="form-control" name="NAMA_JARAK_PAGAR" value="<?php echo isset($default['NAMA_JARAK_PAGAR']) ? $default['NAMA_JARAK_PAGAR'] : "" ?>" required>
            </div>          
            <div class="form-group">
              <label>Komoditas</label>
              <input type="text" class="form-control" name="KOMODITAS" value="<?php echo isset($default['KOMODITAS']) ? $default['KOMODITAS'] : "" ?>">
            </div>
            <div class="form-group">
              <label>Tahun Pelepasan</label>
              <input type="text" class="form-control" name="TAHUN_PELEPASAN" value="<?php echo isset($default['TAHUN_PELEPASAN']) ? $default['TAHUN_PELEPASAN'] : "" ?>">
            </div>
            <div class="form-group">
              <label>Karakteristik</label>
              <input type="text" class="form-control" name="KARAKTERISTIK" value="<?php echo isset($default['KARAKTERISTIK']) ? $default['KARAKTERISTIK'] : "" ?>">
            </div>
            <div class="form-group">
              <label>Status</label>
              <input type="text" class="form-control" name="STATUS" value="<?php echo isset($default['STATUS']) ? $default['STATUS'] : "" ?>">
            </div>
            <div class="form-group">
              <label>Instansi</label>
              <input type="text" class="form-control" name="INSTANSI" value="<?php echo isset($default['INSTANSI']) ? $default['INSTANSI'] : "" ?>">
            </div>
            <div class="form-group">
              <label>Agroekosistem</label>
              <input type="text" class="form-control" name="AGROEKOSISTEM" value="<?php echo isset($default['AGROEKOSISTEM']) ? $default['AGROEKOSISTEM'] : "" ?>">
            </div>
            <div class="form-group">
              <label>Deskripsi</label>
              <input type="text" class="form-control" name="DESKRIPSI" value="<?php echo isset($default['DESKRIPSI']) ? $default['DESKRIPSI'] : "" ?>">
                  
            </div>
            <div class="form-group" style="padding-bottom: 160px">
              <label>Upload Gambar</label>
              <div class="input-group image-preview">
                <input type="text" class="form-control image-preview-filename" disabled="disabled" name="GAMBAR" onchange="readURL(this);" value="<?php echo isset($default['GAMBAR']) ? $default['GAMBAR'] : "" ?>"> <!-- don't 
                give a name === doesn't send on POST/GET -->

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
            <!-- <input type="submit" class="btn btn-success" value="Tambah"> -->
            <a href="c_data/tambah" class="btn btn-success"><span>Tambah Data (pakek form)</span></a>
            <a href="tambah">
            <button name="tombol_submit" class="btn btn-success">
              Simpan (masih gk bisa)
            </button></a>
          </div>
        </form>
      </div>
    </div>
  </div>


  <!-- Edit Modal HTML JARAK PAGAR-->
  <div id="editjarakpagar" class="modal fade">
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
  <!-- Delete Modal HTML JARAK PAGAR-->
  <div id="hapusjarakpagar" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">            
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">          
            <p>Yakin Ingin menghapus data ini ?</p>
            <p class="text-warning"><small></small></p>
          </div>
          <div class="modal-footer">
            <!-- <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal"> -->
            <!-- <input type="submit" class="btn btn-danger" value="Hapus" href='c_data/hapus/<?php
            echo "$row[ID_JARAK_PAGAR]" ?>'> -->
           
            <a href="#" type="button" class="btn btn-default" data-dismiss="modal" value="Batal">Batal</a>
            <a href='c_data/hapus/<?php echo "$row[ID_JARAK_PAGAR]" ?>' type="submit" class='btn btn-danger'>Hapus</a>
            
          </div>
        </form>
      </div>
    </div>
  </div>

      <!-- Tambah Modal HTML JARAK KEPYAR-->
  <div id="tambahjarakkepyar" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">            
            <h4 class="modal-title">Tambah Data Tanaman Jarak Kepyar</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">          
             <div class="form-group">
              <label>Nama Tanaman</label>
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
              <label>Warna Biji</label>
              <input type="text" class="form-control" required>
            </div>  
            <div class="form-group">
              <label>Diameter Batang</label>
              <input type="text" class="form-control" required>
            </div>   
            <div class="form-group">
              <label>Tinggi Tanaman</label>
              <input type="text" class="form-control" required>
            </div>   
            <div class="form-group">
              <label>Umur Panen</label>
              <input type="text" class="form-control" required>
            </div>   
            <div class="form-group">
              <label>Jumlah Tandan Buah</label>
              <input type="text" class="form-control" required>
            </div>        
            <div class="form-group">
              <label>Potensi Produksi</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Berat</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Proses Pembijian</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Kandungan Minyak</label>
              <button></button>
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
  <!-- Edit Modal HTML jarak kepyar-->
  <div id="editjarakkepyar" class="modal fade">
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
  <!-- Delete Modal HTML jarak kepyar -->
  <div id="hapusjarakkepyar" class="modal fade">
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

   <!-- Tambah Modal HTML Kapas -->
  <div id="tambahkapas" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">            
            <h4 class="modal-title">Tambah Data Tanaman Kapas</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">          
            <div class="form-group">
              <label>Nama Tanaman</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Deskripsi Kapas</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Tahun Pelepasan</label>
              <input type="text" class="form-control" required>
            </div>  
            <div class="form-group">
              <label>Umum Panen</label>
              <input type="text" class="form-control" required>
            </div>  
            <div class="form-group">
              <label>Produktivitas</label>
              <input type="text" class="form-control" required>
            </div>   
            <div class="form-group">
              <label>Potensi Produksi</label>
              <input type="text" class="form-control" required>
            </div>   
            <div class="form-group">
              <label>Kandungan Serat</label>
              <input type="text" class="form-control" required>
            </div>   
            <div class="form-group">
              <label>Mutu Serat</label>
              <input type="text" class="form-control" required>
            </div>        
            <div class="form-group">
              <label>Ketahanan</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Status</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Peneliti</label>
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
  <!-- Edit Modal HTML kapas-->
  <div id="editkapas" class="modal fade">
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
  <div id="tambahkapuk" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">            
            <h4 class="modal-title">Tambah Data Tanaman Kapuk</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">          
            <div class="form-group">
              <label>Nama Tanaman</label>
              <input type="text" class="form-control" required>
            </div> 
            <div class="form-group">
              <label>Deskripsi Kapuk</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Tahun Pelepasan</label>
              <input type="text" class="form-control" required>
            </div>  
            <div class="form-group">
              <label>Tipe Pertumbuhan</label>
              <input type="text" class="form-control" required>
            </div>  
            <div class="form-group">
              <label>Produktivitas</label>
              <input type="text" class="form-control" required>
            </div>   
            <div class="form-group">
              <label>Berat Gelondong</label>
              <input type="text" class="form-control" required>
            </div>   
            <div class="form-group">
              <label>Kandungan Serat</label>
              <input type="text" class="form-control" required>
            </div>   
            <div class="form-group">
              <label>Kadar Minyak Biji</label>
              <input type="text" class="form-control" required>
            </div>        
            <div class="form-group">
              <label>Warna Serat</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Penjelasan</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Status</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Peneliti</label>
              <input type="text" class="form-control" required>
            </div>
             <div class="form-group">
              <label>Instansi</label>
              <input type="text" class="form-control" required>
            </div>
              <div class="form-group" style="padding-bottom: 160px;">
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
                        <input type="file" style="width:100px;" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->
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
              <div class="form-group" style="padding-bottom: 160px;">
              <label>Upload Gambar</label>
              <div class="input-group image-preview">
                <input type="text" class="form-control image-preview-filename" disabled="disabled">
                 <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Browse</span>
                        <input type="file" style="width:100px;" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->
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
    <div class="container-fluid text-center" style="color:white;background-color: black;">
          <div style=" margin-top: 10px;">
            <p style="font-family: calibri"><span class="glyphicon glyphicon-copyright-mark"></span> 2018 All Reserved Design By BALITTAS</p>
          </div>
    </div>
</footer>
    <script src="<?php echo base_url(); ?>/assets/js/jquery-3.3.1.min.js"></script> 
    <script src="<?php echo base_url(); ?>/assets/js/jquery.easing.1.3.js"></script> 
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/script.js"></script>
    <script src="<?php echo base_url(); ?>/assets/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url()?>/assets/js/jquery-3.3.1.min.js"></script> 
    <script src="<?php echo base_url()?>/assets/js/jquery.easing.1.3.js"></script> 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url()?>/assets/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url()?>/assets/js/script.js"></script>
    <script src="<?php echo base_url()?>/assets/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  </body>
</html>