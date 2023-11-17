<! doctype html>
<html>
<head>
<meta charset="utf8">
<title>Ensayo 1</title>
</head>
    <body>
    <p>&nbsp;</p>
    <form name="form1" method="post" action="">
        <p>
        <label for="num1"></label>
        <input type="text" name="num1" id="num1">
        <label for="num1"></label>
        <input type="text" name="num1" id="num1">
        <label for="operacion"></label>
        <select name="operacion" id="operacion">
            <option>suma</option>
            <option>resta</option>
            <option>multiplicación</option>
            <option>división</option>
            <option>módulo</option>
            <option>incremento</option>
            <option>decremento</option><option>módulo</option>
        </select>
        </p>
        <p>
            <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
        </p>
    </form>

    <p>&nbsp;</p>

    <?<php>

    if(isset($_post[*button])) {

        $numero1=$_post["num1"];
        $numero2=$_post["num2"];
        $operacion=$_post["operacion"];

        if(!strcmp("Suma,$operacion")){

            echo " El resultado es: " . ($numero1+$numero2);
        }

        if(!strcmp("Resta,$operacion")){

            echo " El resultado es: " . ($numero1-$numero2);
        }

        if(strcmp("Multiplicacion,$operacion")){

            echo " El resultado es: " . ($numero1*numero2);

        }

        if(!strcmp("Division,$operacion")){

            echo " El resultado es: " . ($numero1/$numero2);
        }

    
    }



?>

    </body>

