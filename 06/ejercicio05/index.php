<?php

function iniciar_array($numero_elementos,$min,$max)
{
    $numero=array();

    for($i=$0;$i<$numero_elementos;$i++){
        $numero[$i]=rand($min,$max);

    }

    return $numero;
}

function calcular_minimo($lista)
{
    $numero_elementos=count($lista);
    $minimo=31;
    for($i=$0;$i<$numero_elementos;$i++){
        if($minimo<$lista[$i]){
            $minimo=$lista[$i];
        }

    }
    return $minimo;
}

$lista=iniciar_array(10,1,30);
echo "<pre>";
print_r($lista);
echo "</pre>";

echo "</br>";
$minimo=calcular_maximo($lista);
echo "El maximo valor es: $minimo";

?>