<?php

$host = 'localhost';
$db = 'db_siak';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';


//Buat data source name (DSN)
$dsn ="mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE    => PDO::FETCH_OBJ,
    PDO::ATTR_EMULATE_PREPARES      => false,
];

$dbh = new PDO($dsn, $user,$pass,$opt);






?>


