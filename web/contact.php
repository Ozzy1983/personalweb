<?php

if(isset($_POST["enviar"])){
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $addressee = "odcg@hotmail.es";
    $subject = "New message from $name $lastname";

    // Concatenar correctamente el contenido del correo
    $container = "Name: $name $lastname \n";
    $container .= "Phone: $phone \n";
    $container .= "Email: $email \n";
    $container .= "Message: $message";

    // Configuración del encabezado del correo
    $header = "From: memocode@soft.com" . "\r\n" .
              "Reply-To: $email" . "\r\n" .
              "X-Mailer: PHP/" . phpversion();

    // Enviar el correo
    $mail = mail($addressee, $subject, $container, $header);

    // Verificación de éxito en el envío del correo
    if($mail){
        echo "<script>alert('The email was sent correctly');</script>";
    } else {
        echo "<script>alert('The email was not sent');</script>";
    }
}

?>