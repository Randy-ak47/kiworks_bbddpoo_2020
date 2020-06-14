<?php

$tabla = "camiones";
$matricula = $_POST['matricula'];
$modelo = $_POST['modelo'];
$tipo = $_POST['tipo'];
$potencia = $_POST['potencia'];

$sql = "INSERT INTO $tabla (`Matricula`, `Modelo`,`Tipo`,`Potencia`) VALUES ('" . $matricula . "','" . $modelo . "','" . $tipo . "','" . $potencia . "'); ";
$resultado = mysqli_query($link, $sql);
If ($resultado) {
    echo "<h4 class='badge badge-success'> Los registros" . $tabla . " se han insertado correctamente</h4>\n";
} else {
    echo "<h4 class='badge badge-danger'>Hubo un problema o " . $tabla . " ya esta creada</h4>\n";
    echo 'Error al insertar los datos: ' . mysqli_error($resultado) . "\n";
}
