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
<?php
include "navigasi.php";
?>
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
 <li><a class="dropdown-item" href="kompetensi_view">Kompetensi</a></li>
 <li><a class="dropdown-item" href="matpel_view.php">Matpel</a></li>
 <li><hr class="dropdown-divider"></li>
 <li><a class="dropdown-item" href="#">Nilai</a></li>
 </ul>
</li>
<li class="nav-item">
<a class="nav-link" href="Logout.php">Logout</a>
</li>
</ul>
<div class="container">
<h2>Data Mata Pelajaran</h2>
<form method="post">
    <div class="mb-3">
    <label class="form-label">Kode Mata Pelajaran</label>
    <input type="text" class="form-control" name="kd_matpel" placeholder="Masukkan
   Mata Pelajaran">
    </div>
    <div class="mb-3">
    <label class="form-label">Nama Mata Pelajaran</label>
    <input type="text" class="form-control" name="namaMP" placeholder="Masukkan
   Nama Mata pelajaran ">
    </div>
    <div class="mb-3">
    <label class="form-label">Jumlah Jam</label>
    <input type="text" class="form-control" name="jmljam"
   placeholder="Masukkan Jumlah Jam">
    </div>
    <div class="mb-3">
    <label class="form-label">Tingkat</label>
    <input type="text" class="form-control" name="tingkat" placeholder="Masukkan
   Tingkat">
    </div>
    <div class="mb-3">
    <label class="form-label">Kode Kompetensi</label>
    <textarea class="form-control" rows="3" name="kd_kompetensi"></textarea>
 </div>
 <div class="mb-3">
 <label class="form-label">NIP</label>
 <select class="form-select" name="nip" aria-label="Default select example">
  <?php
    include "koneksi.php";
    $sql = "select * from guru";
    $result = mysqli_query($connection,$sql);
    while($row=mysqli_fetch_array($result)){
        echo "<option value='$row[nip]'>$row[nip] - $row[nama_guru]<option>";
    }
    ?>
    </select>
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
$kodeMP = $_POST['kd_matpel'];
$namaMP = $_POST['namaMP'];
$jmlJam = $_POST['jmljam'];
$tingkat = $_POST['tingkat'];
$kdkom = $_POST['kd_kompetensi'];
$nip = $_POST['nip'];
$sql = "INSERT INTO matpel
values('$kodeMP','$namaMP','$jmlJam','$tingkat','$kdkom','$nip')";
$result = mysqli_query($connection,$sql);
if($result){
header('location:matpel_view.php');
}else{
echo "Gagal tersimpan";
}
}
?>
</body>
</html>