<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$tabla = "autores";
$query = "SELECT Nombre_Apellidos FROM $tabla;";

$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
      echo "<td>";
   
    echo "</td>";
    echo "<td>";
    echo $row["Nombre_Apellidos"];
    echo "</td>";
    echo "</tr>";
}
mysqli_free_result($result);
