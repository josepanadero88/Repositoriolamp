<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios precisión</title>
</head>
<body>
    
    <?php

  /*  $a = 1.23456789
    $b = 1.23456780;
    $epsilon = 0.0000000001

     if(abs($a-$b) > $epsilon){
            echo "true";     
        }
        else{
            echo "false";
        }
*/
    $edad = 18;

    if ($edad >= 18) {
        echo "Eres mayor de edad.";
    } else {
        echo "Eres menor de edad.";
    }
    ?>

</body>
</html>