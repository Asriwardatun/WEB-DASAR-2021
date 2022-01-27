<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'pariwisata';

$conn = mysqli_connect($hostname,$username,$password,$dbname);

if(!$conn){
    die('koneksi gagal: ' . mysqli_connect_error());

}
?>   