<?php
require_once('./logic/db_operations.php');

global $conn;
$conn = connect_sqlite("./db/database.sqlite");



//QUERRIES TO CREATE USERS AND PROFILES TABLES



function init_db()
{
    $create_users = "CREATE TABLE IF NOT EXISTS users (`id` INTEGER PRIMARY KEY AUTOINCREMENT, `first_name` TEXT, `last_name` TEXT, `username` TEXT, `email` TEXT NOT NULL UNIQUE, `pass_hash` TEXT NOT NULL, `last_connected` TIMESTAMP, `connected` INTEGER DEFAULT 0, `is_admin` INTEGER DEFAULT 0, `img_src` TEXT)";
    $create_profiles = "CREATE TABLE IF NOT EXISTS profiles (`id` INTEGER PRIMARY KEY AUTOINCREMENT, `created_by_id` INTEGER, `first_name` TEXT, `last_name` TEXT, 'tech' TEXT, `experiance` TEXT, `location` TEXT, `description` TEXT, `img_src`TEXT, `cv_src` TEXT, `active` INTEGER DEFAULT 1)";
    //CREATING TABLES
    execute_querry($create_users);
    execute_querry($create_profiles);
}




//TESTING INSARTS
add_user("Alexandre", "Balakirev", "alexbalak", "alex.balak@outloo.com", "Azerty123+", 1);
add_profile(1, "prenom", "nom", "java", "3 ans", "Lyon", "Descript...", "img location", 1);
