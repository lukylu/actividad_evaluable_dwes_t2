<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triángulo</title>
</head>
<body>
    <?php
    include "clases/triangleGenerator.php";

    $triangulo = new TriangleGenerator();
    echo $triangulo->generatetriangle(15);
    ?>
</body>
</html>