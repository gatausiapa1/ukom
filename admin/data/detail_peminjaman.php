<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Peminjaman</title>
 <link rel="stylesheet" href="../../bts/css/bootstrap.min.css">
     <script type="text/javascrpt" src="bts/css"></script>
      </head>
  <body>

    <div class="container" style ="margin-top: 11rem;">
        <div class="card">
            <div class="row m-4">
                <?php
                include '../../koneksi/koneksi.php';
                    if (isset($_GET['IDpeminjaman'])) {
                        $IDpeminjaman = $_GET['IDpeminjaman'];
                    }else{
                        die ("Error, Data Tidak Ditemukan");
                    }
                    $query = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE IDpeminjaman='$IDpeminjaman' ");
                    $result = mysqli_fetch_array($query);
                ?>
        
                <div class="col">   
                <h2>Detail Peminjaman</h2>
                    <table>
                        <tr>
                            <td><h5>ID Peminjaman </h5></td> <hr>
                            <td><h5> : <?php echo $result['IDpeminjaman']?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>ID User </h5></td>
                            <td><h5> : <?php echo $result['IDuser']?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>ID Buku </h5></td>
                            <td><h5> : <?php echo $result['IDbuku']?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Nama Peminjamam </h5></td>
                            <td><h5> : <?php echo $result['nama']?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Tanggal Peminjaman</h5></td>
                            <td><h5> : <?php echo $result['tgl_peminjaman']?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Tanggal Pengembalian</h5></td>
                            <td><h5> : <?php echo $result['tgl_pengembalian']?></h5></td>
                        </tr>
                        <tr class="bg-warning text-white">
                            <td><h5>Status Peminjaman</h5></td>
                            <td><h5> : <?php echo $result['status_peminjaman']?></h5></td>
                        </tr>
                    </table>
                    <br>
                    <a href="../pinjam.php"class="btn btn-danger">Kembali</a>
                    
                </div>

                <?php
                    
                ?>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>