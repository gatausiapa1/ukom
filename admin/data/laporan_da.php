<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan Data Anggota</title>
 <link rel="stylesheet" href="../../bts/css/bootstrap.min.css">
     <script type="text/javascrpt" src="bts/css"></script>
      </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col text-center mt-3">
                <h3>LAPORAN DATA ANGGOTA</h3>
                <h2>APLIKASI PERPUSTAKAAN DIGITAL DAERAH BEKASI</h2>
                <span>Data ini merupakan data keselurahan member perpustakaan</span>
            </div>
        </div>
        <div class="row">
             <table class="table my-3">
      <thead class="table  table-warning">
        <tr>
          <th scope="col">ID User</th>
          <th scope="col">NIS</th>
          <th scope="col">Nama</th>
          <th scope="col">Email</th>
          <th scope="col">Alamat</th>
          <th scope="col">Username</th>
          <th scope="col">Password</th>
          <th scope="col">Level</th>
        </tr>
      </thead>
      <?php 
         include '../../koneksi/koneksi.php';

         $data = mysqli_query($koneksi, "SELECT * FROM user");
         while ($d = mysqli_fetch_array($data)) {
          
      ?>
      <tbody>
        <tr>
          <th scope="row"><?php echo $d['IDuser'];?></th>
          <td><?php echo $d['nis'];?></td>
          <td><?php echo $d['namalengkap'];?></td>
          <td><?php echo $d['email'];?></td>
          <td><?php echo $d['alamat'];?></td>
          <td><?php echo $d['username'];?></td>
          <td><?php echo $d['password'];?></td>
          <td><?php echo $d['level'];?></td>
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