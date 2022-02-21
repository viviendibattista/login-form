<?php
require("UtilisateurModele.php");

class Connect
{
    public function __construct()
    {
    }
    /**
     * Fonction Login : retourne un tableau avec une clé "success" a true ou false et une cle "msgErreur"
     */
    public static function login($login, $password)
    {
        include_once("utils.php");
        $retour = array('success' => false, 'msgErreur' => '');
        $conn = Utils::connecter();
        $sql = "SELECT * FROM user where username=:username and password=:password";
        $stmt = $conn->prepare($sql);
        $stmt->execute(array(
            'username' => $login,
            'password' => $password
        ));
        $util = $stmt->fetch(PDO::FETCH_ASSOC);
        // On vérifie que l'utilisateur existe dans la base
        if (is_array($util) && !empty($util)) {
            $utilisateur = new Utilisateur($util['id_user'], $util['username'], $util['last_login']);
            // On update son last login et on met en place la variable session
            $utilisateur->updateLastLogin();
            $_SESSION['id_user'] = $util['id_user'];
            $_SESSION['username'] = $util['username'];
            $_SESSION['last_login'] = $util['last_login'];
            $retour['success'] = true;
        } else {
            $retour['msgErreur'] = 'Login ou mot de passe incorrect, merci de rééssayer.';
        }
        return $retour;
    }
}
