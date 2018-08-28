<?php
    $isLogin = $this->session->userdata( 'akunAktif' );
    if($isLogin==""){
        redirect(base_url('admin/index'));
    }
?>

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
    <script src="<?php echo base_url();?>/bootstrap/js/croppie.js"></script>
    <script src="<?php echo base_url();?>/bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>

    <div class="sidenav" style="padding-top: 10px;">        
        <a href="#tabelSerat"><i class="glyphicon glyphicon-chevron-right"></i> Data Serat</a>
        <hr style="border-color: grey;margin:0px 13px 5px 13px;">
        <a href="#tabelVarietas"><i class="glyphicon glyphicon-chevron-right"></i> Data Varietas</a>
        <hr style="border-color: grey;margin:0px 13px 5px 13px;">
        <a href="#tabelLeaflet"><i class="glyphicon glyphicon-chevron-right"></i> Data Leaflet</a>
        <hr style="border-color: grey;margin:0px 13px 5px 13px;">
        <a href="#tabelBudidaya"><i class="glyphicon glyphicon-chevron-right"></i> Data Budidaya</a>
        <hr style="border-color: grey;margin:0px 13px 5px 13px;">
        <a href="#tabelBenih"><i class="glyphicon glyphicon-chevron-right"></i> Data Benih</a>
        <hr style="border-color: grey;margin:0px 13px 5px 13px;">
        <a href="#tabelDistribusiBenih"><i class="glyphicon glyphicon-chevron-right"></i> Data Distribusi Benih</a>  
        <hr style="border-color: grey;margin:0px 13px 5px 13px;">
        <a href="#tabelAlsin"><i class="glyphicon glyphicon-chevron-right"></i> Data Alat dan Mesin</a>         
    </div>

    <!-- Data Serat -->
    <section class="serat" id="tabelSerat" style="padding-top: 50px; margin-top: -70px;">
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
          <form enctype="multipart/form-data" action="<?php echo base_url('admin/tambahSerat'); ?>" method="post" class="form-horizontal" autocomplete="off">
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
          <form enctype="multipart/form-data" action="<?php echo base_url('admin/editSerat'); ?>" method="post" class="form-horizontal" autocomplete="off">
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
    <section class="varietas" id="tabelVarietas" style="padding-top: 50px; margin-top: -120px;">
      <div class="container">
        <div class="table table-wrapper">
          <div class="table-title">
            <div class="row">
              
              <div class="col-sm-2">
                <h2>Data <b>Varietas</b></h2>
              </div>

              <div class="col-sm-2">
                <h5 style="margin-left: 28px;">Filter by &nbsp :</h5>
              </div>

              <div class="col-sm-2" style="padding-top: 0px;">
                <select class="form-control komoditas" id="jenisKomoditas" name="komoditas" style="margin-left: -77px; width: 170px; height: 35px;" onchange="filterVarietas();">
                       <!-- <option disabled>Komoditas</option> -->
                       <option value="Semua Komoditas" selected>Semua Komoditas</option>
                  <?php
                    $komoditas = array("Semua Komoditas","Kapas","Kapuk","Kenaf","Rami","Rosela","Sisal","Abaka");
                    for($i = 1;$i < count($komoditas);$i++){
                      echo"<option value=$komoditas[$i]> $komoditas[$i] </option>";
                    }
                  ?>
                </select>
              </div>

              <div class="col-sm-2">
              </div>

              <div class="col-sm-2">
              </div>
              
              <div class="col-sm-2">
                <a href="#tambahvarietas" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus-square" aria-hidden="true"></i><span class="text-right">Tambah Data</span></a>            
              </div>

            </div>
          </div>
          <div class="table-responsive" style="margin: 30px 0px;" id="tableKomoditas">
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
                    <a href="#editvarietas" class="edit" onclick=""><i class="fa fa-pencil-square-o" data-toggle="tooltip" title="Edit" aria-hidden="true"></i></a>
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

    <!-- Filter Varietas -->
    <script>
      function filterVarietas(){
        var komoditas = $("#jenisKomoditas").val();
        $.ajax({
            type:"POST",
            url: "../admin/filterVarietas",
            data: "serattt=" + komoditas,
            dataType : "html",
            success:function(msg){
                $("#tableKomoditas").html(msg);                
            },
            error:function(){
              alert("Search failed");
            }
        });
      }
    </script>


    <!-- Data Leaflet -->
    <section class="leaflet" id="tabelLeaflet" style="padding-top: 50px; margin-top: -80px;">
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
                    <a href="#editleaflet" class="edit" onclick=""><i class="fa fa-pencil-square-o" data-toggle="tooltip" title="Edit" aria-hidden="true"></i></a>

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
    <section class="budidaya" id="tabelBudidaya" style="padding-top: 50px; margin-top: -80px;">
      <div class="container">
        <div class="table table-wrapper">
          <div class="table-title">
            <div class="row">
              <div class="col-sm-6">
                <h2>Data <b>Budidaya</b></h2>
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
                  <th>Judul</th>                                
                  <th>Deskripsi Singkat</th>                              
                  <th>Penulis</th>                              
                  <th>File</th>
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
                  <td><?php echo "$row[judul]"; ?></td>                              
                  <td><?php echo "$row[cuplikan_monograf]"; ?></td>                         
                  <td><?php echo "$row[penulis]"; ?></td>
                  <td><?php echo "$row[file]"; ?></td>
                  <td><?php echo "$row[tanggal]"; ?></td>

                  <td>
                    <a href="#editbudidaya" class="edit" onclick=""><i class="fa fa-pencil-square-o" data-toggle="tooltip" title="Edit" aria-hidden="true"></i></a>
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
    <section class="benih" id="tabelBenih" style="padding-top: 50px; margin-top: -80px;">
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
                    <a href="#editbenih" class="edit" onclick=""><i class="fa fa-pencil-square-o" data-toggle="tooltip" title="Edit" aria-hidden="true"></i></a>
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
    <section class="distibusibenih" id="tabelDistribusiBenih" style="padding-top: 50px; margin-top: -80px;">
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
                    <a href="#editdistribusibenih" class="edit" onclick=""><i class="fa fa-pencil-square-o" data-toggle="tooltip" title="Edit" aria-hidden="true"></i></a>
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

    <!-- Data Alat dan Mesin -->
    <section class="alsin" id="tabelAlsin" style="padding-top: 50px; margin-top: -80px;">
      <div class="container">
        <div class="table table-wrapper">
          <div class="table-title">
            <div class="row">
              <div class="col-sm-6">
                <h2>Data <b>Alat dan Mesin</b></h2>
              </div>
              <div class="col-sm-6">
                <a href="#tambahalsin" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus-square" aria-hidden="true"></i><span>Tambah Data</span></a>            
              </div>
            </div>
          </div>
          <div class="table-responsive" style="margin: 30px 0px;">
            <table class="table table-striped table-hover">
              <thead>
                <tr>                                
                  <th>No</th>
                  <th>Nama Alat dan Mesin</th>
                  <th>File gambar 1</th>
                  <th>File gambar 2</th>   
                  <th>Aksi</th>                              
                </tr>
              </thead>
              <tbody>
                <?php 
                  $no = 1;                                          
                  foreach ($alsin as $row) {    
                ?>
                <tr >
                  <td><?php echo $no; ?></td>
                  <td><?php echo "$row[nama_leaflet]"; ?></td>
                  <?php 
                    for ($i=($no-1); $i <(count($alsin)); $i++) { 
                      if ($i==0) {
                        echo "<td>".$gambaralsin[$i]->file."</td>";
                        echo "<td>".$gambaralsin[$i+1]->file."</td>";
                        $idimg1 = $gambaralsin[$i]->id_gambar;
                        $idimg2 = $gambaralsin[$i+1]->id_gambar;
                        $leaflet1 = $gambaralsin[$i]->file;
                        $leaflet2 = $gambaralsin[$i+1]->file;
                        break;
                      } else {                                       
                        echo "<td>".$gambaralsin[$i*2]->file."</td>";
                        echo "<td>".$gambaralsin[($i*2)+1]->file."</td>";
                        $idimg1 = $gambaralsin[$i*2]->id_gambar;
                        $idimg2 = $gambaralsin[($i*2)+1]->id_gambar;
                        $leaflet1 = $gambaralsin[$i*2]->file;
                        $leaflet2 = $gambaralsin[($i*2)+1]->file;
                        break;                               
                      }
                    }
                    $idalsin = $row['id_leaflet'];
                    $nama = $row['nama_leaflet'];
                  ?>
                  <td>
                    <a href="#editalsin" class="edit" onclick=""><i class="fa fa-pencil-square-o" data-toggle="tooltip" title="Edit" aria-hidden="true"></i></a>

                    <!-- <a href="" class="delete" data-toggle="modal" onclick=""><i class="fa fa-trash-o" data-toggle="tooltip" title="Delete" aria-hidden="true"></i></a>   -->
                    <a href="" class="delete" data-toggle="modal" onclick="confirm_modal_alsin('<?php echo $row['id_leaflet']; ?>');"><i class="fa fa-trash-o" data-toggle="tooltip" title="Delete" aria-hidden="true"></i></a>    
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

    <!-- Delete Modal HTML Alat dan Mesin -->
    <div id="hapusalsin" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <form>
            <div class="modal-header">            
              <h4 class="modal-title">Hapus Data Alat dan Mesin</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">          
              <p>Yakin ingin menghapus data ini?</p>
              <p class="text-warning"><small></small></p>
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
              <a href="" id="idhapusalsin"><input type="button" class="btn btn-danger" value="Hapus"></a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script>
        function confirm_modal_alsin(delete_url)
        {
          $('#hapusalsin').modal('show', {backdrop: 'static'});
          document.getElementById('idhapusalsin').setAttribute('href' ,"hapusAlsin/"+delete_url);
        }
    </script>

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