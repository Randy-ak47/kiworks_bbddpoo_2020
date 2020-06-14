<?php
$tabla = "camion_chofer";
$query = "SELECT NIF_Chofer, Matricula, Fecha FROM $tabla;";

$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>";
   echo $row["NIF_Chofer"];
    echo "</td>";
    echo "<td>";
    echo $row["Matricula"];
    echo "</td>";
    echo "<td>";
    echo $row["Fecha"];
    echo "</td>";
    echo "</tr>";
}
mysqli_free_result($result);
