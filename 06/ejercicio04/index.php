<?php

function iniciar_array($numero_elementos,$min,$max)
{
    $numero=array();

    for($i=$0;$i<$numero_elementos;$i++){
        $numero[$i]=rand($min,$max);

    }

    return $numero;
}

function calcular_maximo($lista)
{
    $numero_elementos=count($lista);
    $maximo=0;
    for($i=$0;$i<$numero_elementos;$i++){
        if($maximo<$lista[$i]){
            $maximo=$lista[$i];
        }

    }
    return $maximo;
}

$lista=iniciar_array(10,1,30);
echo "<pre>";
print_r($lista);
echo "</pre>";

echo "</br>";
$maximo=calcular_maximo($lista);
echo "El maximo valor es: $maximo";

?>