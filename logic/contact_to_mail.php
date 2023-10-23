<?php
$alredy_sent = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST'){


$name = $_POST['name'];
$visitor_email = $_POST['mail'];
$need = $_POST['need'];
$message = $_POST['message'];


    $to = "alex-blk@alwaysdata.net";
	$email_from = $visitor_email;
	$email_subject = "Besoin : " .  $need;
	$email_body = $message;
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);
    include("./components/alerts/message_sent.php");
    $alredy_sent = true;

}
?>

