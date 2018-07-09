<html>
  <head>
    <title>Form Tambah - CRUD Codeigniter</title>

    <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/bootstrap.min.css" type="text/css"> 
    <script src="<?php echo base_url()?>assets/css/bootstrap.js" type="text/javascript"></script>

  </head>
  <body>
    <div align="center" style="padding-top: 50px; padding-bottom: 10px;">
    <h1>Form Tambah Data Mahasiswa</h1>
    <hr>
    </div>

    <!-- Menampilkan Error jika validasi tidak valid -->
    <div style="color: red;"><?php echo validation_errors(); ?></div>

    <div class="container" align="center">
    <?php echo form_open("mahasiswa/tambah"); ?>
      <table cellpadding="8">
        <tr>
          <td>NPM</td>
          <td><input type="text" name="input_npm" value="<?php echo set_value('input_npm'); ?>"></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="input_nama" value="<?php echo set_value('input_nama'); ?>"></td>
        </tr>
        <tr>
          <td>Jurusan</td>
          <td><input type="text" name="input_jurusan" value="<?php echo set_value('input_jurusan'); ?>"></td>
        </tr>
      </table>
    </div>
    <div class="container" align="center">
      <input type="submit" class="btn btn-info" name="submit" value="Simpan">
      <a href='<?php echo base_url(); ?>' class="btn btn-danger" role="button" aria-pressed="true">Batal</a>
    <?php echo form_close(); ?>
  </div>
  </body>
</html>