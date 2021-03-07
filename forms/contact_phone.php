<?php
    ini_set( 'display_errors', 1 );
    $error = error_reporting( E_ALL );
    $number_phone = $_POST['number_phone'];
    $from = 'From: ventas@indemmexico.com';
    $to = 'ventas@indemmexico.com, jcfernandez@indemmexico.com, sal.garcia@indemmexico.com, ann.estrada@indemmexico.com, fleonardo@indemmexico.com, finanzas@indemmexico.com, ma.herrera@indemmexico.com';
    $subject = "Cliente Nuevo";

    $body = "Buen día, favor de comunicarse con el siguiente número telefónico: $number_phone\n\n\n\nEste número fue enviado a traves del sitio web indemmexico.com";

    if(mail($to, $subject, utf8_decode($body), $from)) {
        echo "<script>document.getElementById(\"success-mail\").style.display=\"block\";
                document.getElementById(\"error-mail\").style.display=\"none\";</script>";
        header("location:index.html");
        die();
    } else {
        echo "<script>document.getElementById(\"error-mail\").style.display=\"block\";
                document.getElementById(\"success-mail\").style.display=\"none\";</script>";
        header("location:index.html");
        die();
    }
?>

