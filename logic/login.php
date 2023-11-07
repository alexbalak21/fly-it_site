<?php
require_once("./db_interface.php");


function serve()
{
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method != 'POST') {
        http_response_code(403);
        echo "Forbiden";
        return "";
    } else {
        if (!(isset($_POST['login']) && isset($_POST['password']))) {
            http_response_code(400);
            return null;
        }
        $login = $_POST['login'];
        $password = $_POST['password'];
        $pass_hash = get_hash($login);
        if ($pass_hash == null) {
            http_response_code(404);
            echo json_encode($_POST);
            return null;
        } else {
            if (password_verify($password, $pass_hash)) {
                http_response_code(202);
                header("Content-Type: application/json");
                $data = get_user($login);
                echo json_encode($data);
            } else {
                http_response_code(403);
                return null;
            }
        }
    }
}

serve();
