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
 <li><a class="dropdown-item" href="#">Kompetensi</a></li>
 <li><hr class="dropdown-divider"></li>
 <li><a class="dropdown-item" href="#">Nilai</a></li>
 </ul>
</li>
<li class="nav-item">
<a class="nav-link" href="Logout.php">Logout</a>
</li>
</ul>
<div class="container">
<h2>TAMBAH GURU</h2>
<form method="post">
    <div class="mb-3">
    <label class="form-label">NIP</label>
    <input type="text" class="form-control" name="nip" placeholder="Masukkan
   NIP">
    </div>
    <div class="mb-3">
    <label class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama" placeholder="Masukkan
   Nama">
    </div>
    <div class="mb-3">
    <label class="form-label">Tempat Lahir</label>
    <input type="text" class="form-control" name="tempatLahir"
   placeholder="Masukkan Tempat Lahir">
    </div>
    <div class="mb-3">
    <label class="form-label">Tgl Lahir</label>
    <input type="date" class="form-control" name="tglLahir" placeholder="Masukkan
   Tgl Lahir">
    </div>
    <div class="mb-3">
    <label class="form-label">Jenis Kelamin</label>
    <select class="form-select" name="jk" aria-label="Default select example">
    <option selected>Pilih Menu</option>
    <option value="L">Laki-Laki</option>
    <option value="P">Perempuan</option>
    </select>
    </div>
    <div class="mb-3">
    <label class="form-label">Alamat</label>
    <textarea class="form-control" rows="3" name="alamat"></textarea>
 </div>
 <div class="mb-3">
 <label class="form-label">No HP</label>
 <input type="text" class="form-control" name="noHp" placeholder="No HP">
 </div>
 <div class="mb-3">
 <label class="form-label">Pendidikan</label>
 <input type="text" class="form-control" name="pendidikan"
placeholder="Pendidikan">
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
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$tempatLahir = $_POST['tempatLahir'];
$tglLahir = $_POST['tglLahir'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$noHp = $_POST['noHp'];
$pendidikan = $_POST['pendidikan'];
$sql = "INSERT INTO guru
values('$nip','$nama','$tempatLahir','$tglLahir','$jk','$alamat','$noHp','$pendidikan')";
$result = mysqli_query($connection,$sql);
if($result){
header('location:guru_view.php');
}else{
echo "Gagal tersimpan";
}
}
?>
</body>
</html>