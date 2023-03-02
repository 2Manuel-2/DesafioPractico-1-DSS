<?php
    $codigo=$_GET['cod'];
    $materias=simplexml_load_file("materias.xml");
    $index=0;
    foreach($materias->materia as $mat){
        if($mat->codigo==$codigo){
            $index=$i;
            break;
        }
        $i++;
    }

    unset($materias->materia[$index]);
    file_put_contents("materias.xml",$materias->asXML());
    header('location:index.php');


?>