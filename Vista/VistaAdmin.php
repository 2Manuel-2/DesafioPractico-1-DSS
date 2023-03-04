<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Vista Admin</title>
    <link rel="stylesheet" type="text/css" href="../Controlador/assets/css/bootstrap.css">
</head>
<body>
<div class="container">
    <h1 class="page-header text-center">Vista Admin</h1>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <a href="VistaNewProduct.php" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Agregar Producto</a>
            <a href="../index.php" class="btn btn-primary" data-toggle="modal"> Volver</a>
            <table class="table table-bordered table-striped" style="margin-top:20px;">
                <thead>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Imagen</th>
                    <th>Categoria</th>
                    <th>Preción</th>
                    <th>existencias</th>
                    <th></th>
                </thead>
                <tbody>
                   
                   <tr>
                    <td><?= $pro->codigo?></td>
                    <td><?= $pro->nombre?></td>
                    <td><?= $pro->descripcion?></td>
                    <td><img src="../img/<?= $pro->img?>" alt="Foto" width="50px"></td>
                    <td><?= $pro->categoria?></td>
                    <td><?= $pro->precio?></td>
                    <td><?= $pro->existencias?></td>
                    <td>
                    <a href="VistaEditar.php?cod=<?= $pro->codigo?>" class="btn btn-default">Editar</a>
                        <a href="../Controlador/eliminar.php?cod=<?= $pro->codigo?>"  data-toggl="modal"  class="btn btn-danger">Borrar</a>
                    </td>
                   </tr>
                   <?php
                   }
                   ?>
                </tbody>
            </table>
         
        </div>
    </div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>