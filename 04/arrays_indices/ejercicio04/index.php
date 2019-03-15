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

$maximo = 0;

for ($i=0;$i<$valor_array;$i++){
    if ($maximo < $numero[$i]){
        $maximo=$numero[$i];
    }
}

echo "</br>";
echo "El valor máximo es: $maximo";

?>