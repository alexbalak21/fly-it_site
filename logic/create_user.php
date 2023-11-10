<?php
require_once "../db/interface.php";

function listen_user_create_request()
{
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method != "POST") {
        http_response_code(403);
        return null;
    }
    $request_body = file_get_contents('php://input');
    $data = json_decode($request_body, true);
    if (!(isset($data['username']) && isset($data['email']) && isset($data['password']))) {
        http_response_code(400);
        return null;
    }
    extract($data);
    $created = create_user($username, $email, $password, $first_name, $last_name);
    if ($created) {
        $user = get_user($username);
        http_response_code(201);
        header("Content-Type: application/json");
        echo json_encode($user);
        return null;
    }
}

listen_user_create_request();
