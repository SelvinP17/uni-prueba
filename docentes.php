<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Docentes</title>
</head>
<body>
    <form method="post">
        <h1>Registro Docentes</h1>
        <input type="text" name="nombre_docente" placeholder="Nombre del docente">        
        <input type="text" name="nombre_curso" placeholder="Nombre del curso">
        <input type="submit" name="register_d">      
    </form>
    <?php
        include("registar_docente.php");
    ?>
</body>
</html>