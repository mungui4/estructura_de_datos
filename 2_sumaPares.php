<!-- 2.       Problema de Suma de Números Pares:
Crea un script que sume todos los números pares en un array de números enteros. -->

<?php
$numeros = [ 2,45,5,8,4,2];
$suma=0;
$arraySuma =[];
foreach($numeros as $n){
  
    
    if($n%2==0){
        $suma = $suma+$n;
        array_push($arraySuma,$n);

    }
   
}
echo "Las Suma de estos números pares: ". implode(",",$arraySuma). " es: ".$suma;