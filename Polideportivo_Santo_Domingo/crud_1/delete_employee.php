<?php
include("db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $id = intval($id);

    $query = "DELETE FROM empleados WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Consulta fallida: " . mysqli_error($conn));
    }

    $_SESSION['message'] = 'Empleado eliminado exitosamente';
    $_SESSION['message_type'] = 'danger';

    header("Location: crud.php");
    exit();
} else {
    $_SESSION['message'] = 'ID no proporcionado';
    $_SESSION['message_type'] = 'danger';

    header("Location: crud.php");
    exit();
}
?>
