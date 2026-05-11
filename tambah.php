<?php
include 'koneksi.php';

$Nama = $_POST['Nama'];
$Prodi = $_POST['Prodi'];

mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES ('', '$Nama', '$Prodi')");

header("location:index.php");
?>
