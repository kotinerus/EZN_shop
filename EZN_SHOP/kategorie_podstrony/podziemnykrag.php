<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space Shop</title>
    <link rel="stylesheet" href="../style/styles.css">
</head>

<body>
    <?php

    $databse = "filmy";
    $server = "localhost";
    $password = "";
    $user = "root";

    $conn = mysqli_connect($server, $user, $password, $databse);
    mysqli_query($conn, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
    ?>
    <div class="menu1">
        <div class="logo">
            <img class="img_logo" src="../ikony/rocket.png">
        </div>
        <div class="text_logo">
            <h1>SPACE SHOP</h1>
        </div>
    </div>

    <div class="menu2">
        <div class="menu3">
            <a href="../index.php" class="menu_pod"> <img src="../ikony/shop.png" class="img_div"><br> SKLEP</a>
            <a href="koszyk.php" class="menu_pod"><img src="../ikony/cart.png" class="img_div"><br>KOSZYK</a>
            <a href="kasa.php" class="menu_pod"><img src="../ikony/register.png" class="img_div"><br>KASA</a>
            <a href="user.php" class="menu_pod"><img src="../ikony/user.png" class="img_div"><br>USER</a>
            <a href="wyloguj.php" class="menu_pod"><img src="../ikony/exit.png" class="img_div"><br>WYLOGUJ SIĘ</a>
        </div>

        <div class="menu4">

            <a href="horror.php" class="menu_pod1"><img src="../ikony/ghost.png" class="img_div1"><br>HORROR</a>
            <a href="akcja.php" class="menu_pod1"><img src="../ikony/akcja.png" class="img_div1"><br>AKCJI</a>
            <a href="familijne.php" class="menu_pod1"><img src="../ikony/family.jpg" class="img_div1"><br>FAMILIJNY</a>
            <a href="komedia.php" class="menu_pod1"><img src="../ikony/comedy.png" class="img_div1"><br>KOMEDIA</a>
        </div>
    </div>
    <div class="main">

        <?php

             $zapfamilijny = mysqli_query($conn, "SELECT tytul, cena, ocena, ilosc, obraz, link, opis FROM filmy WHERE tytul = 'PODZIEMNY KRĄG'");
             while ($zf = mysqli_fetch_array($zapfamilijny)) {
                 echo "<section class='sekcje'><img src='" . $zf['obraz'] . "'class='img_sekcja'>" . "<h4>" . $zf['tytul']. "</h4>" . "<br>" . "Cena " . $zf['cena'] . "zł<br>ocena " . $zf['ocena'] . "<br></section><section class='sekcje'>" . $zf['opis']. "</section>";
             }
                 mysqli_close($conn);
        ?>
    </div>



</body>

</html>