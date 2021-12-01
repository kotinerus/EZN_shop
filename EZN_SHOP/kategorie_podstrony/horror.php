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

        $zaphorror = mysqli_query($conn, "SELECT tytul, cena, ocena, ilosc, obraz FROM filmy WHERE kategoria = 'horror'");
        while ($zh = mysqli_fetch_array($zaphorror)) {
            echo "<section class='sekcje'><img src='" . $zh['obraz'] . "' class='img_sekcja'><h3>" . $zh['tytul'] . "</h3>" . "<br>Cena " . $zh['cena'] . "zł<br>ocena " . $zh['ocena'] . "<br><button>SPRAWDŹ</button></section>";
        }

        mysqli_close($conn);
        ?>
    </div>



</body>

</html>