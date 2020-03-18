<?php
	$destino = 'contacto@sdkllaves.cl';
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mesaje = $_POST['mesaje'];
	$contenido = "Nombre: " . $name . "\nCorreo: " . $email . "\nMensaje: "	 . $mesaje;
   	$asunto = 'Contacto SDK';
   	mail($destino, $asunto, $contenido);
   	header('Location:/thanks.php');
	
?>
