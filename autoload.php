<?php

//obtiene los nombre de nuestra clases de nuestro sistema
// sera la carga de las clases q obtines _todo  los archivo de nuestro  proyecto
spl_autoload_register(function ($class) {

   $archivo=__DIR__."/".$class.".php";
   $archivo=str_replace("\\", "/", $archivo);

   if (is_file($archivo)) {
       require_once $archivo;
   }

});