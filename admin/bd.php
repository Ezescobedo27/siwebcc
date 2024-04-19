<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servidor = $_ENV['SERVER_DB'];
$baseDeDatos = $_ENV['DB_DB'];
$usuario = $_ENV['USER_DB'];
$contrasenia = $_ENV['PASSWORD_DB'];

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDeDatos", $usuario, $contrasenia);
} catch(Exception $error) {
    echo $error->getMessage();
}
