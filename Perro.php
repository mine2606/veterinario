<?php


class Perro {

    var $nombre;
    var $edad;

    // versiones anteriores
    function Perro ($nombre, $edad){
         $this->nombre = $nombre;
         $this->edad = $edad;
    }

    //version php 7. Esto quiere decir que si antes se ponia el nombre de la clase, ahora se pone construct
    function __construct ($nombre, $edad)
        $this->nombre = $nombre;
        $this->edad = $edad;
    } 

    function getNombre (){
         return $this->nombre;
     
    }

    function setNombre($nombre){
        $this->nombre=$nombre;


    }
   function geteEdad(){
        return $this->edad;

    }

    function setEdad($edad){
     $this->edad=$edad;


    }


}



//Una forma de crear un perro

$miperro = new Perro();

$miperro->setNombre("Rex");

$miperro->setEdad(7);



//Otra forma de crear un perro llamando al constructor parametrizado (con parámetros)

$miperro = new Perro ("Rex", 7)



//Recuperar datos

echo "El nombre es ".$miperro->getNombre();

echo "La edad es ".$miperro->getEdad();