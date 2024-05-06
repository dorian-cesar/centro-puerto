<?php
if(isset($_POST['imagenData'])){
    $nameImagen=$_POST['nameImg'];
    $imagenData = $_POST['imagenData'];
    $imagenData = str_replace('data:image/png;base64,', '', $imagenData);
    $imagenData = base64_decode($imagenData);

    $nombreArchivo = 'imagen_'.time().'.png';
   

    file_put_contents('../asset/boletos/'.$nameImagen.'.png', $imagenData);

    echo $nombreArchivo;
} else {
    echo 'No se recibió ningún dato de imagen.';
}
?>
