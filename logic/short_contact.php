<?php
//DESTINATION MAIL

//DEV MAIL FOR TESTING
$to = "alex-blk@alwaysdata.net";

// PROD MAIL
// $to = "recrutement@fly-it.tech";


//RECIVES DATA FORM THE CLIENT CHECKS THE DATA AND RESPONDS 202: MAIL SENT /400: DATA IS MISSING/ 403: BAD METHOD / 503: SERVER ERROR 
function serve()
{
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method != 'POST') {
        http_response_code(403);
        echo "Forbiden";
        return "";
    } else {
        if (!(isset($_POST['name']) && isset($_POST['mail']))) {
            http_response_code(400);
            echo "Data missing in request";
            return null;
        }
        $name = $_POST['name'];
        $visitor_email = $_POST['mail'];
    }
    global $to;
    $name = $_POST['name'];
    $visitor_email = $_POST['mail'];
    $sent = send_mail($to, $name, $visitor_email);

    if ($sent) {
        http_response_code(202);
        echo "Mail has been sent";
        return true;
    } else {
        http_response_code(503);
        return false;
    }
}

//COMPOSES THE MAIL AND SENDS IT, RETURN TRUE IF MAIL SENT, FALCE OTHERWHISE
function send_mail($to, $name, $visitor_email): bool
{
    $email_from = $visitor_email;
    $email_subject = "[Contact de Fly-it.tech] - Nom : " . $name;
    $email_body = "Cette personne du nom de : " . $name . " à laissé son email : " . $visitor_email;
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    // mail returns true or false
    $sent = @mail($to, $email_subject, $email_body, $headers);
    return $sent;
}

serve();
