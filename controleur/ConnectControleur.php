<?php

class ConnectControleur
{
    public function login()
    {
        session_start();
        require_once('modele/ConnectModele.php');
        $acces = Connect::login(htmlspecialchars($_POST['login']), htmlspecialchars($_POST['password']));
        if ($acces['success'] == true && $_SESSION['id_user']) {
            require_once('vue/accueil.php');
        } else {
            $data['msgErreur'] = $acces['msgErreur'];
            require_once('vue/connexion.php');
        }
    }

    public function logout()
    {
        session_start();
        $_SESSION = [];
        session_destroy();
        $data['msgErreur'] = '';
        require_once('vue/connexion.php');
    }
}
