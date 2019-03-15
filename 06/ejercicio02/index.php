<?php

function iniciar_array($numero_elementos,$min,$max)
{
    $numero=array();

    for($i=$0;$i<$numero_elementos;$i++){
        $numero[$i]=rand($min,$max);

    }

    return $numero;
}

$lista=iniciar_array(10,1,30);

echo "<pre>";
print_r($lista);
echo "</pre>";

?>