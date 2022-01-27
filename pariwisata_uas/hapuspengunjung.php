<?php
require 'setting.php';
$Id_pengunjung = $_GET['Id_pengunjung'];
$query = "DELETE FROM tbl_pengunjung WHERE Id_pengunjung=$Id_pengunjung";
$sql = mysqli_query($conn, $query);
if ($sql){
    echo "data berhasil dihapus";
    header('location:pengunjung.php');
}else{
    echo "data gagal terhapus";
}
?>