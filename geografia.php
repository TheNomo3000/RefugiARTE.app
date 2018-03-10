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
        <div class="container">
            <h1>Geografía</h1>
            <div class="row">
                <div class="col s12 m6">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light materialboxed">
                            <img class="" width="100%" src="Recursos/imagenes/mapa.png" />
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Mapa de España<i class="material-icons right">more_vert</i></span>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Mapa de España<i class="material-icons right">close</i></span>
                            <p>Historia....</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light materialboxed">
                            <img class="" width="100%" src="Recursos/imagenes/mapaCL.png" />
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Mapa de Castilla y León<i class="material-icons right">more_vert</i></span>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Mapa de Castilla y León<i class="material-icons right">close</i></span>
                            <p>Historia....</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4 l8"><p>s12 m4</p></div>
                <div class="col s12 m4 l8"><p>s12 m4</p></div>
            </div>
        </div>
    </main>
    </body>
</html>