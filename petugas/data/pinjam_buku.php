<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Pimjam Buku</title>
 <link rel="stylesheet" href="../../bts/css/bootstrap.min.css">
     <script type="text/javascrpt" src="bts/css"></script>
      </head>
  <body class="bg-success">
      
      <div class="container">
        <div class="card" style="margin-top: 10rem;">
            <div class="row m-4">
            
                <div class="col-sm-7">
                    <h3>Form Peminjam Buku</h3><br>
                     <form action ="t_pinjam.php" method="POST">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">ID Buku</label>
                          <input type="text" name="IDbuku" class="form-control" required>
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">ID User</label>
                          <input type="text" name="IDuser" class="form-control" required  id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nama Peminjam</label>
                          <input type="text" name="nama" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="row">
                        <div class="col">
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Tanggal Peminjaman</label>
                              <input type="date" name="tgl_peminjaman" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div> 
                        </div>
                        <div class="col">
                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Tanggal Pengembalian</label>
                              <input type="date" name="tgl_pengembalian" class="form-control" required  id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                        </div>
                      </div>
                      <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Level</label>
                            <select class="form-select" name="status_peminjaman" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="dipinjam">Pinjam</option>
                            </select>
                          </div>
                      <button type="submit" name="update" class="btn btn-primary">Pinjam</button>
                      <a href="../peminjam.php" class="btn btn-danger m-2">Kembali</a>
                   </form>
              </div>
            </div>
        </div>
      </div>



  </body>
</html>