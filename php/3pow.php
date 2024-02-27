<form method="post">
    <input type="number" name="id">
    data: <input type="date" name="data">
    nzd: <input type="text" name="nzd">
    Cel Wyjazdu: <input type="text" name="cel">
    cena: <input type="text" name="cena">
    dostęp: <input type="text" name="dost">
    <input type="submit" value="potwierdź">
</form>

<?php 
$con=mysqli_connect("localhost", "root", "", "wycieczki");
$q1="select * from wycieczki";
$r1=mysqli_query($con, $q1);
echo " <h3> wycieczki </h3><br>";
while ($w=mysqli_fetch_array($r1))
    echo "$w[0] $w[1] $w[2] $w[3] $w[4] $w[5] <br>";
if (isset($_POST["id"]))
{
    $id=$_POST["id"];
    $d=$_POST["data"];
    $n=$_POST["nzd"];
    $c=$_POST["cel"];
    $p=$_POST["cena"];
    $a=$_POST["dost"];
    $q2="update wycieczki set zdjecia_id='$n' , dataWyjazdu='$d' , cel='$c' , cena='$p' , dostepna='$a' where id='$id'";
    $r2=mysqli_query($con,$q2) or die("błąd");
    header("refresh:0");
    mysqli_close($con);

}
?>



