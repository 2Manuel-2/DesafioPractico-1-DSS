<?php
extract($_POST);
$codigo=$_GET['cod'];
$productos=simplexml_load_file("../productos.xml");
$permitidos = array("image/jpg","image/jpeg","image/gif","image/png");
$limite_kb = 700;

$filename = $_FILES['image']['name'];
$explode = explode('.',$filename);
$extension_foto = array_pop($explode);

$nuevoNombreFoto= $codigo.'.'.$extension_foto;

if(in_array($_FILES['image']['type'], $permitidos) && $_FILES['image']['size'] <= $limite_kb * 1024){
    $ruta = "../img/". $nuevoNombreFoto;
    move_uploaded_file($_FILES["image"]["tmp_name"], $ruta);

foreach ( $productos -> producto as $pro ) {
    if ( $pro -> codigo  ==  $codigo ) {
    $pro->nombre = $nombre;
    $pro->descripcion = $descripcion;
    $pro->img = $nuevoNombreFoto;
    $pro->categoria = $categoria;
    $pro->precio = $precio;
    $pro->existencias = $existencias;
        break;
    }
}}

file_put_contents ( '../productos.xml',$productos->asXML());
header('location:../Vista/VistaAdmin.php');


?>