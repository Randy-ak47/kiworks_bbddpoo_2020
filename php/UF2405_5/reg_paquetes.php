<?php
$tabla = "paquetes";
$query = "SELECT Cod_Paquete, Descripcion, Destinatario, Direccion_Destino, NIF_Chofer, Cod_Provincia FROM $tabla;";

$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>";
   echo $row["Cod_Paquete"];
    echo "</td>";
    echo "<td>";
    echo $row["Descripcion"];
    echo "</td>";
    echo "<td>";
    echo $row["Destinatario"];
    echo "</td>";
    echo "<td>";
    echo $row["Direccion_Destino"];
    echo "</td>";
    echo "<td>";
    echo $row["NIF_Chofer"];
    echo "</td>";
    echo "<td>";
    echo $row["Cod_Provincia"];
    echo "</td>";
    echo "</tr>";
}
mysqli_free_result($result);
