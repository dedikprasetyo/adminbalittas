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
                  foreach ($dataVarietasFiltered as $row) {    
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
                    <a href="" class="delete" data-toggle="modal" onclick="confirm_modal_varietas('<?php echo $row['id_varietas']; ?>');"><i class="fa fa-trash-o" data-toggle="tooltip" title="Delete" aria-hidden="true"></i></a>  
                  </td>
                </tr>
                <?php                                 
                    $no++;
                  }
                ?>
              </tbody>
            </table>