<?php
if($_POST){
    $nik=$_POST['nik'];
    $nama_pegawai=$_POST['nama_pegawai'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['gender'];
    $no_telp=$_POST['no_telp'];
    $password_pegawai=$_POST['password_pegawai'];
    $id_j=$_POST['id_j'];

        include"kon.php";
        $insert=mysqli_query($conn,"insert into tabel_pegawai(`nik`, `nama_pegawai`, `alamat`, `gender`,`no_telp`,`password_pegawai`,`id_j`)
        value ('".$nik."','".$nama_pegawai."','".$alamat."','".$gender."','".$no_telp."','".md5($password_pegawai)."','".$id_j."') ")
        or die(mysqli_error($conn));
         if($insert){
             echo "<script>alert('Sukses menambahkan pegawai');location.href='tampil_pegawai.php';</script>";
         } else {
             echo "<script>alert('Gagal menambahkan pegawai');location.href='tambah_pegawai1.php';</script>";
         }
   
}
?>
