<?php
$tabla = "provincias";
$query = "SELECT Cod_Provincia, Provincia FROM $tabla;";

$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>";
   echo $row["Cod_Provincia"];
    echo "</td>";
    echo "<td>";
    echo $row["Provincia"];
    echo "</td>";
    echo "</tr>";
}
mysqli_free_result($result);
