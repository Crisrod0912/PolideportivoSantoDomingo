<?php
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function enviarFormulario($data, $files) {
    $nombre   = $data['nombre'];
    $apellido = $data['apellido'];
    $deporte  = $data['deporte'];
    $edad     = $data['edad'];
    $telefono = $data['telefono'];
    $correo   = $data['correo'];
    
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'polideportivosantodomingo3@gmail.com';
        $mail->Password   = 'fjct nqvz bmwf kuje';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        $mail->setFrom(
            'polideportivosantodomingo3@gmail.com',
            'Polideportivo Santo Domingo'
        );
        
        $mail->addAddress(
            'polideportivosantodomingo3@gmail.com',
            'Polideportivo Santo Domingo'
        );

        if (!empty($files['documento']['name'])) {
            $mail->addAttachment(
                $files['documento']['tmp_name'],
                $files['documento']['name']
            );
        }

        $mail->isHTML(true);
        $mail->Subject = 'Nueva Solicitud de Matrícula';
        $mail->Body = "
            <html>
                <head>
                    <title>Nueva Solicitud de Matrícula</title>
                </head>
                <body>
                    <h2>Detalles de la solicitud</h2>
                    <p><strong>Nombre:</strong> $nombre</p>
                    <p><strong>Apellido:</strong> $apellido</p>
                    <p><strong>Deporte de Interés:</strong> $deporte</p>
                    <p><strong>Edad:</strong> $edad</p>
                    <p><strong>Teléfono:</strong> $telefono</p>
                    <p><strong>Correo electrónico:</strong> $correo</p>
                </body>
            </html>
        ";
        
        $mail->send();
        return true;
    } catch (Exception $e) {
        echo "Error al enviar el correo: {$mail->ErrorInfo}";
        return false;
    }
}
?>
