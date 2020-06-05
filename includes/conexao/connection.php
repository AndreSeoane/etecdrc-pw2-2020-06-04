<?php 
    require_once ("connection-config.php"); 

    /*
    Compatibilidade: PHP 5.2, 5.3, 5.4, 5.5, 5.6, 7.0, 7.1, 7.2 
    Método mais indicado para conexão por ser o mais seguro.
    http://php.net/manual/pt_BR/class.pdo.php
    */

try {
    $conn = new PDO("$driver:host=$server;dbname=$database", $user, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // PDO::ERRMODE_SILENT
    // PDO::ERRMODE_WARNING
    // PDO::ERRMODE_EXCEPTION

}
catch( PDOException $Exception ) {
    echo "Erro: " . $Exception->getMessage( ) . "  -  Código: " . $Exception->getCode( ) ;
    die; 
}  