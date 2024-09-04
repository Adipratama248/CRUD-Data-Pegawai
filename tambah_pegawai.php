<html>

<head>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <h3>Tambah pegawai</h3>
    <form action="proses_tambah_pegawai.php" method="post">
    NIK :
    <input type="text" name="nik" value="" class="form-control">
        nama pegawai :
        <input type="text" name="nama_pegawai" value="" class="form-control">
        Nomor Telepon :
        <input type="text" name="no_telp" value="" class="form-control">
        Gender :
        <select name="jk" class="form-control">
            <option></option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
        Alamat :
        <textarea name="alamat" class="form-control" rows="4"></textarea>
        <!-- Password :
        <input type="password" name="pw" value="" class="form-control"> -->
        Jabatan :
        <select name="id_j" class="form-control">
            <option></option>
            <?php
            include "kon.php";
            $qry_j = mysqli_query($conn, "select * from tabel_jabatan");
            while ($data_j = mysqli_fetch_array($qry_j)) {
                echo '<option value="' . $data_j['id_j'] . '">' . $data_j['nama_j'] . '</option>';
            }
            ?>
        <input type="submit" name="simpan" value="Tambah pegawai" class="btn btn-primary">
       
        </select>
    </form>
</body>

</html>