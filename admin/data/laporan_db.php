<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan Data Buku Perpustakaan Digital</title>
 <link rel="stylesheet" href="../../bts/css/bootstrap.min.css">
     <script type="text/javascrpt" src="bts/css"></script>
      </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col text-center mt-3">
                <h3>LAPORAN DATA BUKU </h3>
                <h2>APLIKASI PERPUSTAKAAN DIGITAL DAERAH BEKASI</h2>
                <span>Data ini merupakan data keselurahan member perpustakaan</span>
            </div>
        </div>
        <div class="row">
        <table class="table my-3    ">
      <thead class="table  table-warning">
        <tr>
          <th scope="col">ID Buku</th>
          <th scope="col">Judul</th>
          <th scope="col">Penulis</th>
          <th scope="col">Penerbit</th>
          <th scope="col">Tahun Terbit</th>
        </tr>
      </thead>
      <?php 
         include '../../koneksi/koneksi.php';

         $data = mysqli_query($koneksi, "SELECT * FROM buku");
         while ($d = mysqli_fetch_array($data)) {
          
      ?>
      <tbody>
        <tr>
          <th scope="row"><?php echo $d['IDbuku'];?></th>
          <td><?php echo $d['judul'];?></td>
          <td><?php echo $d['penulis'];?></td>
          <td><?php echo $d['penerbit'];?></td>
          <td><?php echo $d['tahunterbit'];?></td>
        </tr>
      </tbody>
      <?php
         }
      ?>
    </table>   
        </div>
        <div class="row">
            <div class="col">
                <p style="line-height: 1rem;">Mengetahui:</p>
                <p class="">Kepala Dinas Perpustakaan Daerah</p>
                <p class="" style="margin-top: 4rem;"><b>Andis Garfield, Ph.D. </b></p>
            </div>
        </div>
        <div class="row">
            <a href="../laporan.php">Kembali</a>
        </div>
    </div>
    <script>
        window.print();
    </script>
 

  </body>
</html>