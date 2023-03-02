<?php
extract($_POST);
$materias = simplexml_load_file("materias.xml");
$materia=$materias->addChild('materia');

$materia->addChild('codigo',$codigo);
$materia->addChild('nombre',$nombre);
$materia->addChild('uvs',$uvs);
$materia->addChild('nota',$nota);

file_put_contents("materias.xml",$materias->asXML());
header('location:index.php')


?>