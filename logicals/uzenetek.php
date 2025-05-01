<?php
$uzenetek = [];

if (isset($_SESSION['login'])) {
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=gyakrolat_beadando', 'root', '',
                       array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

        $sql = "SELECT nev, email, uzenet, datum, felhasznalo 
                FROM uzenetek 
                ORDER BY datum DESC";

        $stmt = $dbh->query($sql);
        $uzenetek = $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        $uzenetek = [];
    }
} else {
    header("Location: ."); // nincs jogosultság
    exit();
}
?>