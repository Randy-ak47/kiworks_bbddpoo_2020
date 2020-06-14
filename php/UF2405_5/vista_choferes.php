<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Choferes</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row"> 
                <div class="col">
                      <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page"> <a href="index.php">Transportes</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Choferes</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1 class="display-3">Listado de Transportes - Choferes</h1>
                      <?php
                        include_once 'conectado_servidor.php';
                        $link = Conectarse();
                        include_once 'mi_basedatos.php';
                        include_once 'mi_tabla.php';
                        include_once 'insert_choferes.php';
                        ?>
                </div>
            </div>
            <div class="row">
                <div class="col-8">    
                    <table class="table table-hover table-dark table-sm ">
                        <tr>
                            <td><h4><strong>NIF</h4></strong></td>
                            <td><h4><strong>Nombre</h4></strong></td>
                            <td><h4><strong>Apellidos</h4></strong></td>
                            <td><h4><strong>Dirección</h4></strong></td>
                            <td><h4><strong>Población</h4></strong></td>
                            <td><h4><strong>Teléfono</h4></strong></td>
                            <td><h4><strong>Salario</h4></strong></td>
                        </tr>  
                 </div>
                      <?php
                        include_once 'reg_choferes.php';
                        mysqli_close($link);
                        ?>
                </table>      
                            <div class="col clear">
                            <br>  
                            </div>
                </div>
                <div class="col-4"> 
                     <form method="POST">
                                    <table border="1" class="table table-hover table-dark">
                                        <thead>
                                            <tr>
                                                <td><h4><strong>Tabla</h4></strong></td>
                                                <td><h4><strong>Registros</h4></strong></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>NIF</td>
                                                <td><input type="text" name="nif" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <td>Nombre</td>
                                                <td><input type="text" name="nombre" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <td>Apellidos</td>
                                                <td><input type="text" name="apellidos" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <td>Dirección</td>
                                                <td><input type="text" name="direccion" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <td>Población</td>
                                                <td><input type="text" name="poblacion" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <td>Telefono</td>
                                                <td><input type="text" name="telefono" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <td>Salario</td>
                                                <td><input type="text" name="salario" class="form-control"></td>
                                            </tr>
                                            
                                            <tr>
                                                <td></td>
                                                <td class="text-right"><input type="submit" value="Guardar Registro" class="btn btn-primary btn-lg text-center"></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </form>
                 </div> 
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
