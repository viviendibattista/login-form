<?php

class Utilisateur
{
    private $id_user;
    private $username;
    private $last_login;

    public function __construct($id_user, $username, $last_login)
    {
        $this->id_user = $id_user;
        $this->username = $username;
        $this->last_login = $last_login;
    }

    /**
     * Fonction pour mettre a jour le last login dans la base, renvoie true s'il n'y a pas d'erreurs
     */
    public function updateLastLogin()
    {
        include_once("utils.php");
        $conn = Utils::connecter();
        $sql = "UPDATE user SET last_login = NOW() WHERE id_user = :id_user";
        $stmt = $conn->prepare($sql);
        $stmt->execute(array(
            'id_user' => $this->id_user
        ));
        $error = $stmt->errorInfo();
        if ($error[1] === NULL) {
            return true;
        } else {
            return false;
        }
    }
}
