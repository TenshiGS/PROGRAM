<?php
$host= 'localhost';
$db = 'productos';
$user = 'root';
$password = '';

try{
    $pdo = new PDO("mysql:host=$host;dbname=$db",$user, $password);
} catch (PDOException $e){
    die ("Error de conexion: " . $e->getMessage());

}
?>
