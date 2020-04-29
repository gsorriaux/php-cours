<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="public/css/index.css">
        <script src="https://kit.fontawesome.com/bac71461de.js" crossorigin="anonymous"></script>
        <title>IT-Gaming</title>
    </head>
    <body>
    <?php include 'templates/header.php'; ?>
    <?php if($_SESSION['auth']): ?>
        <main class="flex">
            <h2><i class="fas fa-star"></i>Bienvenue <span class="naming"><?= $_SESSION['name'] ?></span><i class="fas fa-star"></i></h2>
        </main>
    <?php endif ?>
    <?php include 'templates/footer.php' ?>
    </body>
</html>
