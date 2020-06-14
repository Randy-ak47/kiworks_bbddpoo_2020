<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Paquetes</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row"> 
                <div class="col">
                      <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page"> <a href="index.php">Transportes</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Paquetes</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1 class="display-3">Listado de Transportes - Paquetes</h1>
                      <?php
                        include_once 'conectado_servidor.php';
                        $link = Conectarse();
                        include_once 'mi_basedatos.php';
                        include_once 'mi_tabla.php';
                        include_once 'insert_paquetes.php';
                        ?>
                </div>
            </div>
            <div class="row">
                <div class="col-8">    
                    <table class="table table-hover table-dark table-sm ">
                        <tr>
                            <td><h4><strong>Cod Paquete</h4></strong></td>
                            <td><h4><strong>Descripción</h4></strong></td>
                            <td><h4><strong>Destinatario</h4></strong></td>
                            <td><h4><strong>Dirección Destino</h4></strong></td>
                            <td><h4><strong>NIF Chofer</h4></strong></td>
                            <td><h4><strong>Cod Provincia</h4></strong></td>
                        </tr>  
                 </div>
                      <?php
                        include_once 'reg_paquetes.php';
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
                                                <td>Descripción</td>
                                                <td><input type="text" name="descripcion" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <td>Destinatario</td>
                                                <td><input type="text" name="destinatario" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <td>Dirección Destino</td>
                                                <td><input type="text" name="dirdestino" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <td>NIF Chofer</td>
                                                <td><input type="text" name="nifchofer" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <td>Cod Provincia</td>
                                                <td><input type="text" name="codprovincia" class="form-control"></td>
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
