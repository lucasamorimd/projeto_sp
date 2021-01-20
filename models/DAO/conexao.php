<?php


abstract class conexao {
    function __construct() {
        
    }
    public static function getinstance(){
    try{   
    
    $pdo = new PDO("mysql:host=localhost;dbname=lad56630_teste","root","");
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

    return $pdo;
} catch(PDOException $exc){
    echo $exc->getMessage();
    
}

    }   
}