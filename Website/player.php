<?php
include "./Database.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // DATA ENTRY
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $fullname = "$name $surname";
    $username = $_POST["username"];
    $bod = $_POST["birthday"];
    $language = $_POST["lang"];
    $gender = $_POST["gender"];
    $latitude = $_POST["lat"];
    $longitude = $_POST["lat"];
    $latitude = $_POST["lat"];
    $suburb = $_POST["sub"];
    $city = $_POST["city"];
    $province = $_POST["prov"];
    $code = $_POST["code"];

    // data checking
    // echo "$fullname - $username - $bod - $language - $gender - $latitude - $longitude - $suburb - $city - $province - $code";
    
    // $db->execute_statement("INSERT INTO locations()");
}
else if($_SERVER["REQUEST_METHOD"] == "GET") {
    print_r($_GET);
}

?>