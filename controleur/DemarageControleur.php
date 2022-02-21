<?php
class DemarageControleur
{
    public function accueil()
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
