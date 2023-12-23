<?php

$dbhost = '127.0.0.1';
$dbname = 'php_db';
$dbuser = 'root';
$dbpassword = 'zahira';

try
{
    // Créer une connexion PDO
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8", $dbuser, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (PDOException $e) 
{
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

?>
