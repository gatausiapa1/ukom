<?php 
include '../../koneksi/koneksi.php';
 
$id = $_GET['IDpeminjaman'];
 
 
mysqli_query($koneksi,"DELETE from peminjaman  where IDpeminjaman='$id'");
 
header("location:../peminjam.php");
 
?>