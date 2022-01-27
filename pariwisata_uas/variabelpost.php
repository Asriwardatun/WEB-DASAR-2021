<?php
if (isset($_POST['btnsubmit'])){
$a = $_POST['a'];
$b = $_POST['b'];
$c=$a + $b;
echo "nilai a : $a <br>";
echo 'nilai b : '.$b.' <br>';
echo "penjumlahan $a+$b = $c";
}
?>
<!-- get post -->
<form action="variabelpost.php" method = "POST">
    <label for="ab">Nilai a</label>

    <!-- $_GET [a]  -->
    <input type="text" name="a" id="ab">
    <label for="bb">Nilai b</label>
    <input type="text" name="b" id="bb">
    <input type="submit" name="btnsubmit" value="submit">
</form>
