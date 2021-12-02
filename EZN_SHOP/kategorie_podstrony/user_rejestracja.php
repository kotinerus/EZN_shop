<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space Shop</title>
    <link rel="stylesheet" href="../style/style_user.css">
</head>

<body>
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
        <div class="user_logo"><img class="img_logo_user" src="../ikony/padlock.png"></div>

        <img class="img_logo_user_rocket" src="../ikony/rocket.png">
        <div class="space_text">
            <div class="space_text_in">
                <h2>SPACE SHOP</h2>
            </div>
        </div>
        <?php           
            session_start();
            $user = "root";
            $password= "";
            $server= "localhost";
            $database = "uzytkownicy";
            $sql = mysqli_connect($server, $user, $password, $database);
            
        ?>
        <div class="user_form">
            <form method="POST">
                <input type="text" placeholder="LOGIN" name="login"><br><br>
                <input type="password" placeholder="HASŁO" name="haslo"><br><br>
                <a href="user.php"><input class="button_form" type="button" value="ZALOGUJ" name="loguj"></a>
                <input class="button_form" type="submit" value="REJESTRACJA" name="rejestruj"><br>
            </form>
                <?php 
                    if (isset($_POST['rejestruj']) && !empty($_POST['login']) && !(empty($_POST['haslo'])))
                    {
                    $login = $_POST['login'];
                    $haslo = $_POST['haslo'];

                        if (mysqli_num_rows(mysqli_query($sql, "SELECT login FROM uzytkownicy WHERE login = '".$login."';")) == 0)
                        {
                            
                                mysqli_query($sql, "INSERT INTO `uzytkownicy` (`login`, `haslo`,`id_user`) VALUES ('".$login."', '".$haslo."',2);");
                                
                                echo "Konto zostało utworzone!";
                                $_SESSION['zalogowany'] = true;
                                $_SESSION['login'] = $login;
                                
                                header('Location: user.php');

                            
                        }
                        else echo "Podany login jest już zajęty.";
                    
                }
                else echo "Podaj dane do rejestracji";

                ?>
             
        </div>
    </div>
</body>
</html>