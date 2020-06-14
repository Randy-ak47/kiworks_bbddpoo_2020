<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$tabla = "CREATE TABLE `paises` ( `IdPais` INT NOT NULL AUTO_INCREMENT , `Nombre_Pais` VARCHAR(60) NOT NULL , `Idioma` VARCHAR(60) NOT NULL , PRIMARY KEY (`IdPais`)) ENGINE = InnoDB; ";

$resultado = mysqli_query($link, $tabla);
If ($resultado) {
    echo "<h2> La tabla paises se creó correctamente\n</h2>";
} else {
    echo "<h2> Hubo un problema o la tabla ya esta creada\n</h2>";
    //echo 'Error al crear la base de datos: ' . mysqli_error($resultado) . "\n";
}