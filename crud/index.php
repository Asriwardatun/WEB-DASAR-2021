<?php
session_start();

if (! isset($_SESSION['Login'])){
    header('Location: login.php');
}
?>
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
    <h2 class="alert alert-info">

        Data Artikel, Selamat Datang :
        <?php echo $_SESSION['Fullname']; ?>

    </h2>
        <a href="tambah.php" class="btn btn-info">Tambah Data</a>
        <a href="logout.php" class="btn btn-info float-end mb-3">Logout</a>
        

<table class="table table-bordered">
    <thead></thead>
    <tr>
        <th>No</th>
        <th>Author</th>
        <th>Tittle</th>
        <th>Body</th>
        <th>Keyword</th>
        <th>Aksi</th>
    </tr>
</thead>

<body>
    <?php
    // ambil query
    require 'setting.php';
    $query = "SELECT * FROM article";
    // jlnkn query
    $sql = mysqli_query($koneksi, $query);
    $no = 1;
    // perulangan
    while ($data = mysqli_fetch_object($sql)){
    ?>
    <tr>
       <td><?php echo $no++; ?> </td>
       <!-- cara ngambil -->
       <td> <?php echo $data->author; ?> </td>
       <td><?php echo $data->tittle; ?></td>
       <td><?php echo $data->body; ?></td>
       <td><?php echo $data->keyword; ?></td>
       <td>
           <a href="edit.php?id=<?= $data->id;?>">
               <input type="submit" value="edit" class="btn btn-warning">
           </a>

           

           <?php
                if($_SESSION['role'] == 'admin'){
           ?>

           <a href="hapus.php?id=<?= $data->id;?>">
           <input type="submit" value="hapus" onclick="confirm ('yakin hapus data?')" class="btn btn-danger">
           </a>
           <?php
               }
           ?>
           
       </td>
    </tr>
    <?php
    }
    ?>
</body>
</table>
    </div>
</body>
</html>