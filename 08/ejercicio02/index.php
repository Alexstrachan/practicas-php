<?php

class Persona{
    
    private $nombre;
    private $apellido1;
    private $apellido2;
    private $edad;
    
    public function __construct($nombre="",$apellido1="",$apellido2="",$edad=""){
        $this->nombre = $nombre;
        $this->apellido1=$apellido1;
        $this->apellido2=$apellido2;
        $this->edad=$edad;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setApellidos($apellido1,$apellido2){
        $this->apellido1=$apellido1;
        $this->apellido2=$apellido2;
    }
    public function getApellido1(){
        return $this->apellido1;
    }
    public function getApellido2(){
        return $this->apellido2;
    }
    
    public function setEdad($edad){
        $this->edad=$edad;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function imprimirCaracteristicas(){
        echo "</br></br>";
        echo "Nombre: ".$this->nombre."</br>";
        echo "Apellidos: ".$this->apellido1." ";
        echo $this->apellido2."</br>";
        echo "Edad: ".$this->edad." años";
        echo "</br></br>";
    }
    public function devolver(){
        return $this;
    }
}

$Alex= new Persona();
$Alex->setNombre("Alex");
$Alex->setApellidos("Strachan");
$Alex->setEdad(22);
echo "Nombre: ".$Alex->getNombre()."</br>";
echo "Apellido1: ".$Alex->getApellido1()."</br>";
echo "Apellido2: ".$Alex->getApellido2()."</br>";
echo "Edad: ".$Alex->getEdad()." años</br>";
$julia= new Persona("julia", "Ape1", "Ape2", 99);
$julia->imprimirCaracteristicas();
?>