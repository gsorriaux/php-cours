<?php

session_start();

$log = [
    'login' => 'admin',
    'password' => 'dc76e9f0c0006e8f919e0c515c66dbba3982f785'
];


//Traite les informations du formulaire grâce à $_POST
$_SESSION['name'] = $_POST['name'];
$password = sha1($_POST['password']);

if ($_SESSION['name'] == $log['login'] && $password == $log['password']) {
    $_SESSION['auth'] = true;
    $_SESSION['image'] = 'yes';
    $_SESSION['text'] = 'yes';
    //renvoi sur l'index
    header('Location: /');
} else {
    header('Location: /form.php');
}
