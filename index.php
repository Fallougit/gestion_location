<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <h1 align="center">Gestion de location de voiture</h1>
    <div align="center">
        <img src="images.jpg" alt="Ma Location" width="500px">
    </div>
    <h4><a href="Convehicule.php">Consulter les vehicules</a></h4><br>
    <h4><a href="Ajouvehicule.php">Ajouter un vehicule</a></h4>

    <?php
         mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
         $mysqli = new mysqli("localhost", "root", "", "dblocation");

    ?>
</body>
</html>