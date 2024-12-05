<?php

$host = 'mysql:host=localhost;dbname=mmp';
$user = 'root';
$password = '';

try{
    $pdo = new PDO($host,$user,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo 'Error There ' . $e->getMessage();
}

?>