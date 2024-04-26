<?php 
// codigo para realizar la conexion a la base de dato de db_centopuerto
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_centropuerto";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    echo"Error de conexión: " . $conn->connect_error;
}
