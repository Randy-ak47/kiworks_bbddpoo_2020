<?php

$nombretabla_1="Autores";
$tabla = "CREATE TABLE `".$nombretabla_1."` ( `Clave_Autor` INT NOT NULL AUTO_INCREMENT , `Nombre_Apellidos` VARCHAR(60) NOT NULL ,PRIMARY KEY (`Clave_Autor`)) ENGINE = InnoDB; ";

$resultado = mysqli_query($link, $tabla);
If ($resultado) {
    echo "<h2> La tabla ".$nombretabla_1." se creó correctamente\n</h2>";
} else {
    echo "<h2> Hubo un problema o la tabla ".$nombretabla_1." ya esta creada\n</h2>";
   // echo 'Error al crear la base de datos: ' . mysqli_error($resultado) . "\n";
}

$nombretabla_2="Libros";
$tabla = "CREATE TABLE `".$nombretabla_2."` ( `Clave_Libro` INT NOT NULL AUTO_INCREMENT , `Titulo` VARCHAR(80) NOT NULL, `Precio` INT NOT NULL , `Clave_Autor` INT NOT NULL, PRIMARY KEY (`Clave_Libro`) , FOREIGN KEY (`Clave_Autor`) REFERENCES Autores (`Clave_Autor`)) ENGINE = InnoDB; ";

$resultado = mysqli_query($link, $tabla);
If ($resultado) {
    echo "<h2> La tabla ".$nombretabla_2." se creó correctamente\n</h2>";
} else {
    echo "<h2> Hubo un problema o la tabla ".$nombretabla_2." ya esta creada\n</h2>";
    //echo 'Error al crear la base de datos: ' . mysqli_error($resultado) . "\n";
}