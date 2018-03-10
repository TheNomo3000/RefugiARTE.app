<!DOCTYPE html>
<html lang="es">
    <head>
        <?php
        include 'secciones/recursos.html';
        ?>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCz1PE_KZWoS0dUxAqsX5_LBdjIJr8FU5Y&callback=init"
                async defer></script>
        <title>Demo</title>
    </head>
    <body>
        <?php
        include 'secciones/Header.php';
        ?>
    <main>
        <!--Contenido-->
        <div id="map"></div>
        <script src="Recursos/markerclusterer.js"></script>

        <script src="Scripts/map.js"></script>
    </main>
    </body>
</html>