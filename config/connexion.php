<?php 
include_once "db.php";
function get_connection(){
    $dbname = MYSQL['dbname'];
    $port= MYSQL['port'];
    $host = MYSQL['host'];
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
    $pdo =new PDO($dsn, MYSQL['username'], MYSQL['password']);
    return $pdo;
}
?>