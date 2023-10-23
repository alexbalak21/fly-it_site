<?php
$alredy_sent = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    try{
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
        
        if (!@mail($to,$email_subject,$email_body,$headers)){
            throw new Exception('mail method failed');
        }
        else{
            include("./components/alerts/message_sent.php");
            echo "<script>
            const contact_page_form = {
                name: '$name',
                mail: '$visitor_email',
                need: '$need',
                message: '$message'
                                    }   
        </script>";
        }
    }
    catch(Exception $e){
        require_once("./components/alerts/error_sending_message.php");

    }
}  
?>

