<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php'; // Asegúrate de tener la librería PHPMailer instalada



// Recibe datos del formulario
$datos = json_decode(file_get_contents('php://input'), true);


// Extraer los datos
$nombre = $datos['nombre'];
$apellido = $datos['apellido'];
$rut = $datos['rut'];
$numTicket = $datos['key'];    
$fechaComra=$datos['fechaCompra'];
$correo = $datos['correo'];
$precio = $datos['precio'];



// Configuración de PHPMailer
$mail = new PHPMailer(true);

try {
    // Configuración del servidor SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Cambia esto por tu servidor SMTP
    $mail->SMTPAuth = true;
    $mail->Username = 'mailer.wit@gmail.com'; // Cambia esto por tu correo electrónico
    $mail->Password = 'qzyuwykitiekjsku'; // Cambia esto por tu contraseña
    $mail->SMTPSecure = 'tls'; // O 'ssl' si es necesario
    $mail->Port = 587; // Puerto SMTP

    // Destinatario
    $mail->setFrom('desarrollo.wit@gmail.com', 'Desarrollo Wit');
    $mail->addAddress('dgonzalez@wit.la', 'Alexis Tobar S');

    // Contenido del correo
    $mail->isHTML(true);

    $htmlContent = file_get_contents('../PlantillaCorreo.html');

    $htmlContent = str_replace('{nombre}', $nombre, $htmlContent);
    $htmlContent = str_replace('{apellido}', $apellido, $htmlContent);
    $htmlContent = str_replace('{numTicket}', $numTicket, $htmlContent);
    $htmlContent = str_replace('{correo}', $correo, $htmlContent);
    $htmlContent = str_replace('{rut}', $rut, $htmlContent);
    $htmlContent = str_replace('{fechaCompra}', $fechaComra, $htmlContent);
    $htmlContent = str_replace('{precio}', $precio, $htmlContent);
    
   


    

    $mail->Subject = 'Nuevo mensaje de contacto';
    $mail->Body = $htmlContent; 

    // Envío del correo
    if ($mail->send()) {
        echo '<script>alert("Correo Enviado Correctamente");</script>';
        header('Location:../index.html');
        exit;
    }
} catch (Exception $e) {
    echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
}
?>
