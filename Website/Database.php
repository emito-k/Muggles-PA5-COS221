<?php
// INCLUSIONS
include "./header.php";

class Database {
    private $db;

    function __construct($db_hostname, $db_name, $db_username, $db_password) {
        $this->db = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);     
    }

    function __destruct() {
        mysqli_close($this->db);
    }

    function execute_statement($query) {
        // ! this is not safe, use PDO next time
        $result = mysqli_query($this->db, $query);
        return $result;
    }
}

$db = new Database($db_hostname, $db_name, $db_username, $db_password);

?>