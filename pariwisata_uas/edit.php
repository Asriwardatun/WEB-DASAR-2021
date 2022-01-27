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
        $Id_wisata = $_POST['txtId_wisata'];
        $Nama_wisata = $_POST['txtNama_wisata'];
        $Lokasi_wisata= $_POST['txtLokasi_wisata'];

        $sql = "UPDATE tbl_wisata SET 
        Nama_wisata='$Nama_wisata',Lokasi_wisata='$Lokasi_wisata' WHERE Id_wisata=$Id_wisata";

        $query = mysqli_query($conn, $sql);
        if ($query) {
            header('location: wisata.php');
        } else {
            echo 'Query Error : ' . mysqli_error($conn);
        }
    }else{
        $Id_wisata=$_GET['Id_wisata'];
        $query="SELECT * FROM tbl_wisata WHERE Id_wisata=$Id_wisata";
        $sql=mysqli_query($conn,$query);
        $data=mysqli_fetch_object($sql);

    }

    ?>
    <form action="" method="post">
        <input type="hidden" name="txtId_wisata" value="<?=$Id_wisata?>">
        <div class="mb-3">
            <label>Nama_wisata</label>
            <input required type="text" name="txtNama_wisata" class="form-control" value="<?=$data->Nama_wisata;?>">
        </div>

        <div class="mb-3">
            <label>Lokasi_wisata</label>
            <input type="text" name="txtLokasi_wisata" class="form-control" value="<?=$data->Lokasi_wisata;?>">
        </div>

        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
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
