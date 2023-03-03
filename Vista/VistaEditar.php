<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de registro</title>
    </head>
<body>
<?php


$codigo=$_GET['cod'];

$productos=simplexml_load_file("../productos.xml");

foreach ( $productos -> producto as $pro ) {
    if ( $pro -> codigo  ==  $codigo ) {
    $pro->codigo;
    $pro->nombre;
    $pro->descripcion;
    $pro->img;
    $pro->categoria;
    $pro->precio;
    $pro->existencias;
        break;
    }
}
?>
  <?php
    require 'procesar.php';
  ?>
    <section>
                  <?php
                  if(count($errores)>0&&isset($_POST['enviar'])){
                    echo "<div class='alert alert-danger'><ul>";
                    foreach($errores as $error){
                      echo "<li>$error</li>";
                    }
                    echo "</ul></div>";

                  }
                  
                  ?>
                  
                  <!--form que voy a usar-->
                <div>
                <form method="POST" action="../Controlador/editar.php?cod=<?=$pro->codigo?>">

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="codigo" >Codigo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="codigo" id="codigo" value="<?=$codigo?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="nombre">Nombre:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nombre" id="nombre" value="<?=$pro-> nombre;?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="descripcion">Descripción:</label>
					</div>
					<div class="col-sm-10">
          <textarea name="descripcion" id="descripcion" cols="30" rows="10" ><?=$pro-> descripcion;?></textarea>
					</div>
				</div>

        <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="img">Imagen Actual:</label>
					</div>
					<div class="col-sm-10">
          <img src="../img/<?=$pro-> img?>" width="250px" alt="">
          <input  type="hidden" class="form-control" name="img" id="img" value="<?=$pro-> img;?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="categoria">Categoria:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="categoria" id="categoria" value="<?=$pro-> categoria;?>">
					</div>
				</div>

        <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="precio">Precio:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="precio" id="precio" value="<?=$pro-> precio;?>">
					</div>
				</div>

        <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="existencias">existencias:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="existencias" id="existencias" value="<?=$pro-> existencias;?>">
					</div>
				</div>
            
       
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Agregar</a>
            </div>
			</form>
                </div>
                <!--aqui termina el form que uso-->
              
    </section>
</body>
</html>