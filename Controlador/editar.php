<?php
extract($_POST);
$codigo=$_GET['cod'];
$productos=simplexml_load_file("../productos.xml");

foreach ( $productos -> producto as $pro ) {
    if ( $pro -> codigo  ==  $codigo ) {
    $pro->nombre = $nombre;
    $pro->descripcion = $descripcion;
    $pro->img = $img;
    $pro->categoria = $categoria;
    $pro->precio = $precio;
    $pro->existencias = $existencias;
        break;
    }
}

file_put_contents ( '../productos.xml',$productos->asXML());
header('location:../Vista/VistaAdmin.php');


?>