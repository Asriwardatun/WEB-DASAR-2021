<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Artikel</title>
    <link rel="stylesheet" href="plugin/bootstrap-5.13/bootstrap.css">
</head>
<body>
    <div class="container">
        <h2 class="alert alert-info">Tambah Data Artikel</h2>
        <?php
        require 'setting.php';
        if (isset($_POST['simpan'])){
            $txtauthor = $_POST['txtauthor'];
            $txttittle = $_POST['txttittle'];
            $txtbody = $_POST['txtbody'];
            $txtkeyword = $_POST['txtkeyword'];
           $Sql = "INSERT INTO article VALUES(NULL, '$txtauthor','$txttittle', '$txtbody', '$txtkeyword' )";
           $query = mysqli_query($koneksi, $Sql);
           if($query){
               header('location: index.php');
           }else{
               echo 'Query error : ' . mysqli_error($koneksi);
           }
        }
        ?>
        
        <form action="" method="post">
            <div class="mb-3">
<label >Author</label>
<input type="text" name="txttittle" class="form-control">
            </div>

            <div class="mb-3">
<label >Tittle</label>
<input require type="text" name="txttittle" class="form-control">
            </div>

            <div class="mb-3">
<label >Body</label>
<textarea name="txtbody" class="form-control" cols="30" rows="5"></textarea>
            </div>

            <div class="mb-3">
<label >Keyword</label>
<input type="text" name="txtkeyword" class="form-control">
            </div>

            <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>



