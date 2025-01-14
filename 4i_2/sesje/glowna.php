<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
</head>
<body>
    <?php
        session_start(); // Rozpocznij sesję
        //$_SESSION['logowanie'] = $imie; 
        //ucfirst($imie); // Zmienia pierwszą literę na dużą
        echo 'Witaj,'.ucfirst($_SESSION['logowanie']) .'!<br>'; 

        echo 'Jesteś zalogowany/a!<br>'; // Wyświetla komunikat o zalogowaniu

        echo '<a href="wyloguj.php">Wyloguj</a>'; // Wyświetla link do wylogowania


        //stwórz tablce uzytkowników z loginami i hasłami kod php ma wyszykiwac login i hasło w tej tablicy
    ?>
</body>
</html>