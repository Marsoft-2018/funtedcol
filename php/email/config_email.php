<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

class Correo{
    public $para;
    public $conCopia;
    public $conCopia2;
    public $asunto;
    public $mensaje;
    
    public function enviar(){
    
        $mail = new PHPMailer(true);
        
        try {
            //Server settings
            $mail->SMTPDebug = 0;                     
            $mail->isSMTP();  
            $mail->Host       = 'mail.funtedcol.com.co';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'info@funtedcol.com.co';
            $mail->Password   = 'funtedcol2033!';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;
        
            //Recipients
            $mail->setFrom('info@funtedcol.com.co', 'Preinscripción');
            $mail->addAddress($this->para); 
            /*
            //Attachments
            $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
            */
        
            //Content
            $mail->isHTML(true); 
            $mail->Subject = $this->asunto;
            $mail->Body    = $this->mensaje;
        
            if($mail->send()){
                echo 'Mensaje enviado con éxito';
            }else{
                echo 'Error el Mensaje no pudo ser enviado';
            }
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}