<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>
<body>  
    <?php           
    session_start();
    $user = "root";
    $password= "";
    $server= "localhost";
    $database = "uzytkownicy";
    $sql = mysqli_connect($server, $user, $password, $database);
    
    ?>
    <a href="logowanie.php">Zaloguj się</a>
    <a href="rejestracja.php">Zarejestruj się</a>
    <form method="POST" action="logowanie.php">
    <b>Login:</b> <input type="text" name="login"><br>
    <b>Hasło:</b> <input type="password" name="haslo"><br>
    <input type="submit" value="Zaloguj" name="loguj">

    <?php
         if (isset($_POST['loguj']))
         {
             $login = $_POST['login'];
             $haslo = $_POST['haslo'];
             
            if (mysqli_fetch_assoc(mysqli_query($sql, "SELECT login, haslo FROM uzytkownicy WHERE login = '".$login."' AND haslo = '".$haslo."' AND id_user=1;")) > 0)
            {
                 $_SESSION['zalogowany'] = true;
                 $_SESSION['login'] = $login;
                 echo "Zalogowany";
                 header('Location: admin.php');
                
            }
            else if (mysqli_fetch_assoc(mysqli_query($sql, "SELECT login, haslo FROM uzytkownicy WHERE login = '".$login."' AND haslo = '".$haslo."' AND id_user=2;")) > 0)
            {
                 $_SESSION['zalogowany'] = true;
                 $_SESSION['login'] = $login;
                 echo "Zalogowany";
                 header('Location: user.php');
            }
            else echo "Wpisano złe dane.";
         }

     ?>
    </form>
</body>
</html>