<html>
  <head>
    <title>Mahasiswa</title>
      
      <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/bootstrap.min.css" type="text/css"> 
      <script src="<?php echo base_url()?>assets/css/bootstrap.js" type="text/javascript"></script>
  
  </head>
  <body>
    <!-- Tulisan Data Mahasiswa di header -->
    <div align="center" style="padding-top: 50px; padding-bottom: 10px;">
        <h1><b>Data Mahasiswa</b></h1>
    </div>
    
    <!-- Tombol tambah -->
    <div class="container" align="right" >
      <a href='<?php echo base_url("mahasiswa/tambah"); ?>' class="btn btn-success" role="button" aria-pressed="true" >Tambah Data</a>
      <br>
      <br>
    </div>
    
    <!-- Tabel mahasiswa -->
    <div class="container">
      <table class="table table-consended table-striped">
      <tr>
        <th>NPM</th>
        <th>Nama</th>
        <th>Jurusan</th> 
        <th colspan="2"></th>      
      </tr>
      
      <?php

      if(! empty($mahasiswa)){ // Jika data mahasiswa tidak sama dengan kosong, artinya jika data mahasiswa ada
        foreach($mahasiswa as $data)
        {
      ?>    
          <tr>
          <td><?php echo $data->npm; ?></td>
          <td><?php echo $data->nama; ?></td>
          <td><?php echo $data->jurusan; ?></td>
          <td><a href="<?php echo base_url('mahasiswa/ubah/'.$data->npm)?>"
            class="btn btn-sm btn-info" >Ubah</a></td>
          <td><a href="<?php echo base_url('mahasiswa/hapus/'.$data->npm)?>"
            class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data?')" >Hapus</a></td>
          </tr>
      <?php   
        }
      }
      else
      { // Jika data mahasiswa kosong
      ?>
       <tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>  
      <?php
      }
      ?>  
    </table>
  
<!--Popup notification-->
  <div class="modal" id="deleteModal">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header"> 
            <h4 class="modal-title">Peringatan!</h4>
          </div>
            <div class="modal-body">
              <p>Test</p> 
            </div>
              <div class="modal-footer">
              <button class="btn btn-danger">Hapus</button>
              <button class="btn btn-primary">Batal</button>
              </div>
        </div>
    </div>
  </div>

  </div>
  
    
  
  </body>
</html>