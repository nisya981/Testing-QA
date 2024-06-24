<?php
include 'koneksi.php';
// mengaktifkan session
session_start();
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Menambah Data</title>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-
QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
crossorigin="anonymous">
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-
YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
crossorigin="anonymous"></script>
</head>
<body>
<ul class="nav nav-tabs">
 <li class="nav-item">
 <a class="nav-link active" aria-current="page" href="home.php">Home</a>
 </li>
 <li class="nav-item dropdown">
 <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
role="button" aria-expanded="false">Master Data</a>
 <ul class="dropdown-menu">
 <li><a class="dropdown-item" href="guru_view.php">GURU</a></li>
 <li><a class="dropdown-item" href="siswa_view.php">SISWA</a></li>
 <li><a class="dropdown-item" href="kompetensi_view.php">Kompetensi</a></li>
 <li><a class="dropdown-item" href="matpel_view.php">MATPEL</a></li>
 <li><hr class="dropdown-divider"></li>
 <li><a class="dropdown-item" href="nilai_view.php">Nilai</a></li>
 </ul>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="Logout.php">Logout</a>
 </li>
</ul>
<h2>SELAMAT DATANG</h2>
 <?php echo "Hai, selamat datang ". $_SESSION['username'];?>
 </body>
</html>