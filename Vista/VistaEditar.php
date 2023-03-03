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
    <div class="card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Formulario de registro</h3>
                  <?php
                  if(count($errores)>0&&isset($_POST['enviar'])){
                    echo "<div class='alert alert-danger'><ul>";
                    foreach($errores as $error){
                      echo "<li>$error</li>";
                    }
                    echo "</ul></div>";

                  }
                  
                  ?>
                  <form method="POST" action="<?= $_SERVER['PHP_SELF']?>">
                    <div class="row">
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <input type="text" id="nombres" name="nombres" 
                          class="form-control form-control-lg"
                          value="<?= (isset($nombres))?$nombres:''?>" />
                          <label class="form-label" for="nombres">Nombres</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <input type="text" id="apellidos" name="apellidos" 
                          class="form-control form-control-lg"
                          value="<?= (isset($apellidos))?$apellidos:''?>" />
                          <label class="form-label" for="apellidos">Apellidos</label>
                        </div>
      
                      </div>
                    </div>
      
                    
                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
      
                        <div class="form-outline">
                          <input type="text" id="correo" name="correo"  class="form-control form-control-lg" />
                          <label class="form-label" for="correo">Correo</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4 pb-2">
      
                        <div class="form-outline">
                          <input type="text" id="telefono" name="telefono" class="form-control form-control-lg" />
                          
                          <label class="form-label" for="telefono">Telefono</label>
                        </div>
      
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">
        
                          <div class="form-outline">
                            <input type="text" id="carnet" name="carnet"  class="form-control form-control-lg" />
                            <label class="form-label" for="carnet">Carnet</label>
                          </div>
        
                        </div>
                        
                      </div>
      
                      <input class="btn btn-primary btn-lg" type="submit" name="enviar" value="Enviar" />
                    
      
                  </form>
                </div>
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