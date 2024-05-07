const sidebarToggle = document.getElementById('menu-toggle');
const sidebar = document.getElementById('sidebar');

sidebarToggle.addEventListener('click', () => {
    sidebar.classList.toggle('active');
    sidebarToggle.classList.toggle('active');
});

$(document).ready(function () {

    /* $("#reservas").load("reservas.html"); */
    $("#rutas").load("rutas.html");
    $("#about").load("about.html");
    $("#faq").load("faq.html");

    $("#mostrarFaq").click(function () {
        /* $("#reservas").show(); */
        $("#faq").show();
        $("#rutas").hide();
        $("#about").hide();

        $('#sidebar').toggleClass('active');
        $(this).toggleClass('active');

    });

    $("#mostrarRutas").click(function () {
        /* $("#reservas").hide(); */
        $("#faq").hide();
        $("#rutas").show();
        $("#about").hide();

        $('#sidebar').toggleClass('active');
        $(this).toggleClass('active');

    });

    $("#mostrarAbout").click(function () {
        /* $("#reservas").hide(); */
        $("#faq").hide();
        $("#rutas").hide();
        $("#about").show();

        $('#sidebar').toggleClass('active');
        $(this).toggleClass('active');

    });

});