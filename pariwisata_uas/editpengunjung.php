<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PARIWISATA</title>
  </head>
  <body>

  <div class="container">

<?php
    require 'setting.php';
    if (isset($_POST['simpan'])) {
        $Id_pengunjung = $_POST['txtId_pengunjung'];
        $Nama_pengunjung = $_POST['txtNama_pengunjung'];
        $Alamat= $_POST['txtalamat'];

        $sql = "UPDATE tbl_pengunjung SET 
        Nama_pengunjung='$Nama_pengunjung',alamat='$Alamat' WHERE Id_pengunjung=$Id_pengunjung";

        $query = mysqli_query($conn, $sql);
        if ($query) {
            header('location: pengunjung.php');
        } else {
            echo 'Query Error : ' . mysqli_error($conn);
        }
    }else{
        $Id_pengunjung=$_GET['Id_pengunjung'];
        $query="SELECT * FROM tbl_pengunjung WHERE Id_pengunjung=$Id_pengunjung";
        $sql=mysqli_query($conn,$query);
        $data=mysqli_fetch_object($sql);

    }

    ?>
    <form action="" method="post">
        <input type="hidden" name="txtId_pengunjung" value="<?=$Id_pengunjung?>">
        <div class="mb-3">
            <label>Nama pengunjung</label>
            <input required type="text" name="txtNama_pengunjung" class="form-control" value="<?=$data->Nama_pengunjung;?>">
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <input type="text" name="txtalamat" class="form-control" value="<?=$data->Alamat;?>">
        </div>

        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
        <a href="pengunjung.php" class="btn btn-secondary">Kembali</a>
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
