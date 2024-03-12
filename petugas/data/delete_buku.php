<?php 
include '../../koneksi/koneksi.php';
 
$id = $_GET['IDbuku'];
 
 
mysqli_query($koneksi,"DELETE from buku  where IDbuku='$id'");
 
header("location:../buku.php");
 
?>