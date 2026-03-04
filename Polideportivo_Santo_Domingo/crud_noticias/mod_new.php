<?php
include "db.php";

if (isset($_POST['mod_new'])) {
    $Num_Noticia = $_POST['Num_Noticia'];
    $Titulo = $_POST['Titulo'];
    $Contenido = $_POST['Contenido'];
    $Fecha = $_POST['Fecha'];
    $IdAutor = $_POST['IdAutor'];
    $IdCategoria = $_POST['IdCategoria'];
    $imagen = $_POST['Imagen'];

    $query = "UPDATE noticia SET Titulo = ?, Contenido = ?, Fecha = ?, IdAutor = ?, IdCategoria = ?, Imagen = ? WHERE Num_Noticia = ?";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt === false) {
        echo "Consulta fallida al preparar: " . mysqli_error($conn);
    } else {
        mysqli_stmt_bind_param($stmt, "ssssssi", $Titulo, $Contenido, $Fecha, $IdAutor, $IdCategoria, $imagen, $Num_Noticia);

        if (mysqli_stmt_execute($stmt)) {
            $_SESSION['message'] = 'Noticia actualizada';
            $_SESSION['message_type'] = 'success';
            header("Location: News.php");
            exit();
        } else {
            echo "Consulta fallida al ejecutar: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    }
}
?>
