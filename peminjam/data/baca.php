<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sedang Membaca Buku</title>
 <link rel="stylesheet" href="../../bts/css/bootstrap.min.css">
     <script type="text/javascrpt" src="bts/css"></script> 
     </head>
  <body>  

    <?php
         include '../../koneksi/koneksi.php';
         if (isset($_GET['idbaca'])) {
            $id = $_GET['idbaca'];
         }
         $sql = mysqli_query($koneksi, "SELECT * FROM buku WHERE IDbuku='$id' ");
         $info = mysqli_fetch_array($sql);
    ?>

         <embed src="../../petugas/asset/buku/<?php echo $info['buku'];?>" type="application/pdf" width="100%" height="1000">
    

<link rel="stylesheet" href="bts/css/bootstrap.min.css">
    <script type="text/javascrpt" src="bts/css"></script>  </body>
</html>