<?php

/*******************************************************************************
Le sujet est assez basique :

- Page de connexion
- Lors d'une connexion réussie, la date de dernière connexion est mise à jour et
on est redirigé sur la page principale si le mot de passe dans la base
correspond au mot de passe entré et si l'utilisateur fait partie du groupe 2.
Si l'authentification échoue, on retourne sur la page de connexion et un message
d'erreur s'affiche.
- Une fois connecté, une phrase mal orthographiée est affichée. Cliquer dessus la
corrige.
- On peut ensuite se déconnecter, on est alors redirigé vers la page de connexion.

Tu es libre de faire le test à ta manière le but étant de nous montrer ce que tu sais faire

Informations de connexion à la DB

Host : localhost
Login : viviendibatt_STXvG
Password : 0V2PbQJE59Cd
Db name : viviendibatt_STXvG

 *******************************************************************************/

if (isset($_POST['controleur']) && isset($_POST['action'])) {
    $controleur = $_POST['controleur'];
    $action = $_POST['action'];
} else if (isset($_GET['controleur']) && isset($_GET['action'])) {
    $controleur = $_GET['controleur'];
    $action = $_GET['action'];
} else {
    $controleur = 'Demarage';
    $action = 'accueil';
}
include_once('controleur/route.php');
