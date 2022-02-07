<?php

require_once('class-autoload.inc.php');

try {

    if (isset($_POST)){

        $login = $_POST["login"];
        $password = $_POST["password"];
        
        if (empty($login) || empty($password)) {
            throw new Exception("Veuillez remplir tous les champs", 1);
        }
        
        if (!preg_match("/^[a-zA-Z0-9]*$/", $login)) {
            throw new Exception("Pseudo incorrect", 1);
        }
        
        $user = new User;
        
        $user->loginUser($login, $password);
        // echo"ok";
        // die();
        header("location:..\html\profil.html.php");
    }
    
} catch (Exception $e) {

    echo 'Erreur : ' . $e->getMessage();
}
