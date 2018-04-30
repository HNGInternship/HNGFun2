<?php

if(isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $message = $_POST['message'];

    if ($email) {

        $content = "Name: $name\n";
        $content .= "Email: $name\n";
        $content .= "Message: $message\n";

        $headers = "From: webmaster@example.com\r\nReply-to: $email";
        mail('info@exmaple.com', 'Contact Form', $message, $headers);
    }
}


?>