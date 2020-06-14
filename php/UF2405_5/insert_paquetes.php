<?php
$tabla = "paquetes";

$descripcion = $_POST['descripcion'];
$destinatario = $_POST['destinatario'];
$dirdestino = $_POST['dirdestino'];
$nifchofer = $_POST['nifchofer'];
$codprovincia = $_POST['codprovincia'];

$sql = "INSERT INTO $tabla (`Cod_Paquete`, `Descripcion`,`Destinatario`,`Direccion_Destino`,`NIF_Chofer`,`Cod_Provincia`) VALUES (NULL, '" . $descripcion . "','" . $destinatario . "','" . $dirdestino . "','" . $nifchofer . "','" . $codprovincia. "'); ";
$resultado = mysqli_query($link, $sql);
If ($resultado) {
    echo "<h4 class='badge badge-success'> Los registros" . $tabla . " se han insertado correctamente</h4>\n";
} else {
    echo "<h4 class='badge badge-danger'>Hubo un problema o " . $tabla . " ya esta creada</h4>\n";
    echo 'Error al insertar los datos: ' . mysqli_error($resultado) . "\n";
}
