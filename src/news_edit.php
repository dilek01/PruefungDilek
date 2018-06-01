<?php 

require 'include_database.php';

// Get news
$sql = "SELECT * FROM Kundendaten WHERE id = ?";
$statement = $pdo->prepare($sql);
$statement->execute([$_GET['id']]);
$row = $statement->fetch(PDO::FETCH_ASSOC);

// Get categories
$results = $pdo->query('SELECT * FROM Kategorie_Auswahl');

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
            <div class="col-sm-6">
                <h1>Kunden bearbeiten</h1>
                <form class="mt-4" action="news_edit_thanks.php?id=<?php echo $row['id'] ?>" method="POST">
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" class="form-control" id="Name" name="Name" placeholder="z. B. BASF!" value="<?php echo $row['Name'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="Rechtsform">Rechtsform</label>
                        <input type="text" class="form-control" id="Rechtsform" name="Rechtsform" placeholder="z. B.GmbH" value="<?php echo $row['Rechtsform'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="Unterzeile">Unterzeile</label>
                        <input type="text" class="form-control" id="Unterzeile" name="Unterzeile" placeholder="z. B. The Chemical Company" value="<?php echo $row['Unterzeile'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="Kurztext">Kurztext</label>
                        <input type="text" class="form-control" id="Kurztext" name="Kurztext" placeholder="z. B. Chemie-Konzern und Globale Player" value="<?php echo $row['Kurztext'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="Profil">Profil</label>
                        <textarea class="form-control" id="Profil" rows="6" name="Profil" placeholder="z. B. BASF ist der nach Umsatz und Marktkapitalisierung derzeit weltweit größte Chemiekonzern"><?php echo $row['Profil'] ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="Kategorie_Auswahl">Kategorie</label>
                        <select class="form-control" id="Kategorie_Auswahl" name="Kategorie_Auswahl">
                            <?php foreach ($results as $rowCategory): ?>
                                <option <?php if($row['Kategorie_Auswahl'] == $rowCategory['id']) { ?> selected<?php } ?> value="<?php echo $rowCategory['id'] ?>"><?php echo $rowCategory['Name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="true" name="Status" id="Status"<?php if($row['Status'] == 1) { ?> checked<?php } ?>>
                        <label class="form-check-label" for="Status">
                            Aktiviert
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Aktualisieren</button>
                </form>
            </div>
        </div>
    </div>

    <?php require 'include_body_end.php'; ?>
  </body>
</html>