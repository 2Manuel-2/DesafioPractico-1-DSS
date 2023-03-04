<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de registro</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
<body>
<?php


$codigo=$_GET['cod'];

$productos=simplexml_load_file("productos.xml");

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
 
	<section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Actualizació de datos</h3>

				  <form method="POST" action="../Controlador/editar.php?cod=<?=$pro->codigo?>" enctype="multipart/form-data">

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="form-label" for="codigo" >Codigo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="codigo" id="codigo" value="<?=$codigo?>" readonly>
					</div>
				</div>

				<br>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="form-label" for="nombre">Nombre:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nombre" id="nombre" value="<?=$pro-> nombre;?>">
					</div>
				</div>
				<br>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="form-label" for="descripcion">Descripción:</label>
					</div>
					<div class="col-sm-10">
          	<textarea name="descripcion" id="descripcion" cols="65	" rows="10" ><?=$pro-> descripcion;?></textarea>
					</div>
				</div>
				<br>

        <div class="row form-group">
					<div class="col-sm-2">
						<label class="form-label" for="img">Imagen Actual:</label>
					</div>
					<div class="col-sm-10">
          <img src="../img/<?=$pro-> img?>" width="250px" alt="">
          <input  type="hidden" class="form-control" name="img" id="img" value="<?=$pro-> img;?>">
		  
                      <div class="col-md-6 mb-4">
                        <input  type="file" class="form-control" name="image" id="image">
                      </div>
					</div>
				</div>
<br>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="form-label" for="categoria">Categoria:</label>
					</div>
					<div class="col-sm-10">
					<input type="text" class="form-control" name="categoria" id="categoria" value="<?=$pro-> categoria;?>" readonly>
					<select name="categoria" id="categoria" >
                          <option value="Textiles">Textiles</option>
                          <option value="producto" selected>Producto</option>
                        </select>
						
					</div>
				</div>
<br>
        <div class="row form-group">
					<div class="col-sm-2">
						<label class="form-label" for="precio">Precio:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" step="0.01"class="form-control" name="precio" id="precio" value="<?=$pro-> precio;?>">
					</div>
				</div>
<br>
        <div class="row form-group">
					<div class="col-sm-2">
						<label class="form-label" for="existencias">existencias:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="existencias" id="existencias" value="<?=$pro-> existencias;?>">
					</div>
				</div>
            <br>
       
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> <a href="VistaAdmin.php">Cancelar</a></button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Agregar</a>
            </div>
			</form>

                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

</body>
</html>