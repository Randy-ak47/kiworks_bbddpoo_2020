<?php
$nombre_bd = "transportes_2";
$bbdd = "Create Database ". $nombre_bd;
$resultado = mysqli_query($link, $bbdd);
If (!$resultado) {
    echo "<h4 class='badge badge-success'>La base de datos " . $nombre_bd . " se creó correctamente\n </h4>";
} else {
    echo "<h4 class='badge badge-warning'> Hubo un problema o la base de datos ya esta creada\n</h4>";
    echo 'Error al crear la base de datos: ' . mysqli_error($resultado) . "\n";
}