<?php
    session_start();
?>
<div id="logo">
    <nav>
        <div class="nav-wrapper center-align">
            <div id="banner_mobile">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
            <img id="imgLogo" src="Recursos/imagenes/logo.png"/>
        </div>
    </nav>
</div>

<header>
    <!-- Barra de navegación lateral -->
    <ul id="slide-out" class="side-nav fixed">
        <?php
            if(isset($_SESSION['usuario'])){
                echo ' <li><div class="user-view">
                          <div class="background">
                            <img src="Recursos/imagenes/photo.jpg">
                          </div>
                          <a href="#!user"><img class="circle" src="Recursos/imagenes/boy.png"></a>
                          <span class="white-text name">'.mb_strtoupper($_SESSION['usuario']).'</span>
                            <a href="#ajustes" class="modal-trigger"><i class="material-icons">settings</i></a>
                            <a href="Recursos/logout.php"><i class="material-icons">exit_to_app</i></a>
                         </span>
                        </div></li>';
            }else{
                echo ' <li><div class="user-view">
                          <img id="imgLogo" src="Recursos/imagenes/logo.png"/>
                        </div></li>';
            }
        ?>
        <li><a href="index.php" class="waves-effect waves-tea"><i class="material-icons">home</i>Inicio</a></li>
        <li><a href="mapa.php" class="waves-effect waves-tea"><i class="material-icons">map</i>Mapa</a></li>
            <ul class="collapsible collapsible-accordion ">
                <li>
                    <a class="collapsible-header "><i class="material-icons ">today</i>Calendario</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="calendario.php"><i class="material-icons">map</i>Glosario</a></li>
                        </ul>
                    </div>
                </li>
            </ul>

        <li><a href="geografia.php"><i class="material-icons">public</i>Geografía</a></li>
        <li><a href="glosario.php"><i class="material-icons">info</i>Glosario</a></li>
        <?php
            if(!isset($_SESSION['usuario'])){
                echo '<li><div class="divider"></div></li>';
                echo '<li><a href="#login" class="modal-trigger"><i class="material-icons">user</i>Iniciar Sesión</a></li>';
            }
        ?>
    </ul>

</header>
<!--MODAL-->
<div id="login" class="modal">
    <div class="modal-content">
      <h4>Inicio de sesión</h4>
        <form name="input" action="Recursos/login.php" method="post">
            <label for="username">Username:</label><input type="text" id="username" name="username" />
            <label for="password">Password:</label><input type="password" value="" id="password" name="password" />
            <input type="submit" value="Entrar" name="sub" />
        </form>
    </div>
</div>
<div id="info" class="modal">
    <div class="modal-content" id="infoContent">
    </div>
</div>

<div id="ajustes" class="modal" style="min-height: 250px;">
    <div class="modal-content">
        <h4>Cambiar configuración</h4>
        <form action="Recursos/conf.php" method="post">
            <select class="icons" name="conf">
                <option value="" disabled selected>Cambiar</option>
                <option value="2" data-icon="images/sample-1.jpg" class="left circle">Árabe</option>
                <option value="1" data-icon="images/office.jpg" class="left circle">Español</option>
            </select>
            <label>Images in select</label>
            <input type="submit" name="formSubmit" value="Submit" >
        </form>
    </div>
</div>