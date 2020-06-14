<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$bbdd = "Create Database Continentes";
$resultado = mysqli_query($link, $bbdd);
If (!$resultado) {
    echo "<h2>La base de datos Continentes se creó correctamente\n </h2>";
} else {
     echo "<h2> Hubo un problema o la base de datos ya esta creada\n</h2>";
    //echo 'Error al crear la base de datos: ' . mysqli_error($resultado) . "\n";
}