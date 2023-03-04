<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>TextilExport - Inicio</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
<hr>

<div class="banner"></div>
    <div class="container">
   
    
        
        <h2>Productos</h2><br><br><br>

        <?php
        $productos=simplexml_load_file("productos.xml");
        foreach($productos->producto as $pro){
            $estado = $pro->existencias;

            ?> 
            <div class="card">
            <p class="error"><?php if ($estado == 0){$estado = "Produco no disponible"; echo $estado;} ?></p>
            <img src="img/<?= $pro->img?>" class="cardFoto" alt="Foto">
            <div class="cardInfo">
            <p><?= $pro->nombre?></p>
            </div>
            <p class="precio">$<?= $pro->precio?></p>
            <div class="buttonView"><a class="aView" href="MasInfo.php?cod=<?= $pro->codigo?>">Ver</a></div>
            </div>
            <?php
            }
            ?> 
</div>

</body>
</html>