<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ver producto TE</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styleInfo.css">
    </head>
<body>
<div class="box-area">
    <header>
        <div class="wrapper">
        <div class="logo">
            <a class="title" href="#">TextilExport</a>
            <a class="admin" href="Vista/VistaAdmin.php">Administrador</a>
        </div>
      
           
        
       
        </div>
    </header>
</div>
<hr><br>
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
	$estado = $pro->existencias;
        break;
    };
	
};


?>
  <div class="container">
	<section class="vh-100 gradient-custom">
        <div class="container py-5 h-200">
          <div class="row justify-content-center align-items-center h-200">
            <div class="col-12 col-lg-9 col-xl-11">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                  <h2 class="mb-4 pb-2 pb-md-0 mb-md-5">Informacion del Producto</h2>
				  <form method="POST" action="../Controlador/editar.php?cod=<?=$pro->codigo?>" enctype="multipart/form-data">
				  <div class="proFoto">
				  <img src="img/<?= $pro->img?>" class="cardFoto" alt="Foto">
				  </div>
				  <div class="proInfo">
				  <p class="title"><?= $pro->nombre?></p>
				  <p class="categoria"><?= $pro->categoria?></p>
				  <p><?= $pro->descripcion?></p>
				  <p>Cantidades restantes: <?php if ($estado == 0){$estado = "Produco no disponible";} echo $estado?></p>
				  <p>$<?= $pro->precio?></p>
				  <div class="buttonView"><a class="aView" href="index.php">Volver</a></div>
				  </div>
				</form>

                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><br><br><br>
</div>

</body>
</html>