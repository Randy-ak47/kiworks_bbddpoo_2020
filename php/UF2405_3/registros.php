<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$tabla="paises";
$sql = "INSERT INTO $tabla (`IdPais`, `Nombre_Pais`, `Idioma`) VALUES (NULL, '" . $_POST['nombre_pais'] . "', '" . $_POST['idioma'] . "'); ";
$resultado = mysqli_query($link, $sql);
If ($resultado) {
    echo "<h2> Los registros se han insertado correctamente</h2>\n";
} else {
    echo "<h2>Hubo un problema o la base de datos ya esta creada</h2>\n";
    echo 'Error al crear la base de datos: ' . mysqli_error($resultado) . "\n";
}
