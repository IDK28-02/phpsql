<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enchanted Brothel</title>
</head>
<body>
    <form method="post">
        <input type="text" name="ia" placeholder="imię autora ">
        <input type="text" name="na" placeholder="nazwisko autora">
        <input type="text" name="ttl" placeholder="tytuł">
        <input type="number" name="cena" placeholder="">
        <input type="text" name="gk" placeholder="gatunek">
        <input type="submit" value="potwierdź">

    </form>

    <?php

        if(isset($_POST["ia"]))
        {
            $i=$_POST['ia'];
            $n=$_POST['na'];
            $d=$_POST['ttl'];
            $a=$_POST['cena'];
            $m=$_POST['gk'];
            $con=mysqli_connect("localhost", "root", "", "ksiegarnia");
            $q = "insert into ksiazki values(null, '$i', '$n', '$d', '$a', '$m')";
            $r=mysqli_query($con, $q) or die ("błąd");
            echo "dane do bazy danych";
            mysqli_close($con);
            
        }

    ?>
</body>
</html>