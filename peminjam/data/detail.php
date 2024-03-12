<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Buku</title>
 <link rel="stylesheet" href="../../bts/css/bootstrap.min.css">
     <script type="text/javascrpt" src="bts/css"></script>
      </head>
  <body>
    <div class="container" style ="margin-top: 11rem;">
        <div class="card">
            <div class="row m-4">
                <?php
                include '../../koneksi/koneksi.php';
                    if (isset($_GET['IDbuku'])) {
                        $IDbuku = $_GET['IDbuku'];
                    }else{
                        die ("Error, Data Tidak Ditemukan");
                    }
                    $query = mysqli_query($koneksi, "SELECT * FROM buku WHERE IDbuku='$IDbuku'");
                    $result = mysqli_fetch_array($query);
                ?>
                 <div class="col text-center">
                    <img src="../../petugas/asset/sampul/<?php echo $result['foto'];?>"height="500"  alt="">
                 </div>
                <div class="col" style="margin-top: 5rem;">   
                <h2>Detail Buku</h2> <hr>
                    <table>
                        <tr>
                            <td><h5>ID Buku </h5></td> 
                            <td><h5> : <?php echo $result['IDbuku'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Judul Buku </h5></td>
                            <td><h5> : <?php echo $result['judul'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Penulis Buku </h5></td>
                            <td><h5> : <?php echo $result['penulis'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Penerbit Buku </h5></td>
                            <td><h5> : <?php echo $result['penerbit'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Tahun Terbit </h5></td>
                            <td><h5> : <?php echo $result['tahunterbit'];?></h5></td>
                        </tr>
                    </table>
                    <a href="baca.php?idbaca=<?php echo $result['IDbuku'];?>" class="btn btn-success my-3">Baca Sekarang</a>
                    <a href="../buku.php"class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </div>
    </div>




  </body>
</html>