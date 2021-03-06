<?php 

require 'include_database.php';

$results = $pdo->query('SELECT 
    Kundendaten.id,
    Kundendaten.Name,
    Kundendaten.Rechtsform,
    Kundendaten.Unterzeile,
    Kundendaten.Kurztext,
    Kundendaten.Profil,
    Kundendaten.Status,
    Kategorie_Auswahl.Name AS category_name
  
FROM 
    Kundendaten, 
    Kategorie_Auswahl
WHERE 
    Kundendaten.Kategorie_Auswahl = Kategorie_Auswahl.id');

?><!doctype html>
<html lang="en">
  <head>
    <?php require 'include_head.php'; ?>
    <title>Kundendaten-System</title>
  </head>
  <body>
    <?php require 'include_navigation.php'; ?>

    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h1>Kundendaten</h1>
            </div>
            <div class="col pt-1">
                <a class="btn btn-primary btn-lg float-right" href="news_add.php" role="button">Anlegen</a>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Rechtsform</th>
                    <th scope="col">Unterzeile</th>
                    <th scope="col">Kurztext</th>
                    <th scope="col">Profil</th>
                    <th scope="col">Status</th>
                    <th scope="col">Kategorie Auswahl</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $row): ?>
                <tr>
                    <th scope="row"><?php echo $row['id'] ?></th>
                    <td><?php echo $row['Name'] ?></td>
                    <td><?php echo $row['Rechtsform'] ?></td>
                    <td><?php echo $row['Unterzeile'] ?></td>
                    <td><?php echo $row['Kurztext'] ?></td>
                    <td><?php echo $row['Profil'] ?></td>
                    <td><?php echo $row['Status'] ?></td>
                    <td><?php echo $row['category_name'] ?></td>
                    <td>
                        <div class="float-right">
                            <a href="news_edit.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary btn-sm">Bearbeiten</a>
                            <a href="news_delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm">Löschen</a>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?php require 'include_body_end.php'; ?>
  </body>
</html>