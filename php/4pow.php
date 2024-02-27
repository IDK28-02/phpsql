<form method="post">
    <input type="text" name="im" placeholder="imie">
    <input type="text" name="nz" placeholder="nazwisko">
    <input type="submit" value="potw">
</form>
<?php
$con=mysqli_connect("localhost", "root", "", "pilka");
$q="select * from pozycja";
$r=mysqli_query($con, $q) or die("błąd");
echo "Pozycja: <select name='nazwa'>";
while ($w=mysqli_fetch_array($r))
echo "<option value=$w[0]>$w[1]</option>";
echo "</select>";
if (isset($_POST["im"])){
    $i=$_POST["im"];
    $n=$_POST["nz"];
    $p=$_POST["nazwa"];
    $q="insert into zawodnik values (null, '$p' , '$i' , '$n')";
    $r=mysqli_query($con, $q) or die("błąd");
    echo "added";
    mysqli_close($con);
}
?>