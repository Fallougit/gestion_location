<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Reservez avec nos meilleurs offres</h1>
    <a href="index.php">Retour a la page d'accueil</a>

    <form action="index.php" method="post">
        <fieldset>
            
            <div>    
                <label>Nom :</label>
                <input type="text" name="Nom">
                </div>
            <div>
                <label for="prenom">Prenom :</label>
                <input type="text"><br>
            </div>
            <div>
                <label for="phone">Tel :</label>
                <input type="tel" name="phone">
            </div>
            <div>
                <label for="numeric">CNI :</label>
                <input type="numeric"><br>
            </div>
            <div>
                <label for="date">Date delivranrance :</label>
                <input type="date" size="30" class="form-control" min="2000-01-01" max="2030-01-01"><br>
            </div>
            <div>
                <label for="date">Date d'expiration :</label>
                <input type="date" size="30" class="form-control" min="2000-01-01" max="2030-01-01"><br>
            </div>
            <div>
                <label for="adresse">Adresse :</label>
                <input type="text">
            </div>
            <div>
                <label>Etes-vous un Homme ou une femme ?</label>
                <input type="radio" name="masqulin" value="Homme">Homme<br>
                <input type="radio" name="feminin" value="Femme">Femme<br>
            </div>
            <input type="submit" name="Envoyer"><br>
        
        </fieldset>
      
    </form>
    <?php
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $mysqli = new mysqli("localhost", "root", "", "dblocation");

        if(isset($_POST['Envoyer'])){
            $_POST = $_POST['nom'];
            $_POST = $_POST['prenom'];
            $_POST = $_POST['adresse'];
            $_POST = $_POST['cni'];
            $_POST = $_POST['masqulin'];
            $_POST = $_POST['feminin'];

            $mysqli->query("insert into client(nom,prenom,tel,cni,)values(".$_POST['nom'].",".$_POST['prenom'].",".$_POST['phone'].",".$_POST['numeric'].",".$_POST['date'].",".$_POST['date'].",".$_POST['adresse'].")");
            
        }
    ?>
</body>
</html>