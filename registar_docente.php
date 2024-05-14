<?php
include('conexion.php');
if (isset($_POST['register_d'])) {
    if (strlen($_POST['nombre_docente']) >= 1 && (isset($_POST['nombre_curso']))) {
        $nombre_curso = mysqli_real_escape_string($conex, $_POST['nombre_curso']);

        // Consulta para obtener el id_curso
        $consulta_curso = "SELECT id_curso FROM cursos WHERE nombre_curso = '$nombre_curso'";
        $resultado_curso = mysqli_query($conex, $consulta_curso);

        if ($resultado_curso && mysqli_num_rows($resultado_curso) > 0) {
            $fila_curso = mysqli_fetch_assoc($resultado_curso);
            $id_curso = $fila_curso['id_curso'];

            $nombre_docente = mysqli_real_escape_string($conex, $_POST['nombre_docente']);
            $consulta_insert = "INSERT INTO docentes (nombre_docente, id_curso) VALUES ('$nombre_docente', '$id_curso')";
            $resultado_insert = mysqli_query($conex, $consulta_insert);

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