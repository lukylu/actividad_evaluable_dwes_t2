<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia</title>
</head>
<body>
    <?php
        //Se incluyen las clases
        require_once 'clases/miembro.php';
        require_once 'clases/Alumno.php';
        require_once 'clases/Profesor.php';
        require_once 'clases/Asignatura.php';
        //Se crean los arrays de muestra
        $alumnos = Alumno::crearAlumnosDeMuestra();
        $profesores = Profesor::crearProfesoresDeMuestra();
        $asignaturas = Asignatura::crearAsignaturasDeMuestra();
        //Matriculamos a los alumnos en las asignaturas
        $alumnos[0]->matricularEnAsignatura($asignaturas[0]);
        $alumnos[1]->matricularEnAsignatura($asignaturas[0]);
        $alumnos[1]->matricularEnAsignatura($asignaturas[1]);
        $alumnos[2]->matricularEnAsignatura($asignaturas[0]);
        $alumnos[2]->matricularEnAsignatura($asignaturas[2]);
        $alumnos[3]->matricularEnAsignatura($asignaturas[0]);
        $alumnos[4]->matricularEnAsignatura($asignaturas[0]);
        $alumnos[4]->matricularEnAsignatura($asignaturas[1]);
        $alumnos[4]->matricularEnAsignatura($asignaturas[2]);
        $alumnos[5]->matricularEnAsignatura($asignaturas[0]);
        $alumnos[6]->matricularEnAsignatura($asignaturas[1]);
        $alumnos[6]->matricularEnAsignatura($asignaturas[1]);
        $alumnos[7]->matricularEnAsignatura($asignaturas[2]);
        $alumnos[8]->matricularEnAsignatura($asignaturas[1]);
        $alumnos[9]->matricularEnAsignatura($asignaturas[0]);
        //Filtramos los alumnos con menos de 23 años
        $alumnosMenoresDe23 = array_filter($alumnos, function($alumno) {
            return $alumno->getEdad() < 23;
        });
        print_r($alumnosMenoresDe23);
        print("<br><br>");
        //Filtramos un array con los alumnnos que tengan 2 o mas asignaturas
        $alumnosConDosAsignaturas = array_filter($alumnos, function($alumno) {
            return count($alumno->getAsignaturas()) >= 2;
        });
        print_r($alumnosConDosAsignaturas);
        print("<br><br>");
        $asignaturasConAlumnos = array_filter($asignaturas, function($asignatura) use ($alumnos) {
            foreach ($alumnos as $alumno) {
                foreach($alumno->getAsignaturas() as $asignaturaAlumno) {
                    if ($asignaturaAlumno == $asignatura) {
                        return true;
                    }
                }
            }
            return false;
        });
        print_r($asignaturasConAlumnos);
        print("<br><br>")
    ?>
    <h2>Alumnos</h1>
    <ul>
        <?php
            foreach ($alumnos as $alumno) {
        ?>
        <li><?php echo $alumno; ?></li>
        <?php
            }
        ?>
    </ul>
    <h2>Profesores</h1>
    <ul>
        <?php
            foreach ($profesores as $profesor) {
        ?>
        <li><?php echo $profesor; ?></li>
        <?php
            }
        ?>
    </ul>
    <h2>Asignaturas</h1>
    <ul>
        <?php
            foreach ($asignaturas as $asignatura) {
        ?>
        <li><?php echo $asignatura; ?></li>
        <?php
            }
        ?>
    </ul>
    <h2>Alumnos menores de 23</h2>
    <ul>
        <?php
            foreach ($alumnosMenoresDe23 as $alumno) {
        ?>
        <li><?php echo $alumno; ?></li>
        <?php
            }
        ?>
    </ul>
    <h2>Alumno con almenos dos asignaturas</h2>
    <ul>
        <?php
            foreach ($alumnosConDosAsignaturas as $alumno) {
        ?>
        <li><?php echo $alumno; ?></li>
        <?php
            }
        ?>
    </ul>
    <h2>Asignaturas con alumnos</h2>
    <ul>
        <?php
            foreach ($asignaturasConAlumnos as $asignatura) {
        ?>
        <li><?php echo $asignatura; ?></li>
        <?php
            }
        ?>
    </ul>
</body>
</html>