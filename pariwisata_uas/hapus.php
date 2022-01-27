<?php
require 'setting.php';
$Id_wisata = $_GET['Id_wisata'];
$query = "DELETE FROM tbl_wisata WHERE Id_wisata=$Id_wisata";
$sql = mysqli_query($conn, $query);
if ($sql){
    echo "data berhasil dihapus";
    header('location:wisata.php');
}else{
    echo "data gagal terhapus";
}
?>