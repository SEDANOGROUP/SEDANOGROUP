<?php

 $destino= "dufercho2010@gmail.com";
 $nombre= $_POST["name"]
 $correo= $_POST["email"]
 $asunto= $_POST["subject"]
 $mensaje= $_POST["message"]
 $contenido= "name: " . $nombre . "nEmail: " . $correo . "nSubject: "
 . $asunto . "nMessage: " . $message;
 mail($destino,"Contacto",$contenido);
 

?>