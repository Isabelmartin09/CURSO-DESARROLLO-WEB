<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
 
   class Coche{

       var $ruedas;

       var $color;

       var $motor;

       function Coche(){  //Metodo constructor

           $this->ruedas=4;

           $this->color="";

           $this->motor=1600;


       }

       function arrancar(){

        echo "Estoy arrancando";


       }
       
       function girar(){

        echo "Estoy girando";


       }

       function frenar(){

        echo "Estoy frenando";


       }

   }

   $renault=new Coche(); //Estado inicial al objeto o instancia

   $mazda=new Coche();

   $seat=new Coche();


   $mazda->girar();
   



?>
</body>
</html>