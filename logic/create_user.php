<?php

function serve()
{
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method != "POST") {
        http_response_code(403);
        return null;
    }
    $json_request = $
}
