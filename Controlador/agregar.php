<?php
extract($_POST);


$permitidos = array("image/jpg","image/jpeg","image/gif","image/png");
$limite_kb = 700;

$filename = $_FILES['image']['name'];
$explode = explode('.',$filename);
$extension_foto = array_pop($explode);

$nuevoNombreFoto= $codigo.'.'.$extension_foto;

if(in_array($_FILES['image']['type'], $permitidos) && $_FILES['image']['size'] <= $limite_kb * 1024){
    $ruta = "../img/". $nuevoNombreFoto;
    move_uploaded_file($_FILES["image"]["tmp_name"], $ruta);


    $productos = simplexml_load_file("../productos.xml");
$producto=$productos->addChild('producto');

$producto->addChild('codigo',$codigo);
$producto->addChild('nombre',$nombre);
$producto->addChild('descripcion',$descripcion);

$producto->addChild('img',$nuevoNombreFoto);
$producto->addChild('categoria',$categoria);
$producto->addChild('precio',$precio);
$producto->addChild('existencias',$existencias);

file_put_contents("../productos.xml",$productos->asXML());

header('location:../Vista/VistaAdmin.php');

}else{
    echo "FORMATO DE IMAGEN NO VALIDO";

    echo "<br>";}


?>