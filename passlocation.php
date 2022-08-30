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
                <input type="text" name="nom">
                </div>
            <div>
                <label for="prenom">Prenom :</label>
                <input type="text" name="prenom"><br>
            </div>
            <div>
                <label for="numeric">Tel :</label>
                <input type="numeric" name="phone">
            </div>
            <div>
                <label for="numeric">CNI :</label>
                <input type="numeric" name="cni"><br>
            </div>
            <div>
                <label for="date">Date delivranrance :</label>
                <input type="date" name="datedel"><br>
            </div>
            <div>
                <label for="date">Date d'expiration :</label>
                <input type="date" name="dateex"><br>
            </div>
            <div>
                <label for="adresse">Adresse :</label>
                <input type="text" name="adresse">
            </div>
            <div>
                <label>Etes-vous un Homme ou une femme ?</label>
                <input type="radio" name="genre" value="Homme">Homme<br>
                <input type="radio" name="genre" value="Femme">Femme<br>
            </div>
            <input type="submit" name="Envoyer"><br>
        
        </fieldset>
      
    </form>
   
</body>
</html>