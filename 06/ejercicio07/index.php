<?php

include 'funciones.php';

$lista=iniciar_array(10,30,50);
$media=calcular_media($lista);

echo "la neda es: $media";
echo "</br>";
echo dirname(__FILE__);

?>