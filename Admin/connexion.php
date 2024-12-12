<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
  </head>
  <body>       
        <?php include("../headerplus.php"); ?>
        <h2>Connexion à votre compte</h2>
        <form action='verifconnexion.php' method="POST">
            <div>
                <label>Mail*</label>
                <input type="text" name="mail" required placeholder="nom.prenom@mail.com">
            </div>
            <div>
                <label>Mot de Passe*</label>
                <input type="password" name="mdp" required placeholder="mot de passe">
            </div>
            <input type="submit" value="Connexion">
        </form>
        <br>
        <?php include("../footerplus.php"); ?>
    </body>
</html>
