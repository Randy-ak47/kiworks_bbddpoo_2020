<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$host = "localhost";
$puerto = "3306";
$usuario = "root";
$contrasena = "";
$bbdd= "continentes";

function Conectarse() {
    global $host, $puerto, $usuario, $contrasena,$bbdd;
    if (!($link = mysqli_connect($host . ":" . $puerto, $usuario, $contrasena, $bbdd))) {
        echo "<h2> Error conectando al servidor.<br></h2>";
        exit();
    } else {
        echo "<h2> Conectado al Servidor.<br></h2>";
    }
    return $link;
}

