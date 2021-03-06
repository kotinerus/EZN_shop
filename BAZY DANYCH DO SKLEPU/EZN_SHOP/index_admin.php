<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space Shop</title>
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="style/gwiazdki.css">

</head>

<body>
    <?php
    session_start();
    $databse = "filmy";
    $server = "localhost";
    $password = "";
    $user = "root";

    $conn = mysqli_connect($server, $user, $password, $databse);
    mysqli_query($conn, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
    ?>
    <div class="menu1">
        <div class="logo">
            <img class="img_logo" src="ikony/rocket.png">
        </div>
        <div class="text_logo">
            <a href="admin.php" class="menu_admin"> <img src="ikony/work.png" class="img_admin"><br>ADMIN</a>
        </div>
    </div>

    <div class="menu2">
        <div class="menu3">
            <a href="index.php" class="menu_pod"> <img src="ikony/shop.png" class="img_div"><br> SKLEP</a>
            <a href="kategorie_podstrony/koszyk.php" class="menu_pod"><img src="ikony/cart.png" class="img_div"><br>KOSZYK</a>
            <a href="kategorie_podstrony/kasa.php" class="menu_pod"><img src="ikony/register.png" class="img_div"><br>KASA</a>
            <a href="kategorie_podstrony/user.php" class="menu_pod"><img src="ikony/user.png" class="img_div"><br>
                <?php
                if (!empty($_SESSION['login'])) {
                    echo $_SESSION['login'];
                } else echo "USER";
                ?>

            </a>
            <a href="kategorie_podstrony/wyloguj.php" class="menu_pod"><img src="ikony/exit.png" class="img_div"><br>WYLOGUJ SIĘ</a>
        </div>

        <div class="menu4">

            <a href="kategorie_podstrony/horror.php" class="menu_pod1"><img src="ikony/ghost.png" class="img_div1"><br>HORROR</a>
            <a href="kategorie_podstrony/familijne.php" class="menu_pod1"><img src="ikony/akcja.png" class="img_div1"><br>AKCJI</a>
            <a href="kategorie_podstrony/familijne.php" class="menu_pod1"><img src="ikony/family.jpg" class="img_div1"><br>FAMILIJNY</a>
            <a href="kategorie_podstrony/komedia.php" class="menu_pod1"><img src="ikony/comedy.png" class="img_div1"><br>KOMEDIA</a>
        </div>
    </div>
    <div class="main">
        <?php

        $zapakcja = mysqli_query($conn, "SELECT tytul, cena, ocena, ilosc, obraz, link FROM filmy");
        while ($za = mysqli_fetch_array($zapakcja)) {
            echo "<section class='sekcje'><a href='kategorie_podstrony/" . $za['link'] . "'>
            <img src='" . $za['obraz'] . "' class='img_sekcja'></a><h3>" . $za['tytul'] . "
            </h3>" . "" . $za['cena'] . "zł <br>" . zrobGwiazdki($za['ocena']) . "<div class='gwiazdki'></div><button>Kup teraz</button></section>";
        }

        mysqli_close($conn);
        ?>

    </div>
    <?php
    function zrobGwiazdki($ile)
    {

        $gwiazdkaZolta = "<img src='../EZN_SHOP/ikony/ratingStar.png' class='ratingStar'>";

        $gwiazdkaHalf  = "<img src='../EZN_SHOP/ikony/ratingHalfStar.png' class='ratingStar'>";

        $gwiazdkaSzara = "<img src='../EZN_SHOP/ikony/ratingGrayStar.png' class='ratingStar'>";


        $zolte = ($ile - 1) / 2;

        $szare = (9 - $ile) / 2;

        $wynik = "";

        for ($licznik = 0; $licznik < $zolte; $licznik++) $wynik .= $gwiazdkaZolta;

        if (($ile % 2))
            $wynik .= $gwiazdkaHalf;

        for ($licznik = 0; $licznik < $szare; $licznik++) $wynik .= $gwiazdkaSzara;

        return $wynik;
    }
    ?>



</body>

</html>