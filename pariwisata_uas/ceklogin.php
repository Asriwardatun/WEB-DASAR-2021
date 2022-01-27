<?php
session_start();

include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($conn, "select * from tbl_admin where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
if($cek > 0){

    $data = mysqli_fetch_assoc($login);
    if($data['level']=="admin"){
        $_SESSION['status_login'] = true;
        $_SESSION['Id_admin']=$data['Id_admin'];
        $_SESSION['username']=$username;
        $_SESSION['level']="admin";
        header("location:index.php");
    }else if($data['level']=="user"){
        $_SESSION['status_login']=true;
        $_SESSION['Id_admin']=$data['Id_admin'];
        $_SESSION['username']=$username;
        $_SESSION['level']="user";
        header("location:index.php");
    }else{
        header("location:login.php?pesan=gagal");
    }
}else{
    header("location:login.php?pesan=gagal");
}
?>
