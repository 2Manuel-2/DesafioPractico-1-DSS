<?php
require 'validaciones2.php';
$errores=array();
if(isset($_POST)){
    
   extract($_POST);
   
   if(!isset($nombre)||estaVacio($nombre)){
       array_push($errores,"Debes ingresar el nombre");
   }else if(!esTexto($nombre)){
    array_push($errores,"El nombre debe contener solo letras");
   }


   if(!isset($descripcion)||estaVacio($descripcion)){
    array_push($errores,"Debes ingresar una descripcion");
}

  
//Esta es para existencias******************** */
    if(!isset($existencias)||estaVacio($existencias)){
        array_push($errores,"Debes ingresar las Existencias");
    }
    else if(!esExistencias($existencias)){
        array_push($errores,"Existencias no valido");
       }

        //esta es para el precio ***********************************
    if(!isset($precio)||estaVacio($precio)){
        array_push($errores,"Debes ingresar el precio");
    }
    else if(!esPrecio($precio)){
        
        array_push($errores,"Precio no valido");
    }

       //esta es para el codigo ***********************************
    if(!isset($codigo)||estaVacio($codigo)){
        array_push($errores,"Debes ingresar el codigo");
    }
    else if(!esCodigo($codigo)){
        
        array_push($errores,"codigo no valido");
    }
      
       

   
}
?>