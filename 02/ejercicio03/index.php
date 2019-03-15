<?php
$dia = rand(1,7);//numero aleatorio entre 1 y 7

echo "El número es $dia";//salida por pantalla del numero generado

echo "</br>";

switch ($dia){
    case 1:
        echo "Buenos días hoy es <strong>Lunes</strong>";
    break;
    
    case 2:
        echo "Buenos días hoy es <strong>Martes</strong>";
    break;
    case 3:
        echo "Buenos días hoy es <strong>Miercoles</strong>";
    break;
    case 4:
        echo "Buenos días hoy es <strong>Jueves</strong>";
    break;
    case 5:
        echo "Buenos días hoy es <strong>Viernes</strong>";
    break;
    case 6:
        echo "Buenos días hoy es <strong>Sábado</strong>";
    break;
    case 7:
        echo "Buenos días hoy es <strong>Domingo</strong>";
    break;
}
?>