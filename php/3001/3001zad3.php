<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enchanted Brothel</title>
</head>
<body>
    <form method="post">
        Data zam: <input type="date" name="data"> <br>
        <?php
        $con=mysqli_connect("localhost", "root", "", "zamowienia");
        $q="select id_kl, nazwa from klienci";
        $r=mysqli_query($con, $q) or die("błąd");
        echo "<select name='id_kl'>";
        while ($w=mysqli_fetch_array($r))
            echo "<option value=$w[0] >$w[1] </option>";
            echo "</select><br>";
        $q="select id_tow, nazwa from towary";
        $r=mysqli_query($con, $q) or die("błąd");
        echo "<select name='id_tow'>";
        while ($w=mysqli_fetch_array($r))
            echo "<option value=$w[0] >$w[1] </option>";
            echo "</select><br>";
            
        ?>
        <input type="number" name="ilosc" placeholder="ilość" >
        <input type="submit" value="potwierdź">
    </form>

    <?php


    if(isset($_POST["data"]))
    {
        $d=$_POST['data'];
        $ik=$_POST['id_kl'];
        $it=$_POST['id_tow'];
        $il=$_POST['ilosc'];
        $q = "insert into zamow values(null, '$d', '$ik', '$it', '$il')";
        $r=mysqli_query($con, $q) or die ("błąd");
        echo "added";
        mysqli_close($con);
    }




    ?>
</body>
</html>
