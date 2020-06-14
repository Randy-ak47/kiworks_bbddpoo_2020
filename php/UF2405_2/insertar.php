<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Conexión a Servidor de MySQL</title>
    </head>
    <body>
        <h2>Listado de Animales Existentes</h2>
        <hr> 
        
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
        $sql = "INSERT INTO `animales` (`IdAnimal`, `Nombre_Animal`, `Sexo`) VALUES (NULL, 'Lobo', 'Macho'); ";
        $resultado = mysqli_query($link, $sql);
        If ($resultado) {
            echo "La tabla animales se creó correctamente\n";
        } else {
            echo "Hubo un problema o la base de datos ya esta creada\n";
            echo 'Error al crear la base de datos: ' . mysqli_error($resultado) . "\n";
        }
        mysqli_close($link);
        ?>
    </body>
</html>
