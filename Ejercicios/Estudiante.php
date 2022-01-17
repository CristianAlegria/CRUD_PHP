<?php
    class Estudiante{
        private $nombre;
        private $curso;
        private $edad;

        function __construct($nombre,$curso,$edad){
           
            $this->nombre = $nombre;
            $this->curso = $curso;
            $this->edad = $edad;
        }

       public function getNombre(){

        return $this->nombre;
       }

       public function getCurso(){

        return $this->curso;
       }

       public function getEdad(){

        return $this->edad;
       }

    }

   
?>

