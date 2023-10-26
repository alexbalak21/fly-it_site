<?php

$to = "alex-blk@alwaysdata.net";

function serve()
{
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method != 'POST') {
        http_response_code(403);
        echo "Forbiden";
        return "";
    } else {
        if (!(isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['need']) && isset($_POST['message']))) {
            http_response_code(400);
            echo "Bad data in request";
            return null;
        }
        $name = $_POST['name'];
        $visitor_email = $_POST['mail'];
        $need = $_POST['need'];
        $message = $_POST['message'];
    }
    global $to;
    $name = $_POST['name'];
    $visitor_email = $_POST['mail'];
    $need = $_POST['need'];
    $message = $_POST['message'];
    $sent = send_mail($to, $name, $visitor_email, $need, $message);

    if ($sent) {
        http_response_code(202);
        echo "Mail has been sent";
        return true;
    } else {
        http_response_code(503);
        return false;
    }
}

function send_mail($to, $name, $visitor_email, $need, $message): bool
{
    $email_from = $visitor_email;
    $email_subject = "[Message de Fly-it.tech] : De " . $name . " - Besoin : " .  $need;
    $email_body = $message;
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";

    return @mail($to, $email_subject, $email_body, $headers);
}

serve();
