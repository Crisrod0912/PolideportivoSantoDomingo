<?php
session_start();

if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'admin') {
    header("Location: index.php");
    exit();
}

include 'conexion.php';

function mostrarHorariosFutbol($conn) {
    $sql = "SELECT * FROM horarios_futbol";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        echo "<table class='table table-bordered'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Día</th>
                        <th>Horario</th>
                        <th>Grupo de Edad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>";

        while ($row = $result->fetch_assoc()) {

            echo "<tr>
                    <td>" . htmlspecialchars($row["id"]) . "</td>
                    <td>" . htmlspecialchars($row["dia_semana"]) . "</td>
                    <td>" . htmlspecialchars($row["horario"]) . "</td>
                    <td>" . htmlspecialchars($row["grupo_edad"]) . "</td>
                    <td>
                        <a href='editar_horario.php?id=" . $row["id"] . "'>Editar</a>
                        <a href='eliminar_horario.php?id=" . $row["id"] . "'>Eliminar</a>
                    </td>
                </tr>";
        }

        echo "</tbody></table>";

    } else {
        echo "No se encontraron horarios.";
    }
}

mostrarHorariosFutbol($conn);

$conn->close();
?>
