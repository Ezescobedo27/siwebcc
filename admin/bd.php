<?php 
$servidor = "localhost"; // Nombre del servidor 
$baseDeDatos = "website"; // Nombre de la base de datos
$usuario = "root"; // Nombre de usuario
$contrasenia = "eduar2006"; // Contraseña

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDeDatos",$usuario,$contrasenia);
} catch(Exception $error) {
    echo $error->getMessage();
}
?>