<?php

function iniciar_array($numero_elementos,$min,$max)
{
    $numero=array();

    for($i=$0;$i<$numero_elementos;$i++){
        $numero[$i]=rand($min,$max);

    }

    return $numero;
}

function calcular_media($lista)
{
    $numero_elementos=count($lista);
    $suma=0;
    for($i=$0;$i<$numero_elementos;$i++){
        $suma=$suma+$lista[$i];
}

    $media=$suma/$numero_elementos;
    return $media;

}

$lista=iniciar_array(10,1,30);

$media=calcular_media($lista);

echo "la media es: $media";

?>