<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$tabla = "autores";
$sql = "INSERT INTO $tabla (`Clave_Autor`, `Nombre_Apellidos`) VALUES (NULL, '" . $_POST['nombre_apellidos'] . "'); ";
$resultado = mysqli_query($link, $sql);
If ($resultado) {
    echo "<h2> Los registros" . $tabla . " se han insertado correctamente</h2>\n";
} else {
    echo "<h2>Hubo un problema o " . $tabla . " ya esta creada</h2>\n";
    echo 'Error al crear la base de datos: ' . mysqli_error($resultado) . "\n";
}
