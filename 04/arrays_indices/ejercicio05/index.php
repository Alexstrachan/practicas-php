<?php

$numweo = array();

for ($i=0;$i<10;$i++){
    $numero[$i]=rand(1,30);
}
for ($i=0;$i<10;$i++){
    echo $numero[$i];
    echo "</br>";
}

$valor_array = count($numeros);

$minimo = 33;

for ($i=0;$i<$valor_array;$i++){
    if ($minimo < $numero[$i]){
        $minimo=$numero[$i];
    }
}

echo "</br>";
echo "El valor mínimo es: $minimo";

?>