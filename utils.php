<?php
class Utils
{
    static function connecter()
    {
        $id = "root";
        $mdp = "";
        $serveur = "localhost";
        $base = "login_form";

        //Connexion
        $connexion = null;

        try {
            $connexion = new PDO("mysql:host=" . $serveur . ";dbname=" . $base, $id, $mdp, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Echec de la connexion' . $e->getMessage();
        }
        return $connexion;
    }

    //Deconnexion en PDO
    static function deconnecter($connexion)
    {
        $connexion = null;
    }

    //requete avec resultat
    static function query($connexion, $sql)
    {
        $result = null;

        try {
            //protection injection
            $stmt = $connexion->prepare($sql);
            //Executer la requete
            $stmt->execute(array());
            //Récuperer le resultat sous forme de tableau
            $result = $stmt->fetchAll();
        } catch (PDOException $e) {
            $error = $stmt->errorInfo();
            if (!is_null($error[1])) {
                $result = $e->getMessage();
            }
        }
        return $result;
    }

    //requete sans resultat
    static function execute($connexion, $sql)
    {
        try {
            //protection injection
            $stmt = $connexion->prepare($sql);
            //Executer la requete
            $stmt->execute();
            $result = true;
        } catch (PDOException $e) {
            $result = false;
            return $result;
        }
        return $result;
    }
}
