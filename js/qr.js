// Función para generar el código QR con contenido aleatorio
function generarQR(texto) {
    var qr = new QRCode(document.getElementById("qrCode"), {
        text: texto,
        width: 150,
        height: 150
    });
}

let numero = "1234567890";
let letras = "abcdefghijklmnñopqrstuvwxyz";
let mayus = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
let junto = numero + letras + mayus;

// Función para generar un código aleatorio de la longitud especificada
const generarCodigo = (longitud) => {
    let codigo = "";
    for (let x = 0; x < longitud; x++) {
        let aleatorio = Math.floor(Math.random() * junto.length);
        codigo += junto.charAt(aleatorio);
    }
    return codigo;
}

// Llamada a la función para generar el código QR con contenido aleatorio
window.onload = function() {
    const contenidoAleatorio = generarCodigo(10); // Cambia el largo del codigo segun sea necesario
    generarQR(contenidoAleatorio);
};