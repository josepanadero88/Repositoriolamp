<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Boolean</title>
</head>
<body>
    
    <?php

    $x=TRUE;
    $y=FALSE;
    $z=($y OR $x);
    echo "El valor de la variable es '$z'";
    var_dump($z);

    
    ?>