<?php
function conectar(){
    $host = "localhost";
    $username = "root";
    $passwd = "";
    $basedatos = "instrumentos";
    $conexion = new mysqli($host,$username,$passwd,$basedatos);
    if($conexion->error){
        die("Error de Conexion a la base de datos".$conexion->error);
    }
    return $conexion;
}
