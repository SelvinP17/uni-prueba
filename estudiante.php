<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <title>Estudiante</title>
</head>

<body>
    <form method="post">
        <h1>Registro Estudiante</h1>
        <input type="text" name="nombre" placeholder="Nombre del estudiante">
        <input type="text" name="apellido_p" placeholder="apellido paterno">
        <input type="text" name="apellido_m" placeholder="apellido materno">
        <input type="text" name="direccion" placeholder="dirección">
        <input type="text" name="telefono" placeholder="telefono">
        <input type="submit" name="register">
    </form>
    <?php
    include('registrar.php');
    ?>
</body>

</html>