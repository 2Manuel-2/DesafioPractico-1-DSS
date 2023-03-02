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
                    <th>Uv</th>
                    <th>Notas</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                   <?php
                    $materias=simplexml_load_file("materias.xml");
                    $num=0; 
                    $den=0;
                    foreach($materias->materia as $mat){
                       $num+=$mat->nota*$mat->uvs;
                       $den+=$mat->uvs; 
                   ?> 
                   <tr>
                    <td><?= $mat->codigo?></td>
                    <td><?= $mat->nombre?></td>
                    <td><?= $mat->uvs?></td>
                    <td><?= $mat->nota?></td>
                    <td>
                        <a href="" class="btn btn-default">Editar</a>
                        <a href="eliminar.php?cod=<?$mat->codigo?>"  data-toggl="modal"  class="btn btn-danger">Borrar</a>
                    </td>
                   </tr>
                   <?php
                   include('borrar_modal.php');
                   }
                   $cum=round(($num/$den),1);
                   ?>
                </tbody>
            </table>
            <h2>CUM: <?=$cum?></h2>
         
        </div>
    </div>
</div>
<?php include('nueva_modal.php'); ?>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>