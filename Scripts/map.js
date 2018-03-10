function init() {
    var center = new google.maps.LatLng(40.972057, -5.663805);

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: center,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}]

    });
    var markers = [];

    /*COPIAR DESDE AQUI*/

    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(40.963172, -5.665466)
    });

    marker.addListener('click', function() {
        map.setZoom(15);
        map.setCenter(marker.getPosition());
        cargarModal("conchas.html");
    });
    markers.push(marker);

    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(40.965157, -5.664169)
    });

    marker.addListener('click', function() {
        map.setZoom(15);
        map.setCenter(marker.getPosition());
        cargarModal("plaza.html");
    });

    markers.push(marker);

    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(40.966758, -5.656043)
    });

    marker.addListener('click', function() {
        map.setZoom(15);
        map.setCenter(marker.getPosition());
        cargarModal("accem.html");
    });

    markers.push(marker);

    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(40.976009, -5.649476)
    });

    marker.addListener('click', function() {
        map.setZoom(15);
        map.setCenter(marker.getPosition());
        cargarModal("carniceria.html");
    });

    markers.push(marker);

    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(40.960945, -5.665604)
    });

    marker.addListener('click', function() {
        map.setZoom(15);
        map.setCenter(marker.getPosition());
        cargarModal("catedral.html");
    });

    markers.push(marker);

    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(40.959956, -5.665175)
    });

    marker.addListener('click', function() {
        map.setZoom(15);
        map.setCenter(marker.getPosition());
        cargarModal("huerto.html");
    });

    markers.push(marker);

    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(40.959845, -5.666646)
    });

    marker.addListener('click', function() {
        map.setZoom(15);
        map.setCenter(marker.getPosition());
        cargarModal("casa_lis.html");
    });

    markers.push(marker);

    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(40.957953, -5.670126)
    });

    marker.addListener('click', function() {
        map.setZoom(15);
        map.setCenter(marker.getPosition());
        cargarModal("puente.html");
    });

    markers.push(marker);

    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(40.961532, -5.666848)
    });

    marker.addListener('click', function() {
        map.setZoom(15);
        map.setCenter(marker.getPosition());
        cargarModal("unamuno.html");
    });

    markers.push(marker);

    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(40.972529, -5.669073)
    });

    marker.addListener('click', function() {
        map.setZoom(15);
        map.setCenter(marker.getPosition());
        cargarModal("barrio_oeste.html");
    });

    markers.push(marker);

    /*HASTA AQUI*/

    var options = {
        imagePath: 'images/m'
    };

    var markerCluster = new MarkerClusterer(map, markers, options);
}


function cargarModal(texto) {
    $("#info").modal('open');
    $('#infoContent').load("../puntos/"+texto);
}
google.maps.event.addDomListener(window, 'load', init);