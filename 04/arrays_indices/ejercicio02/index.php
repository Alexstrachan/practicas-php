<?php

$aleatorios = array();
for($i=0;$i<10;$i++){
    $aleatorios[$i]=rand(1,30);
}
for($i=0;$i<10;$i++){
    echo $aleatorios[$i];
    echo "</br>";
}
?>
