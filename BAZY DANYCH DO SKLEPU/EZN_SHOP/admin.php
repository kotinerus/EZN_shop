<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space Shop</title>
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="style/style_admin.css">

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
                }
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
        <h3>Panel ADMINA</h3><br>
        <a href="admin_dodaj.php">Dodaj produkt |</a>
        <a href="usun_produkt.php">Usuń produkt |</a>
        <a href="">Zmień produkt |</a>
        <a href="">Zmień uprawnienia |</a>
        <a href="">Pokaż log systemowy</a>



    </div>



</body>

</html>