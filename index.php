<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Calculadora de CUM</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
</head>
<body>
<div class="container">
    <h1 class="page-header text-center">Calculadora de CUM</h1>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Agregar materia</a>
            
            <table class="table table-bordered table-striped" style="margin-top:20px;">
                <thead>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Imagen</th>
                    <th>Categoria</th>
                    <th>Preción</th>
                    <th>existencias</th>
                </thead>
                <tbody>
                   <?php
                    $productos=simplexml_load_file("productos.xml");
                   
                    foreach($productos->producto as $pro){
                      
                   ?> 
                   <tr>
                    <td><?= $pro->codigo?></td>
                    <td><?= $pro->nombre?></td>
                    <td><?= $pro->descripcion?></td>
                    <td><?= $pro->img?></td>
                    <td><?= $pro->categoria?></td>
                    <td><?= $pro->precio?></td>
                    <td><?= $pro->existencias?></td>
                    
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