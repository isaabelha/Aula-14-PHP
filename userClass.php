<?php

class User{

    public function login($login, $password){
        
        global $conn;

        $teste = ("SELECT * FROM usuario WHERE login = :login AND senha = :password");
        $teste = $conn->prepare($teste);
        $teste->bindValue("login", $login, PDO::PARAM_STR);
        $teste->bindValue("senha", $password, PDO::PARAM_STR);
        $teste->execute();
        
        if ($teste->rowCount() > 0){
            $dado = $teste->fetch();

            $_SESSION ['codeUser'] = $dado ['codigo'];

            return true;
        }else{
            return false;
        }
    }
}