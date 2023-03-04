<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Calculadora de CUM</title>
    <link rel="stylesheet" type="text/css" href="css/Style.css">
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


    <div class="container">
   
    
        <div class="banner"></div>
        <h2>Productos</h2><br><br><br>

        <?php
        $productos=simplexml_load_file("productos.xml");
        foreach($productos->producto as $pro){
            ?> 
            <div class="card">
                
            <!--<p>Descripción: <?//=$pro->descripcion?></p>-->
                <img src="img/<?= $pro->img?>" class="cardFoto" alt="Foto">
            <!--<p>Categoria: <?//=$pro->categoria?></p>-->
            <div class="cardInfo">
                    <p><?= $pro->nombre?></p>
            <!--<p><?//= $pro->codigo?></p>-->
                </div>
                <p>$<?= $pro->precio?></p>
            <!--<p>Existencias: <?//=$pro->existencias?></p>-->
            <div class="buttonView"><a class="aView" href="">Ver</a></div>
            </div>
            
            <?php
            }
            ?>
               
  
            
            
                
                   
       
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>