<?php

$host = "localhost";
$db_name = "flyit";
$username = "root";
$db_password = "";

$conn = null;


function log_error($error = "Error")
{
    $logfile = fopen("./logs/errors.log", "w") or die("Unable to open file!");
    $new_log = date("d/m/Y  H:i:s") . " - " . $error . "\n \n";
    fwrite($logfile, $new_log);
    fclose($logfile);
    return null;
}


function log_evevnt($msg = "")
{
    $event_log = fopen("./logs/events.log", "a") or die("Unable to open file!");
    $new_log = date("d/m/Y  H:i:s") . " - " . $msg . "\n";
    fwrite($event_log, $new_log);
    fclose($event_log);
    return null;
}





function get_conn($host, $db_name, $username, $db_password = "")
{
    try {
        $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $db_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        log_error("DB conn failed: " . $e->getMessage());
        return null;
    }
}

$conn = get_conn($host, $db_name, $username);


function execute_querry(string $qry)
{
    global $conn;
    if ($conn == null) {
        return false;
    }
    try {
        $conn->exec($qry);
        $msg = "EXECUETD QRY : " . $qry . "\n";
        return true;
    } catch (PDOException $e) {
        log_error($qry  . $e->getMessage());
        return false;
    }
}


function fetch_all(string $qry = "SELECT * FROM profiles")
{
    global $conn;
    if ($conn == null) {
        return false;
    }
    $stmt = $conn->query($qry);
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function fetch_one(string $qry = "SELECT * FROM users WHERE id=1")
{
    global $conn;
    if ($conn == null) {
        return false;
    }
    $stmt = $conn->query($qry);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}



function add_user($firstname = "John", $lastname = "Doe", $username = "JohnDoe", $email = "john.doe@mail.com", $password = "Azerty123*", $role = 3)
{
    $pass_hash = password_hash($password, PASSWORD_DEFAULT);
    $public_id = uniqid();
    $querry = "INSERT INTO users (first_name, last_name, username, email, pass_hash, role, public_id) VALUES ('$firstname', '$lastname', '$username', '$email', '$pass_hash', '$role', '$public_id')";
    $result = execute_querry($qry = $querry);
    if ($result) {
        log_evevnt("USER ADDED :  $firstname $lastname");
        return true;
    } else {
        log_error("FAILED QUERRY : $querry");
        return false;
    }
}

function get_hash($login = "")
{
    $data = fetch_one("SELECT pass_hash FROM users WHERE email='$login' OR username='$login'");
    if (isset($data['pass_hash'])) {
        return $data['pass_hash'];
    } else {
        return null;
    }
}

function get_user($login = "")
{
    $data = fetch_one("SELECT id, first_name, last_name, username, email, role, public_id FROM users WHERE email='$login' OR username='$login'");
    return $data;
}
