<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enchanted Brothel</title>
</head>
<body>
    <form method="post">
        <input type="text" name="nf" placeholder="nazwa">
        <input type="text" name="nip" placeholder="NIP">
        <input type="text" name="kod" placeholder="kod pocztowy">
        <input type="text" name="ct" placeholder="miasto">
        <input type="text" name="ul" placeholder="ulica">
        <input type="text" name="tel" placeholder="numer telefonu">
        <input type="submit" value="potwierdź">

    </form>

    <?php

        if(isset($_POST["nf"]))
        {
            $i=$_POST['nf'];
            $n=$_POST['nip'];
            $d=$_POST['kod'];
            $a=$_POST['ct'];
            $m=$_POST['ul'];
            $p=$_POST['tel'];
            $con=mysqli_connect("localhost", "root", "", "zamowienia");
            $q = "insert into klienci values(null, '$i', '$n', '$d', '$a', '$m', '$p')";
            $r=mysqli_query($con, $q) or die ("błąd");
            echo "dane do bazy danych";
            mysqli_close($con);
            
        }

    ?>
</body>
</html>
