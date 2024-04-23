// Función para generar el código QR
function generarQR(texto) {
    var qr = new QRCode(document.getElementById("qrCode"), {
        text: texto,
        width: 150,
        height: 150
    });
}

// Llamada a la función para generar el código QR
window.onload = function() {
    generarQR("Wit 2024"); // Puedes cambiar "https://ejemplo.com" por la URL que desees codificar en el QR
};