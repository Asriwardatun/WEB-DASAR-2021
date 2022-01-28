<?php
$a = $_GET['nim'];
$b = $_GET['nama'];
$c = $_GET['jk'];

?>

<form action="biodata.php" method = "GET">
    <label for="nim">NIM</label>
    <!-- $_GET [a]  -->
    <input type="text" name="nim" id="nim">
    <br>
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama">
<br>
<label for="nim">Jenis Kelamin</label>
<input type="radio" name="jk" id="jkl" value="Laki-Laki">
<label for="jkl">Laki-Laki</label>
<input type="radio" name="jk" id="jkp" value="Perempuan">
<label for="jkp">Perempuan</label>

    <input type="submit" name="btnsubmit" value="submit">
</form>

<?php
echo "Nim : $a <br>";
echo "Nama : $b <br>";
echo "Jenis Kelamin : $c <br>";

?>