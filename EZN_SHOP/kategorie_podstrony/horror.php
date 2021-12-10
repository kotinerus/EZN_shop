<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space Shop</title>
    <link rel="stylesheet" href="../style/styles.css">
    <link rel="stylesheet" href="../style/gwiazdki.css">
</head>

<body>
    <?php
    session_start();
    $databse = "filmy";
    $server = "localhost";
    $password = "";
    $user = "root";
    $databse1 = "koszyk";
    $server1 = "localhost";
    $password1 = "";
    $user1 = "root";

    $conn1 = mysqli_connect($server1, $user1, $password1, $databse1);

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
            <a href="user.php" class="menu_pod"><img src="../ikony/user.png" class="img_div"><br>
                <?php
                if (!empty($_SESSION['login'])) {
                    echo $_SESSION['login'];
                    $user = $_SESSION['login'];
                } else echo "USER";
                ?>
            </a>
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

        $zaphorror = mysqli_query($conn, "SELECT id_filmu, tytul, cena, ocena, ilosc, obraz, link FROM filmy WHERE kategoria = 'horror'");
        while ($za = mysqli_fetch_array($zaphorror)) {
            echo "<section class='sekcje'>
            <form action='' method='post'>
        <a href='kategorie_podstrony/" . $za['link'] . "'>
        <img name='obraz' src='" . $za['obraz'] . "' class='img_sekcja'></a>
        <h3 name='tytul'>" . $za['tytul'] . "</h3><h3>" . $za['cena'] . ",00zł</h3>
        <br> " . zrobGwiazdki($za['ocena']) . "<div class='gwiazdki'></div>" . "<br>
        <button type='submit' name='button' value='" . $za['id_filmu'] . "'>KUP</button>
    
    </form>

     </section>";
        }
        if (isset($_POST['button'])) {
            $_a = $_POST['button'];

            $kw = "SELECT tytul,ilosc,cena,obraz FROM `filmy` WHERE id_filmu=$_a";
            echo $kw;
            $c = mysqli_query($conn, $kw);
            while ($test = mysqli_fetch_array($c)) {
                $kwerenda1 = "INSERT INTO `kosz`(`id`, `tytul`, `ilosc`, `cena`, `url`, `user`) VALUES (0,'" . $test['tytul'] . "'," .
                    $test['ilosc'] . "," . $test['cena'] . ",'" . $test['obraz'] . "','" . $user . "')";
                mysqli_query($conn1, $kwerenda1);
            }
            echo "<button>" . $kwerenda1 . "</button>";
        }

        mysqli_close($conn);
        ?>
    </div>
    <?php
    function zrobGwiazdki($ile)
    {

        $gwiazdkaZolta = "<img src='../ikony/ratingStar.png' class='ratingStar'>";

        $gwiazdkaHalf  = "<img src='../ikony/ratingHalfStar.png' class='ratingStar'>";

        $gwiazdkaSzara = "<img src='../ikony/ratingGrayStar.png' class='ratingStar'>";


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