<?php

$host = "localhost";
$db_name = "flyit";
$username = "root";
$db_password = "";

$conn = null;


function log_error($error = "Error")
{
    $logfile = fopen("../logs/errors.log", "a") or die("Unable to open file!");
    $new_log = date("d/m/Y  H:i:s") . " - " . $error . "\n \n";
    fwrite($logfile, $new_log);
    fclose($logfile);
    return null;
}


function log_evevnt($msg = "")
{
    $event_log = fopen("../logs/events.log", "a") or die("Unable to open file!");
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



function create_user($username = "JohnDoe", $email = "john.doe@mail.com", $password = "Azerty123*", $first_name = "John", $last_name = "Doe", $role = "user")
{
    $pass_hash = password_hash($password, PASSWORD_DEFAULT);
    $public_id = uniqid();
    $querry = "INSERT INTO users (first_name, last_name, username, email, pass_hash, role, public_id) VALUES ('$first_name', '$last_name', '$username', '$email', '$pass_hash', '$role', '$public_id')";
    $result = execute_querry($qry = $querry);
    if ($result) {
        log_evevnt("USER ADDED :  $first_name $last_name");
        return true;
    } else {
        log_error("FAILED QUERRY : $querry");
        return false;
    }
}

function update_user($id = 1, $username = "JohnDoe", $email = "john.doe@mail.com", $password = "", $first_name = "John", $last_name = "Doe", $role = "user")
{
    $pass_hash = "";
    if ($password != "") {
        $pass_hash = password_hash($password, PASSWORD_DEFAULT);
    }
    $qry = "UPDATE users SET username='$username', email='$email', pass_hash='$pass_hash', first_name='$first_name', last_name='$last_name', role='$role' WHERE id=$id";
    $result = execute_querry($qry);
    return $result;
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

function get_user($username_or_email = "")
{
    $data = fetch_one("SELECT id, first_name, last_name, username, email, role, public_id FROM users WHERE email='$username_or_email' OR username='$username_or_email'");
    return $data;
}


function add_job($title = "DevOps (F/H)", $location = "Lyon", $type = "CDI", $time = "Temps plein", $salary = '25k€/y', $user_id = 1, $technologies = "react, javascript, sql", $description = ""): bool
{
    $technologies = explode(',', $technologies);
    $technologies_json = json_encode($technologies);
    $public_id = uniqid();
    $querry = "INSERT INTO jobs (title, location, type, time, salary, technologies, description, published_by, public_id) VALUES ('$title', '$location', '$type', '$time', '$salary', '$technologies_json', '$description', '$user_id', '$public_id')";
    $result = execute_querry($qry = $querry);
    if ($result) {
        log_evevnt("JOB ADDED : $title by user_id : $user_id");
        return true;
    } else {
        log_error("FAILED QUERRY : $querry");
        return false;
    }
}


function read_jobs()
{
    $jobs = fetch_all("SELECT * FROM jobs");
    return $jobs;
}
