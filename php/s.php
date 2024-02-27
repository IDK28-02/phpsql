<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enchanted Brothel</title>
</head>
<body>
    <form method="post">
        <input type="text" name="marka" placeholder="marka">
        <input type="text" name="model" placeholder="model">
        <input type="text" name="przebieg" placeholder="przebieg">
        <input type="text" name="rocznik" placeholder="rocznik">
        <input type="text" name="kolor" placeholder="kolor">
        <input type="text" name="ubezpieczenie" placeholder="ubezpieczenie">
        <input type="submit" value="potwierdź">

    </form>

    <?php

        if(isset($_POST["marka"]))
        {
            $i=$_POST['marka'];
            $n=$_POST['model'];
            $d=$_POST['przebieg'];
            $a=$_POST['rocznik'];
            $m=$_POST['kolor'];
            $p=$_POST['ubezpieczenie'];
            $con=mysqli_connect("localhost", "root", "", "samochody");
            $q = "insert into auta values(null, '$i', '$n', '$d', '$a', '$m', '$p')";
            $r=mysqli_query($con, $q) or die ("błąd");
            echo "dane do bazy danych";
            mysqli_close($con);
            
        }

    ?>
</body>
</html>