<!-- 4.       Problema de Bucle Anidado:
Escribe un programa que utilice bucles anidados para imprimir un patrón de asteriscos en forma de pirámide. -->

<?php
$filas = 5;
for ($i = 1; $i < $filas; $i++){
 
    for($j = ($filas-$i); $j > 0; $j--){
        echo " ";
    }
    for($k = 0; $k < (2*$i)-1; $k++){
        echo "*";
    }

    echo"\n";
}