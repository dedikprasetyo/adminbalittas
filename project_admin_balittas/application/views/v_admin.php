<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Balittas</title>
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
  </head>
  <body>
    <header>
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
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
                  <li><a href="#Serat" class="halaman">Tembakau</a></li>
                  <li><a href="#Varietas" class="halaman">Jarak Pagar</a></li>
                  <li><a href="#Leaflet" class="halaman">Jarak Kepyar</a></li>
                  <li><a href="#Budidaya" class="halaman">Kapas</a></li>
                  <li><a href="#Stok Benih" class="halaman">Kapuk</a></li>
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

    <!-- Data Serat -->
    <section class="serat" id="serat" style="padding-top: 2px; margin-top: 100px;">
      <div class="container">
        <div class="table table-wrapper">
          <div class="table-title">
            <div class="row">
              <div class="col-sm-6">
                <h2>Data <b>Serat</b></h2>
              </div>
              <div class="col-sm-6">
                <a href="#tambahserat" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus-square" aria-hidden="true"></i><span>Tambah Data</span></a>            
              </div>
            </div>
          </div>
          <div class="table-responsive" style="margin: 30px 0px;">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Serat</th>
                  <th>Deskripsi </th>
                  <th>File Gambar</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  $no = 1;                                          
                  foreach ($serat as $row) {    
                    $deskripsi_cut = ""; 
                    if (strlen($row['deskripsi_serat']) != 0) {
                      $deskripsi_cut = substr($row['deskripsi_serat'], 0, 100).' ...';
                    }                            
                ?>
                <tr >
                  <td><?php echo $no; ?></td>   
                  <td><?php echo "$row[nama_serat]"; ?></td>                         
                  <td><?php echo "$deskripsi_cut"; ?></td>
                  <td><?php echo "$row[gambar]"; ?></td>
                  <td>


                    <a href="#tomboleditserat" class="edit" onclick="modal_edit_serat('<?php echo $row['id_serat']; ?>','<?php echo $row['nama_serat']; ?>','<?php echo $row['deskripsi_serat']; ?>','<?php echo $row['gambar']; ?>');"><i class="fa fa-pencil-square-o" data-toggle="tooltip" title="Edit" aria-hidden="true"></i></a>


                    <a href="" class="delete" data-toggle="modal" onclick="confirm_modal_serat('<?php echo $row['id_serat']; ?>');"><i class="fa fa-trash-o" data-toggle="tooltip" title="Delete" aria-hidden="true"></i></a>          
                  </td>
                </tr>
                <?php                                 
                    $no++;
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>


    <!-- Tambah Modal HTML Serat -->
    <div id="tambahserat" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Tambah Data Serat</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <form enctype="multipart/form-data" action="<?php echo base_url('c_data/tambahSerat'); ?>" method="post" class="form-horizontal" autocomplete="off">
            <div class="modal-body">
              <div class="form-group">
                <label>Nama Serat</label>
                <input type="text" name="namaSerat" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Deskripsi</label>
                <textarea type="text" name="deskripsi" class="form-control" rows="8" required ></textarea>
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
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
              <input type="submit" class="btn btn-success" value="Tambah">
            </div>
          </form>              
        </div>
      </div>
    </div>

    <!-- Edit Modal HTML Serat-->
    <div id="tomboleditserat" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Edit Data Serat</h4>`
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <form enctype="multipart/form-data" action="<?php echo base_url('c_data/editSerat'); ?>" method="post" class="form-horizontal" autocomplete="off">
            <div class="modal-body">
              <input hidden id="idSerat" name="idSerat">
              <div class="form-group">
                <label>Nama Serat</label>
                <input type="text" name="namaSerat" id="namaSerat" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Deskripsi</label>
                <textarea type="text" name="editdeskripsi" id="editdeskripsi" class="form-control" rows="8"required></textarea>
              </div>
              
              <!-- iki gk isok -->
              <div class="form-group" style="padding-bottom: 0px">
                <label>Upload Gambar</label>
                <div class="input-group image-preview">
                  <input type="text" id="editseratimg" class="form-control image-preview-filename" disabled="disabled">   
                  <span class="input-group-btn">
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;" onclick="document.getElementById('editgambarserat').click()" style="height: 35px;margin-top: -2px;" class="btn btn-default"> 
                      <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>                                    
                    <div class="btn btn-default image-preview-input">                                        
                      <span class="image-preview-input-title">Pilih File</span>
                      <input type="file" id="editgambarserat" name="editgambarserat" style="width:100px" onchange="document.getElementById('editseratimg').value=this.value" accept="image/png, image/jpeg, image/gif" >    
                    </div>
                  </span>
                </div>
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
        function modal_edit_serat(idSerat,namaSerat,editdeskripsi,editserat)
        {
          $('#tomboleditserat').modal('show', {backdrop: 'static'});          
          document.getElementById('idSerat').value = idSerat;
          document.getElementById('namaSerat').value = namaSerat;         
          document.getElementById('editdeskripsi').value = editdeskripsi;    
          document.getElementById('editseratimg').value = editserat;    
        }
    </script>

    <!-- Delete Modal HTML Serat -->
    <div id="hapusserat" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <form>
            <div class="modal-header">            
              <h4 class="modal-title">Hapus Data Serat</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">          
              <p>Yakin ingin menghapus data ini?</p>
              <p class="text-warning"><small></small></p>
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
              <a href="" id="idhapusserat"><input type="button" class="btn btn-danger" value="Hapus"></a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script>
        function confirm_modal_serat(delete_url)
        {
          $('#hapusserat').modal('show', {backdrop: 'static'});
          document.getElementById('idhapusserat').setAttribute('href' ,"hapusSerat/"+delete_url);
        }
    </script>

    <!-- Data Varietas -->
    <section class="varietas" id="varietas" style="padding-top: 0px; margin-top: -80px;">
      <div class="container">
        <div class="table table-wrapper">
          <div class="table-title">
            <div class="row">
              <div class="col-sm-6">
                <h2>Data <b>Varietas</b></h2>
              </div>
              <div class="col-sm-6">
                <a href="#tambahvarietas" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus-square" aria-hidden="true"></i><span>Tambah Data</span></a>            
              </div>
            </div>
          </div>
          <div class="table-responsive" style="margin: 30px 0px;">
            <table class="table table-striped table-hover">
              <thead>
                <tr>                                
                  <th>No</th>
                  <th>Nama Varietas</th>                                
                  <th>Spesifikasi</th>                              
                  <th>Tanggal Pelepasan</th>                              
                  <th>File Gambar</th>
                  <th>File SK</th>                                
                  <th>Tanggal Upload</th>                                
                  <th>Waktu Upload</th>  
                  <th>Aksi</th>                              
                </tr>
              </thead>
              <tbody>
                <?php 
                  $no = 1;                                          
                  foreach ($varietas as $row) {    
                ?>
                <tr >
                  <td><?php echo $no; ?></td>                                
                  <td><?php echo "$row[nama_varietas]"; ?></td>                              
                  <td>
                    <a href="#spesifikasi" style="font-weight: unset;" onclick="">                        
                      <button class="btn btn-warning">Spesifikasi</button>
                    </a>
                  </td>       
                  <td><?php echo "$row[tanggal_pelepasan]"; ?></td>                         
                  <td><?php echo "$row[file_gambar]"; ?></td>
                  <td><?php echo "$row[file_SK]"; ?></td>
                  <td><?php echo "$row[tanggal_upload]"; ?></td>
                  <td><?php echo "$row[waktu_upload]"; ?></td>
                  <td>
                    <a href="#editvarietas" class="editvarietas" onclick=""><i class="fa fa-pencil-square-o" data-toggle="tooltip" title="Edit" aria-hidden="true"></i></a>
                    <a href="" class="delete" data-toggle="modal" onclick=""><i class="fa fa-trash-o" data-toggle="tooltip" title="Delete" aria-hidden="true"></i></a>      
                  </td>
                </tr>
                <?php                                 
                    $no++;
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    <!-- Data Leaflet -->
    <section class="leaflet" id="leaflet" style="padding-top: 0px; margin-top: -100px;">
      <div class="container">
        <div class="table table-wrapper">
          <div class="table-title">
            <div class="row">
              <div class="col-sm-6">
                <h2>Data <b>Leaflet</b></h2>
              </div>
              <div class="col-sm-6">
                <a href="#tambahleaflet" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus-square" aria-hidden="true"></i><span>Tambah Data</span></a>            
              </div>
            </div>
          </div>
          <div class="table-responsive" style="margin: 30px 0px;">
            <table class="table table-striped table-hover">
              <thead>
                <tr>                                
                  <th>No</th>
                  <th>Nama Leaflet</th>
                  <th>File gambar 1</th>
                  <th>File gambar 2</th>   
                  <th>Aksi</th>                              
                </tr>
              </thead>
              <tbody>
                <?php 
                  $no = 1;                                          
                  foreach ($leaflet as $row) {    
                ?>
                <tr >
                  <td><?php echo $no; ?></td>
                  <td><?php echo "$row[nama_leaflet]"; ?></td>
                  <?php 
                    for ($i=($no-1); $i <(count($leaflet)); $i++) { 
                      if ($i==0) {
                        echo "<td>".$gambarleaflet[$i]->file."</td>";
                        echo "<td>".$gambarleaflet[$i+1]->file."</td>";
                        $idimg1 = $gambarleaflet[$i]->id_gambar;
                        $idimg2 = $gambarleaflet[$i+1]->id_gambar;
                        $leaflet1 = $gambarleaflet[$i]->file;
                        $leaflet2 = $gambarleaflet[$i+1]->file;
                        break;
                      } else {                                       
                        echo "<td>".$gambarleaflet[$i*2]->file."</td>";
                        echo "<td>".$gambarleaflet[($i*2)+1]->file."</td>";
                        $idimg1 = $gambarleaflet[$i*2]->id_gambar;
                        $idimg2 = $gambarleaflet[($i*2)+1]->id_gambar;
                        $leaflet1 = $gambarleaflet[$i*2]->file;
                        $leaflet2 = $gambarleaflet[($i*2)+1]->file;
                        break;                               
                      }
                    }
                    $idleaflet = $row['id_leaflet'];
                    $nama = $row['nama_leaflet'];
                  ?>
                  <td>
                    <a href="#editvarietas" class="editvarietas" onclick=""><i class="fa fa-pencil-square-o" data-toggle="tooltip" title="Edit" aria-hidden="true"></i></a>
                    <a href="" class="delete" data-toggle="modal" onclick=""><i class="fa fa-trash-o" data-toggle="tooltip" title="Delete" aria-hidden="true"></i></a>      
                  </td>
                </tr>
                <?php                                 
                    $no++;
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    <!-- Data Budidaya   -->
    <section class="budidaya" id="budidaya" style="padding-top: 0px; margin-top: -100px;">
      <div class="container">
        <div class="table table-wrapper">
          <div class="table-title">
            <div class="row">
              <div class="col-sm-6">
                <h2>Data <b>Monograf Budidaya Tanaman Serat</b></h2>
              </div>
              <div class="col-sm-6">
                <a href="#tambahbudidaya" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus-square" aria-hidden="true"></i><span>Tambah Data</span></a>            
              </div>
            </div>
          </div>
          <div class="table-responsive" style="margin: 30px 0px;">
            <table class="table table-striped table-hover">
              <thead>
                <tr>                                
                  <th>No</th>
                  <th>Nama Monograf</th>                                
                  <th>Spesifikasi</th>                              
                  <th>Deskripsi</th>                              
                  <th>File Gambar</th>
                  <th>Tanggal Upload</th>                                
                  <th>Aksi</th>                              
                </tr>
              </thead>
              <tbody>
                <?php 
                  $no = 1;                                          
                  foreach ($monograf as $row) {    
                ?>
                <tr >
                  <td><?php echo $no; ?></td>                                
                  <td><?php echo "$row[nama_monograf]"; ?></td>                              
                  <td>
                    <a href="#spesifikasi" style="font-weight: unset;" onclick="">                        
                      <button class="btn btn-warning">Spesifikasi</button>
                    </a>
                  </td>       
                  <td><?php echo "$row[deskripsi_monograf]"; ?></td>                         
                  <td><?php echo "$row[gambar]"; ?></td>
                  <td><?php echo "$row[tanggal]"; ?></td>
                  <td>
                    <a href="#editvarietas" class="editvarietas" onclick=""><i class="fa fa-pencil-square-o" data-toggle="tooltip" title="Edit" aria-hidden="true"></i></a>
                    <a href="" class="delete" data-toggle="modal" onclick=""><i class="fa fa-trash-o" data-toggle="tooltip" title="Delete" aria-hidden="true"></i></a>      
                  </td>
                </tr>
                <?php                                 
                    $no++;
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    <!-- Data Benih   -->
    <section class="benih" id="benih" style="padding-top: 0px; margin-top: -100px;">
      <div class="container">
        <div class="table table-wrapper">
          <div class="table-title">
            <div class="row">
              <div class="col-sm-6">
                <h2>Data <b>Benih</b></h2>
              </div>
              <div class="col-sm-6">
                <a href="#tambahbenih" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus-square" aria-hidden="true"></i><span>Tambah Data</span></a>            
              </div>
            </div>
          </div>
          <div class="table-responsive" style="margin: 30px 0px;">
            <table class="table table-striped table-hover">
              <thead>
                <tr>                                
                  <th>No</th>
                  <th>Nama Benih</th>                                
                  <th>Asal</th>                              
                  <th>Tahun Panen</th>                              
                  <th>Kelas</th>
                  <th>Stok Bulan Terakhir</th>  
                  <th>Stok Sampai</th>                                
                  <th>Aksi</th>                              
                </tr>
              </thead>
              <tbody>
                <?php 
                  $no = 1;                                          
                  foreach ($benih as $row) {    
                ?>
                <tr >
                  <td><?php echo $no; ?></td>                                
                  <td><?php echo "$row[nama_benih]"; ?></td>                              
                  <td><?php echo "$row[asal]"; ?></td>                         
                  <td><?php echo "$row[tahun_panen]"; ?></td>
                  <td><?php echo "$row[kelas]"; ?></td>
                  <td><?php echo "$row[stok_bulan_terakhir]"; ?></td>
                  <td><?php echo "$row[stok_sampai]"; ?></td>
                  <td>
                    <a href="#editbenih" class="editbenih" onclick=""><i class="fa fa-pencil-square-o" data-toggle="tooltip" title="Edit" aria-hidden="true"></i></a>
                    <a href="" class="delete" data-toggle="modal" onclick=""><i class="fa fa-trash-o" data-toggle="tooltip" title="Delete" aria-hidden="true"></i></a>      
                  </td>
                </tr>
                <?php                                 
                    $no++;
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    <!-- Data Distribusi Benih   -->
    <section class="distibusibenih" id="distibusibenih" style="padding-top: 0px; margin-top: -100px;">
      <div class="container">
        <div class="table table-wrapper">
          <div class="table-title">
            <div class="row">
              <div class="col-sm-6">
                <h2>Data <b>Distribusi Benih</b></h2>
              </div>
              <div class="col-sm-6">
                <a href="#tambahdistribusibenih" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus-square" aria-hidden="true"></i><span>Tambah Data</span></a>            
              </div>
            </div>
          </div>
          <div class="table-responsive" style="margin: 30px 0px;">
            <table class="table table-striped table-hover">
              <thead>
                <tr>                                
                  <th>No</th>
                  <th>Nama Benih</th>                                
                  <th>Tanggal</th>                              
                  <th>Tahun Panen</th>                              
                  <th>Kelas</th>
                  <th>Jumlah Kg</th>  
                  <th>Keterangan</th>                                
                  <th>Aksi</th>                              
                </tr>
              </thead>
              <tbody>
                <?php 
                  $no = 1;                                          
                  foreach ($distribusibenih as $row) {    
                ?>
                <tr >
                  <td><?php echo $no; ?></td>                                
                  <td><?php echo "$row[nama_benih]"; ?></td>                              
                  <td><?php echo "$row[tanggal]"; ?></td>                         
                  <td><?php echo "$row[tahun_panen]"; ?></td>
                  <td><?php echo "$row[kelas_benih]"; ?></td>
                  <td><?php echo "$row[jumlah_kg]"; ?></td>
                  <td><?php echo "$row[keterangan]"; ?></td>
                  <td>
                    <a href="#editdistribusibenih" class="editbenih" onclick=""><i class="fa fa-pencil-square-o" data-toggle="tooltip" title="Edit" aria-hidden="true"></i></a>
                    <a href="" class="delete" data-toggle="modal" onclick=""><i class="fa fa-trash-o" data-toggle="tooltip" title="Delete" aria-hidden="true"></i></a>      
                  </td>
                </tr>
                <?php                                 
                    $no++;
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    <footer style="margin-top: 0px;">
      <div class="container-fluid text-center" style="color:white;background-color: black;">
        <div style=" margin-top: 10px;">
          <p style="font-family: calibri"><span class="glyphicon glyphicon-copyright-mark"></span> 2018 All Reserved Design By BALITTAS</p>
        </div>
      </div>
    </footer>
    <script src="<?php echo base_url();?>/assets/js/jquery-3.3.1.min.js"></script> 
    <script src="<?php echo base_url();?>/assets/js/jquery.easing.1.3.js"></script> 
    <script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/script.js"></script>
    <script src="<?php echo base_url();?>/assets/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  </body>
</html>