<?php
include("conexion.php");
if (isset($_POST['register_c'])) {
    if (
        strlen($_POST['nombre_curso']) >= 1 
    ) {
        $nombre_curso = trim($_POST['nombre_curso']);
       
        $consulta = "INSERT INTO cursos (nombre_curso) VALUES ('$nombre_curso')";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado) {
?>
            <h3 class='ok'>Registro realizado</h3>
<?php
        } else {
?>
            <h3 class='bad'>No se ha podido completar el registro</h3>
<?php
        }
    } else {
?>
        <h3 class="bad">Favor complete los campos</h3>
<?php
    }
}
?>