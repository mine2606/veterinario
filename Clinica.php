<?php



class Clinica {

    var $nombreclinica;
    var $nombredirector;
    var $animales;

    function setNombreDirector($nombre) {
        $nombredirector= $nombre;
    }



    function setNombreClinica($nombre) {
        $nombreclinica= $nombre;
    }



    function altaAnimal () {



    }



    function buscarAnimalPorNombre () {



    }



    function buscarAnimalMasViejo () {



    }

}





//Aquí es donde empieza el principal

//Tengo que crear una clínica veterinaria, llenarla de animales y buscar

$miclinica= new clinica
$miclinica->setNombreClinica("El paraiso de los animales");
$miclinica->setNombreDirector("Florentino");


$a= new Perro();
$a->nombre = "Lassie";
$a->edad = 5;
$miclinica->animales[] = $a;
