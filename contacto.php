<?php
    $destino= "webmaster@vitrinacomercial.tk";
    $name = $_POST["Nombre"];
    $email = $_POST["Email"];
    $phone = $_POST["Teléfono"];
    $comment = $_POST["Mensaje"];
    $contenido = "Nombre: " $name . "\Email: " $email "\Teléfono: " $phone "\Mensaje: " $comment;
    mail($destino, "Contacto", $contenido);
?>





