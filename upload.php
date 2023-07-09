<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['plik'])) {
    if ($_FILES['plik']['error'] == UPLOAD_ERR_OK) {
        // plik został przesłany poprawnie

        // kod do przeniesienia pliku na serwer
        $plik_tymczasowy = $_FILES['plik']['tmp_name'];
        $sciezka_docelowa = 'C:/xampp/htdocs/test/uploads/' . $_FILES['plik']['name'];

        if (move_uploaded_file($plik_tymczasowy, $sciezka_docelowa)) {
            // plik został pomyślnie przeniesiony na serwer
            header("Location: index.php?upload=success");
            //przekierowanie
        } else {
            // wystąpił błąd podczas przenoszenia pliku
            echo "Wystąpił błąd podczas przesyłania pliku.";
        }
    } else {
        // wystąpił błąd podczas przesyłania pliku
        echo "Wystąpił błąd podczas przesyłania pliku.";
    }
}
?>
