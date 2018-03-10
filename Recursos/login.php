<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        header("Location:../index.php");
    }else{
        require 'Conexion/Operaciones.php';
        $user = strtolower($_POST['username']);
        $pass = strtolower($_POST['password']);
        $obj = new Operaciones();
        $obj->conectarBD();
        $sql = "SELECT * FROM usuarios WHERE nombre='".$user."' and pass='".$pass."'";
        echo $sql;
        $obj->consultar($sql);
        if($obj->getConexion()->affected_rows == 1){
            $r = $obj->getResultado()->fetch_array(MYSQLI_ASSOC);
            $_SESSION['usuario'] = $r['nombre'] ;
            $_SESSION['conf'] = $r['conf'];
            header("Location:../index.php");
        }else{
            header('Location:../index.php');
        }
    }
?>

