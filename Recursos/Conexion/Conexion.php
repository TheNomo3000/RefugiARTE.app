<?php
    class Conexion{
        private $bd = 'homestead';
        private $usuario = 'homestead';
        private $pass = 'secret';
        private $host = '192.168.10.10';
        function getBd(){
            return $this->bd;
        }
        function getUsuario(){
            return $this->usuario;
        }
        function getPass(){
            return $this->pass;
        }
        function getHost(){
            return $this->host;
        }
    }
?>