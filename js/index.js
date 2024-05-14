

const sidebarToggle = document.getElementById('menu-toggle');
const sidebar = document.getElementById('sidebar');

sidebarToggle.addEventListener('click', toggleSidebar);

function toggleSidebar() {
    sidebar.classList.toggle('active');
    sidebarToggle.classList.toggle('active');
}
$(document).ready(function () {

    /* $("#reservas").load("reservas.html"); */
    $("#rutas").load("rutas.html");
    $("#about").load("about.html");
    $("#faq").load("faq.html");

});

$("#mostrarFaq").click(function () {
    $("#faq").show();
    $("#rutas").hide();
    $("#about").hide();
    if (sidebar.classList.contains('active')) {
        toggleSidebar();
    }
});

$("#mostrarRutas").click(function () {
    $("#faq").hide();
    $("#rutas").show();
    $("#about").hide();
    if (sidebar.classList.contains('active')) {
        toggleSidebar();
    }
});

$("#mostrarAbout").click(function () {
    $("#faq").hide();
    $("#rutas").hide();
    $("#about").show();
    if (sidebar.classList.contains('active')) {
        toggleSidebar();
    }
});
