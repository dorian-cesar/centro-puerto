<?php

// Permitir el acceso desde cualquier origen
header("Access-Control-Allow-Origin: *");

// Permitir los métodos GET desde cualquier origen
header("Access-Control-Allow-Methods: GET");


// Configuración de la base de datos
$servername = "ls-3c0c538286def4da7f8273aa5531e0b6eee0990c.cylsiewx0zgx.us-east-1.rds.amazonaws.com"; // Cambiar si es necesario
$username = "dbmasteruser"; // Cambiar al nombre de usuario de la base de datos
$password = "eF5D;6VzP$^7qDryBzDd,`+w(5e4*qI+"; // Cambiar a la contraseña de la base de datos
$database = "masgps"; // Cambiar al nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener el código de ticket de la URL
if(isset($_GET['codigo_ticket'])) {
    $codigo_ticket = $_GET['codigo_ticket'];
    
    // Consulta SQL para obtener la información del ticket
    $sql = "SELECT * FROM tickets2 WHERE numTicket ='$codigo_ticket'";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // Crear un array para almacenar los resultados
        $tickets = array();
        
        while($row = $result->fetch_assoc()) {
            // Agregar cada fila al array de resultados
            $tickets[] = $row;
        }
        
        // Convertir el array a formato JSON
        echo json_encode($tickets);
    } else {
        // Si no se encuentran resultados, devolver un mensaje de error
        echo "No se encontraron resultados para el código de ticket proporcionado.";
    }
} else {
    // Si no se proporciona un código de ticket, devolver un mensaje de error
    echo "Por favor, proporcione un código de ticket.";
}

// Cerrar conexión
$conn->close();

?>