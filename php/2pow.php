<form method="post">
    Podaj id wycieczki do usunięci
    <input type="number" name="id">
    <input type="submit" value="potwierdź">
</form>

<?php 
$con=mysqli_connect("localhost", "root", "", "wycieczki");
$q1="select * from wycieczki";
$r1=mysqli_query($con, $q1);
echo " <h3> lista wycieczek </h3><br>";
while ($w=mysqli_fetch_array($r1))
    echo "$w[0] $w[2] $w[3] $w[4] $w[5] <br>";
if (isset($_POST["id"]))
{
    $id=$_POST["id"];
    $q2="delete from wycieczki where id='$id'";
    $r2=mysqli_query($con, $q2) or die("błąd");
    header("refresh:0");
    mysqli_close($con);

}
?>