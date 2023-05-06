<?php
    //require_once ("Conect.php");
    include ("../Controladores/encript.php");
    class Contrasena extends ConectarPDO{
        public $correo;
        public $usuario;
        public $nombre;
        public $token;
        public $rol;
        public $estado;
        private $sql;

        public function validar() {
            $con = false;
            $this->sql = "SELECT correo AS email FROM t_users u WHERE u.usuario = ? AND estado = 1 UNION SELECT email FROM profesores p WHERE p.idUsuario = ? AND estado = 'Activo'";
            try {
                $stm = $this->Conexion->prepare($this->sql);
                $stm->bindParam(1,$this->usuario);
                $stm->bindParam(2,$this->usuario);
                $stm->execute();
                $num = $stm->fetchAll(PDO::FETCH_ASSOC);
                foreach ($num as $value) {                    
                    $con = true;
                }                
                return $con;                               
            } catch (Exception $e) {
                echo "Error en la validacion. ".$e;
            }
        }

        public function datosUsuario(){
            $this->sql = "SELECT u.correo,u.rol,u.nombre FROM t_users u WHERE u.usuario = '".$this->usuario."' UNION SELECT p.email, p.Rol, CONCAT(p.PrimerNombre,' ', p.SegundoNombre,' ', p.PrimerApellido,' ', p.SegundoApellido) AS nombre FROM profesores p WHERE p.idUsuario = '".$this->usuario."' ;";
            try {
                $stm = $this->Conexion->prepare($this->sql);
                $stm->execute();
                $datos = $stm->fetchAll(PDO::FETCH_ASSOC);               
                return $datos;
            } catch (Exception $e) {
                echo "Error en la validacion. ".$e;
            }   
        }

        public function generarToken(){
            $this->token = $this->getToken($this->rol,$this->usuario);
            if ($this->token == "") {
                $conjuntoLetras = ["!","#","$","%","&","(",")","*","+",",","-",".","/","0","1","2","3","4","5","6","7","8","9",":",";","<","=",">","?","@","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","[","]","^","_","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];

                $cadena = "";

                for ($i=0; $i < 20 ; $i++) { 
                    $cadena .= $conjuntoLetras[rand(0,85)];
                }
                $this->token = SED::encryption($cadena);    
            }
                    
            if ($this->rol == "Profesor") {
                $this->sql ="UPDATE profesores SET token = '".$this->token."', token_estado = 1 WHERE idUsuario = '".$this->usuario."' AND estado = 'Activo'";
            }elseif($this->rol == "Administrador"){
                $this->sql ="UPDATE t_users SET token = '".$this->token."', token_estado = 1 WHERE usuario = '".$this->usuario."' AND estado = 1";         
            }

            try {
                $stm = $this->Conexion->prepare($this->sql);
                $stm->execute();
                return $this->token;
            } catch (Exception $e) {
                echo "error al guardar los datos: ".$e;
            }
        }

        public function getToken($rol,$usuario){
            $token = "";
            if ($rol == "Profesor") {
                $this->sql ="SELECT token FROM profesores WHERE idUsuario = '".$usuario."' AND  token_estado = 1";
            }elseif($rol == "Administrador"){
                $this->sql ="SELECT token FROM t_users WHERE usuario = '".$usuario."' AND token_estado = 1 ";         
            }

            try {
                $stm = $this->Conexion->prepare($this->sql);
                $stm->execute();
                $Rtoken = $stm->fetchAll(PDO::FETCH_ASSOC);
                foreach ($Rtoken as $value) {
                    $token = $value['token'];
                }
                return $token;
            } catch (Exception $e) {
                echo "error al guardar los datos: ".$e;
            }
        }

        public function reestablecer(){
            $this->contrasena = SED::encryption($this->contrasena);
            if ($this->rol == "Profesor") {
                $this->sql ="UPDATE profesores SET Password = '".$this->contrasena."', token_estado = 0  WHERE idUsuario = '".$this->usuario."' AND token = '".$this->token."' AND token_estado = 1";
            }elseif($this->rol == "Administrador"){
                $this->sql ="UPDATE t_users SET password = '".$this->contrasena."', token_estado = 0  WHERE usuario = '".$this->usuario."' AND token = '".$this->token."' AND token_estado = 1";         
            }
            try {
                $stm = $this->Conexion->prepare($this->sql);
                $stm->execute();
            } catch (Exception $e) {
                echo "error al guardar los datos: ".$e;
            }
        }

        public function enviarEmail($usuario,$nombre,$correo,$token){
            require "../complementos/PHPMailer/PHPMailer.php";
            require "../complementos/PHPMailer/Exception.php";
            require "../complementos/PHPMailer/OAuth.php";
            require "../complementos/PHPMailer/SMTP.php";
            $url = "http://".$_SERVER['SERVER_NAME'].'/vistas/usuarios/reestablecerPass.php?us='.$usuario.'&tkn='.$token;
            $fecha = date("D-M-y H:i");
            $para = $correo;
            $asunto = "Restablecer contraseña - Sistema de Gestión Académica";
            $mensaje = "Hola $nombre: <br><br>Usted ha solicitado reestablecer su contrase&ntilde;a<br><br>Para continuar con el proceso haga click en el siguiente enlace<br><br><a href='$url'>Cambiar contraseña</a>";
            try {
                $mail = new PHPMailer\PHPMailer\PHPMailer();

                //Configurar acceso a la cuenta de correo
                $mail->isSMTP();
                $mail->SMTPDebug = 0;
                $mail->Host = "mail.marsoft-sas.com"; //servidor del correo para ejemplo gmail
                $mail->Port = 486; 
                $mail->SMTPSecure = 'tls';
                $mail->SMTPAuth = true;
                $mail->UserName = "info@marsoft-sas.com"; //usuario de correo del cpanel
                $mail->Password = "joaltaar2019"; //contrseña de ese correo

                //configurar el envio 
                $mail->setFrom('info@marsoft-sas.com',"Gestion Académica - Marsoft"); //Desde donde se enviara debe ser el mismo correo del acceso inicial
                $mail->addAddress($correo,$nombre); //correo destino

                //Contenido del correo
                $mail->IsHTML(true);
                $mail->Subject = $asunto;
                $mail->Body = $mensaje;
                if ($mail->send()) {
                    $texto = "A su correo $para hemos enviado un mensaje para que reestablesca su cotraseña";
                    $datos = array("estado"=>true,"mensaje"=>$texto);
                    echo json_encode($datos);    
                }else{
                    $texto = "Error no se pudo enviar el mensaje a su correo $para, por favor intentelo nuevamente, de persistir el error pongase en contacto con el administrador del sistema.";
                    $datos = array("estado"=>false,"mensaje"=>$texto);
                    echo json_encode($datos);    
                }                            
            } catch (Exception $e) {
                $texto = "Error no se pudo enviar el mensaje a su correo $para, por favor intentelo nuevamente, de persistir el error pongase en contacto con el administrador del sistema.";
                $datos = array("estado"=>false,"mensaje"=>$texto);
                echo json_encode($datos);      
            }
            
            /*if(@mail($para, $asunto, utf8_decode($mensaje))){
                    $texto = "A su correo $para hemos enviado un mensaje para que reestablesca su cotraseña";
                    $datos = array("estado"=>true,"mensaje"=>$texto);
                    echo json_encode($datos);
                    //http_response_code(200);
            } else {
                    $texto = "Error no se pudo enviar el mensaje a su correo $para, por favor intentelo nuevamente, de persistir el error pongase en contacto con el administrador del sistema.";
                    $datos = array("estado"=>false,"mensaje"=>$texto);
                    echo json_encode($datos);
            }*/
        }

        public function modificar(){
            $this->contrasena = SED::encryption($this->contrasena);
            if ($this->rol == "Profesor") {
                $this->sql ="UPDATE profesores SET Password = '".$this->contrasena."' WHERE idUsuario = '".$this->usuario."' ";
            }elseif($this->rol == "Administrador"){
                $this->sql ="UPDATE t_users SET password = '".$this->contrasena."' WHERE usuario = '".$this->usuario."'";         
            }
            try {
                $stm = $this->Conexion->prepare($this->sql);
                $stm->execute();
                echo "Contraseña modificada con éxito";
            } catch (Exception $e) {
                echo "error al guardar los datos: ".$e;
            }
        }
    }
    
      //$objUsu = new Contrasena();
      //$objUsu->setDatos('Admin','123456');
      //echo $objUsu->generarToken();
?>