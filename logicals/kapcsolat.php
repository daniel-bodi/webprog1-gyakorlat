<?php
$hiba = false;
$uzenet = '';

if (isset($_POST['kuldes'])) {
    if (!empty($_POST['nev']) && !empty($_POST['email']) && !empty($_POST['uzenet'])) {
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=gyakrolat_beadando', 'root', '', [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
            $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

            $felhasznalo = isset($_SESSION['login']) ? $_SESSION['login'] : 'Vendég';

            $sql = "INSERT INTO uzenetek (nev, email, uzenet, felhasznalo) 
                    VALUES (:nev, :email, :uzenet, :felhasznalo)";
            $stmt = $dbh->prepare($sql);
            $stmt->execute([
                ':nev' => $_POST['nev'],
                ':email' => $_POST['email'],
                ':uzenet' => $_POST['uzenet'],
                ':felhasznalo' => $felhasznalo
            ]);

            $_SESSION['uzenet_sikeres'] = true;
            header("Location: ?oldal=kapcsolat");
            exit();
        } catch (PDOException $e) {
            $hiba = true;
            $uzenet = "Hiba történt: " . $e->getMessage();
        }
    } else {
        $hiba = true;
        $uzenet = "Kérjük, töltsön ki minden mezőt!";
    }
}
?>

