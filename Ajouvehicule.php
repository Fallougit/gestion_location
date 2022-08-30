<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenue</h1>
    <a href="index.php">Retour a la page d'accueil</a>

    <form action="index.php">
        <div>
            <label for="matricule">Matricule</label>
            <input type="text"><br>
        </div>
        <div>
            <label for="model">Model</label>
            <input type="text"><br>
        </div>
        <div>
            <label for="couleur">Couleur</label>
            <input type="text"><br>
        </div>
        <div>
            <select name="marque" id="marque">
                <option value="cadillac">Cadillac</option>
                <option value="toyota">Toyota</option>
            </select>
        </div>
        <div>
            <input type="submit" name="valider" value="Valider"><br>
        </div>

    </form>
    <?php
         mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
         $mysqli = new mysqli("localhost", "root", "", "dblocation");

         if(isset($_POST['Valider'])){
            $mysqli->query("insert into vehicule(matricule,model,couleur,idmarque) values(".$_POST['matricule'].",".$_POST['model'].",".$_POST['couleur'].",".$_POST['marque'].")");
         }
    ?>
</body>
</html>