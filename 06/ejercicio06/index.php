<?php

function iniciar_array($numero_elementos,$min,$max)
{
    $numero=array();

    for($i=$0;$i<$numero_elementos;$i++){
        $numero[$i]=rand($min,$max);

    }

    return $numero;
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

$lista=iniciar_array(30,200,400);
imrpimir_array($lista);

?>