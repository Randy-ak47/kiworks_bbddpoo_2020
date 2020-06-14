<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$tabla = "libros";
$titulo =  $_POST['titulo'];
$precio =  $_POST['precio'];
$autor =  $_POST['autor'];
$sql = "INSERT INTO $tabla (`Clave_Libro`, `Titulo`, `Precio`, `Clave_Autor`) VALUES (NULL, '" . $titulo . "', '" . $precio . "', '".$autor."'); ";
$resultado = mysqli_query($link, $sql);
If ($resultado) {
    echo "<h2> Los registros" . $tabla . " se han insertado correctamente</h2>\n";
} else {
    echo "<h2>Hubo un problema o " . $tabla . " ya esta creada</h2>\n";
    echo 'Error al crear la base de datos: ' . mysqli_error($resultado) . "\n";
}
