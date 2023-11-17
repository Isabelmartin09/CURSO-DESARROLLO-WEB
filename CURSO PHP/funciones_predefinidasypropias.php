<?php

$palabra="ISA";

echo (strtoupper($palabra));



?>

<?php

/*function suma ($num1, $num2){

    $resultado=$num1+$num2;

    return $resultado;

}

echo (suma(5,7)); */


?>

<?php
 
   function frase_mayus($frase,$conversion=true){

    $frase=strtolower($frase);

    if ($conversion==true){

        $resultado=ucwords($frase);

    
    }else{

        $resultado=strtoupper($frase);

    
    } 

    return $resultado;


   }
   
   echo(frase_mayus("esto es una prueba"));


?>

<?php
   
   function cambia_mayus($param){

    $param=strtolower($param);
    $param=ucwords($param);

    return $param;

    $cadena="hOlA mUnDo";

    echo cambia_mayus($cadena) . "<br>";

    echo $cadena;

   }

?>