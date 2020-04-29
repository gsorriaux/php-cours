<?php session_start();
(empty($_SESSION)) ? $_SESSION['auth'] = false : "" ;
?>
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
<header>
<h1>IT-Gaming</h1>
<img src="/public/img/banner.jpg" alt="">
<nav>
    <ul class="flex">
        <li class="flex"><a class="button-nav"href="/">Accueil</a></li>
        <li class="flex"><a class="button-nav"href="users.php">Utilisateurs</a></li>
        <li class="flex"><a class="button-nav"href="info.php">Info</a></li>
        <?php if(!$_SESSION['auth']): ?>
            <li class="flex"><a class="button-nav"href="form.php">Connexion</a></li>
        <?php else: ?>
            <li class="deroulant button-nav">
                <span><?= ucfirst($_SESSION['name']) ?></span>
                <ul class="none">
                    <li><a href="profil.php">Profil</a></li>
                    <li><a href="controllers/logout.php">Déconnexion</a></li>
                </ul>
            </li>
        <?php endif ?>
    </ul>
</nav>
</header>
