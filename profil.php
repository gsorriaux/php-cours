<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="public/css/index.css">
        <title>IT-Gaming | Info</title>
    </head>
    <body>
        <?php include 'templates/header.php'; ?>
        <?php if(!$_SESSION['auth']): ?>
            <main class="flex">
                <h2>Vous devez être connecté pour voir le contenu.</h2>
            </main>
        <?php else: ?>
            <div class="form-profil">
            <form action="controllers/preferences.php" method="post">
                <fieldset class="flex">
                    <legend>Afficher l'image</legend>
                    <label for="image">Oui</label>
                    <input type="radio" name="image" value="yes" <?php if($_SESSION['image'] == 'yes'): ?>checked <?php endif ?>>
                    <label for="image">Non</label>
                    <input type="radio" name="image" value="no" <?php if($_SESSION['image'] == 'no'): ?>checked <?php endif ?>>
                </fieldset>
                <fieldset class="flex">
                    <legend>Afficher le texte</legend>
                    <label for="text">Oui</label>
                    <input type="radio" name="text" value="yes" <?php if($_SESSION['text'] == 'yes'): ?>checked <?php endif ?>>
                    <label for="text">Non</label>
                    <input type="radio" name="text" value="no" <?php if($_SESSION['text'] == 'no'): ?>checked <?php endif ?>>
                </fieldset>
                <button type="submit">Sauvegarder</button>
            </form>
            </div>
        <?php endif ?>
        <?php include 'templates/footer.php'; ?>
    </body>
</html>
