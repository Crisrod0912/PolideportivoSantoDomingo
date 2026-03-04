<?php
session_start();

if (isset($_SESSION['rol'])) {
    $rol = $_SESSION['rol'];
} else {
    $rol = 'Invitado';
}
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Polideportivo-Santo-Domingo</title>

    <style>
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            color: white;
            padding: 10px;
        }

        .navbar .user-info {
            font-size: 1rem;
        }

        @import url('https://fonts.googleapis.com/css?family=Rajdhani:300,400,500,600,700');
        @import url('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
        @import url('https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
    </style>
</head>

<body>

    <div class="navbar">
        <div class="user-info">
            <?php echo "Rol actual: $rol"; ?>
            <a href="logout.php">Cerrar Sesión</a>
        </div>
    </div>

</body>

</html>
