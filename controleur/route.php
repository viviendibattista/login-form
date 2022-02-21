<?php

function call($ctrl, $act)
{
    //correspondance
    include_once('controleur/' . $ctrl . 'Controleur.php');

    //créer une instance du controleur
    switch ($ctrl) {
        case 'Demarage':
            $control = new DemarageControleur();
            break;

        case 'Connect':
            $control = new ConnectControleur();
            break;

        case 'Refresh':
            $control = new RefreshControleur();
            break;
    }
    $control->{$act}();
}

//Un tableau qui contient les controleur disponibles et leur actions
$controleurs = array(
    'Demarage' => ['accueil'],
    'Connect' => ['login', 'logout'],
    'Refresh' => ['refresh']
);

//verifie la validité du controleur et de l'action et on réalise laction
if (array_key_exists($controleur, $controleurs)) {
    if (in_array($action, $controleurs[$controleur])) {
        call($controleur, $action);
    }
}
