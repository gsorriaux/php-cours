<?php

session_start();

//Traite les informations du formulaire grâce à $_POST
$_SESSION['image'] = $_POST['image'];
$_SESSION['text'] = $_POST['text'];

//renvoi sur l'index
header('Location: /info.php');
