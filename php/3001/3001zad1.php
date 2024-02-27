<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enchanted Brothel</title>
</head>
<body>
    <form method="post">
        <input type="text" name="nt" placeholder="nazwa towaru">
        <input type="number" name="cena" placeholder="cena">
        <input type="number" name="ile" placeholder="ilosc">
        <input type="number" step="0.01" name="vat" placeholder="vat">
        <input type="date" name="term" placeholder="data ważności">
        <select name="gr">
            <option>chemia</option>
            <option>spożywcze</option>
            <option>kosmetyki</option>
        </select>
        <input type="submit" value="potwierdź">

    </form>

    <?php

        if(isset($_POST["nt"]))
        {
            $i=$_POST['nt'];
            $n=$_POST['cena'];
            $d=$_POST['ile'];
            $a=$_POST['vat'];
            $m=$_POST['gr'];
            $p=$_POST['term'];
            $con=mysqli_connect("localhost", "root", "", "zamowienia");
            $q = "insert into towary values(null, '$i', '$n', '$d', '$a', '$m', '$p')";
            $r=mysqli_query($con, $q) or die ("błąd");
            echo "dane do bazy danych";
            mysqli_close($con);
            
        }

    ?>
</body>
</html>