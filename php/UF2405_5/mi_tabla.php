<?php

$nombretabla_1 = "Camiones";
$tabla = "CREATE TABLE `" . $nombretabla_1 . "` (
  `Matricula` varchar(7) COLLATE utf8_spanish_ci NOT NULL,
  `Modelo` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Tipo` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Potencia` varchar(3) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`Matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;";
$resultado = mysqli_query($link, $tabla);
If (!$resultado) {
    echo "<h2 class='badge badge-success'> La tabla " . $nombretabla_1 . " se creó correctamente\n</h2>";
} else {
    echo "<h2 class='badge badge-danger'> Hubo un problema o la tabla " . $nombretabla_1 . " ya esta creada\n</h2>";
    echo 'Error al crear la base de datos: ' . mysqli_error($resultado) . "\n";
}

$nombretabla_2 = "Choferes";
$tabla = "CREATE TABLE `" . $nombretabla_2 . "` (
  `NIF_Chofer` int(9) NOT NULL,
  `Nombre`  varchar(20) DEFAULT NULL,
  `Apellidos`  varchar(40) DEFAULT NULL,
  `Direccion`  varchar(30) DEFAULT NULL,
  `Poblacion`  varchar(15) DEFAULT NULL,
  `Telefono`  varchar(9) DEFAULT NULL,
  `Salario` decimal(20,2) DEFAULT NULL,
  PRIMARY KEY (`NIF_Chofer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci; ";
$resultado = mysqli_query($link, $tabla);
If (!$resultado) {
    echo "<h2 class='badge badge-success'> La tabla " . $nombretabla_2 . " se creó correctamente\n</h2>";
} else {
    echo "<h2vclass='badge badge-danger'> Hubo un problema o la tabla " . $nombretabla_2 . " ya esta creada\n</h2>";
    echo 'Error al crear la base de datos: ' . mysqli_error($resultado) . "\n";
}

$nombretabla_4 = "Provincias";
$tabla = "CREATE TABLE `" . $nombretabla_4 . "` (
  `Cod_Provincia` int(11) NOT NULL AUTO_INCREMENT,
  `Provincia` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`Cod_Provincia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;";
$resultado = mysqli_query($link, $tabla);
If (!$resultado) {
    echo "<h2 class='badge badge-success'> La tabla " . $nombretabla_4 . " se creó correctamente\n</h2>";
} else {
    echo "<h2 class='badge badge-danger'> Hubo un problema o la tabla " . $nombretabla_4 . " ya esta creada\n</h2>";
    echo 'Error al crear la base de datos: ' . mysqli_error($resultado) . "\n";
}

$nombretabla_3 = "Paquetes";
$tabla = "CREATE TABLE `" . $nombretabla_3 . "` (
  `Cod_Paquete` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `Destinatario` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Direccion_Destino` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `NIF_Chofer` varchar(9) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Cod_Provincia` int(11) DEFAULT NULL,
  PRIMARY KEY (`Cod_Paquete`),
  FOREIGN KEY (`Cod_Provincia`) REFERENCES Provincias (`Cod_Provincia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;";
$resultado = mysqli_query($link, $tabla);
If (!$resultado) {
    echo "<h2 class='badge badge-success'> La tabla " . $nombretabla_3 . " se creó correctamente\n</h2>";
} else {
    echo "<h2 class='badge badge-danger'> Hubo un problema o la tabla " . $nombretabla_3 . " ya esta creada\n</h2>";
    echo 'Error al crear la base de datos: ' . mysqli_error($resultado) . "\n";
}

$nombretabla_5 = "Camion_Chofer";
$tabla = "CREATE TABLE `" . $nombretabla_5 . "` ( 
        `NIF_Chofer` int(9) NULL,
        `Matricula` VARCHAR(7) NULL, 
        `Fecha` DATE NULL,
         FOREIGN KEY (`NIF_Chofer`) REFERENCES Choferes (`NIF_Chofer`),
         FOREIGN KEY (`Matricula`) REFERENCES Camiones (`Matricula`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;";
$resultado = mysqli_query($link, $tabla);
If (!$resultado) {
    echo "<h2 class='badge badge-success'> La tabla " . $nombretabla_5 . " se creó correctamente\n</h2>";
} else {
    echo "<h2 class='badge badge-danger'> Hubo un problema o la tabla " . $nombretabla_5 . " ya esta creada\n</h2>";
    echo 'Error al crear la base de datos: ' . mysqli_error($resultado) . "\n";
}


