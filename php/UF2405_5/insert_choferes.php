<?php

$tabla = "choferes";
$nif = $_POST['nif'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$direccion = $_POST['direccion'];
$poblacion = $_POST['poblacion'];
$telefono = $_POST['telefono'];
$salario = $_POST['salario'];

$sql = "INSERT INTO $tabla (`NIF_Chofer`, `Nombre`, `Apellidos`, `Direccion`, `Poblacion`, `Telefono`, `Salario`) VALUES ('" . $nif . "' ,'" . $nombre . "', '" . $apellidos . "', '" . $direccion . "', '" . $poblacion . "', '" . $telefono . "', '" . $salario . "');";
$resultado = mysqli_query($link, $sql);
If ($resultado) {
    echo "<h4 class='badge badge-success'> Los registros" . $tabla . " se han insertado correctamente</h4>\n";
} else {
    echo "<h4 class='badge badge-danger'>Hubo un problema o " . $tabla . " ya esta creada</h4>\n";
    echo 'Error al insertar los datos: ' . mysqli_error($resultado) . "\n";
}
