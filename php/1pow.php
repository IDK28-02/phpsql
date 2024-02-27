<form method="post">
<input type="date" name="data" placeholder="data">
<input type="nuber" name="nzd">
<input type="cel" name="cel" placeholder="cel">
<input type="text" name="cena" placeholder="cena">
<input type="number" name="dost" placeholder="dostep">
<input type="submit" value="potw">

</form>

<?php
if(isset($_POST["data"]))
{
    $d=$_POST["data"];
    $n=$_POST["nzd"];
    $c=$_POST["cel"];
    $p=$_POST["cena"];
    $a=$_POST["dost"];
    $con=mysqli_connect("localhost", "root", "", "wycieczki");
    $q="insert into wycieczki values(null, '$n', '$d' , '$c', '$p' , '$a' )";
    $r=mysqli_query($con, $q) or die("błąd");
    echo "dodano";
    mysqli_close($con);
}

?>