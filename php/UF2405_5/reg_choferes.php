<?php
$tabla = "choferes";
$query = "SELECT NIF_Chofer, Nombre, Apellidos, Direccion, Poblacion, Telefono, Salario FROM $tabla;";

$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>";
   echo $row["NIF_Chofer"];
    echo "</td>";
    echo "<td>";
    echo $row["Nombre"];
    echo "</td>";
    echo "<td>";
    echo $row["Apellidos"];
    echo "</td>";
    echo "<td>";
    echo $row["Direccion"];
    echo "</td>";
    echo "<td>";
    echo $row["Poblacion"];
    echo "</td>";
    echo "<td>";
    echo $row["Telefono"];
    echo "</td>";
    echo "<td>";
    echo $row["Salario"];
    echo "</td>";
    echo "</tr>";
}
mysqli_free_result($result);
