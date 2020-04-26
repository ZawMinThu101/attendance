<?php
//Remote database connection
$host = 'remotemysql.com';
$db = 'zoIhO1Zwh0';
$user = 'zoIhO1Zwh0';
$pass = 'x96AsaM2em';
$charset = 'utf8mb4';
//Development part
  //  $host = 'localhost';
    //$db = 'attendance_db';
    //$user = 'root';
    //$pass = '';
    //$charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e){
        throw new PDOException($e->getMessage());

    }

    require_once 'crud.php';
    $crud = new crud($pdo);

?>