<?php
    abstract class Miembro {
        //Atributes
        private int $id;
        protected string $nombre;
        protected string $apellidos;
        protected string $email;
        //Constructor
        public function __construct($id, $nombre, $apellidos, $email) {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->email = $email;
        }
        //Getters & Setters
        public function getEmail() {
            return $this->email;
        }
        public function setEmail($email) {
            $this->email = $email;
            return $this;
        }
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
        public function getApellidos() {
            return $this->apellidos;
        }
        public function setApellidos($apellidos) {
            $this->apellidos = $apellidos;
            return $this;
        }
        //Methods
        public function __toString() {
            return "ID: " . $this->id . ", Nombre: " . $this->nombre . ", Apellidos: " . $this->apellidos . ", Email: " . $this->email;
        }
    }
?>