<?php
  // Configuración del correo electrónico
  $to = "gomezgonzalod46@gmail.com";
  $subject = "Nuevo formulario enviado";

  // Recopilar la información del formulario
  $nombre = $_POST["nombre"];
  $telefono = $_POST["telefono"];
  $direccion = $_POST["direccion"];
  $pedido = $_POST["pedido"];

  // Crear el cuerpo del correo electrónico
  $body = "NOMBRE: $nombre\nTELEFONO: $telefono\nDIRECCION: $direccion\nPEDIDO: $pedido";

  // Enviar el correo electrónico
  mail($to, $subject, $body);

  // Redirigir al usuario a una página de agradecimiento
  
  exit;
?>