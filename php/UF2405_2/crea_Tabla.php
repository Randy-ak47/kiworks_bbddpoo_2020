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
        //Base de datos
        $bbdd = "zoo";

        function Conectarse() {
            global $host, $puerto, $usuario, $contrasena,$bbdd;
            if (!($link = mysqli_connect($host . ":" . $puerto, $usuario, $contrasena,$bbdd))) {
                echo "Error conectando al servidor.<br>";
                exit();
            } else {
                echo "Conectado al Servidor.<br>";
            }
            return $link;
        }
        $link = Conectarse();
        $sql = "CREATE TABLE `animales` ( `IdAnimal` INT NOT NULL AUTO_INCREMENT , `Nombre_Animal` VARCHAR(60) NOT NULL , `Sexo` VARCHAR(60) NOT NULL , PRIMARY KEY (`IdAnimal`)) ENGINE = InnoDB; ";
         
        $resultado = mysqli_query($link, $sql);
        If ($resultado) {
            echo "La tabla animales se creó correctamente\n";
        } else {
            echo "Hubo un problema o la base de datos ya esta creada\n";
            //echo 'Error al crear la base de datos: ' . mysqli_error($resultado) . "\n";
        }
        mysqli_close($link);
        ?>
    </body>
</html>
