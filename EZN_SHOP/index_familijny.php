<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space Shop - Familijny</title>
    <link rel="stylesheet" href="styles.css">
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
        <a href="index_glowna.php"> <div class="menu1">
            <div class="logo">
                <img class="img_logo" src="rocket.png">
            </div>
            <div class="text_logo">
                <h1>SPACE SHOP</h1>
            </div>
        </div></a>

    <div class="menu2">
        <div class="menu3">
            <div class="menu_pod"> <img src="ikony/shop.png" class="img_div"><br> SKLEP</div>
            <div class="menu_pod"><img src="ikony/cart.png" class="img_div"><br>KOSZYK</div>
            <div class="menu_pod"><img src="ikony/register.png" class="img_div"><br>KASA</div>
            <div class="menu_pod"><img src="ikony/user.png" class="img_div"><br>
            <?php
               
               session_start();
               $user = "root";
               $password= "";
               $server= "localhost";
               $database = "uzytkownicy";
               echo $_SESSION['login'];
           ?>
            </div>
            <a href="logout.php"><div class="menu_pod"><img src="ikony/exit.png" class="img_div"><br>WYLOGUJ SIĘ</div></a> 
        </div>

        <div class="menu4">
            <a href="index_horror.php"> <div class="menu_pod1"><img src="ikony/ghost.png" class="img_div1"><br>HORROR</div></a>
            <a href="index_akcja.php"><div class="menu_pod1"><img src="ikony/akcja.png" class="img_div1"><br>AKCJI</div></a> 
            <a href="index_familijny.php"> <div class="menu_pod1"><img src="ikony/family.jpg" class="img_div1"><br>FAMILIJNY</div></a>
             <a href="index_komedia.php"> <div class="menu_pod1"><img src="ikony/comedy.png" class="img_div1"><br>KOMEDIA</div></a>
        </div>
    </div>
    <div class="main">
            <?php

                $zapfamilijny = mysqli_query($conn, "SELECT tytul, cena, ocena, ilosc, obraz FROM filmy WHERE kategoria = 'familijny'");
                while($zf = mysqli_fetch_array($zapfamilijny)){
                    echo "<section class='sekcje'><img src='".$zf['obraz']."' class='img_sekcja'><h3>" .$zf['tytul'] ."</h3>" . "<br>Cena " . $zf['cena'] . "zł<br>ocena " . $zf['ocena'] . "<br><button>SPRAWDŹ</button></section>";
                }

                mysqli_close($conn);
            ?>
    </div>



</body>

</html>