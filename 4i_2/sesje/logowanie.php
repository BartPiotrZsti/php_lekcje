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
        $baza = array(
            'anna' => 'ania123',
            'katarzyna123' => 'kasia123',
            'Jan' => 'kowalski',
            'adam' => 'adam123',
            'Marek' => 'Jarek'

        );///tablica z loginami i hasłami


        session_start(); // Rozpocznij sesję

        // Sprawdza czy użytkownik jest już zalogowany
        if(isset($_SESSION['logowanie'])){
            header('Location: glowna.php'); // Przekieruje na stronę główną
            exit();
        }
        // Sprawdza, czy formularz logowania został przesłany
        elseif(isset($_POST['nazwa']) && isset($_POST['haslo'])){
            // Zweryfikuj dane logowania
            foreach ($baza as $user => $haslo) { //porównuje co zostało wpisanie przez użytkownika i czy są te dane w bazie danych 
                if($_POST['nazwa'] == $user && $_POST['haslo'] == $haslo){
                    $_SESSION['logowanie'] = $_POST['nazwa']; // Ustawia zmienną sesji
                    header('Location: glowna.php'); // Przekierowywuje na stronę główną
                    exit();
                }
                else{
                   // echo 'Błędne dane logowania.<br>'; // Wyświetla komunikat o błędzie
                }
            }
            echo 'Błędne dane logowania.<br>'; // Wyświetla komunikat o błędzie
            
        }

                    /*
            Tworzenie, zarządzanie i dodawanie ciasteczek oraz sesji:

            1. Tworzenie ciasteczka:
            setcookie('nazwa_ciasteczka', 'wartość', time() + 3600); // Ciasteczko ważne przez 1 godzinę

            2. Odczyt ciasteczka:
            if(isset($_COOKIE['nazwa_ciasteczka'])) {
                echo $_COOKIE['nazwa_ciasteczka'];
            }

            3. Usunięcie ciasteczka:
            setcookie('nazwa_ciasteczka', '', time() - 3600); // Ustawienie czasu wygaśnięcia w przeszłości

            4. Rozpoczęcie sesji:
            session_start(); // Musi być wywołane na początku skryptu przed jakimkolwiek wyjściem HTML

            5. Ustawienie zmiennej sesji:
            $_SESSION['nazwa_zmiennej'] = 'wartość';

            6. Odczyt zmiennej sesji:
            if(isset($_SESSION['nazwa_zmiennej'])) {
                echo $_SESSION['nazwa_zmiennej'];
            }

            7. Usunięcie zmiennej sesji:
            unset($_SESSION['nazwa_zmiennej']);

            8. Zakończenie sesji:
            session_destroy(); // Usuwa wszystkie dane sesji
            */
    ?>
</body>
</html>
