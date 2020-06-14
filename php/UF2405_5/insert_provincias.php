<?php
$tabla = "provincias";
$codprovincia = $_POST['codprovincia'];
$provincia = $_POST['provincia'];

$sql = "INSERT INTO $tabla (`Cod_Provincia`, `Provincia`) VALUES ('" . $codprovincia . "','" . $provincia . "'); ";
$resultado = mysqli_query($link, $sql);
If ($resultado) {
    echo "<h4 class='badge badge-success'> Los registros" . $tabla . " se han insertado correctamente</h4>\n";
} else {
    echo "<h4 class='badge badge-danger'>Hubo un problema o " . $tabla . " ya esta creada</h4>\n";
    echo 'Error al insertar los datos: ' . mysqli_error($resultado) . "\n";
}
