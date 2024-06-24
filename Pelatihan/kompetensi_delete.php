<?php
include "koneksi.php";
$nama = $_GET['kd_kompetensi'];
$sql = "DELETE From kompetensi where kd_kompetensi='$nama'";
$result = mysqli_query($connection, $sql);
if($result){
header('location:kompetensi_view.php');
}else{
echo "Gagal terhapus";
}
?>