<?php
include 'koneksi.php';

$id = $_POST['id'];
$Nama = $_POST['Nama'];
$Prodi = $_POST['Prodi'];

mysqli_query($koneksi, "UPDATE mahasiswa SET Nama='$Nama', Prodi='$Prodi' WHERE id='$id'");

header("location:index.php");
?>
