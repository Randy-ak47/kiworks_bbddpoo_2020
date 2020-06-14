<?php
$tabla = "camiones";
$query = "SELECT Matricula, Modelo, Tipo, Potencia FROM $tabla;";

$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>";
   echo $row["Matricula"];
    echo "</td>";
    echo "<td>";
    echo $row["Modelo"];
    echo "</td>";
    echo "<td>";
    echo $row["Tipo"];
    echo "</td>";
    echo "<td>";
    echo $row["Potencia"];
    echo "</td>";
    echo "</tr>";
}
mysqli_free_result($result);
