<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Agregar Nuevo Producto</title>
</head>
<body>
<div class="container-fluid">
<form method="POST" action="../Controlador/agregar.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="codigo">Codigo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="codigo" id="codigo">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="nombre">Nombre:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nombre" id="nombre">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="uvs">Descripción:</label>
					</div>
					<div class="col-sm-10">
					<textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="img">Imagen:</label>
					</div>
					<div class="col-sm-10">
          <input  type="file" class="form-control" name="img" id="img">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="categoria">Categoria:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="categoria" id="categoria" >
					</div>
				</div>

        <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="precio">Precio:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="precio" id="precio">
					</div>
				</div>

        <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="existencias">existencias:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="existencias" id="existencias">
					</div>
				</div>
			
            <div class="modal-footer">
                
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Agregar</a></div>
			</form>			
</div>
</body>
</html>