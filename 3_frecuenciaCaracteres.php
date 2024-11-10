<!-- 3.       Problema de Frecuencia de Caracteres:
Implementa una función que tome una cadena de texto y devuelva un array asociativo que muestre la frecuencia de cada carácter en la cadena.
 -->
<?php
function frecuenciaCaracteres($cadena){
    $caracteresExistentes = [];
    $cadenaMod = str_replace(" ","",$cadena);
    $elemento =[];
    for($i=0;$i<strlen($cadenaMod);$i++){

        if(!in_array($cadenaMod[$i], $caracteresExistentes)){
        array_push($caracteresExistentes, $cadenaMod[$i]);
        $concurrencia = substr_count($cadenaMod,$cadenaMod[$i]);
        $elemento[$cadenaMod[$i]] = $concurrencia;
                
    }
    }
    echo "En tu frace: '$cadena' \n";
    foreach($elemento as $e => $v) {
        echo "El caracter: '$e' Aparece: $v\n";
    }
    
   
}
frecuenciaCaracteres("Hola que tal esta");