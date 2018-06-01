<?php

require 'include_database.php';

if ($_POST['Status'] == 'true') {
  $Status = 1;
} else {
  $Status = 0;
}

$sql = 'UPDATE 
  Kundendaten
SET 
  Name = ?, 
  Rechtsform = ?, 
  Unterzeile = ?, 
  Kurztext = ?, 
  Profil = ?,
  Status = ?,
  Kategorie_Auswahl = ?
WHERE 
  id = ?';

$pdo->prepare($sql)->execute([
  $_POST['Name'], 
  $_POST['Rechtsform'], 
  $_POST['Unterzeile'], 
  $_POST['Kurztext'], 
  $_POST['Profil'], 
  $Status, 
  $_POST['Kategorie_Auswahl'], 
  $_GET['id']
]);

?><!doctype html>
<html lang="en">
  <head>
    <?php require 'include_head.php'; ?>
    <title>Kundendaten-System</title>
  </head>
  <body>
    <?php require 'include_navigation.php'; ?>

    <div class="container mt-4">
        <h1>Kunde aktualisiert</h1>
        <p class="mt-4">Der Kunde wurde erfolgreich im System aktualisiert.</p>
        <a class="btn btn-primary mt-3" href="index.php" role="button">Zur Übersicht</a>
    </div>

    <?php require 'include_body_end.php'; ?>
  </body>
</html>