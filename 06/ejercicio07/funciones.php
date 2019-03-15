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
function imrpimir_array($lista)
{
    $numero_elementos=count($lista);
    echo "<table border=1 cellpadding=5>";
    for($control=0;$control<$numero_elementos;$control++){
        echo "<tr>";
        echo "<td>$control</td>";
        echo "<td>$lista[$control]</td>";
        echo "</tr>";
        }
    echo "</table></br></br>";
}

?>