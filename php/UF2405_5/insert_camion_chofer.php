<?php

$tabla = "camion_chofer";
$nifchofer = $_POST['nifchofer'];
$matricula = $_POST['matricula'];
$fecha = $_POST['fecha'];

$sql = "INSERT INTO $tabla (`NIF_Chofer`, `Matricula`,`Fecha`) VALUES ('" . $nifchofer. "','" . $matricula . "','" . $fecha ."'); ";
$resultado = mysqli_query($link, $sql);
If ($resultado) {
    echo "<h4 class='badge badge-success'> Los registros" . $tabla . " se han insertado correctamente</h4>\n";
} else {
    echo "<h4 class='badge badge-danger'>Hubo un problema o " . $tabla . " ya esta creada</h4>\n";
    echo 'Error al insertar los datos: ' . mysqli_error($resultado) . "\n";
}
