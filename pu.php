<?php
if ($_POST) {
    $id_pegawai = $_POST['id_pegawai'];
    $nama_pegawai= $_POST['nama_pegawai'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $gender = $_POST['gender'];
    $no_telp = $_POST['no_telp'];
    $password_pegawai = $_POST['password_pegawai'];
    $id_j = $_POST['id_j'];
    if (empty($nama_pegawai)) {
        echo "<script>alert('nama_pegawai pegawai tidak boleh kosong');location.href='daftar.php';</script>";
    } elseif (empty($nik)) {
        echo "<script>alert('nik tidak boleh kosong');location.href='daftar.php';</script>";
    } else {
        include "kon.php";
        if (empty($password_pegawai)) {
            $update = mysqli_query($conn, "update tabel_pegawai set nama_pegawai='" . $nama_pegawai . "',nik='" . $nik . "', gender='" . $gender . "', alamat='" . $alamat . "', no_telp='" . $no_telp . "', id_j='" . $id_j . "' where id_pegawai= '" . $id_pegawai . "' ") or die(mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update pegawai');location.href='tampil_pegawai.php';</script>";
            } else {
                echo "<script>alert('Gagal update pegawai');location.href='ubah.php?id_pegawai=" . $id_pegawai . "';</script>";
            }
        } else {
            $update = mysqli_query($conn, "update tabel_pegawai set nama_pegawai='" . $nama_pegawai . "',nik='" . $nik . "', gender='" . $gender . "', alamat='" . $alamat . "',no_telp='" . $no_telp . "', password_pegawai='" . md5($password_pegawai) . "', id_j='" . $id_j . "' where id_pegawai = '" . $id_pegawai . "'") or die(mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update pegawai');location.href='tampil_pegawai.php';</script>";
            } else {
                echo "<script>alert('Gagal update pegawai');location.href='ubah.php?id=" . $id . "';</script>";
            }
        }
    }
}
      ?>