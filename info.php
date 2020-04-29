<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="public/css/index.css">
        <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
        <title>IT-Gaming | Info</title>
    </head>
    <body>
        <?php include 'templates/header.php'; ?>
        <?php if($_SESSION['auth']): ?>
            <div class="info flex">
            <?php if ($_SESSION['text'] == 'yes'): ?>
                <p>Dans sa définition théorique, l'expression <b>hardcore gamer</b> désigne simplement un joueur passionné, peu importe quels sont les aspects du Jeu vidéo qui l'attirent le plus. Cette définition a essentiellement pour rôle de s'opposer au concept de casual gamer en marquant une différence dans le temps que le joueur voudra bien accorder au média.
                   Dans la pratique, néanmoins, cette désignation sera plus volontiers utilisée pour parler du joueur expérimentant le Jeu vidéo par son côté défit : celui-ci connait parfaitement les jeux auquels il joue et cherche parfois à battre ses propres records. Il cherche souvent à "finir" ses jeux en terminant toutes les missions principales et secondaires, en explorant le moindre recoin de la carte et en obtenant la totalité des objets à collectionner.</p>
            <?php endif ?>
            <?php if($_SESSION['image'] == 'yes'): ?>
                <img src="https://media.giphy.com/media/y0NFayaBeiWEU/giphy.gif" alt="">
            <?php endif ?>
            <?php if($_SESSION['image'] == 'no' && $_SESSION['text'] == 'no'): ?>
                <main class="flex">
                    <h2>Vous avez désactivé tout le contenu. Retourner dans votre profil.</h2>
                </main>
        <?php endif ?>
            </div>
        <?php else: ?>
            <main class="flex">
                <h2>Vous devez être connecté pour voir le contenu.</h2>
            </main>
        <?php endif ?>
        <?php include 'templates/footer.php'; ?>
    </body>
</html>
