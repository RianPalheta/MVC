<?php
require 'environment.php';

$config = array();
if( ENVIRONMENT == 'development' ) {
    define("BASE_URL", "http://localhost/apren/MVC");
    $config['dbname'] = 'classificados';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
} else {
    define("BASE_URL", "http://mercadotucujur.com/");
    $config['dbname'] = 'nome_do_db';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'usuario';
    $config['dbpass'] = 'senha';
}

global $db;
try{
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
} catch(PDOException $e) {
    echo "Erro no db: ".$e->getMessage();
    exit;
}