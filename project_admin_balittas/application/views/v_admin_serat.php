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
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Varietas <span class="caret"></span></a>
                            <ul class="dropdown-menu" style="margin:-5px 0px 0px 0px; width:280px; background-color:#fece00;">
                                <div class="container-fluid">
                                    <div class="col-sm-6 col-lg-6">
                                        <li><a href="#Deskripsi" class="halaman">Deskripsi</a></li>
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

                <div class="collapse navbar-collapse" id="bar" style="margin-top:5px; margin-left: -60px; margin-right: -60px; border:0;">
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
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
    <!-- Tambah Modal HTML Tembakau-->
    <div id="tambahtembakau" class="modal fade">
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
                                <input type="file" id="pic" name="sk" style="display:none" onchange="document.getElementById('filename').value=this.value">
                                <input type="text" id="filename" style="width: 468px;height: 35px;" disabled="disable">
                                <input type="button" value="Pilih File" onclick="document.getElementById('pic').click()" style="height: 35px;margin-top: -2px;" class="btn btn-default">
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

    <script>
            var i = 5;            
            
            function additem() {
//                menentukan target append
                var itemlist = document.getElementById('itemlist');
                
//                membuat element
                var row = document.createElement('tr');
                var jenis = document.createElement('td');
                var jumlah = document.createElement('td');
                var aksi = document.createElement('td');

//                meng append element
                itemlist.appendChild(row);
                row.appendChild(jenis);
                row.appendChild(jumlah);
                row.appendChild(aksi);
                          

//                membuat element input
                var jenis_input = document.createElement('input');
                jenis_input.setAttribute('name', 'atribut'+ i);
                jenis_input.setAttribute('type', 'text');
                jenis_input.setAttribute('style', 'margin-top : 10px;width: 224px;height: 35px;');

                var jumlah_input = document.createElement('input');
                jumlah_input.setAttribute('name', 'value'+ i);
                jumlah_input.setAttribute('type', 'text');
                jumlah_input.setAttribute('style', 'margin : 10px 10px 0px 10px;width: 224px;height: 35px;');


                var hapus = document.createElement('span');

//                meng append element input
                jenis.appendChild(jenis_input);                
                jumlah.appendChild(jumlah_input);
                aksi.appendChild(hapus);

                hapus.innerHTML = '<button class="btn btn-small btn-default" style="margin-top:10px;width: 5px;height: 35px;"><i class="fa fa-trash 0"></i></button>';
//                membuat aksi delete element
                hapus.onclick = function () {
                    row.parentNode.removeChild(row);
                };

                i++;
                document.getElementById('temp').value = i;
            }
      </script>

    <!-- Edit Modal HTML Tembakau-->
    <div id="edittembakau" class="modal fade">
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
                                        <input type="file" style="width:100px" accept="image/png, image/jpeg, image/gif," name="gambar">                                        
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
                                <!-- <input type="file" id="pic" name="sk"> -->
                            </div>
                        </div>
                         <div class="form-group">
                            <label>Tanggal Pelepasan</label>
                            <input type="text" name="tanggalDiterbitkan" class="form-control" placeholder="ex : 2018/07/27" required id="tgl">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea type="text" name="deskripsi" class="form-control" required id="nar"></textarea>
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
          $('#edittembakau').modal('show', {backdrop: 'static'});          
          document.getElementById('idvar').value = idvar;
          document.getElementById('nama').value = nama;
          document.getElementById('gmbr').value = gmbr;
          document.getElementById('sklur').value = sk;
          document.getElementById('tgl').value = tgl;
          document.getElementById('nar').value = nar;
        }
    </script>

    <!-- Delete Modal HTML Tembakau-->
    <div id="hapustembakau" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">                
                <div class="modal-header">
                        <h4 class="modal-title">Hapus Data Varietas</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">                        
                    <p>Yakin Ingin menghapus data ini ?</p>
                    <p class="text-warning"><small></small></p>
                </div>           
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                    <a href="" id="hapustem"><input type="button" class="btn btn-danger" value="Hapus"></a>
                </div>                
            </div>
        </div>
        <?php  ?>
    </div>   
    <script>
        function confirm_modal(delete_url)
        {
          $('#hapustembakau').modal('show', {backdrop: 'static'});
          document.getElementById('hapustem').setAttribute('href' ,"deleteVarietas/"+delete_url);
        }
    </script>
    
    <!-- spesifikasi varietas -->
    <div id="spesifikasi" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Data Spesifikasi Varietas</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
                 <form action="<?php echo base_url('c_data'); ?>" method="post" class="form-horizontal">
                    <div class="modal-body">                                         
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea type="text" name="deskripsi" class="form-control" required ></textarea>
                        </div>
                        <div class="form-group"> 
                            <div class="text-center">                                
                                <label>Spesifikasi</label>                            
                            </div>
                            <table style="margin-left: 0px;">
                              <thead style="background-color: none;">
                                  <tr>
                                      <th style="font-weight: unset;">Atribut</th>
                                      <th style="font-weight: unset;padding-left: 10px;">Value</th>
                                      <th></th>
                                  </tr>
                              </thead>
                              <!--elemet sebagai target append-->
                              <tbody>
                                <tr>
                                  <td><input name="atribut0" type="text" style="border-radius: 0px;width: 224px; height: 35px;" disabled></td>
                                      <td><input name="value0" id="vl0" type="text" style="border-radius: 0px;margin:0px 10px;width: 224px;height: 35px;" disabled></td>
                                      <td><input type="button" value="&#x270E" style="height: 35px;width: 50px;"></td>
                                </tr> 
                                <tr>
                                      <td><input name="atribut1" class="" type="text" style="margin-top: 10px;width: 224px;height: 35px;"></td>
                                      <td><input name="value1" class="" type="text" style="margin:10px 10px 0px 10px;width:224px;height: 35px;"></td>
                                      <td><button class="btn btn-small btn-default" style="margin-top: 10px;width: 5px;height: 35px;"><i class="fa fa-trash 0"></i></button></td>
                                  </tr>
                                  <tr>
                                      <td><input name="atribut2" class="" type="text" style="margin-top: 10px;width: 224px;height: 35px;"></td>
                                      <td><input name="value2" class="" type="text" style="margin:10px 10px 0px 10px;width: 224px;height: 35px;"></td>
                                      <td><button class="btn btn-small btn-default" style="margin-top: 10px; width: 5px;height: 35px;"><i class="fa fa-trash 0"></i></button></td>
                                  </tr>
                                  <tr>
                                      <td><input name="atribut3" class="" type="text" style="margin-top: 10px;width: 224px;height: 35px;"></td>
                                      <td><input name="value3" class="" type="text" style="margin:10px 10px 0px 10px;width: 224px;height: 35px;"></td>
                                      <td><button class="btn btn-small btn-default" style="margin-top: 10px; width: 5px;height: 35px;"><i class="fa fa-trash 0"></i></button></td>
                                  </tr>                               
                                  <tr>
                                      <td><input name="atribut4" class="" type="text" style="margin-top: 10px; width: 224px;height: 35px;"></td>
                                      <td><input name="value4" class="" type="text" style="margin:10px 10px 0px 10px; width: 224px;height: 35px;"></td>
                                      <td><button class="btn btn-small btn-default" style="margin-top: 10px; width: 5px;height: 35px;"><i class="fa fa-trash 0"></i></button></td>
                                  </tr>
                              </tbody>
                              <!-- <form method="post" action="<?php base_url('c_data/tambahVarietas') ?>"><input hidden name="temp" id="temp"></form> -->
                          </table>
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

    <!-- Tambah Modal HTML leaflet-->
    <div id="tambahleaflet" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Tambah Data Leaflet</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
                 <form action="<?php echo base_url('c_data/tambahVarietas'); ?>" method="post" class="form-horizontal">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Varietas</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group" style="padding-bottom: 0px">
                            <label>Upload Gambar 1</label>
                            <div class="input-group image-preview">
                                <input type="text" class="form-control image-preview-filename" disabled="disabled">    
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                        <span class="glyphicon glyphicon-remove"></span> Clear
                                    </button>                                    
                                    <div class="btn btn-default image-preview-input">
                                        <span class="glyphicon glyphicon-folder-open"></span>
                                        <span class="image-preview-input-title">Browse</span>
                                        <input type="file" style="width:100px" accept="image/png, image/jpeg, image/gif," name="input-file-preview" />                                        
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="form-group" style="padding-bottom: 0px">
                            <label>Upload Gamabar 2</label>
                            <div class="input-group">
                                <input type="text" class="form-control image-preview-filename" disabled="disabled">    
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                        <span class="glyphicon glyphicon-remove"></span> Clear
                                    </button>                                    
                                    <div class="btn btn-default image-preview-input">
                                        <span class="glyphicon glyphicon-folder-open"></span>
                                        <span class="image-preview-input-title">Browse</span>
                                        <input type="file" style="width:100px" accept="image/png, image/jpeg, image/gif," name="input-file-preview" />                                        
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

    <footer>
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