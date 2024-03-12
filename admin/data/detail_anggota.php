<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Anggota</title>
 <link rel="stylesheet" href="../../bts/css/bootstrap.min.css">
    <script type="text/javascrpt" src="bts/css"></script>  
</head>
  <body>
    <div class="container" style ="margin-top: 11rem;">
        <div class="card">
            <div class="row m-4">
                <?php
                include '../../koneksi/koneksi.php';
                    if (isset($_GET['IDuser'])) {
                        $IDuser = $_GET['IDuser'];
                    }else{
                        die ("Error, Data Tidak Ditemukan");
                    }
                    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE IDuser='$IDuser'  ");
                    $result = mysqli_fetch_array($query);
                ?>
                 
                <div class="col">   
                     <h2>Detail Anggota</h2> <hr>
                    <table>
                        <tr>
                            <td><h5>ID User </h5></td> 
                            <td><h5> : <?php echo $result['IDuser'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>NIS </h5></td> 
                            <td><h5> : <?php echo $result['nis'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Nama Lengkap </h5></td>
                            <td><h5> : <?php echo $result['namalengkap'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>ALamat </h5></td>
                            <td><h5> : <?php echo $result['alamat'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Email</h5></td>
                            <td><h5> : <?php echo $result['email'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Username</h5></td>
                            <td><h5> : <?php echo $result['username'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Password</h5></td>
                            <td><h5> : <?php echo $result['password'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Level</h5></td>
                            <td><h5> : <?php echo $result['level']?></h5></td>
                        </tr>
                    </table>
                    <a href="../anggota.php"class="btn btn-danger">Kembali</a>
                </div>

                <?php
                    
                ?>
            </div>
        </div>
    </div>
  </body>
</html>