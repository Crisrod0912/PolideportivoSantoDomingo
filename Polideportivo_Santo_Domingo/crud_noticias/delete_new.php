<?php
include("db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $id = intval($id);

    $query = "DELETE FROM noticia WHERE Num_Noticia = $id";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Consulta fallida: " . mysqli_error($conn));
    }

    $_SESSION['message'] = 'Noticia eliminada';
    $_SESSION['message_type'] = 'danger';

    header("Location: News.php");
    exit();
} else {
    $_SESSION['message'] = 'ID no proporcionado';
    $_SESSION['message_type'] = 'danger';

    header("Location: News.php");
    exit();
}
?>
