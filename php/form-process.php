<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "El nombre es requerido ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "El correo electrónico es requerido";
} else {
    $email = $_POST["email"];
}

// Subject
if (empty($_POST["subject"])) {
    $errorMSG .= "El asunto es requerido ";
} else {
    $subject = $_POST["guest"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "El mensaje es requerido ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "xochicalli.gms@gmail.com";
$Subject = "Nuevo mensaje desde el sitio web";

// prepare email body text
$Body = "";
$Body .= "Nombre: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Asunto: ";
$Body .= $subject;
$Body .= "\n";
$Body .= "Mensaje: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
    header("Location: contacto.php");
}else{
    if($errorMSG == ""){
        echo "Ha ocurrido un error al enviar el mensaje :(";
    } else {
        echo $errorMSG;
    }
}

?>