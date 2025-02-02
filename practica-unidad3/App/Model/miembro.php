<?php 
namespace App\Model;

use App\Model\Model;
use PDO;
use PHPMailer\PHPMailer\PHPMailer;
use Exception;

class Miembro extends Model
{
    function __construct($con)
    {
        parent::__construct($con);
        $this->table="miembro";

    }

    public function cargarMiembro($con, $correo) {
        $stmt = $con->prepare("SELECT idmiembro, contrasenia, validado FROM miembro WHERE correo = :correo");
        $stmt->bindParam(':correo', $correo);
        $stmt->execute();
        $miembro = $stmt->fetch(PDO::FETCH_ASSOC);
        return $miembro;
    }

    public function enviarCorreoValidacion($email, $codigo) {
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.mailjet.com';
            $mail->SMTPAuth = true;
            $mail->Username = '2d4c28c698f31ffad3f4cc7aa4920aea'; //Clave Api
            $mail->Password = '6ccd45aebda01a6f6be03af7af87b6ab'; //Clave secreta
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $asunto = "Confirma tu cuenta";
            $mensaje = "Hola,\n\nPara activar tu cuenta, haz clic en el siguiente enlace:\n";
            $mensaje .= "http://localhost/validate?codigo=" . urlencode($codigo) . "\n\n";
            $mensaje .= "Si no solicitaste esta cuenta, ignora este mensaje.";

            // Recipients
            $mail->setFrom('elreydelabici@gmail.com', 'Your Website');
            $mail->addAddress($email);

            // Content
            $mail->isHTML(false);
            $mail->Subject = $asunto;
            $mail->Body    = $mensaje;

            $mail->send();
        } catch (Exception $e) {
            echo "Error al enviar el correo: {$mail->ErrorInfo}";
        }
    }

    public function buscarCodigo ($con, $codigo) {
        $stmt = $con->prepare("SELECT * FROM miembro WHERE codigovalidacion = :codigo AND validado = 0");
        $stmt->bindParam(':codigo', $codigo);
        $stmt->execute();
        $miembro = $stmt->fetch(PDO::FETCH_ASSOC);

        if($miembro) {
            return true;
        } else {
            return false;
        }
    }

    public function validarMiembro ($con, $codigo) {
        $stmt = $con->prepare("UPDATE miembro SET validado = 1 WHERE codigovalidacion = :codigo");
        $stmt->bindParam(':codigo', $codigo);
        $stmt->execute();
    }

    public function buscarEmail ($con, $email) {
        $stmt = $con->prepare("SELECT * FROM miembro WHERE correo = :correo");
        $stmt->bindParam(':correo', $email);
        $stmt->execute();
        $miembro = $stmt->fetch(PDO::FETCH_ASSOC);

        if($miembro) {
            return true;
        } else {
            return false;
        }
    }

}

?>