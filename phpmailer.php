<?php
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: index.php");
    exit;
}

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Captura datos del formulario
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["mensaje"];

if (empty(trim($nombre))) $nombre = 'Anónimo';

$body = <<<HTML
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f5f8ff;
      margin: 0;
      padding: 0;
      color: #333;
    }
    .container {
      max-width: 600px;
      margin: 20px auto;
      background: #ffffff;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
      overflow: hidden;
    }
    .header {
      background: linear-gradient(90deg, #4f46e5, #7c3aed);
      color: white;
      text-align: center;
      padding: 20px;
    }
    .header h1 {
      margin: 0;
      font-size: 24px;
      font-weight: 700;
    }
    .content {
      padding: 30px;
    }
    .content h2 {
      font-size: 20px;
      margin-bottom: 15px;
      color: #111827;
    }
    .content p {
      margin: 8px 0;
      font-size: 15px;
      line-height: 1.5;
    }
    .highlight {
      background: #f0fdf4;
      border-left: 4px solid #22c55e;
      padding: 12px;
      border-radius: 6px;
      margin: 20px 0;
      font-size: 15px;
      color: #065f46;
    }
    .footer {
      background: #f9fafb;
      text-align: center;
      padding: 15px;
      font-size: 12px;
      color: #6b7280;
    }
    .btn {
      display: inline-block;
      margin-top: 20px;
      padding: 12px 20px;
      background: #22c55e;
      color: white;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
    }
    .btn:hover {
      background: #16a34a;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>📩 Nuevo Mensaje de Contacto</h1>
    </div>
    <div class="content">
      <h2>Detalles del mensaje</h2>
      <p><strong>👤 Nombre:</strong> {$nombre}</p>
      <p><strong>📧 Email:</strong> {$email}</p>
      <p><strong>📝 Asunto:</strong> {$asunto}</p>

      <div class="highlight">
        <strong>Mensaje:</strong><br>
        {$mensaje}
      </div>

      <a href="mailto:{$email}" class="btn">Responder al contacto</a>
    </div>
    <div class="footer">
      Este correo fue generado automáticamente desde el formulario de tu web Nuanz 🚀
    </div>
  </div>
</body>
</html>
HTML;

$mailer = new PHPMailer(true);

try {
    // Configuración SMTP con Gmail
    $mailer->isSMTP();
    $mailer->Host = 'smtp.gmail.com';
    $mailer->SMTPAuth = true;
    $mailer->Username = 'contactnuanz@gmail.com'; // tu Gmail
    $mailer->Password = 'ihgf bunf xmhp cntg'; // App Password generado en Google
    $mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mailer->Port = 587;

    // Datos del correo
    $mailer->setFrom('formularioweb@gmail.com', 'Formulario Web');
    $mailer->addAddress("contactnuanz@gmail.com", "Contacto Web"); // Puedes poner otro destinatario si quieres
    $mailer->Subject = "Nuevo mensaje de contacto: $asunto";
    $mailer->msgHTML($body);
    $mailer->AltBody = strip_tags($body);
    $mailer->CharSet = 'UTF-8';

    // Enviar
    if ($mailer->send()) {
        header("Location: index.php");
    } else {
        echo "❌ Error al enviar el mensaje.";
    }

} catch (Exception $e) {
    echo "Error al enviar el correo: {$mailer->ErrorInfo}";
}

