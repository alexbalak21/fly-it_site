<?php
require_once("./db_interface.php");

function serve()
{
    $created = false;
    $current_user = 1;
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method != 'POST') {
        http_response_code(403);
        return null;
    } else {
        if (!(isset($_POST['title']) && isset($_POST['location']) && isset($_POST['type']) && isset($_POST['time']) && isset($_POST['salary']))) {
            http_response_code(400);
            return null;
        }
        $created = add_job($title = $_POST['title'], $location = $_POST['location'], $type = $_POST['type'], $time = $_POST['time'], $salary = $_POST['salary'], $user_id = $current_user, $technologies = $_POST['technologies'], $description = $_POST['description']);
        if ($created) {
            header("Content-Type: application/json");
            $data = json_encode($_POST);
            http_response_code(201);
            echo $data;
            return null;
        } else {
            http_response_code(500);
            return null;
        }
    }
}

serve();


?>
jobs