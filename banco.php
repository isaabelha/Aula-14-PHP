<?php

session_start();

$localhost = "localhost";
$user = "root";
$passw = "etec";
$banco = "PHP";

global $conn;

try{
    $conn = new PDO("mysql:dbname=".$banco."; host=".$localhost,$user, $passw);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $error){
    echo "ERRO: ".$error->getMessage();
    exit;
}

    // $sql = $conn->query("SELECT * FROM usuario");
    // $sql->execute();

    // echo $sql->rowCount();