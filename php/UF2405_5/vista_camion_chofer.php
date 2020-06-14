<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Camión-Chofer</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row"> 
                <div class="col">
                      <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page"> <a href="index.php">Transportes</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Camión Chofer</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1 class="display-3">Listado de Transportes - Camión Chofer</h1>
                      <?php
                        include_once 'conectado_servidor.php';
                        $link = Conectarse();
                        include_once 'mi_basedatos.php';
                        include_once 'mi_tabla.php';
                        include_once 'insert_camion_chofer.php';
                        ?>
                </div>
            </div>
            <div class="row">
                <div class="col">    
                    <table class="table table-hover table-dark">
                        <tr>
                            <td><h3><strong>NIF_Chofer</h3></strong></td>
                            <td><h3><strong>Matricula</h3></strong></td>
                            <td><h3><strong>Fecha</h3></strong></td>
                        </tr>  
                 </div>
                      <?php
                        include_once 'reg_camion_chofer.php';
                        mysqli_close($link);
                        ?>
                </table>      
                            <div class="col clear">
                                <br> 
                            </div>
                </div>
                <div class="col"> 
                     <form method="POST">
                                    <table border="1" class="table table-hover table-dark">
                                        <thead>
                                            <tr>
                                                <td><h3><strong>Tabla</h3></strong></td>
                                                <td><h3><strong>Registros</h3></strong></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>NIF_Chofer</td>
                                                <td><input type="text" name="nifchofer" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <td>Matricula</td>
                                                <td><input type="text" name="matricula" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <td>Fecha</td>
                                                <td><input type="text" name="fecha" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="text-right"><input type="submit" value="Guardar Registro" class="btn btn-success btn-lg text-center"></td>
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
