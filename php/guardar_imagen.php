<?php
if(isset($_POST['imagenData'])){
    $imagenData = $_POST['imagenData'];
    $imagenData = str_replace('data:image/png;base64,', '', $imagenData);
    $imagenData = base64_decode($imagenData);

    $nombreArchivo = 'imagen_'.time().'.png';
   

    file_put_contents($nombreArchivo, $imagenData);

    echo $nombreArchivo;
} else {
    echo 'No se recibió ningún dato de imagen.';
}
?>
