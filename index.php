<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width- name=""width, initial-scale=1.0">
    <style>
        .text-body {
            color: white;
        }
        .gradient-custom-3 {
/* fallback for old browsers */
background: #84fab0;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
}
.gradient-custom-4 {
/* fallback for old browsers */
background: #84fab0;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
}
    </style>
</head>
<body>
<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask  d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card  " style="border-radius: 15px; " >
            <div class="card-body p-4">
              <h2 class="text-uppercase text-center mb-5 text-body">Create an account</h2>

              <form action="proses_tambah_pegawai.php" method="POST">

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" required="" id="nik" name="nik" class="form-control form-control-lg" placeholder="NIK"  />
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" required="" id="nama_pegawai" name="nama_pegawai" class="form-control form-control-lg" placeholder="Nama" />
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" required="" id="alamat" name="alamat" class="form-control form-control-lg" placeholder="Alamat" />
                </div>



                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" required="" id="no_telp" name="no_telp" class="form-control form-control-lg" placeholder="nomor telepon" />
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" required="" id="password_pegawai" name="password_pegawai" class="form-control form-control-lg" placeholder="password" />
                </div>

                <div class="row">
                <div class="col-md-6 mb-4">

                <div data-mdb-input-init class="form-outline mb-4">
                <select name="gender" class="form-control" required="" placeholder="Alamat" >
                    <option></option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
                <label class="form-label" fname="Gender">GENDER</label>
                </div>
                </div>
                
                <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline mb-4">
                <select name="id_j" class="form-control" required="" >
            <option></option>
            <?php
            include "kon.php";
            $qry_j = mysqli_query($conn, "select * from tabel_jabatan");
            while ($data_j = mysqli_fetch_array($qry_j)) {
                echo '<option value="' . $data_j['id_j'] . '">' . $data_j['nama_j'] . '</option>';
            }
            ?>
            </select>
  <label class="form-label" fname="id_j">JABATAN</label>
                </div>
                </div>
                </div>

                <div class="d-flex justify-content-center">
                  <button  type="submit" data-mdb-button-init
                    data-mdb-ripple-init  class="btn btn-success btn-block btn-lg gradient-custom-4  " href="log.php">Register</button>
                </div>

                <p class="text-center text-body mt-5 mb-0 ">Have already an account? <a href="log.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>