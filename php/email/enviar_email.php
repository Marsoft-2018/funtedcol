<?php 

try{
	if ($_REQUEST['email'] != "") {
		$dest = "info@funtedcol.com.co";
		$head = "From: ".$_REQUEST['email']."\r\n";
		$msg = "Nombre:   ".$_REQUEST['nombre']."\n";
		$msg.= "Email:  ".$_REQUEST['email']."\n";
		$msg.= "Telefono:    ".$_REQUEST['telefono']."\n";
		$msg.= "------------------------------- \n\n";
		$msg.= $_REQUEST['mensaje']."\n\n";
		$msg.= "------------------------------- \n";
		if (mail($dest, "Preinscripcion desde la página", $msg, $head)) {
			echo 'Mensaje enviado con exito<br>';
			echo "Gracias por ponerte en contacto con Funtedcol, pronto recibiras respuesta a tu mensaje";
		} else {
		    echo '<span style="color:#FF0000;">Error al enviar mensaje</span>';
		}
	}
	//header('location:index.html');
}catch (Exception $e){
	$_SESSION['mensaje']=$e->getMessage();
	header('location:errorpage.php');
}
?>

