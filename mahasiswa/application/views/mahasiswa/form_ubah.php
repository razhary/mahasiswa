<html>
  <head>
    <title>Form Ubah - CRUD Codeigniter</title>
  <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/bootstrap.min.css" type="text/css"> 
  <script src="<?php echo base_url()?>assets/css/bootstrap.js" type="text/javascript"></script>
  </head>
  <body>
    <div class="container" align="center" style="padding-top: 50px; padding-bottom: 10px;">
    <h1>Form Ubah Data Mahasiswa</h1>
    <hr>
    </div>

    <!-- Menampilkan Error jika validasi tidak valid -->
    <div style="color: red;"><?php echo validation_errors(); ?></div>

    <div class="container" align="center">
    <?php echo form_open("mahasiswa/ubah/".$mahasiswa->npm); ?>
      <table cellpadding="8">
        <tr>
          <td>NPM</td>
          <td><input type="text" name="input_npm" value="<?php echo set_value('input_npm', $mahasiswa->npm); ?>" readonly></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="input_nama" value="<?php echo set_value('input_nama', $mahasiswa->nama); ?>"></td>
        </tr>
        <tr>
          <td>Jurusan</td>
          <td><input type="text" name="input_jurusan" value="<?php echo set_value('input_jurusan', $mahasiswa->jurusan); ?>"></td>
        </tr>
      </table>
      </div>  
      <div align="center">
      <input type="submit" name="submit" class="btn btn-info" value="Perbaharui">
      <a href="<?php echo base_url(); ?>"><input class="btn btn-danger" type="button" value="Batal"></a>
      </div> 
    <?php echo form_close(); ?>
  </body>
</html>