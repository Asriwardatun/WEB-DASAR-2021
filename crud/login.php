<?php
session_start();

require 'setting.php';

if(isset($_POST['Login'])){

    $Username = $_POST['txtusername'];
    $Password = sha1($_POST['txtpassword']);

    $query = mysqli_query($koneksi, "SELECT * FROM users
             WHERE Username='$Username' and Password='$Password'");
    
    if(mysqli_num_rows($query) ===1){

        $data = mysqli_fetch_object($query);

        $_SESSION['Login']=true;
        $_SESSION['Fullname']= $data->Fullname;
        $_SESSION['role']=$data->Role;

        header('Location: index.php');
    }


    echo $error = 'Username atau Password Salah';

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href= "plugin/bootstrap-5.13/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <div class="card card-body">
                    <h3>Login Form</h3>
                    <form action="" method="POST">
                        <input type="text" name="txtusername"
                               class="form-control mb-3" placeholder="Masukkan Username">

                        <input type="Password" name="txtpassword"
                               class="form-control mb-3" placeholder="Masukkan Password">
                        
                        <input type="submit" value="Login" name="Login"
                               class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>