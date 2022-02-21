<?php

class RefreshControleur
{
    public function refresh()
    {
        session_start();
        if (isset($_SESSION['id_user'])) {
            require_once("vue/accueil.php");
        } else {
            $data['msgErreur'] = '';
            require_once("vue/connexion.php");
        }
    }
}
