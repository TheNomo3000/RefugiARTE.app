<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header("Location:../index.php");
}else{
    require 'Conexion/Operaciones.php';
    $obj = new Operaciones();
    $obj->conectarBD();
    $sql = 'UPDATE homestead.usuarios SET conf="'.$_POST['conf'].'" WHERE nombre="'.$_SESSION['usuario'].'";';
    echo $sql;
    $obj->consultar($sql);
    header("Location:../index.php");
}