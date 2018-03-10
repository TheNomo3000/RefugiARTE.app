$(function () {
    iniciarElementos();
});

function  iniciarElementos() {
    $(".button-collapse").sideNav();
    $('.modal').modal();
    $('.collapsible').collapsible();
    $('.tooltipped').tooltip({delay: 50});
    $('select').material_select();
}

function error(texto){
    Materialize.toast(texto, 4000)
}
