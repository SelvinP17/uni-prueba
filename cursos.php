<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Cursos</title>
</head>

<body>
    <form method="post">
        <h1>Cursos</h1>
        <input type="text" name="nombre_curso" placeholder="Nombre del curso">
        <input type="submit" name="register_c">
    </form>
    <?php
    include('registrar_curso.php');
    ?>
</body>

</html>