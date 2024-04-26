<?php
include("conexion.php");
// Oobtener datos
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fecha = $_POST['fecha'];
$numBoleto = $_POST['numBoleto'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$precio = $_POST['precio'];


// insertar datos
$sql = "INSERT INTO usuarios (nombre,apellido,fecha,numBoleto,correo,telefono,precio) 
VALUES ('$nombre','$apellido','$fecha','$numBoleto','$correo','$telefono','$precio')";

if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente";
} else {
    echo "Error al insertar datos: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>

/*header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET,POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include("conexion.php");



/*if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = json_decode(file_get_contents("php://input"));
    $nombre = $data->nombre;
    $apellido = $data->apellido;
    date_default_timezone_set('America/Santiago');
    $fecha = date('Y-m-d'); // Formato año-mes-día
    $numBoleto = generarCodigoAleatorio(10); // Asegúrate de que la función generarCodigoAleatorio esté definida
    $correo = $data->correo;
    $telefono = $data->telefono;
    $precio = $data->precio;

    if (($correo != "") && ($nombre != "")) {
        $sqlEmpleaados = mysqli_query($conexionBD, "INSERT INTO usuarios (nombre, apellido, fecha, numBoleto, correo, telefono, precio) 
        VALUES ('$nombre', '$apellido', '$fecha', '$numBoleto', '$correo', '$telefono', '$precio') ");
        echo json_encode(["success" => 1]);
    exit();
    }
}*/
