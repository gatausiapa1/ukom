<?php
 include 'layout/header.php';
?>

<div class="container">

<?php
   include '../koneksi/koneksi.php';
  
  $buku = mysqli_query($koneksi, "SELECT * FROM buku");
  $user = mysqli_query($koneksi, "SELECT * FROM user");
  $pinjaman = mysqli_query($koneksi, "SELECT * FROM peminjaman");

  $b = mysqli_num_rows($buku);
  $u = mysqli_num_rows($user);
  $p = mysqli_num_rows($pinjaman);

  ?>
  <body>
    
  
  <div class="row my-3">
    <div class="col-sm-3">
       <div class="card ">
         <div class="card-body text-white text-center bg-warning">
          <h2>Data Buku</h2>
          <h1><b><?php echo $b;?></b></h1>
      </div>
      <a href ="buku.php"class="btn btn-dark btn-sm">Lihat Selengkapnya </a>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body text-white text-center bg-success">
        <h2>Data Anggota</h2>
        <h1><b><?php echo $u;?></b></h1>
      </div>
      <a href ="anggota.php"class="btn btn-dark btn-sm">Lihat Selengkapnya </a>
    </div>
  </div>
         <div class="col-sm-3">
          <div class="card">
            <div class="card-body text-white text-center bg-success">
              <h2>Data Peminjaman</h2>
              <h1><b><?php echo $p;?></b></h1>
            </div>
            <a href ="peminjam.php"class="btn btn-dark btn-sm">Lihat Selengkapnya </a>
          </div>
        </div>
      <div class="row">
    <div class="col-sm-6" style="margin-top: 5rem;">
    <h2>SELAMAT DATANG </h2>
    <h3>Di Halaman Petugas</h3>
    <h6>Membaca adalah jendela dunia</h6>

  </div>
  <div class="col-sm-6">
    <img src="../asset/image/zz.png" width="400" alt="">
  </div>
</div>

</body>
<?php
 include 'layout/footer.php';
?>