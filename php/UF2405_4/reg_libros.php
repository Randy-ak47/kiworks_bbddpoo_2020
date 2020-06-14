<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$tabla = "libros";
$query = "SELECT Titulo, Precio, Clave_Autor FROM $tabla;";

$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>";
    echo $row["Titulo"];
    echo "</td>";
    echo "<td>";
    echo $row["Precio"];
    echo "</td>";
    echo "<td>";
    echo $row["Clave_Autor"];
    echo "</td>";
    echo "</tr>";
}
mysqli_free_result($result);
