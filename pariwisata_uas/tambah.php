<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PARIWISATA</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><strong>PARIWISATA ( Lombok tour )</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
        <form action="" class = "d-flex ms-auto">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><strong>Home</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="wisata.php"><strong>Paket Wisata</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pengunjung.php"><strong>Data Pengunjung</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="login.php"><strong>Logout</strong></a>
        </li>
      </ul>
      </form>
    </div>
  </div>
</nav>
    <div class="container">
        <?php
        require 'setting.php';
        if (isset($_POST['simpan'])){
            $txtNama_wisata = $_POST['txtNama_wisata'];
            $txtLokasi_wisata = $_POST['txtLokasi_wisata'];
           $Sql = "INSERT INTO tbl_wisata VALUES(NULL, '$txtNama_wisata','$txtLokasi_wisata')";
           $query = mysqli_query($conn, $Sql);
           if($query){
               header('location: wisata.php');
           }else{
               echo 'Query error : ' . mysqli_error($conn);
           }
        }
        ?>
        
        <form action="" method="post">
            <div class="mb-3">
<label >Nama_wisata</label>
<input type="text" name="txtNama_wisata" class="form-control">
            </div>

            <div class="mb-3">
<label >Lokasi_wisata</label>
<input require type="text" name="txtLokasi_wisata" class="form-control">
            </div>

            <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
            <a href="wisata.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>

</body>
</html>



