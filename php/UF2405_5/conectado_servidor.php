<?php

$host = "localhost";
$puerto = "3306";
$usuario = "root";
$contrasena = "";
$bbdd = "transportes_2";

function Conectarse() {
    global $host, $puerto, $usuario, $contrasena, $bbdd;
    //global $host, $puerto, $usuario, $contrasena;
    if (!($link = mysqli_connect($host . ":" . $puerto, $usuario, $contrasena, $bbdd))) {
        //if (!($link = mysqli_connect($host . ":" . $puerto, $usuario, $contrasena))) {
        echo "<h2 class='badge badge-warning'> Error conectando al servidor.<br></h2>";
        exit();
    } else {
        echo "<h2 class='badge badge-success'> Conectado al Servidor.<br></h2>";
    }
    return $link;
}
