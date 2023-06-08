<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

class Correo{
    public $para;
    public $conCopia;
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
            //$mail->Username   = 'pruebas@funtedcol.com.co';
            //$mail->Password   = 'Josealf7*2023';
            
            $mail->Username   = 'preinscripciones@funtedcol.com.co';
            $mail->Password   = 'Preinscripciones2023*';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;
        
            //Recipients
            //$mail->setFrom('pruebas@funtedcol.com.co', 'Preinscripción');
            $mail->setFrom('preinscripciones@funtedcol.com.co', 'Preinscripción');
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
        
            $mail->send();
            // if(){
            //     echo 'Mensaje enviado con éxito';
            // }else{
            //     echo 'Error el Mensaje no pudo ser enviado';
            // }
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}