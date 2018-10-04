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
        <a href="#tabelStokBenih"><i class="glyphicon glyphicon-chevron-right"></i> Data Stok Benih</a>
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
                    <a href="#tomboleditserat" class="edit" onclick="modal_edit_serat(
                    '<?php echo $row['id_serat']; ?>',
                    '<?php echo $row['nama_serat']; ?>',
                    '<?php echo $row['deskripsi_serat']; ?>',
                    '<?php echo $row['gambar']; ?>'
                    );"><i class="fa fa-pencil-square-o" data-toggle="tooltip" title="Edit" aria-hidden="true"></i></a>
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
            <h4 class="modal-title" style="font-size: 18px;">Tambah Data Serat</h4>
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
                  <input type="text" class="form-control image-preview-filename" disabled="disabled" placeholder="400 x 292 piksel">    
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
            <h4 class="modal-title" style="font-size: 18px;">Edit Data Serat</h4>`
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
              <h4 class="modal-title" style="font-size: 18px;">Hapus Data Serat</h4>
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
                  <th>URL</th>                            
                  <th>Tanggal Upload</th>                                
                  <th>Waktu Upload</th>
                  <th>Deskripsi</th>  
                  <th>Aksi</th>                              
                </tr>
              </thead>
              <tbody>
                <?php 
                  $no = 1;                                          
                  foreach ($varietas as $row) {  
                    $deskripsivar_cut = ""; 
                    if (strlen($row['deskripsi_varietas']) != 0) {
                      $deskripsivar_cut = substr($row['deskripsi_varietas'], 0, 50).' ...';
                    }   
                    $url_cut = ""; 
                    if (strlen($row['URLV']) != 0) {
                      $url_cut = substr($row['URLV'], 0, 5).' ...';
                    }     
                ?>
                <tr >
                  <?php 
                    $atr = array();
                    $ket = array();
                    $count1 = 0;   
                    $count2 = 0;                                                                    
                    foreach ($detail_varietas as $value) {  
                      if ($row['id_varietas']==$value['id_varietas']) {
                        $atr[$count1] = $value['nama_atribut'];
                        $ket[$count2] = $value['detail_value'];                             
                        $count1++;   
                        $count2++;                                      
                      }
                    }
                    $idv = $row['id_varietas'];                                     
                  ?>

                  <td><?php echo $no; ?></td>                                
                  <td><?php echo "$row[nama_varietas]"; ?></td>                              
                  <td>

                  <script>                                   
                    window['atr' + <?php echo $no; ?>] = [
                      <?php
                        for ($i=0; $i < $count1-1; $i++) {                                              
                          echo '"'.$atr[$i].'",';
                        }
                        echo '"'.$atr[$count1-1].'"'; 
                      ?>                                    
                    ];                                    
                    window['val' + <?php echo $no; ?>] = [
                      <?php
                        for ($i=0; $i < $count2-1; $i++) {                                              
                          echo '"'.$ket[$i].'",';
                        }
                        echo '"'.$ket[$count2-1].'"'; 
                      ?> 
                    ];
                  </script>
                    <a href="#spesifikasi" style="font-weight: unset;" onclick="modal_detail(
                      '<?php echo "$idv"; ?>',
                      window['atr' + <?php echo $no; ?>],
                      window['val' + <?php echo $no; ?>]
                      )">                                    
                      <button class="btn btn-warning">Spesifikasi</button>
                    </a>
                  </td>
                  <?php
                      $namasrt = $row['nama_serat'];
                      $idvar = $row['id_varietas'];
                      $namavar = $row['nama_varietas'];
                      $tgl = $row['tanggal_pelepasan'];
                      $file1 = $row['file_SK'];
                      $urlvarietas = $row['URLV'];
                      $file2 = $row['file_gambar'];
                      $desk = $row['deskripsi_varietas'];
                   ?>       
                  <td><?php echo $row['tanggal_pelepasan']; ?></td>                         
                  <td><?php echo $row['file_gambar']; ?></td>
                  <td><?php echo $row['file_SK']; ?></td>
                  <td><?php echo $url_cut; ?></td>
                  <td><?php echo $row['tanggal_upload']; ?></td>
                  <td><?php echo $row['waktu_upload']; ?></td>
                  <td><?php echo $deskripsivar_cut; ?></td>
                  <td>
                    <a href="#tomboleditvar" class="edit" onclick="modal_edit_var('<?php echo "$namasrt"; ?>','<?php echo "$idvar"; ?>','<?php echo "$namavar"; ?>','<?php echo "$tgl"; ?>','<?php echo "$file1"; ?>','<?php echo "$urlvarietas"; ?>','<?php echo "$file2"; ?>','<?php echo "$desk"; ?>');">
                        <i class="fa fa-pencil-square-o" data-toggle="tooltip" title="Edit" aria-hidden="true"></i>
                    </a>
                    <a href="" class="delete" data-toggle="modal" onclick="confirm_modal_varietas('<?php echo $row['id_varietas']; ?>');"><i class="fa fa-trash-o" data-toggle="tooltip" title="Delete" aria-hidden="true"></i></a> 
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

    <div id="spesifikasi" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" style="font-size: 18px;">Data Spesifikasi Varietas</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
              </div>
                 <form action="<?php echo base_url('admin/editDesVarietas'); ?>" method="post" class="form-horizontal">
                    <input hidden id="idSpe" name="idVarietasss">
                    <input hidden id="jumlahAtr" name="jumlahAtr">
                    <div class="modal-body">                                         
                        <div class="form-group"> 
                            <div class="text-center">                                
                                <label>Spesifikasi</label>                            
                            </div>
                            <table style="margin-left: 0px;" id="tableDetail">                              
                              <!--elemet sebagai target append-->
                              <tbody id="detail">
                              </tbody>                              
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

    <script>
        var jumlahTr = 0;
        function modal_detail(id,atr,ket)
        {
            var itemlist = document.getElementById('tableDetail');
            if (jumlahTr > 0) {               
                $("#tableDetail tr").remove();
                jumlahTr = 0;
            } 
          $('#spesifikasi').modal('show', {backdrop: 'static'});          
          // alert(atr.length);
          document.getElementById('jumlahAtr').value = atr.length;
          document.getElementById('idSpe').value = id;
            for (var i = 0; i <atr.length; i++) {              
//                menentukan target append
//                membuat element
                var row = document.createElement('tr');
                var atributjs = document.createElement('td');
                var valuejs = document.createElement('td');
                var aksijs = document.createElement('td');
//                meng append element
                itemlist.appendChild(row);
                row.appendChild(atributjs);
                row.appendChild(valuejs);
                row.appendChild(aksijs);                          
//                membuat element input
                var atrjs = document.createElement('input');
                atrjs.setAttribute('name', 'atribut'+ i);
                atrjs.setAttribute('value', ' '+atr[i]);
                atrjs.setAttribute('type', 'text');
                atrjs.setAttribute('placeholder', ' Atribut');
                atrjs.setAttribute('readonly', '');
                atrjs.setAttribute('style', 'margin-top : 10px;width: 280px;height: 35px;');
                var valjs = document.createElement('input');
                valjs.setAttribute('name', 'value'+ i);
                valjs.setAttribute('value', ' '+ket[i]);
                valjs.setAttribute('type', 'text');
                valjs.setAttribute('placeholder', ' Value');
                valjs.setAttribute('style', 'margin : 10px 10px 0px 10px;width: 280px;height: 35px;');
                var hapus = document.createElement('span');
//                meng append element input
                atributjs.appendChild(atrjs);                
                valuejs.appendChild(valjs);
                hapus.innerHTML = '<button class="btn btn-small btn-warning" style="margin-top:10px;width: 5px;height: 35px;"><i class="fa fa-pencil 0"></i></button>';
//                membuat aksi delete element
                hapus.onclick = function () {
                    row.parentNode.removeChild(row);
                }
                jumlahTr++;
            }
        }
    </script>

    <!-- Edit Modal HTML Varietas-->
    <div id="tomboleditvar" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" style="font-size: 18px;">Edit Data Varietas</h4>`
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <form enctype="multipart/form-data" action="<?php echo base_url('admin/editVarietas'); ?>" method="post" class="form-horizontal" autocomplete="off">
            <div class="modal-body">
              <input id="idSerat_id" name="idSerat" hidden>
              <input id="idVarietas_id" name="idVarietass" hidden>
              <div class="form-group">
              <label>Nama Varietas</label>
                <input type="text" id="namaVarietas_id" name="namaVarietas" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Komoditas</label>
                <input type="text" id="namaSerat_id" name="namaSerat" class="form-control" disabled>
              </div>
              <div class="form-group">
                <label>Tanggal Pelepasan</label>       
                <input type="date" id="tanggal_id" name="tanggalPelepasan" class="form-control" required>
              </div> 
              <div class="form-group">
                <label>Deskripsi</label>
                <textarea type="text" id="deskripsi_id" name="deskripsiv" class="form-control" rows="8"></textarea>
              </div>
              <div class="form-group" style="padding-bottom: 0px">
                <label>Upload Gambar</label>
                <div class="input-group image-preview">
                  <input id="filegambar_id" type="text" style="padding-left: 10px;" class="form-control image-preview-filename" disabled="disabled" placeholder="324 x 210 piksel maksimal 2MB"> 
                  <span class="input-group-btn">
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                      <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>                                    
                    <div class="btn btn-default image-preview-input">                                        
                      <span class="image-preview-input-title">Pilih File</span>
                      <input type="file" style="width:100px" accept="image/png, image/jpeg, image/gif," name="gambar_v">            
                    </div>
                  </span>
                </div>
              </div>
              <div class="form-group" style="padding-bottom: 0px">
                <label>Upload SK</label>
                <div class="input-group">                                
                  <input type="file" id="picked" name="updatesk" style="display:none" onchange="document.getElementById('filesk_id').value=this.value" accept="application/pdf">
                  <input type="text" id="filesk_id" style="width: 468px;height: 35px; padding-left: 10px;" disabled="disable">
                  <input type="button" value="Pilih File" onclick="document.getElementById('picked').click()" style="height: 35px;margin-top: -2px;" class="btn btn-default">
                </div>
              </div>
              <div class="form-group"> 
                <label>Link URL</label>
                <input type="text" id="urleditvar_id" name="urlvar" class="form-control">
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
        function modal_edit_var(namaSerat,idvarietas,namaVarietas,tglPelepasan,filesk,urleditvarietas,filegambar,deskripsivarietas) {
          // alert(namaSerat+" "+idvarietas+" "+namaVarietas+" "+tglPelepasan+" "+filesk+" "+filegambar+" "+deskripsivarietas);
          $('#tomboleditvar').modal('show', {backdrop: 'static'});
          document.getElementById('namaSerat_id').value = namaSerat;
          document.getElementById('idVarietas_id').value = idvarietas;
          document.getElementById('namaVarietas_id').value = namaVarietas;
          document.getElementById('tanggal_id').value = tglPelepasan;
          document.getElementById('filesk_id').value = filesk;
          document.getElementById('urleditvar_id').value = urleditvarietas;
          document.getElementById('filegambar_id').value = filegambar;
          document.getElementById('deskripsi_id').value = deskripsivarietas;  
        }        
    </script>

    <!-- Delete Modal HTML Varietas -->
    <div id="hapusvarietas" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <form>
            <div class="modal-header">            
              <h4 class="modal-title" style="font-size: 18px;">Hapus Data Varietas</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">          
              <p>Yakin ingin menghapus data ini?</p>
              <p class="text-warning"><small></small></p>
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
              <a href="" id="idhapusvarietas"><input type="button" class="btn btn-danger" value="Hapus"></a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script>
        function confirm_modal_varietas(delete_url)
        {
          $('#hapusvarietas').modal('show', {backdrop: 'static'});
          document.getElementById('idhapusvarietas').setAttribute('href' ,"hapusVarietas/"+delete_url);
        }
    </script>

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

    <!-- Tambah Modal HTML Varietas -->
    <div id="tambahvarietas" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" style="font-size: 18px;">Tambah Data Varietas</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
          </div>
          <form enctype="multipart/form-data" action="<?php echo base_url('admin/tambahVarietas'); ?>" method="post" class="form-horizontal" autocomplete="off">
            <div class="modal-body">
              <div class="form-group">
                <label>Nama Varietas</label>
                <input type="text" name="namaVarietas" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Komoditas</label>
                <select class="form-control" name="idjenisKomoditas">
                  <option value="S0002">Kapas</option>
                  <option value="S0003">Kapuk</option>
                  <option value="S0004">Kenaf</option>
                  <option value="S0005">Rami</option>
                  <option value="S0006">Rosela</option>
                  <option value="S0010">Sisal</option>
                  <option value="S0011">Abaka</option>
                </select>    
              </div>
              <div class="form-group">
                <label>Tanggal Pelepasan</label>       
                <input type="date" name="tanggalPelepasanvar" class="form-control" required>
              </div> 
              <div class="form-group">
                <label>Deskripsi</label>
                <textarea type="text" name="deskripsivar" class="form-control" rows="8" required ></textarea>
              </div>
              <div class="form-group" style="padding-bottom: 0px">
                <label>Upload Gambar</label>
                <div class="input-group image-preview">
                  <input type="text" style="padding-left: 10px;" class="form-control image-preview-filename" disabled="disabled" placeholder="324 x 210 piksel maksimal 2MB"> 
                  <span class="input-group-btn">
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                      <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>                                    
                    <div class="btn btn-default image-preview-input">                                        
                      <span class="image-preview-input-title">Pilih File</span>
                      <input type="file" style="width:100px" accept="image/png, image/jpeg, image/gif," name="gambarvar">
                    </div>
                  </span>
                </div>
              </div>
              <div class="form-group" style="padding-bottom: 0px">
                <label>Upload SK</label>
                <div class="input-group">                                
                  <input type="file" id="pickedsk" name="tambahsk" style="display:none" onchange="document.getElementById('filename').value=this.value" accept="application/pdf">
                  <input type="text" id="filename" style="width: 468px;height: 35px; padding-left: 10px;" placeholder="maksimal 2MB" disabled="disable">
                  <input type="button" value="Pilih File" onclick="document.getElementById('pickedsk').click()" style="height: 35px;margin-top: -2px;" class="btn btn-default">
                </div>
              </div>
              <div class="form-group">
                <label>Link URL (bila ada)</label>
                <input type="text" name="linkurlvarietas" class="form-control">
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
                      <td><input list="daftarAtribut" id="atribut0" name="atribut0" type="text" style="border-radius: 0px;width: 224px; height: 35px;"></td>
                      <td><input name="value0" class="" type="text" style="border-radius: 0px;margin:0px 10px;width: 224px;height: 35px;"></td>
                      <td></td>
                    </tr> 
                  </tbody>


                 <form method="post" action="<?php base_url('admin/tambahVarietas') ?>"><input hidden name="temp" id="temp" value="1"></form>

                  <tfoot>
                    <tr>
                      <td></td>


                      <td class="text-right"><button class="btn btn-small btn-default" onclick="addrow(); return false" style="margin-top: 10px;height: 35px;margin-right: 10px;"><i class="fa fa-plus" style="margin-top: -25px;"></i></button></td>


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
      var indeks = 1;            
      function addrow() {

      //   alert("asd");
      // }

        //menentukan target append
        var itemlist = document.getElementById('itemlist');
                  
        //membuat element
        var row = document.createElement('tr');
        var jenis = document.createElement('td');
        var jumlah = document.createElement('td');
        var aksi = document.createElement('td');

        //meng append element
        itemlist.appendChild(row);
        row.appendChild(jenis);
        row.appendChild(jumlah);
        row.appendChild(aksi);
                            
        //membuat element input
        var jenis_input = document.createElement('input');
        jenis_input.setAttribute('list', 'daftarAtribut');
        jenis_input.setAttribute('id', 'atribut'+ indeks);
        jenis_input.setAttribute('name', 'atribut'+ indeks);
        jenis_input.setAttribute('class', 'autocomplete')
        jenis_input.setAttribute('type', 'text');
        jenis_input.setAttribute('style', 'margin-top : 10px;width: 224px;height: 35px;');
        // autocomplete(document.getElementById("atribut" + indeks), listAtribut);

        var jumlah_input = document.createElement('input');
        jumlah_input.setAttribute('name', 'value'+ indeks);
        jumlah_input.setAttribute('type', 'text');
        jumlah_input.setAttribute('style', 'margin : 10px 10px 0px 10px;width: 224px;height: 35px;');

        var hapus = document.createElement('span');

        //meng append element input
        jenis.appendChild(jenis_input);                
        jumlah.appendChild(jumlah_input);
        aksi.appendChild(hapus);

        hapus.innerHTML = '<button class="btn btn-small btn-default" style="margin-top:10px;width: 5px;height: 35px;"><i class="fa fa-trash 0"></i></button>';
        
        //membuat aksi delete element
        indeks++;
        document.getElementById('temp').value = indeks;
                  
        hapus.onclick = function () {
          row.parentNode.removeChild(row);
          // indeks--;
          document.getElementById('temp').value = indeks;
        };
      }
    </script>

    <datalist id="daftarAtribut">
    <?php 
        foreach ($listAtribut as $row) {
            echo "<option value=\"$row->nama_atribut\">";
        }
    ?>
    </datalist>

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
                    $nama2 = $row['nama_jenis'];
                  ?>
                 
                  <td>
                    <a href="#tomboleditleaflet" class="edit" onclick="modal_edit_leaflet(
                    '<?php echo "$idleaflet"; ?>',
                    '<?php echo "$nama2"; ?>',
                    '<?php echo "$nama"; ?>',
                    '<?php echo "$idimg1"; ?>',
                    '<?php echo "$idimg2"; ?>',
                    '<?php echo "$leaflet1"; ?>',
                    '<?php echo "$leaflet2"; ?>',
                    );"><i class="fa fa-pencil-square-o" data-toggle="tooltip" title="Edit" aria-hidden="true"></i></a>
                    <a href="" class="delete" data-toggle="modal" onclick="confirm_modal_leaflet('<?php echo $row['id_leaflet']; ?>');"><i class="fa fa-trash-o" data-toggle="tooltip" title="Delete" aria-hidden="true"></i></a>   
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

    <!-- Delete Modal HTML Leaflet -->
    <div id="hapusleaflet" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <form>
            <div class="modal-header">            
              <h4 class="modal-title" style="font-size: 18px;">Hapus Data Leaflet</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">          
              <p>Yakin ingin menghapus data ini?</p>
              <p class="text-warning"><small></small></p>
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
              <a href="" id="idhapusleaflet"><input type="button" class="btn btn-danger" value="Hapus"></a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script>
        function confirm_modal_leaflet(delete_url)
        {
          $('#hapusleaflet').modal('show', {backdrop: 'static'});
          document.getElementById('idhapusleaflet').setAttribute('href' ,"hapusLeaflet/"+delete_url);
        }
    </script>

    <!-- Tambah Modal HTML leaflet-->
    <div id="tambahleaflet" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" style="font-size: 18px;">Tambah Data Leaflet</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
              </div>
                 <form enctype="multipart/form-data" action="<?php echo base_url('admin/tambahLeaflet');?>" method="post" class="form-horizontal" autocomplete="off">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Leaflet</label>
                            <input type="text" class="form-control" name="namaLeaflet" required>
                        </div>
                        <div class="form-group">
                            <label>Jenis Leaflet</label>
                            <input type="text" class="form-control" list="daftarJenis" id="jenisLeaflet" name="jenisLeaflet" required>
                        </div>
                        <div class="form-group" style="padding-bottom: 0px">
                            <label>Upload Gambar Ke-1</label>
                            <div class="input-group" required>              
                                <input type="file" id="gmbr1" name="gambar1" style="display:none" onchange="document.getElementById('img1').value=this.value" accept="image/png, image/jpeg, image/gif" required>
                                <input type="text" id="img1" style="width: 468px;height: 35px; padding-left: 10px;" disabled="disabled" placeholder="828x583 piksel maksimal 2MB" required>
                                <input type="button" value="Pilih File" onclick="document.getElementById('gmbr1').click()" style="height: 35px;margin-top: -2px;" class="btn btn-default">                                
                            </div>
                        </div>                     
                        <div class="form-group" style="padding-bottom: 0px">
                            <label>Upload Gambar Ke-2</label>
                            <div class="input-group" required>                                
                                <input type="file" id="gmbr2" name="gambar2" style="display:none" onchange="document.getElementById('img2').value=this.value" accept="image/png, image/jpeg, image/gif" required>
                                <input type="text" id="img2" style="width: 468px;height: 35px; padding-left: 10px;" disabled="disabled" placeholder="828x583 piksel maksimal 2MB" required>
                                <input type="button" value="Pilih File" onclick="document.getElementById('gmbr2').click()" style="height: 35px;margin-top: -2px;" class="btn btn-default">                                
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

    <datalist id="daftarJenis">
    <?php 
        foreach ($listJenis as $row) {
            echo "<option value=\"$row->nama_jenis\">";
        }
    ?>
    </datalist>

    <!-- Edit Modal HTML Leaflet-->
    <div id="tomboleditleaflet" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" style="font-size: 18px;">Edit Data Leaflet</h4>`
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <form enctype="multipart/form-data" action="<?php echo base_url('admin/editLeaflet'); ?>" method="post" class="form-horizontal" autocomplete="off">
            <div class="modal-body">
              <input id="idleaflet" name="idleaflett" hidden>
              <input id="idgambar1" name="idimg1" hidden>
              <input id="idgambar2" name="idimg2" hidden>
                <div class="form-group">
                  <label>Nama Leaflet</label>
                  <input type="text" class="form-control" name="namaLeaflet" id="namaLeaflet" required>
                </div>
                <div class="form-group">
                  <label>Jenis Leaflet</label>
                  <input type="text" class="form-control" list="daftarJenis" name="namajenisLeaflet" id="namajenisLeaflet" required>
                </div>
                <div class="form-group" style="padding-bottom: 0px">
                  <label>Upload Gambar Ke-1</label>
                  <div class="input-group">              
                    <input type="file" id="leaf1" name="leaflet1" style="display:none" onchange="document.getElementById('leaflet1').value=this.value" accept="image/png, image/jpeg, image/gif">
                    <input type="text" id="leaflet1" style="width: 468px;height: 35px;padding-left: 10px;" disabled="disable">
                    <input type="button" value="Pilih File" onclick="document.getElementById('leaf1').click()" style="height: 35px;margin-top: -2px;" class="btn btn-default">                                
                  </div>
                </div>                     
                <div class="form-group" style="padding-bottom: 0px">
                  <label>Upload Gambar Ke-2</label>
                  <div class="input-group">                                
                  <input type="file" id="leaf2" name="leaflet2" style="display:none" onchange="document.getElementById('leaflet2').value=this.value" accept="image/png, image/jpeg, image/gif">
                  <input type="text" id="leaflet2" style="width: 468px;height: 35px;padding-left: 10px;" disabled="disable" required>
                  <input type="button" value="Pilih File" onclick="document.getElementById('leaf2').click()" style="height: 35px;margin-top: -2px;" class="btn btn-default">                                
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
        function modal_edit_leaflet(idleaflet,namaJenis,namaLeaflet,idgmbr1,idgmbr2,gmbr1,gmbr2)
        {
          $('#tomboleditleaflet').modal('show', {backdrop: 'static'});          
          document.getElementById('idleaflet').value = idleaflet;
          document.getElementById('namajenisLeaflet').value = namaJenis;
          document.getElementById('namaLeaflet').value = namaLeaflet;
          document.getElementById('idgambar1').value = idgmbr1;
          document.getElementById('idgambar2').value = idgmbr2;
          document.getElementById('leaflet1').value = gmbr1;
          document.getElementById('leaflet2').value = gmbr2;  
        }
        
    </script>

    <!-- Data Budidaya   -->
    <section class="budidaya" id="tabelBudidaya" style="padding-top: 50px; margin-top: -80px;">
      <div class="container">
        <div class="table table-wrapper">
          <div class="table-title">
            <div class="row">
              <div class="col-sm-3">
                <h2>Data <b>Budidaya</b></h2>
              </div>
              <div class="col-sm-2">
                <h5 style="margin-left: -64.5px;">Filter by &nbsp :</h5>
              </div>
              <div class="col-sm-2" style="padding-top: 0px;">
                <select class="form-control komoditasbud" id="jenisKomoditasbud" name="komoditasbud" style="margin-left: -169.5px; width: 170px; height: 35px;" onchange="filterBudidaya();">
                       <option value="Semua Komoditas" selected>Semua Komoditas</option>
                  <?php
                    $komoditasbud = array("Semua Komoditas","Kapas","Kapuk","Kenaf","Rami","Rosela","Sisal","Abaka");
                    for($i = 1;$i < count($komoditasbud);$i++){
                      echo"<option value=$komoditasbud[$i]> $komoditasbud[$i] </option>";
                    }
                  ?>
                </select>
              </div>
              <div class="col-sm-1">
              </div>
              <div class="col-sm-2">
              </div>
              <div class="col-sm-2">
                <a href="#tambahbudidaya" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus-square" aria-hidden="true"></i><span>Tambah Data</span></a>               
              </div>
            </div>
          </div>
          <div class="table-responsive" style="margin: 30px 0px;" id="tableKomoditasBudidaya">
            <table class="table table-striped table-hover">
              <thead>
                <tr>                                
                  <th>No</th>
                  <th>Judul</th>                                
                  <th>Deskripsi Singkat</th>                              
                  <th>Penulis</th>                              
                  <th>File</th>
                  <th>URL</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  $no = 1;                                          
                  foreach ($monograf as $row) { 
                    $url_c = ""; 
                    if (strlen($row['URL']) != 0) {
                      $url_c = substr($row['URL'], 0, 5).' ...';
                    }  
                ?>
                <tr >
                  <td><?php echo $no; ?></td>                                
                  <td><?php echo "$row[judul]"; ?></td>                              
                  <td><?php echo "$row[cuplikan_monograf]"; ?></td>                         
                  <td><?php echo "$row[penulis]"; ?></td>
                  <td><?php echo "$row[file]"; ?></td>
                  <td><?php echo $url_c; ?></td>
                  <td>
                    <a href="#tomboleditbudidaya" class="edit" onclick="modal_edit_budidaya(
                    '<?php echo $row['id_serat']; ?>',
                    '<?php echo $row['nama_serat']; ?>',
                    '<?php echo $row['id_detail_monograf']; ?>',
                    '<?php echo $row['judul']; ?>',
                    '<?php echo $row['cuplikan_monograf']; ?>',
                    '<?php echo $row['penulis']; ?>',
                    '<?php echo $row['file']; ?>',
                    '<?php echo $row['URL']; ?>'
                    );"><i class="fa fa-pencil-square-o" data-toggle="tooltip" title="Edit" aria-hidden="true"></i></a>
                    <a href="" class="delete" data-toggle="modal" onclick="confirm_modal_budidaya('<?php echo $row['id_detail_monograf']; ?>');"><i class="fa fa-trash-o" data-toggle="tooltip" title="Delete" aria-hidden="true"></i></a>      
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

    <!-- Filter Budidaya -->
    <script>
      function filterBudidaya(){
        var komoditasbud = $("#jenisKomoditasbud").val();
        $.ajax({
            type:"POST",
            url: "../admin/filterBudidaya",
            data: "serattt=" + komoditasbud,
            dataType : "html",
            success:function(msg){
                $("#tableKomoditasBudidaya").html(msg);                
            },
            error:function(){
              alert("Search failed");
            }
        });
      }
    </script>

     <!-- Tambah Modal HTML Budidaya -->
    <div id="tambahbudidaya" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" style="font-size: 18px;">Tambah Data Budidaya</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <form enctype="multipart/form-data" action="<?php echo base_url('admin/tambahBudidaya'); ?>" method="post" class="form-horizontal" autocomplete="off">
            <div class="modal-body">
              <div class="form-group">
                <label>Komoditas</label>
                <select class="form-control" name="selectkomoditas">
                  <option value="S0002">Kapas</option>
                  <option value="S0003">Kapuk</option>
                  <option value="S0004">Kenaf</option>
                  <option value="S0005">Rami</option>
                  <option value="S0006">Rosela</option>
                  <option value="S0010">Sisal</option>
                  <option value="S0011">Abaka</option>
                </select>                            
              </div>
              <div class="form-group">
                <label>Judul</label>
                <input type="text" name="judul" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Deskripsi Singkat</label>
                <textarea type="text" name="deskripsiSingkat" class="form-control" rows="6" required ></textarea>
              </div>
              <div class="form-group">
                <label>Penulis</label>
                <input type="text" name="penulis" class="form-control" required>
              </div>
              <div class="form-group" style="padding-bottom: 0px">
                <label>Upload File</label>
                  <div class="input-group">                                
                    <input type="file" id="filepdf" name="pdf" style="display:none" onchange="document.getElementById('pdftext').value=this.value" accept="application/pdf" required>
                    <input type="text" id="pdftext" style="width: 468px;height: 35px;padding-left: 10px;" disabled="disable" placeholder="maksimal 2MB">
                    <input type="button" value="Pilih File" onclick="document.getElementById('filepdf').click()" style="height: 35px;margin-top: -2px;" class="btn btn-default">                                
                  </div>
              </div> 
              <div class="form-group">
                <label>URL (bila ada)</label>
                <input type="text" name="urlbudidaya" class="form-control">
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

    <!-- Edit Modal HTML Budidaya-->
    <div id="tomboleditbudidaya" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" style="font-size: 18px;">Edit Data Budidaya</h4>`
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <form enctype="multipart/form-data" action="<?php echo base_url('admin/editBudidayaaaa'); ?>" method="post" class="form-horizontal" autocomplete="off">
            <div class="modal-body">
              <input hidden id="idSerat_id" name="idSerat">
              <input hidden id="idBudidaya_id" name="idBudidaya">
              <div class="form-group">
                <label>Komoditas</label>
                <input type="text" id="namaSerat_id2" name="namaSerat" class="form-control" disabled>
              </div>
              <div class="form-group">
                <label>Judul</label>
                <input type="text" id="judul_id" name="judul" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Deskripsi Singkat</label>
                <textarea type="text" id="cuplikan_id" name="deskripsiSingkat" class="form-control" rows="6" required ></textarea>
              </div>
              <div class="form-group">
                <label>Penulis</label>
                <input type="text" id="penulis_id" name="penulis" class="form-control" required>
              </div>
              <div class="form-group" style="padding-bottom: 0px">
                <label>Upload File</label>
                <div class="input-group">                                
                  <input type="file" id="editfilepdf" name="editpdfbudi" style="display:none" onchange="document.getElementById('editpdftext_id').value=this.value" accept="application/pdf">
                  <input type="text" id="editpdftext_id" style="width: 468px;height: 35px;padding-left: 10px;" disabled="disable">
                  <input type="button" value="Pilih File" onclick="document.getElementById('editfilepdf').click()" style="height: 35px;margin-top: -2px;" class="btn btn-default">                                
                </div>
              </div> 
              <div class="form-group">
                <label>URL</label>
                <input type="text" id="editurlbud_id" name="editurlbud" class="form-control">
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
        function modal_edit_budidaya(idSerat,namaSerat2,idBudidaya,judul,cuplikan,penulis,file,urlbud)
        {
          $('#tomboleditbudidaya').modal('show', {backdrop: 'static'});          
          document.getElementById('idSerat_id').value = idSerat;
          document.getElementById('namaSerat_id2').value = namaSerat2;
          document.getElementById('idBudidaya_id').value = idBudidaya;
          document.getElementById('judul_id').value = judul;
          document.getElementById('cuplikan_id').value = cuplikan;
          document.getElementById('penulis_id').value = penulis;
          document.getElementById('editpdftext_id').value = file;
          document.getElementById('editurlbud_id').value = urlbud;  
        }
    </script>

    <!-- Delete Modal HTML Budidaya -->
    <div id="hapusbudidaya" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <form>
            <div class="modal-header">            
              <h4 class="modal-title" style="font-size: 18px;">Hapus Data Budidaya</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">          
              <p>Yakin ingin menghapus data ini?</p>
              <p class="text-warning"><small></small></p>
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
              <a href="" id="idhapusbudidaya"><input type="button" class="btn btn-danger" value="Hapus"></a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script>
        function confirm_modal_budidaya(delete_url)
        {
          $('#hapusbudidaya').modal('show', {backdrop: 'static'});
          document.getElementById('idhapusbudidaya').setAttribute('href' ,"hapusBudidaya/"+delete_url);
        }
    </script>



    <!-- Data Stok Benih   -->
    <section class="stokbenih" id="tabelStokBenih" style="padding-top: 50px; margin-top: -80px;">
      <div class="container">
        <div class="table table-wrapper">
          <div class="table-title">
            <div class="row">
              <div class="col-sm-3">
                <h2>Data <b>Stok Benih</b></h2>
              </div>
              <div class="col-sm-2">
              </div>
              <div class="col-sm-2" style="padding-top: 0px;">
              </div>
              <div class="col-sm-1">
              </div>
              <div class="col-sm-2">
              </div>
              <div class="col-sm-2">
                <a href="#tambahstokbenih" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus-square" aria-hidden="true"></i><span>Tambah Data</span></a>                   
              </div>
            </div>
          </div>
          <div class="table-responsive" style="margin: 30px 0px;" id="tableKomoditasStok">
            <table class="table table-striped table-hover">
              <thead>
                <tr>                                
                  <th>No</th>
                  <th>Nama Benih</th>                                
                  <th>Asal</th>                              
                  <th>Tahun Panen</th>                              
                  <th>Kelas</th>
                  <th>Stok Bulan Terakhir (kg)</th>  
                  <th>Stok Sampai</th>                                
                  <th>Aksi</th>                              
                </tr>
              </thead>
              <tbody>
                <?php 
                  $no = 1;                                          
                  foreach ($stokbenih as $row) {    
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


                    <a href="#editstokbenih" class="edit"  onclick="confirm_modal_editstokbenih(
                   '<?php echo $row['id_benih']; ?>',
                   '<?php echo $row['id_stok_benih']; ?>',
                   '<?php echo $row['nama_benih']; ?>',
                   '<?php echo $row['asal']; ?>',
                   '<?php echo $row['tahun_panen']; ?>',
                   '<?php echo $row['kelas']; ?>',
                   '<?php echo $row['stok_bulan_terakhir']; ?>',
                   '<?php echo $row['stok_sampai']; ?>')"><i class="fa fa-pencil-square-o" data-toggle="tooltip" title="Edit" aria-hidden="true"></i></a>

                    <a href="" class="delete" data-toggle="modal" onclick="confirm_modal_stokbenih('<?php echo $row['id_stok_benih']; ?>');"><i class="fa fa-trash-o" data-toggle="tooltip" title="Delete" aria-hidden="true"></i></a>     

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

    <!-- Delete Modal HTML Stok Benih -->
    <div id="hapusstokbenih" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <form>
            <div class="modal-header">            
              <h4 class="modal-title" style="font-size: 18px;">Hapus Data Stok Benih</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">          
              <p>Yakin ingin menghapus data ini?</p>
              <p class="text-warning"><small></small></p>
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
              <a href="" id="idhapusstokbenih"><input type="button" class="btn btn-danger" value="Hapus"></a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script>
        function confirm_modal_stokbenih(delete_url)
        {
          $('#hapusstokbenih').modal('show', {backdrop: 'static'});
          document.getElementById('idhapusstokbenih').setAttribute('href' ,"hapusStokBenih/"+delete_url);
        }
    </script>

    <!-- Tambah Modal HTML Stok Benih -->
    <div id="tambahstokbenih" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" style="font-size: 18px;">Tambah Data Stok Benih</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <form enctype="multipart/form-data" action="<?php echo base_url('admin/tambahStokBenihCuy'); ?>" method="post" class="form-horizontal" autocomplete="off">
              <div class="modal-body">
              <div class="form-group">
                <label>Nama Benih</label>
                <input type="text" class="form-control" list="daftarbenih" id="namaBenih" name="namaBenih2" rfequired>
              </div>
              <div class="form-group">
                <label>Asal</label>
                <input type="text" name="asal" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Tahun Panen</label>
                <input type="number" step="1" name="tahunPanen" class="form-control" placeholder="contoh : 2018" required>
              </div>
              <div class="form-group">
                <label>Kelas</label>
                <!-- <input type="text" name="kelas" class="form-control" required> -->
                <select name="kelas" class="form-control">
                  <option value="">Tidak Ada</option>
                  <option value="Dasar">Dasar</option>
                  <option value="Pokok">Pokok</option>
                </select>
              </div>
              <div class="form-group">
                <label>Stok Bulan Terakhir (kg)</label>
                <input type="number" step="0.01" name="stokBulanTerakhir" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Stok Sampai</label><br>
                <input type="date" id="stokSampai" name="stokSampai" class="form-control" required>
              </div>  
              <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                <input type="submit" class="btn btn-success" value="Tambah">
              </div>
            </div>
          </form>              
        </div>
      </div>
    </div>

    <datalist id="daftarbenih">
    <?php 
        foreach ($listBenih as $row) {
            echo "<option value=\"$row->nama_benih\">";
        }
    ?>
    </datalist> 

    <!-- Edit Modal HTML Stok Benih -->
    <div id="editstokbenih" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" style="font-size: 18px;">Edit Data Stok Benih</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <form enctype="multipart/form-data" action="<?php echo base_url('admin/editStokBenih'); ?>" method="post" class="form-horizontal" autocomplete="off">
              <div class="modal-body">
              <div class="form-group">
                <input hidden id="idstokben" name="idstokbenih">
                <input hidden id="idben" name="idBenih">
                <label>Nama Benih</label>
                <input type="text" class="form-control"  id="namabenihid" name="namaBenih" disabled>
              </div>
              <div class="form-group">
                <label>Asal</label>
                <input type="text" id="asalid" name="asalbenih" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Tahun Panen</label>
                <input type="number" step="1" id="tahunid" name="tahunpanenbenih" class="form-control" placeholder="contoh : 2018" required>
              </div>
              <div class="form-group">
                <label>Kelas</label>
                <!-- <input type="text" name="kelas" class="form-control" required> -->
                <select id="kelasid" name="kelasbenih" class="form-control">
                  <option value="">Tidak Ada</option>
                  <option value="Dasar">Dasar</option>
                  <option value="Pokok">Pokok</option>
                </select>
              </div>
              <div class="form-group">
                <label>Stok Bulan Terakhir (kg)</label>
                <input type="number" step="0.01" id="stokterakhirid" name="stokbulanterakhirbenih" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Stok Sampai</label><br>
                <input type="date" id="stoksampaiid" name="stoksampaibenih" class="form-control" required>
              </div>  
              <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                <input type="submit" class="btn btn-success" value="Simpan">
              </div>
            </div>
          </form>              
        </div>
      </div>
    </div>
    <script>
       function confirm_modal_editstokbenih(idBenih,idstokbenih, namaBenih, asalbenih, tahunpanenbenih, kelasbenih, stokbulanterakhirbenih, stoksampaibenih)
        {
          $('#editstokbenih').modal('show', {backdrop: 'static'});
          document.getElementById('idben').value = idBenih;
          document.getElementById('idstokben').value = idstokbenih;
          document.getElementById('namabenihid').value = namaBenih;
          document.getElementById('asalid').value = asalbenih;
          document.getElementById('tahunid').value = tahunpanenbenih;
          document.getElementById('kelasid').value = kelasbenih;
          document.getElementById('stokterakhirid').value = stokbulanterakhirbenih;
          document.getElementById('stoksampaiid').value = stoksampaibenih;
        }
    </script>

    <!-- Data Distribusi Benih   -->
    <section class="distibusibenih" id="tabelDistribusiBenih" style="padding-top: 50px; margin-top: -80px;">
      <div class="container">
        <div class="table table-wrapper">
          <div class="table-title">
            <div class="row">
              <div class="col-sm-3">
                <h2>Data <b>Distribusi Benih</b></h2>
              </div>
              <div class="col-sm-2">
                <h5 style="margin-left: 0px;">Filter by &nbsp :</h5>
              </div>
              <div class="col-sm-2" style="padding-top: 0px;">
                <select class="form-control tahundist" id="jenisTahundist" name="tahundist" style="margin-left: -105px; width: 170px; height: 35px;" onchange="filterDistribusi();">
                       <option value="Semua Tahun" selected>Semua Tahun</option>
                  <?php
                    for($i = 2000;$i <= 2050;$i++){
                      echo"<option value=$i> $i </option>";
                    }
                  ?>
                  ?>
                </select>
              </div>
              <div class="col-sm-2">
                <select class="form-control bulandist" id="jenisBulandist" name="bulandist" style="margin-left: -105px; width: 170px; height: 35px;" onchange="filterDistribusi();">
                       <option value="Semua Bulan" selected>Semua Bulan</option>
                  <?php
                    $bulandist = array("Semua Bulan","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                    for($i = 1;$i < count($bulandist);$i++){
                      echo"<option value=$bulandist[$i]> $bulandist[$i] </option>";
                    }
                  ?>
                </select>
              </div>
              <div class="col-sm-1">
              </div>
              <div class="col-sm-2">
                <a href="#tambahdistribusibenih" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus-square" aria-hidden="true"></i><span>Tambah Data</span></a>            
              </div>
            </div>
          </div>
          <div class="table-responsive" style="margin: 30px 0px;" id="tabelDistribusi">
            <table class="table table-striped table-hover">
              <thead>
                <tr>                                
                  <th>No</th>
                  <th>Nama Benih</th>                                
                  <th>Tanggal Distribusi</th>                              
                  <th>Tahun Panen</th>                              
                  <th>Kelas</th>
                  <th>Jumlah (kg)</th>  
                  <th>Keterangan</th>                                
                  <th>Aksi</th>                              
                </tr>
              </thead>
              <tbody>
                <?php 
                  $no = 1;                                          
                  foreach ($distribusibenih as $row) {    
                ?>
                <tr>
                  <td><?php echo $no; ?></td>                                
                  <td><?php echo "$row[nama_benih]"; ?></td>                              
                  <td><?php echo "$row[tanggal]"; ?></td>                         
                  <td><?php echo "$row[tahun_panen]"; ?></td>
                  <td><?php echo "$row[kelas_benih]"; ?></td>
                  <td><?php echo "$row[jumlah_kg]"; ?></td>
                  <td><?php echo "$row[keterangan]"; ?></td>
                  <td>
                    <a href="#editdistribusibenih" class="edit" onclick="confirm_modal_editdistribusibenih(
                      '<?php echo $row['id_benih']; ?>',
                    '<?php echo $row['id_distribusi'];?>',
                    '<?php echo $row['nama_benih']; ?>',
                    '<?php echo $row['tanggal']; ?>',
                    '<?php echo $row['tahun_panen']; ?>',
                    '<?php echo $row['kelas_benih']; ?>',
                    '<?php echo $row['jumlah_kg']; ?>',
                    '<?php echo $row['keterangan']; ?>')"><i class="fa fa-pencil-square-o" data-toggle="tooltip" title="Edit" aria-hidden="true"></i></a>
                    <a href="" class="delete" data-toggle="modal" onclick="confirm_modal_distribusibenih('<?php echo $row['id_distribusi']; ?>');"><i class="fa fa-trash-o" data-toggle="tooltip" title="Delete" aria-hidden="true"></i></a>  
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

    <!-- Tambah Modal HTML Distribusi Benih -->
    <div id="tambahdistribusibenih" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" style="font-size: 18px;">Tambah Data Distribusi Benih</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <form enctype="multipart/form-data" action="<?php echo base_url('admin/tambahDistribusiBenih'); ?>" method="post" class="form-horizontal" autocomplete="off">
              <div class="modal-body">
              <div class="form-group">
                <label>Nama Benih</label>
                <input type="text" class="form-control" list="daftarbenih2" id="namaBenih" name="namaBenih" required>
              </div>
              <div class="form-group">
                <label>Tanggal Distribusi</label><br>
                <input type="date" id="tanggalDistribusi" name="tanggalDistribusi" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Tahun Panen</label>
                <input type="text" name="tahunPanen" class="form-control" placeholder="contoh : Sumberrejo 2018" required>
              </div>
              <div class="form-group">
                <label>Kelas</label>
                <select name="kelas" class="form-control">
                  <option value="">Tidak Ada</option>
                  <option value="Dasar">Dasar</option>
                  <option value="Pokok">Pokok</option>
                </select>
              </div>
              <div class="form-group">
                <label>Jumlah (kg)</label>
                <input type="number" step="0.01" name="jumlahkg" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="form-control">
              </div>
              <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                <input type="submit" class="btn btn-success" value="Tambah">
              </div>
            </div>
          </form>              
        </div>
      </div>
    </div>

    <datalist id="daftarbenih2">
    <?php 
        foreach ($listBenih as $row) {
            echo "<option value=\"$row->nama_benih\">";
        }
    ?>
    </datalist> 

    <!-- Filter Distribusi -->
    <script>
      function filterDistribusi(){
        var acuan = ["Semua Bulan","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
        var bulan = $("#jenisBulandist").val();
        for (var i = 0; i < acuan.length; i++) {
          if (bulan == acuan[i]) {
            if (i < 10) {
              if (i == 0) {
                bulan = "00"; // bulan = "_%_%";
              } 
              else {
                bulan = "0" + (i);
              }
            } else {
                bulan = (i);
            }
          }
        }
        var tahun = $("#jenisTahundist").val();
        if (tahun == "Semua Tahun") {
          tahun = "0000"; // tahun = "_%_%_%_%";
        } 
        $.ajax({
              type:"POST",
              url: "../admin/filterDistribusi",
              data: "serattt=" + tahun + "-" + bulan,
              dataType : "html",
              success:function(msg){
                  $("#tabelDistribusi").html(msg);                
              },
              error:function(){
                alert("Search failed");
              }
        });
      }
    </script>

    <!-- Delete Modal HTML Distribusi Benih -->
    <div id="hapusdistribusibenih" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <form>
            <div class="modal-header">            
              <h4 class="modal-title" style="font-size: 18px;">Hapus Data Distribusi Benih</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">          
              <p>Yakin ingin menghapus data ini?</p>
              <p class="text-warning"><small></small></p>
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
              <a href="" id="idhapusdistribusibenih"><input type="button" class="btn btn-danger" value="Hapus"></a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script>
        function confirm_modal_distribusibenih(delete_url)
        {
          $('#hapusdistribusibenih').modal('show', {backdrop: 'static'});
          document.getElementById('idhapusdistribusibenih').setAttribute('href' ,"hapusDistribusiBenih/"+delete_url);
        }
    </script>


    <!-- Edit Modal HTML Distribusi Benih -->
    <div id="editdistribusibenih" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" style="font-size: 18px;">Edit Data Distribusi Benih</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <form enctype="multipart/form-data" action="<?php echo base_url('admin/editDistribusiBenih'); ?>" method="post" class="form-horizontal" autocomplete="off">
              <div class="modal-body">
              <input hidden id="idbendistri" name="idbenihdistribusibenih">
              <input hidden id="iddisben" name="iddistribusibenih">
              <div class="form-group">
                <label>Nama Benih</label>
                <input type="text" class="form-control" list="daftarbenih2" id="namadisbenid" name="namanyabenih" disabled>
              </div>
              <div class="form-group">
                <label>Tanggal Distribusi</label><br>
                <input type="date" id="tanggaldisbenid" name="tanggaldistribusibenih" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Tahun Panen</label>
                <input type="text" id="tahundisbenid" name="tahunpanendistribusibenih" class="form-control" placeholder="contoh : Sumberrejo 2018" required>
              </div>
              <div class="form-group">
                <label>Kelas</label>
                <select id="kelasdisbenid" name="kelasdistribusibenih" class="form-control">
                  <option value="">Tidak Ada</option>
                  <option value="Dasar">Dasar</option>
                  <option value="Pokok">Pokok</option>
                </select>
              </div>
              <div class="form-group">
                <label>Jumlah (kg)</label>
                <input type="number" step="0.01" id="jumdisbenid" name="jumlahkgdistribusibenih" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Keterangan</label>
                <input type="text" id="ketdisbenid" name="keterangandistribusibenih" class="form-control">
              </div>
              <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                <input type="submit" class="btn btn-success" value="Simpan">
              </div>
            </div>
          </form>              
        </div>
      </div>
    </div>

    <script>
       function confirm_modal_editdistribusibenih(idbenihdistribusibenih,iddistribusibenih, namanyabenih,tanggaldistribusibenih, tahunpanendistribusibenih, kelasdistribusibenih, jumlahkgdistribusibenih, keterangandistribusibenih)
        {
          $('#editdistribusibenih').modal('show', {backdrop: 'static'});
          document.getElementById('idbendistri').value = idbenihdistribusibenih;
          document.getElementById('iddisben').value = iddistribusibenih;
          document.getElementById('namadisbenid').value = namanyabenih;
          document.getElementById('tanggaldisbenid').value = tanggaldistribusibenih;
          document.getElementById('tahundisbenid').value = tahunpanendistribusibenih;
          document.getElementById('kelasdisbenid').value = kelasdistribusibenih;
          document.getElementById('jumdisbenid').value = jumlahkgdistribusibenih;
          document.getElementById('ketdisbenid').value = keterangandistribusibenih;
        }
    </script>

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
                    <a href="#tomboleditalsin" class="edit" onclick="modal_edit_alsin(
                    '<?php echo "$idalsin"; ?>',
                    '<?php echo "$nama"; ?>',
                    '<?php echo "$idimg1"; ?>',
                    '<?php echo "$idimg2"; ?>',
                    '<?php echo "$leaflet1"; ?>',
                    '<?php echo "$leaflet2"; ?>'
                    );"><i class="fa fa-pencil-square-o" data-toggle="tooltip" title="Edit" aria-hidden="true"></i></a>
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
              <h4 class="modal-title" style="font-size: 18px;">Hapus Data Alat dan Mesin</h4>
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

    <!-- Tambah Modal HTML Alsin-->
    <div id="tambahalsin" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" style="font-size: 18px;">Tambah Data Alat dan Mesin</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
              </div>
                 <form enctype="multipart/form-data" action="<?php echo base_url('admin/tambahAlsin');?>" method="post" class="form-horizontal">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Alat dan Mesin</label>
                            <input type="text" class="form-control" name="namaAlsin" required>
                        </div>
                        <div class="form-group" style="padding-bottom: 0px">
                            <label>Upload Gambar Ke-1</label>
                            <div class="input-group">              
                                <input type="file" id="gmbralsin1" name="gambaralsin1" style="display:none" onchange="document.getElementById('imgalsin1').value=this.value" accept="image/png, image/jpeg, image/gif" required>
                                <input type="text" id="imgalsin1" style="width: 468px;height: 35px;padding-left: 10px;" disabled="disabled" placeholder="  828x583 piksel">
                                <input type="button" value="Pilih File" onclick="document.getElementById('gmbralsin1').click()" style="height: 35px;margin-top: -2px;" class="btn btn-default">                                
                            </div>
                        </div>                     
                        <div class="form-group" style="padding-bottom: 0px">
                            <label>Upload Gambar Ke-2</label>
                            <div class="input-group">                                
                                <input type="file" id="gmbralsin2" name="gambaralsin2" style="display:none" onchange="document.getElementById('imgalsin2').value=this.value" accept="image/png, image/jpeg, image/gif" required>
                                <input type="text" id="imgalsin2" style="width: 468px;height: 35px;padding-left: 10px;" disabled="disabled" placeholder="  828x583 piksel" required>
                                <input type="button" value="Pilih File" onclick="document.getElementById('gmbralsin2').click()" style="height: 35px;margin-top: -2px;" class="btn btn-default">                                
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

    <!-- Edit Modal HTML Alsin-->
    <div id="tomboleditalsin" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" style="font-size: 18px;">Edit Data Alat dan Mesin</h4>`
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <form enctype="multipart/form-data" action="<?php echo base_url('admin/editAlsin'); ?>" method="post" class="form-horizontal" autocomplete="off">
            <div class="modal-body">
              <input id="idalsin_id" name="idalsin" hidden>
              <input id="idgambaralsin1_id" name="idgambaralsin1" hidden>
              <input id="idgambaralsin2_id" name="idgambaralsin2" hidden>
                <div class="form-group">
                  <label>Nama Alat dan Mesin</label>
                  <input type="text" class="form-control" name="namaAlsin" id="namaAlsin_id" required>
                </div>
                <div class="form-group" style="padding-bottom: 0px">
                  <label>Upload Gambar Ke-1</label>
                  <div class="input-group">              
                    <input type="file" id="leafalsin1" name="leafletalsin1" style="display:none" onchange="document.getElementById('leafletalsin1').value=this.value" accept="image/png, image/jpeg, image/gif">
                    <input type="text" id="leafletalsin1" style="width: 468px;height: 35px;padding-left: 10px;" disabled="disable">
                    <input type="button" value="Pilih File" onclick="document.getElementById('leafalsin1').click()" style="height: 35px;margin-top: -2px;" class="btn btn-default">         
                  </div>
                </div>                     
                <div class="form-group" style="padding-bottom: 0px">
                  <label>Upload Gambar Ke-2</label>
                  <div class="input-group">                                
                    <input type="file" id="leafalsin2" name="leafletalsin2" style="display:none" onchange="document.getElementById('leafletalsin2').value=this.value" accept="image/png, image/jpeg, image/gif">
                    <input type="text" id="leafletalsin2" style="width: 468px;height: 35px;padding-left: 10px;" disabled="disable" required>
                    <input type="button" value="Pilih File" onclick="document.getElementById('leafalsin2').click()" style="height: 35px;margin-top: -2px;" class="btn btn-default">                                
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
        function modal_edit_alsin(idAlsin,namaAlsin,idgmbralsin1,idgmbralsin2,gmbralsin1,gmbralsin2)
        {
          $('#tomboleditalsin').modal('show', {backdrop: 'static'});          
          document.getElementById('idalsin_id').value = idAlsin;
          document.getElementById('namaAlsin_id').value = namaAlsin;
          document.getElementById('idgambaralsin1_id').value = idgmbralsin1;
          document.getElementById('idgambaralsin2_id').value = idgmbralsin2;
          document.getElementById('leafletalsin1').value = gmbralsin1;
          document.getElementById('leafletalsin2').value = gmbralsin2;  
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