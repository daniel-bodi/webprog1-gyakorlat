<?php
$galeria_mappa = './images/galeria/';

// Feltöltés kezelése
if (isset($_POST['feltolt']) && isset($_FILES['ujkep']) && isset($_SESSION['login'])) {
  $cel = $galeria_mappa . basename($_FILES['ujkep']['name']);
  $kiterjesztes = strtolower(pathinfo($cel, PATHINFO_EXTENSION));

  $ervenyes = in_array($kiterjesztes, ['jpg', 'jpeg', 'png', 'gif']) 
              && $_FILES['ujkep']['size'] < 5 * 1024 * 1024; // max 5 MB

  if ($ervenyes && move_uploaded_file($_FILES['ujkep']['tmp_name'], $cel)) {
    // sikeres feltöltés
  } else {
    echo "<p style='color:red;'>Hibás fájl vagy túl nagy.</p>";
  }
}

// Képek beolvasása
$kepek = glob($galeria_mappa . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
?>