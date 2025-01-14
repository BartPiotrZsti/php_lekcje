<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logging</title>
</head>
<body>





    <form action="logowanie.php" method="post">
        <input type="text" name="nazwa" placeholder="Nazwa">
        <input type="password" name="haslo" placeholder="Hasło">
        <input type="submit" value="Zaloguj">
    </form>
    
    <?php
        session_start(); // Rozpocznij sesję

        // Sprawdza czy użytkownik jest już zalogowany
        if(isset($_SESSION['logowanie'])){
            header('Location: glowna.php'); // Przekieruje na stronę główną
            exit();
        }
        // Sprawdza, czy formularz logowania został przesłany
        elseif(isset($_POST['nazwa']) && isset($_POST['haslo'])){
            // Zweryfikuj dane logowania
            if($_POST['nazwa'] == 'anna' && $_POST['haslo'] == 'ania123'){
                $_SESSION['logowanie'] = $_POST['nazwa']; // Ustawia zmienną sesji
                header('Location: glowna.php'); // Przekierowywuje na stronę główną
                exit();
            }
            else{
                echo 'Błędne dane logowania'; // Wyświetla komunikat o błędzie
            }
        }
    ?>
</body>
</html>