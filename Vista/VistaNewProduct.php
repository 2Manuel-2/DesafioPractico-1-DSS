<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de registro</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/styleInfo.css">
  </head>
<body>
  <?php
  //$cont=0;
    require '../Controlador/procesar2.php';
  ?>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Formulario de registro</h3>
                  <?php
                  if(count($errores)>0&&isset($_POST['enviar'])){
                    echo "<div class='alert alert-danger'><ul>";
                    foreach($errores as $error){
                      echo "<li>$error</li>";
                    }
                    echo "</ul></div>";

                  }else if(isset($_POST["enviar"])){

                      require '../Controlador/agregar.php';
                    
                  }

                  ?>
                  <form method="POST" action="<?= $_SERVER['PHP_SELF']?>" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="row form-group">
                        <input type="text" class="form-control" name="codigo" id="codigo" placeholder="PROD12345" class="form-control form-control-lg" value="<?= (isset($codigo))?$codigo:''?>" />
                            <label class="form-label" for="codigo">Codigo:</label>
                        </div>
                      </div>

                      <div class="col-md-6 mb-4">
                        <div class="row form-group">
                        <input type="text" class="form-control" name="nombre" id="nombre" class="form-control form-control-lg" value="<?= (isset($nombre))?$nombre:''?>" />
                        <label class="form-label" for="nombre">Nombre:</label>
                        </div>
                      </div>
                    </div>

                      <div class="col-md-12 mb-4">
                        <div class="row form-group">
                        <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control form-control-lg"><?= (isset($descripcion))?$descripcion:''?></textarea>
                        <label class="control-label"class="form-label" for="uvs">Descripción:</label>
                        </div>
                      </div>

                      <div class="row">
                      <div class="col-md-6 mb-4">
                        <input  type="file" class="form-control" name="image" id="image">
		                    <label class="control-label" for="image">Imagen:</label>
                      </div>

                      <div class="col-md-6 mb-4">
                          <select name="categoria" id="categoria" >
                          <option value="Textiles">Textiles</option>
                          <option value="producto" selected>Producto</option>
                        </select>
                          
                          <label class="control-label" for="categoria">Categoria:</label>
                      </div>
                    </div>
                      



                    <div class="row">
                      <div class="col-md-6 mb-1">
                        <div class="row form-group">
                        <input type="text" class="form-control" name="precio" id="precio" class="form-control form-control-lg" value="<?= (isset($precio))?$precio:''?>" />
						            <labelclass="form-label" for="precio">Precio:</label>
                        </div>
                      </div>
                      
                      <div class="col-md-6 mb-4">
                        <div class="row form-group">
                        <input type="text" class="form-control" name="existencias" id="existencias" class="form-control form-control-lg" value="<?= (isset($existencias))?$existencias:''?>" />
						            <label class="form-label" for="existencias">existencias:</label>
                        </div>
                      </div>
                    </div>




                    
      
                      <input class="btn btn-primary" type="submit" name="enviar" value="Enviar" />
                      <button type="button" class="btn btn-primary"  id="primary" ><span class="glyphicon glyphicon-remove"></span> <a id="cancelar"  href="VistaAdmin.php">Cancelar</a></button>
                
      
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>