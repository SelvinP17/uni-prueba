<?php
include("conexion.php");
if (isset($_POST['register'])) {
    if (
        strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido_p']) >= 1 && strlen($_POST['apellido_m']) >= 1 &&
        strlen($_POST['direccion']) >= 1 && strlen($_POST['telefono']) >= 1
    ) {
        $nombre_estudiante = trim($_POST['nombre']);
        $apellido_p = trim($_POST['apellido_p']);
        $apellido_m = trim($_POST['apellido_m']);
        $direccion_est = trim($_POST['direccion']);
        $telefono_est = trim($_POST['telefono']);

        $consulta = "INSERT INTO estudiantes (nombre_estudiante, apellido_p, apellido_m, direccion_est, telefono_est)
        VALUES ('$nombre_estudiante', '$apellido_p', '$apellido_m', '$direccion_est', '$telefono_est')";
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