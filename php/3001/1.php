<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enchanted Brothel</title>
</head>
<body>
    <form method="post">
        <input type="text" name="imie" placeholder="imie">
        <input type="text" name="nazw" placeholder="nazwiwsko">
        <input type="text" name="dow" placeholder="dowód osobisty">
        <input type="text" name="adr" placeholder="adres">
        <input type="text" name="miasto" placeholder="miasto">
        <select name="plec">
            <option>m</option>
            <option>k</option>
        </select>
        <input type="submit" value="potwierdź">

    </form>

    <?php

        if(isset($_POST["imie"]))
        {
            $i=$_POST['imie'];
            $n=$_POST['nazw'];
            $d=$_POST['dow'];
            $a=$_POST['adr'];
            $m=$_POST['miasto'];
            $p=$_POST['plec'];
            $con=mysqli_connect("localhost", "root", "", "samochody");
            $q = "insert into klienci values(null, '$i', '$n', '$d', '$a', '$m', '$m')";
            $r=mysqli_query($con, $q) or die ("błąd");
            echo "dane do bazy danych";
            mysqli_close($con);
            
        }

    ?>
</body>
</html>