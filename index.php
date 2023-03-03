<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Calculadora de CUM</title>
    <link rel="stylesheet" type="text/css" href="css/Style.css">
</head>
<body>
    
    <div class="container">

    <div class="title">
            <h1>TextilExport</h1>
        </div>
        <hr>

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
            <div class="buttonView"><a href="">Ver</a></div>
            </div>
            
            <?php
            }
            ?>
               
  
            
            
                
                   
       
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>