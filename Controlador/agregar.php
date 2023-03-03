<?php
extract($_POST);
$productos = simplexml_load_file("../productos.xml");
$producto=$productos->addChild('producto');

$producto->addChild('codigo',$codigo);
$producto->addChild('nombre',$nombre);
$producto->addChild('descripcion',$descripcion);
$producto->addChild('img',$img);
$producto->addChild('categoria',$categoria);
$producto->addChild('precio',$precio);
$producto->addChild('existencias',$existencias);

file_put_contents("../productos.xml",$productos->asXML());
header('location:../Vista/VistaAdmin.php');

?>