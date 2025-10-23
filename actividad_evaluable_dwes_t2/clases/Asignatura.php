<?php
    class Asignatura {
        //Atributes
        private int $id;
        private string $nombre;
        private string $creditos;
        //Constructor
        public function __construct($id, $nombre, $creditos) {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->creditos = $creditos;
        }
        //Getters & Setters
        public function getId() {
            return $this->id;
        }
        public function setId($id) {
            $this->id = $id;
            return $this;
        }
        public function getNombre() {
            return $this->nombre;
        }
        public function setNombre($nombre) {
            $this->nombre = $nombre;
            return $this;
        }
        public function getCreditos() {
            return $this->creditos;
        }
        public function setCreditos($creditos) {
            $this->creditos = $creditos;
            return $this;
        }
        //Methods
        public function __toString() {
            return "Nombre: $this->nombre, Créditos: $this->creditos";
        }
        public static function crearAsignaturasDeMuestra() {
            $asignaturas = [
                new Asignatura(1, "DWES", "7 créditos"),
                new Asignatura(2, "DWEC", "6 créditos"),
                new Asignatura(3, "DIW", "4 créditos"),
                new Asignatura(4, "DAW", "4 créditos"),
            ];
            return $asignaturas;
        }
    }
?>