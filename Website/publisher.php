<?php
// Include the database connection file
include_once("config.php");
include "./error_handling.php";
?>

<html>
    <head>
        <title>Muggle - NetballNet</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
        <?php
            include "./navbar.php";
        ?>
        <div class="w3-container" style="margin-left:130px; padding-top:50px;">
            <h1>View Address</h1>
            <hr>
            <br>
        <?php
        include "./Database.php";

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            // DATA ENTRY
            $publisher_key = $_POST["publisher_key"];
            $publisher_name = $_POST["publisher_name"];

            if(isset($_GET["action"]) && $_GET["action"] == "update") {
                $id = $_GET["id"];
                if($db->execute_statement("UPDATE publishers SET publisher_key = '$publisher_key', publisher_name = '$publisher_name' WHERE id=$id")) {
                    goToHomePage();
                }
                else {
                    goToErrorPage();
                }
            }
            else if($db->execute_statement("INSERT INTO publishers(publisher_key, publisher_name) VALUES('$publisher_key', '$publisher_name')")) {
                goToHomePage();
            }
            else {
                goToErrorPage();
            }
        }
        else if($_SERVER["REQUEST_METHOD"] == "GET") {
            if(isset($_GET["action"]) && isset($_GET["id"])) {
                $id = $_GET["id"];

                if($_GET["action"] == "view") {
                    // print out everything
                    $result = $db->execute_statement("SELECT * FROM publishers WHERE id = $id");
                    if($result && mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_row($result);
                        $headers = array('id', 'publisher_key', 'publisher_name');
                        echo "<table class='w3-table-all w3-small'>";
                            echo "<tr><th>Variables</th><th>Values</th></tr>";
                        for($index = 0; $index < count($headers); $index++) {
                            echo "<tr>";
                            echo "<td>" . $headers[$index] . "</td>";
                            echo "<td>" . $row[$index] . "</td>";
                            echo "</tr>";
                        }

                        echo "</table>";

                    }
                    else {
                        goToErrorPage();
                    }

                }
                else if($_GET["action"] == "edit") {
                    // update functions
                }
                else if($_GET["action"] == "delete" && $result = $db->execute_statement("DELETE FROM publishers WHERE id = $id")) {
                    // perform deletion
                    goToHomePage();
                }
                else {
                    goToErrorPage();
                }
            }
            else {
                goToErrorPage();
            }
        }

        ?>
        </div>
    </body>
</html>