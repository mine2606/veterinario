<?php

class Perro {

    var $nombre;
    var $edad;


    function __construct ($nombre, $edad) {
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



class Clinica {

    var $nombreclinica;

    var $nombredirector;

    var $animales;


    function __construct ($nombreClinica, $nombredirector, $animales)
        $this->nombreclinica = $nombreclinica;
        $this->nombredirector = $nombredirector;
        $this->animales = $animales;

    
     
        function getNombreClinica (){
            return $this->nombreclinica;
    
        }
    
        function setNombreClinica($nombreclinica){
        $this->nombreclinica=$nombreclinica;
    
    
        }
        function geteNombreDirector(){
        return $this->nombredirector;
    
        }
    
        function setNombreDirector($nombredirector){
        $this->nombredirector=$nombredirector;
   
   
        // add para dar de alta a un animal
        function getAnimales () {
            return $this->animales;
    
        }
    
        function addAnimales ($animal) {
            $this->animales[] = $animal;
        }
   
   
   
   
    
    

    function buscarAnimalPorNombre () {



    }



    function buscarAnimalMasViejo () {



    }

}





//Aquí es donde empieza el principal

//Tengo que crear una clínica veterinaria, llenarla de animales y buscar


//1. Creamos la clínica
$miclinica = new clinica("house dog", "Fran Landero", "Perro");

$miclinica ->setnombreclinica("house dog");

$miclinica ->setnombredirector("Fran Landero");


//2. Creamos los animales
$miperro = new Perro ("Coco", 4);
$miclinica->addanimales($miperro) //Asi se guardan los perros y podemos crear otro con el mismo objeto miperro


miperro2 = new Perro ("Blanca", 3);
$miClinica->addanimales($miperro)