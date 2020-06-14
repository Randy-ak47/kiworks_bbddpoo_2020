<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Autores</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page"> <a href="index.php">Biblioteca</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Autores</li>
                        </ol>
                    </nav>
                    <h1 class="display-3">Listado de Biblioteca - Autores</h1>
                    <table class="table">
                        <tr>
                            <td><h3><strong>Tabla Autores</h3></strong></td>
                            <td><h3><strong>Nombre Apellidos</h3></strong></td>
                            
                        </tr>
                         
                 </div>
                        <?php
                        include_once 'conectado_servidor.php';
                        $link = Conectarse();
                        include_once 'mi_basedatos.php';
                        include_once 'mi_tabla.php';
                        include_once 'registros.php';
                        include_once 'reg_autores.php';
                        mysqli_close($link);
                        ?>
                </table>      
                            <div class="col clear">
                                <br> 
                                <form method="POST">
                                    <table border="1" class="table  table-dark">
                                        <thead>
                                            <tr>
                                                <th scope="col">Tabla</th>
                                                <th scope="col">De Registros</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Nombre Apellidos</td>
                                                <td><input type="text" name="nombre_apellidos" class="form-control"></td>
                                            </tr>
                                            
                                            <tr>
                                                <td></td>
                                                <td><input type="submit" value="Guardar Registro" class="btn btn-success btn-lg"></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </form>
                            </div>
                </div>
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
