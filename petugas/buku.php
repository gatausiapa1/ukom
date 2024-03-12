<?php
 include 'layout/header.php';
?>
<body>
  

<div class="container">
  <div class="row" style="margin-top: 1rem;">
    <h2>Data Buku</h2>
    <div class="col">
        <a href ="data/tambah_buku.php" class ="btn btn-success my-3">Tambah Buku</a>
    <table class="table mb-2">
      <thead class="table  table-warning">
        <tr>
          <th scope="col">ID Buku</th>
          <th scope="col">Judul</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <?php 
         include '../koneksi/koneksi.php';

         $data = mysqli_query($koneksi, "SELECT * FROM buku");
         while ($d = mysqli_fetch_array($data)) {
          
      ?>
      <tbody>
        <tr>
          <th scope="row"><?php echo $d['IDbuku'];?></th>
          <td><?php echo $d['judul'];?></td>
          <td>
               <a href ="data/detail_buku.php?IDbuku=<?php echo $d['IDbuku']; ?>" class="btn btn-primary text-white">Detail</a>
               <a href ="data/delete_buku.php?IDbuku=<?php echo $d['IDbuku']; ?>" class="btn btn-danger text-white">Delete</a>

          </td>
        </tr>
      </tbody>
      <?php
         }
      ?>
    </table>     

    </div>
  </div>
</div>
</body>
<?php
 include 'layout/footer.php';
?>