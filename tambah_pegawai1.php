<!DOCTYPE html>
<html lang="en">
<head>
  
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<?php
    include "header.php"
    ?>
<form class="form-horizontal" action="proses_tambah_pegawai.php" method="POST" enctype="multipart/form-data">
  
<fieldset>

<legend align="center"><h3>PEGAWAI</h3></legend>

<div class="form-group">
  <label class="col-md-4 control-label">NIK</label>  
  <div class="col-md-4">
  <input type="text" name="nik" placeholder="NIK" class="form-control input-md" value="" required="" >
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Nama</label>  
  <div class="col-md-4">
  <input type="text" name="nama_pegawai" placeholder="NAMA" class="form-control input-md" value="" required="" >
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Alamat</label>  
  <div class="col-md-4">
  <input type="text" name="alamat" placeholder="ALAMAT" class="form-control input-md" value="" required="" >
  </div>
</div>
  
<div class="form-group">
  <label class="col-md-4 control-label">Gender</label>  
  <div class="col-md-4">
  <select name="gender" class="form-control" required="" >
            <option></option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">No Telepon</label>  
  <div class="col-md-4">
  <input type="text" name="no_telp" placeholder="NOMOR TELEPON" class="form-control input-md" value="" required="" >
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Password</label>  
  <div class="col-md-4">
  <input type="password" name="password_pegawai" placeholder="PASSWORD" class="form-control input-md" value="" required="" >
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Jabatan</label>  
  <div class="col-md-4">
  <select name="id_j" class="form-control" required="" >
            <option>
            <?php
            include "kon.php";
            $qry_j = mysqli_query($conn, "select * from tabel_jabatan");
            while ($data_j = mysqli_fetch_array($qry_j)) {
                echo '<option value="' . $data_j['id_j'] . '">' . $data_j['nama_j'] . '</option>';
            }
            ?>
            </option>
  </select>
  </div>
</div>

<div class="form-group" align="center">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <input type="submit" name="tambah" value="Tambah" class="btn btn-primary" >
  </div>
  </div>
  
</fieldset>
</form>
</body>
</html>