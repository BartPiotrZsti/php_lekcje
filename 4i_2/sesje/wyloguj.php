<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    
    <?php
        session_start(); // Rozpocznij sesję

        // Sprawdza czy użytkownik jest zalogowany
        if(!isset($_SESSION['logowanie'])){
            header('Location: logowanie.php'); // Przekieruje na stronę logowania
            exit();
        }

        // Usuwa zmienną sesji
        unset($_SESSION['logowanie']);

        // Zniszcza sesje
        session_destroy();

        echo 'Zostałeś wylogowany/a.<br>';

    ?>

</body>
</html>