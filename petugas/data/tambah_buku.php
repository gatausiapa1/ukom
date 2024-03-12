<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Tambah Buku</title>
 <link rel="stylesheet" href="../../bts/css/bootstrap.min.css">
     <script type="text/javascrpt" src="bts/css"></script>
      </head>
  <body class= "bg-warning">
      
      <div class="container">
        <div class="card" style="margin-top: 10rem;">
            <div class="row m-4">   
                <div class="col-sm-7">
                    <h3>Form Tambah Buku</h3><br>              
                     <form action ="t_buku.php" method="POST" enctype="multipart/form-data">
                      <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
                          <input type="text" name="judul" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Penulis Buku</label>
                          <input type="text" name="penulis" class="form-control" required  id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="row">
                        <div class="col">
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Penerbit Buku</label>
                              <input type="text" name="penerbit" class="form-control" required  id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div> 
                        </div>
                        <div class="col">
                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Tahun Terbit</label>
                              <input type="text" name="tahunterbit" class="form-control" required  id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                        </div>
                        <div class=" mb-3">
                            <label for="formFileMultiple" class="form-label">Upload Sampul <span class="text-danger"></span></label>
                            <input class="form-control" name="foto" type="file" id="formFileMultiple" multiple>
                        </div>
                        <div class=" mb-3">
                            <label for="formFileMultiple" class="form-label">Upload Buku <span class="text-danger">*Pdf</span></label>
                            <input class="form-control" name="buku" type="file" id="formFileMultiple" multiple>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Tambah</button>
                      <a href="t_buku.php" class="btn btn-danger my-2">Kembali</a>
                   </form>
              </div>
            </div>
        </div>
      </div>



  </body>
</html>