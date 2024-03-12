<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Register</title>
<link rel="stylesheet" href="bts/css/bootstrap.min.css">
    <script type="text/javascrpt" src="bts/css"></script>
  </head>
<body>
 

    <div class="container">
      <div class="content">
        <div class="card" style="margin-top: 5rem;">
          <div class="row">
            <div class="col m-3">
              <form action="aksi/proses_daftar.php" method="post">
                <h2> Silahkan Masukan Data Anda</h2>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                    <input type="text" name="namalengkap" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required id="exampleInputPassword1">
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">NIS</label>
                    <input type="name" name="nis" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>

                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Level</label>
                  <select class="form-select" name="level" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">Admin</option>
                    <option value="2">Petugas</optiion>
                    <option value="3">Peminjam</optiion>
            
                  </select>
                </div>
                <button type="submit" class="btn btn-info  text-white fw-bold">Simpan</button>
              </form>
              <p class="mt-3 fw-bold">Saya Sudah Memiliki Akun<a href="index.php"class="btn btn-info text-white fw-bold" style="margin-left: 1rem;">Disini</a></p>
              </div>
              <div class="col">
                <img src="asset/image/logo1.jpg" width="790" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
     
  </body>

</html>