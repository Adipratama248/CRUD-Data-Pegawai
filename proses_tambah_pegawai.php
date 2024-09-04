<?php

if($_POST){
    $nik=$_POST['nik'];
    $nama_pegawai=$_POST['nama_pegawai'];
    $alamat=$_POST['alamat'];
    $jk=$_POST['jk'];
    $no_telp=$_POST['no_telp'];
    // $pw= $_POST['pw'];
    $id_j= $_POST['id_j'];
    if(empty($nama_pegawai)){
        echo "<script>alert('nama pegawai tidak boleh kosong');location.href='tambah_pegawai.php';</script>";}
            // else if(empty($pw)){
//     echo "<script>alert('password tidak boleh kosong');location.href='tambah_pegawai.php';</script>";}
   else {
        include "kon.php";
        $insert=mysqli_query($conn,"insert into tabel_pegawai('nik', 'nama', 'alamat', 'jk', 'no_telp', 'id_j')
         VALUE ('".$nik."','".$nama_pegawai."','".$alamat."','".$jk."','".$no_telp."','".$id_j."')")
         or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan pegawai');location.href='tampil_pegawai.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pegawai');location.href='tambah_pegawai.php';</script>";
        }
    }
}
?>
