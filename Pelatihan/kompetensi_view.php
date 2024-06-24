<!DOCTYPE html>
<html>
<head>
<title>Menambah Data</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
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
 <li><a class="dropdown-item" href="kompetensi_view.php">KOMPETENSI</a></li>
 <li><a class="dropdown-item" href="matpel_view.php">MATPEL</a></li>
 <li><hr class="dropdown-divider"></li>
 <li><a class="dropdown-item" href="#">Nilai</a></li>
 </ul>
 </li>
<li class="nav-item">
<a class="nav-link" href="Logout.php">Logout</a>
</li>
</ul>
<h2>DATA KOMPETENSI</h2>
<table class="table table-hover">
<thead>
<tr>
<th scope="col">Kode Kompetensi</th>
<th scope="col">Nama</th>
<th scope="col">Prog Keahlian</th>
</tr>

</thead>
<tbody>
<?php
include "koneksi.php";
$sql = "Select * From kompetensi";
$result = mysqli_query($connection, $sql);
while ($row=mysqli_fetch_array($result)) {
echo "<tr>
<td>$row[kd_kompetensi]</td>
<td>$row[nama_kompetensi]</td>
<td>$row[prog_keahlian]</td>
<td><a href='kompetensi_edit.php?kd_kompetensi=$row[kd_kompetensi]'>EDIT</a> | <a
href='kompetensi_delete.php?kd_kompetensi=$row[kd_kompetensi]'>DELETE</a></td>
</tr>";
}
?>

</tbody>
</table>
<div class="d-grid gap-2 col-6 mx-auto">
<a class="btn btn-primary" href="kompetensi_add.php" role="button">Tambah Data</a>
</div>
</body>
</html>