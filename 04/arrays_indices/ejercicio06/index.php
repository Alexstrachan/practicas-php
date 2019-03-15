<?php

$numweo = array();

for ($i=0;$i<10;$i++){
    $numero[$i]=rand(1,30);
}
for ($i=0;$i<10;$i++){
    echo $numero[$i];
    echo "</br>";
}

$valor_array = count($numero);
$suma = 0;

for ($i=0;$i<$valor_array;$i++){
    $suma=$suma+$numero[$i]
}
$media   = $suma / $valor_array;
echo "</br>";
echo "la media es: $media";
echo "</br>";

$maximo = 0;

for ($i=0;$i<$valor_array;$i++){
    if ($maximo < $numero[$i]){
        $maximo=$numero[$i];
        $posicion=$i;
    }
}
echo "</br>";
echo "el valor máximo es: $posicion. Y está en la posicion: $posicion";
echo "</br>";

$minimo = 33;

for ($i=0;$i<$valor_array;$i++){
    if ($minimo < $numero[$i]){
        $minimo=$numero[$i];
        $posicion=$i;
    }
}
echo "</br>";
echo "El valor mínimo es: $mínimo. Y está en la posición: $posicion";;
echo "</br>";

?>