<?php
$login=$_POST['login'];
$mdp = $_POST['mdp'];

$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');


if ($login == "admin" && $mdp =="azerty"){
    header("Location: http://$host$uri/index.html");
} else {

    header("Location: http://$host$uri/profil.html");
}
?>