<body>
    <?php

    $persona=[

        "nombre"=>"Isa",

        "edad"=>29,

        "ciudad"=>"Madrid"


    ];

    ["nombre"=>$elNombre, "edad"=>$laEdad, "ciudad"=>$laCiudad]=$persona;

    echo "Nombre: $elNombre" . "<br>";

    echo "Edad: $laEdad" . "<br>";

    echo "Ciudad: $laCiudad" . "<br>";



?>
</body>