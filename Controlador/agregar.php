<?php
extract($_POST);
$productos = simplexml_load_file("../productos.xml");
$producto=$productos->addChild('../productos.xml');

$producto->addChild('codigo',$codigo);
$producto->addChild('nombre',$nombre);
$producto->addChild('descripcion',$descripcion);
$producto->addChild('img',$img);
$producto->addChild('categoria',$categoria);
$producto->addChild('precio',$precio);
$producto->addChild('existencias',$existencias);

file_put_contents("producto",$productos->asXML());
header('location:../Vista/VistaAdmin.php')


?>