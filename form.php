<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="public/css/index.css">
        <title>IT-Gaming | Connexion</title>
    </head>
    <body>
    <?php include 'templates/header.php'; ?>
    <div class="form-connexion">
        <form action="controllers/connexion.php" method="post">
            <label for="name">Votre nom :</label>
            <input type="text" name="name" value="<?php if(isset($_SESSION['name'])): ?><?=$_SESSION['name']?><?php endif ?>">
            <label for="password">Mot de passe :</label>
            <input type="password" name="password">
            <button type="submit">Se connecter</button>
        </form>
    </div>
    <?php include 'templates/footer.php' ?>
    </body>
</html>
