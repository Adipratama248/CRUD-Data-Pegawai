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
<?php
    include "kon.php";
    $qry_get_pegawai = mysqli_query($conn, "select * from tabel_pegawai where id_pegawai = '" .  $_GET['id_pegawai'] . "'");
    $dt_pegawai = mysqli_fetch_array($qry_get_pegawai);
    ?>
<form class="form-horizontal" action="pu.php" method="POST" >
<fieldset>
    
<legend align="center"><h3>PEGAWAI</h3></legend>
<input type="hidden" name="id_pegawai" value="<?= $dt_pegawai['id_pegawai'] ?>" />
<div class="form-group">
  <label class="col-md-4 control-label">NIK</label>  
  <div class="col-md-4">
  <input id="nik" name="nik" placeholder="NIK" class="form-control input-md" value="<?= $dt_pegawai['nik'] ?>" required="" type="text">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Nama</label>  
  <div class="col-md-4">
  <input id="nama_pegawai" name="nama_pegawai" placeholder="NAMA" class="form-control input-md" value="<?= $dt_pegawai['nama_pegawai'] ?>" required="" type="text">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Alamat</label>  
  <div class="col-md-4">
  <input id="alamat" name="alamat" placeholder="ALAMAT" class="form-control input-md" value="<?= $dt_pegawai['alamat'] ?>" required="" type="text">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Gender</label>  
  <div class="col-md-4">
  <?php
        $arr_gender = array('L' => 'Laki-laki', 'P' => 'Perempuan');
        ?>
        <select name="gender" class="form-control">
            <option></option>
            <?php foreach ($arr_gender as $key_gender => $val_gender):
                if ($key_gender == $dt_pegawai['gender']) {
                    $selek = "selected";
                } else {
                    $selek = "";
                }
                ?>
                <option value="<?= $key_gender ?>" <?= $selek ?>><?= $val_gender ?></option>
            <?php endforeach ?>
        </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">No Telepon</label>  
  <div class="col-md-4">
  <input id="no_telp" name="no_telp" placeholder="NOMOR TELEPON" class="form-control input-md" value="<?= $dt_pegawai['no_telp'] ?>" required="" type="text">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Password</label>  
  <div class="col-md-4">
  <input id="password_pegawai" name="password_pegawai" placeholder="PASSWORD" class="form-control input-md" value="" required="" type="password">
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
              if ($data_j['id_j'] == $dt_pegawai['id_j']) {
                $selek = "selected";
            } else {
                $selek = "";
            }
                echo '<option value="' . $data_j['id_j'] . '"'.$selek . '>' . $data_j['nama_j'] . '</option>';
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