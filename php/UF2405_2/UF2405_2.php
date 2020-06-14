<!DOCTYPE html>
<html lang="es">
 <head>
 <title>Conexión a Servidor de MySQL</title>
 </head>
 <body>
 <?php
 // Dirección o IP del servidor MySQL
 $host = "localhost";
 // Puerto del servidor MySQL
 $puerto = "3306";
 // Nombre de usuario del servidor MySQL
 $usuario = "root";
 // Contraseña del usuario
 $contrasena = "";

 function Conectarse(){
 global $host, $puerto, $usuario, $contrasena;
    if (!($link = mysqli_connect($host.":".$puerto, $usuario,$contrasena))){
    echo "Error conectando al servidor.<br>";
    exit();
    }else{
    echo "Conectado al Servidor.<br>";
    }
    return $link;
 }
 $link = Conectarse();
 mysqli_close($link);
 ?>
 </body>
 </html>