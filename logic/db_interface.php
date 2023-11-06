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
