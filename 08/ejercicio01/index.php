<?php
class Coche{
    
    private $color;
    
    public function getColor()
    {
    
        echo $this->color;
    }
    public function setColor($color){
        $this->color=$color;
    }
}

$miCoche = new Coche();
$miCoche->setColor("rojo");
$miCoche->getColor();
?>
