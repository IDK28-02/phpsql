<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enchanted Brothel</title>
</head>
<body>
    <form method="post">
        Data wypożyczenia: <input type="date" name="dataw"> <br>
        Data zwrotu: <input type="date" name="dataz"> <br>
        <?php
        $con=mysqli_connect("localhost", "root", "", "samochody");
        $q="select idklienta, imie, nazwisko, dowod from klienci";
        $r=mysqli_query($con, $q) or die("błąd");
        echo "<select name='idklienta'>";
        while ($w=mysqli_fetch_array($r))
            echo "<option value=$w[0] >$w[1] $w[2] $w[3] </option>";
            echo "</select><br>";
       
        $q="select idauta, marka, model from auta";
        $r=mysqli_query($con, $q) or die("błąd");
        echo "<select name='idauta'>";
        while ($w=mysqli_fetch_array($r))
            echo "<option value=$w[0] >$w[1] $w[2] </option>";
            echo "</select><br>";
            
        ?>
        <input type="number" name="ilosc" placeholder="należność" >
        <input type="submit" value="potwierdź">
    </form>

    <?php


    if(isset($_POST["dataw"]))
    {
        $d=$_POST['dataw'];
        $ik=$_POST['dataz'];
        $it=$_POST['idklienta'];
        $il=$_POST['idauta'];
        $nl=$_POST['ilosc'];
        $q = "insert into wypozyczenia values(null, '$d', '$ik', '$it', '$il', $nl)";
        $r=mysqli_query($con, $q) or die ("błąd");
        echo "added";
        mysqli_close($con);
    }




    ?>
</body>
</html>
