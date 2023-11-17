<h1>Hola que tal esto es un repaso de php8 </h1>

    <?php
        #Esto va a imprimir;

        echo "<h1>Codigo PHP</h1>";
        print ("Hola");

        //Esto no se interpreta

        /*

        muchas
        lines
        de comentarios
        
        */

        echo "<!--COMENTARIO HTML-->";

        #Variables
        //$nombre= "Isabel Martin";
        $nombre = $_GET["nombre"];
        $texto = "Repaso de PHP con $nombre";
        $altura = 154;
         
        $textofinal = "<h1>".$texto.",su altura es:".$altura."cm</h1>";
        
        echo $textofinal;
        echo $textofinal;
        echo $textofinal;

        $textofinal .= " Te he troleado el ordenador";
        echo $textofinal;

        #GET

        echo "<hr>";
        echo $_GET["nombre"];

        #Condiciones

        if($altura >= 180){
          echo '<h3 style="background:green;color:white;">Eres unas persona alta</h3>";
        }
        ?>
</HTML>