<?php

require 'include_database.php';

$sql = 'UPDATE Kategorie_Auswahl SET name = ? WHERE id = ?';
$pdo->prepare($sql)->execute([$_POST['name'], $_GET['id']]);

?><!doctype html>
<html lang="en">
  <head>
    <?php require 'include_head.php'; ?>
    <title>Kundendaten-System</title>
  </head>
  <body>
    <?php require 'include_navigation.php'; ?>

    <div class="container mt-4">
        <h1>Kategorie aktualisiert</h1>
        <p class="mt-4">Die Kategorie wurde erfolgreich im System aktualisiert.</p>
        <a class="btn btn-primary mt-3" href="categories.php" role="button">Zur Übersicht</a>
    </div>

    <?php require 'include_body_end.php'; ?>
  </body>
</html>