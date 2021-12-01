<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja+</title>
</head>
<body>
    <a href="logowanie.php">Zaloguj się</a>
    <a href="rejestracja.php">Zarejestruj się</a>
    <form method="POST" action="rejestracja.php">
        <b>Login:</b> <input type="text" name="login"><br>
        <b>Hasło:</b> <input type="password" name="haslo"><br>
        <input type="submit" value="Utwórz konto" name="rejestruj">
    </form>

    <?php 
        
        session_start();
        $user = "root";
        $password= "";
        $server= "localhost";
        $database = "uzytkownicy";
        $sql = mysqli_connect($server, $user, $password, $database);
    
        if (isset($_POST['rejestruj']))
        {
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];

            if (mysqli_num_rows(mysqli_query($sql, "SELECT login FROM uzytkownicy WHERE login = '".$login."';")) == 0)
            {
                
                    mysqli_query($sql, "INSERT INTO `uzytkownicy` (`login`, `haslo`,`id_user`) VALUES ('".$login."', '".$haslo."',2);");
                    
                    echo "Konto zostało utworzone!";
                    $_SESSION['zalogowany'] = true;
                    $_SESSION['login'] = $login;
                    
                    header('Location: logowanie.php');

                
            }
            else echo "Podany login jest już zajęty.";
        
    }
    else echo "Podaj dane do rejestracji";

    ?>
</body>
</html>