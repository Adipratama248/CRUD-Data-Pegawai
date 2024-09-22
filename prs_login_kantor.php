<?php
if($_POST){
    $nama_pegawai=$_POST['nama_pegawai'];
    $password_pegawai=$_POST['password_pegawai'];
    if(empty($nama_pegawai)){
        echo "<script>alert('nama pegawai tidak boleh kosong');location.href='log.php';</script>";
    } elseif(empty($password_pegawai)){
        echo "<script>alert('Password tidak boleh kosong');location.href='log.php';</script>";
    } else {
        include "kon.php";
        $qry_login=mysqli_query($conn,"select * from tabel_pegawai where nama_pegawai = '".$nama_pegawai."' and password_pegawai = '".md5($password_pegawai)."'");
        if(mysqli_num_rows($qry_login)>0){
            $dt_login=mysqli_fetch_array($qry_login);
            session_start();
            $_SESSION['id_pegawai']=$dt_login['id_pegawai'];
            $_SESSION['nama_pegawai']=$dt_login['nama_pegawai'];
            $_SESSION['status_login']=true;
            header("location: tampil_pegawai.php");
        } else {
            echo "<script>alert('nama_pegawai dan Password tidak benar');location.href='log.php';</script>";
        }
    }
}

?>