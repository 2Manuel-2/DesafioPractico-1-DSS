<?php
require 'validaciones.php';
$errores=array();
if(isset($_POST)){
    
   extract($_POST);
   
   if(!isset($nombres)||estaVacio($nombres)){
       array_push($errores,"Debes ingresar el nombre");
   }else if(!esTexto($nombres)){
    array_push($errores,"El nombre debe contener solo letras");
   }

   if(!isset($apellidos)||estaVacio($apellidos)){
    array_push($errores,"Debes ingresar los apellidos");
    }
    else if(!esTexto($apellidos)){
        array_push($errores,"El apellido debe contener solo letras");
       }

    if(!isset($correo)||estaVacio($correo)){
        array_push($errores,"Debes ingresar el correo");
    }
    else if(!esMail($correo)){
        array_push($errores,"Correo no valido");
       }

    if(!isset($telefono)||estaVacio($telefono)){
        array_push($errores,"Debes ingresar el telefono");
    }
    else if(!esTelefono($telefono)){
        array_push($errores,"Telefono no valido");
       }

    if(!isset($carnet)||estaVacio($carnet)){
        array_push($errores,"Debes ingresar el carnet");
    }
    else if(!esCarnet($carnet)){
        array_push($errores,"Carnet no valido");
       }
       

   
}
?>