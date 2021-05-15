<?php
    $destino= "webmaster@vitrinacomercial.tk";
    $name = $_POST["Nombre"];
    $mail = $_POST["Email"];
    $phone = $_POST["Teléfono"];
    $comment = $_POST["Mensaje"];
    $contenido = "Nombre: " $name . "\Email: " $mail "\Teléfono: " $phone "\Mensaje: " $comment;
    mail($destino, "Contacto", $contenido);
?>





