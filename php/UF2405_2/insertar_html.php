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
        $tabla = "animales";

        function Conectarse() {
            global $host, $puerto, $usuario, $contrasena, $bbdd;
            if (!($link = mysqli_connect($host . ":" . $puerto, $usuario, $contrasena, $bbdd))) {
                echo "Error conectando al servidor.<br>";
                exit();
            } else {
                echo "Conectado al Servidor.<br>";
            }
            return $link;
        }

        $link = Conectarse();
        $sql = "INSERT INTO $tabla (`IdAnimal`, `Nombre_Animal`, `Sexo`) VALUES (NULL, '" . $_POST['nombre_animal'] . "', '" . $_POST['sexo'] . "'); ";
        $resultado = mysqli_query($link, $sql);
        If ($resultado) {
            echo "Los registros se han insertado correctamente\n";
        } else {
            echo "Hubo un problema o la base de datos ya esta creada\n";
            echo 'Error al crear la base de datos: ' . mysqli_error($resultado) . "\n";
        }
        
        ?>
        <h2>Listado de Animales Existentes</h2>
        <table>
            <tr>
                <td><h3><strong>Nombre_Animal</h3></strong></td>
                <td><h3><strong>Sexo</h3></strong></td>
            <tr>

                <?php
                $query = "SELECT Nombre_Animal, Sexo FROM $tabla;";

                $result = mysqli_query($link, $query);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>";
                    echo $row["Nombre_Animal"];
                    echo "</td>";
                    echo "<td>";
                    echo $row["Sexo"];
                    echo "</td>";
                    echo "</tr>";
                    echo '</br>';
                }
                mysqli_free_result($result);
                mysqli_close($link);
                ?>
        </table>
        <hr> 
        <form method="POST">
            <table border="1">
                <thead>
                    <tr>
                        <th>Registros</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nombre_Animal</td>
                        <td><input type="text" name="nombre_animal" value="dog"></td>
                    </tr>
                    <tr>
                        <td>Sexo</td>
                        <td><input type="text" name="sexo" value="H"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Guardar Registro"></td>
                    </tr>
                </tbody>
            </table>

        </form>
    </body>
</html>
