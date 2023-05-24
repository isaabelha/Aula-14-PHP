<?php

if(isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['password']) && !empty($_POST['password'])){

    require 'banco.php';
    require 'userClass.php';

    $u = new User();

    
    $login = $_POST=['login'];
    $password = $_POST=['password'];

    if ($u->login($login, $password) == true){
        if (isset ($_SESSION['codeUser'])){
            header('location:site.php');
        }else{
            header('location:index.php');
        }
    }else{
        header('location:index.php');
    }
}