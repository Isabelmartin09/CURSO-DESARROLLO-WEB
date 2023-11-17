<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
   
    echo "Este es el primer mensaje <br>" ;

    function dameDatos() {

        echo "Este es el mensaje del interior de la funcion <br>";


    }

   

    echo "Este es el segundo mensaje <br>" ;
     
    dameDatos() ;
?>

    


</body>
<?php

    $nombre= "Isa";
    
    echo "Hola $nombre";

?>   

</html>

</body>
<?php
   $variable1="Casa";
   $variable2="Casa";

   $resultado=strcmp ($variable1, $variable2); //Devuelve 1 si no son iguales. 0 si no son iguales//

   if ($resultado) {

    echo "No coinciden";
    }else {
        echo"Coinciden";
    }
?>

</body>

<body>
<?php
  
    $variable1=8;

    $variable2="8";

    $varbiable3="Isa";

    if ($variable1==$variable2) {

        echo "Es lo mismo" ;

    }else {

        echo "No es lo mismo" ;
    }




?>
</body>

<body>
    <?php

        define ("AUTOR", "Isa");

        echo AUTOR;


?>
</body>