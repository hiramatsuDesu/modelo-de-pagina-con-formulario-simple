<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$para = 'mail_cliente@gmail.com';
$titulo = 'ASUNTO DEL MENSAJE';
$header = 'From: ' . $email. '';
$msjCorreo = "Nombre: $nombre \n E-mail: $email \n Mensaje: \n $mensaje";

if($_POST['submit'])
{
    if(mail($para, $titulo, $msjCorreo, $header))
    {
        echo "<script languaje = 'javascript'>
        alert ('Mensaje enviado, muchas gracias!..');
        window.location.href = 'http//nombre_sitio_donde_subes_la_pagina.com';
        </script>";
    }
    else
    {
        echo 'Fallo envío';
    }
}

?>