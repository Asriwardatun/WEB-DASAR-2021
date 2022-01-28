<?php
        require 'setting.php';
        if (isset($_POST['simpan'])){
            $id=$_POST['id'];
            $txtauthor = $_POST['txtauthor'];
            $txttittle = $_POST['txttittle'];
            $txtbody = $_POST['txtbody'];
            $txtkeyword = $_POST['txtkeyword'];
           $Sql = "UPDATE article SET author='$txtauthor' tittle='$txttittle', body='$txtbody', keyword='$txtkeyword' WHERE id=$id";
           $query = mysqli_query($koneksi, $Sql);
           if($query){
               header('location: index.php');
           }else{
               echo 'Query error : ' . mysqli_error($koneksi);
           }
        }else{
            $id = $_GET['id'];
            $query="SELECT * FROM article WHERE id= $id";
            $Sql=mysqli_query($koneksi, $query);
            $data=mysqli_fetch_object($sql);
        }
        ?>
        <form action="" method="post">
            <input type="hidden" name="txtid" value="<?=$id?>">
            <div class="mb-3">
                <label >Author</label>
                <input required type="text" name="txttittle" class="form-control" value="<?=$data->Author;?>">
            </div>

            <div class="mb-3">
                <label >Tittle</label>
                <textarea name="txttittle"  cols="30" rows="5" value="<?=$data->tittle;?>" ></textarea>
            </div>

            <div class="mb-3">
                <label >Body</label>
                <textarea name="txtbody"  cols="30" rows="5" value="<?=$data->body;?>" ></textarea>
            </div>

            <div class="mb-3">
                <label >Body</label>
                <textarea name="txtbody"  cols="30" rows="5" value="<?=$data->body;?>" ></textarea>
            </div>
        </form>