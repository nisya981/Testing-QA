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
 <li><a class="dropdown-item" href="#">SISWA</a></li>
 <li><a class="dropdown-item" href="kompetensi_view.php">Kompetensi</a></li>
 <li><hr class="dropdown-divider"></li>
 <li><a class="dropdown-item" href="#">Nilai</a></li>
 </ul>
</li>
<li class="nav-item">
<a class="nav-link" href="Logout.php">Logout</a>
</li>
</ul>
<div class="container">
<h2>TAMBAH KOMPETENSI</h2>
<form method="post">
    <div class="mb-3">
    <label class="form-label">Kode Kompetensi</label>
    <input type="text" class="form-control" name="kd_kompetensi" placeholder="Masukkan Kode kompetensi">
    </div>
    <div class="mb-3">
    <label class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
    </div>
    <div class="mb-3">
    <label class="form-label">Prog Keahlian</label>
    <input type="text" class="form-control" name="Prog_keahlian"
   placeholder="Masukkan Prog Keahlian">

 </div>
 <div class="d-grid gap-2 d-md-flex justify-content-md-end">
 <input type="submit" class="btn btn-primary btn-lg" name="submit"
value="Kirim">
 </div>
 </form>
</div>

<?php
include "koneksi.php";
if(isset($_POST['submit'])){
$kd_kompetensi = $_POST['kd_kompetensi'];
$nama = $_POST['nama'];
$prog_keahlian = $_POST['Prog_keahlian'];
$sql = "INSERT INTO kompetensi
values('$kd_kompetensi','$nama','$prog_keahlian')";
$result = mysqli_query($connection,$sql);
if($result){
header('location:kompetensi_view.php');
}else{
echo "Gagal tersimpan";
}
}
?>
</body>
</html>