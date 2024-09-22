<?php
// Mulai session
session_start();
session_destroy(); // untuk mengakhiri
header ("location:log.php?pesan=logout");

// Cek apakah session terdaftar
if(isset($_SESSION['username'])) {
    // Session terdaftar, saatnya logout
    session_unset(); // Hapus semua variabel session
    session_destroy(); // Hapus session data

    // Memberitahu pengguna bahwa logout berhasil dan memberikan permalink untuk login
    echo 'Logout berhasil. Klik <a href="http://localhost/logout.php">di sini</a> untuk login kembali.';
    echo '<br>Anda akan dialihkan ke halaman login dalam 3 detik.';
    // echo '<script type="text/javascript">setTimeout(function() { window.location.href = "http://localhost/php_native/login1.php"; }, 3000);</script>';
} else {
    // Variabel session salah, user tidak seharusnya ada di halaman ini. Kembalikan ke login
    echo '<script type="text/javascript">window.location.href = "http://localhost/phpnative/login1.php";</script>';
    exit; // Pastikan tidak ada kode yang dieksekusi setelah melakukan redirect
}
?>