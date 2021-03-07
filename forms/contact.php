<?php
    ini_set( 'display_errors', 1 );
    $error = error_reporting( E_ALL );
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: ventas@indemmexico.com';
    $to = 'ventas@indemmexico.com';
    $subject = $_POST['subject'];

    $body = "De: $name\n Correo Electrónico: $email\n Mensaje:\n $message";

    if(mail($to, $subject, utf8_decode($body), $from)) {
        echo "<script>document.getElementById(\"success-mail\").style.display=\"block\";
                document.getElementById(\"error-mail\").style.display=\"none\";</script>";
    } else {
        echo "<script>document.getElementById(\"error-mail\").style.display=\"block\";
                document.getElementById(\"success-mail\").style.display=\"none\";</script>";
    }
?>