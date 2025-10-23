<?php
    class Alumno extends Miembro {
        //Atributes
        private int $edad;
        private $asignaturas = [];
        private bool $cursoAbonado = false;
        //Constructor
        public function __construct($id, $nombre, $apellidos, $email, $edad) {
            parent::__construct($id, $nombre, $apellidos, $email);
            $this->edad = $edad;
        }
        //Getters & Setters
        public function getEdad() {
            return $this->edad;
        }
        public function setEdad($edad) {
            $this->edad = $edad;
            return $this;
        }
        public function getAsignaturas() {
            return $this->asignaturas;
        }
        //Methods
        public function abonarCurso(): void {
            $this->cursoAbonado = true;
        }
        public function matricularEnAsignatura(Asignatura $asignatura): void {
            foreach ($this->asignaturas as $asignaturaMatriculada) {
                if ($asignaturaMatriculada->getId() === $asignatura->getID()) {
                    return;
                }
            }
            $this->asignaturas[] = $asignatura;
        }
        public function __toString() {
            return "Nombre: $this->nombre, Apellidos: $this->apellidos, Email: $this->email";
        }
        public static function crearAlumnosDeMuestra() {
            $alumnos = [
                new Alumno(1, "Laura", "Martinez", "laura.martinez@email.com", 22),
                new Alumno(2, "Sergio", "Lopez", "sergio.lopez@email,com", 25),
                new Alumno(3, "Carlos", "Garcia", "carlos.garcia@email.com", 24),
                new Alumno(4, "Marta", "Sánchez", "marta.sanchez@email.com", 23),
                new Alumno(5, "Alba", "Fernández", "alba.fernandez@email.com", 21),
                new Alumno(6, "David", "Rodríguez", "david.rodriguez@email.com", 26),
                new Alumno(7, "Lucía", "Jiménez", "lucia.jimenez@email.com", 20),
                new Alumno(8, "Jorge", "Pérez", "jorge.perez@email.com", 22),
                new Alumno(9, "Elena", "Romero", "elena.romero@email.com", 23),
                new Alumno(10, "Pablo", "Torres", "pablo.torres@email.com", 24),
            ];
            return $alumnos;
        }
    }
?>