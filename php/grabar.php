<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "centro-puerto";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Oobtener datos
// Recibir los datos del POST
$data = json_decode(file_get_contents('php://input'), true);

// Extraer los datos
$nombre = $data['nombre'];
$apellido = $data['apellido'];
$fechaCompra =$data['fechaCompra'];
$fecha_convertida = date("Y-m-d", strtotime($fechaCompra));
$key = $data['key'];
$telefono = $data['telefono'];
$correo = $data['correo'];
$precio = $data['precio'];

// Insertar los datos en la base de datos
$sql = "INSERT INTO tickets (nombre, apellido, fecha, numTicket, telefono, correo, precio) 
VALUES ('$nombre', '$apellido', '$fecha_convertida', '$key', '$telefono', '$correo', '$precio')";

if ($conn->query($sql) === TRUE) {
    echo "Registro insertado correctamente!!";
  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();

?>