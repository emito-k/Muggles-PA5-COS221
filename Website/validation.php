<?php
// defintions
define("API_KEY_LENGTH", 30);

// includes
include "./config.php";
include "./Database.php";

function validateEmail($email) {
    return preg_match("/[a-z0-9]+@[a-z]+\.[a-z]{2,3}/i", $email);
}

function validateName($name) {
    return strlen($name) <= 32 && preg_match("/^[a-zA-Z]+$/i", $name);
}

function validatePassword($password) {
    return preg_match("/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/i", $password);
}

function validateKey($key) {
    return strlen($key) == API_KEY_LENGTH && preg_match("/^[a-f0-9]+$/", $key);
}

function isEmailRegistered($email) {
    global $db;
    $result = $db->execute_statement("SELECT * FROM user_table WHERE user_table.email = '$email'");

    return mysqli_num_rows($result) == 1;
}

function isCredentialsValid($email, $password) {
    global $db;
    global $salt;
    $result = $db->execute_statement("SELECT password FROM user_table WHERE user_table.email = '$email'");
    $row = mysqli_fetch_row($result);
    $hashed_password = hash("gost", $password . $salt);
    return $hashed_password == $row[0];
}

function registeredKey($key) {
    if(!validateKey($key)) {
        return false;
    }
    
    global $db;
    
    $result = $db->execute_statement("SELECT api_key FROM user_table WHERE api_key = '$key'");

    return mysqli_num_rows($result) == 1;
}

?>