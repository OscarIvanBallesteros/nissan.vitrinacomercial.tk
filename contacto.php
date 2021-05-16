<?php

function validar_campo($campo) {
    $campo = trim($campo);
    $campo = stripcslashes($campo);
    $campo = htmlspecialchars($campo);

    return $campo;
}

    if (isset($_POST['name']) && !empty($_POST['name']) &&
        isset($_POST['email']) && !empty($_POST['email']) &&
        isset($_POST['phone']) && !empty($_POST['phone']) &&
        isset($_POST['comment']) && !empty($_POST['comment'])) {

        $destinoMail = "webmaster@vitrinacomercial.tk";


        $name = validar_campo($_POST["name"]);
        $email = validar_campo($_POST["email"]);
        $phone = validar_campo($_POST["phone"]);
        $comment = validar_campo($_POST["comment"]);

        $contenido = "Nombre: " .$name. "\n Email: " .$email. "\n Teléfono: " .$phone. "\n Mensaje: " .$comment;

        mail($destinoMail, "Mensaje de contacto del cliente" . $name, $contenido);

            return print("Ok se envió");
        }
    
        return print("No se puede enviar");



