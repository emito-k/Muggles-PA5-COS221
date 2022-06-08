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
            $location_id = $_POST["location_id"];
            $publisher_id = $_POST["publisher_id"];
            $site_key = $_POST["site_key"];
            $site_name = $_POST["site_name"];
            $language = $_POST["language"];
            
            if(isset($_GET["action"]) && $_GET["action"] == "update") {
                $id = $_GET["id"];
                if($db->execute_statement("UPDATE sites SET site_key = $site_key, publisher_id = $publisher_id, location_id = $location_id WHERE id=$id")
                && $db->execute_statement("UPDATE display_names SET full_name = '$site_name' WHERE entity_type = 'site' AND entity_id=$id")) {
                    goToHomePage();
                }
                else {
                    // echo "UPDATE sites SET site_key = $site_key, publisher_id = $publisher_id, location_id = $location_id WHERE id=$id";
                    // echo "<br />";
                    // echo "UPDATE display_names SET fullname = '$site_name' WHERE entity_type = 'site' AND entity_id=$id";
                    goToErrorPage();
                }
            }
            else if($db->execute_statement("INSERT INTO sites(site_key, publisher_id, location_id) VALUES($site_key, $publisher_id, $location_id)")) {
                $row = $db->execute_statement("SELECT id FROM sites ORDER BY id DESC LIMIT 1");
                $row = mysqli_fetch_row($row);

                // print_r($row);

                // echo "INSERT INTO display_names(fullname, entity_type, entity_id) VALUES('$site_name', 'site', $row[0])";

               if ($db->execute_statement("INSERT INTO display_names(language, full_name, entity_type, entity_id) VALUES('$language', '$site_name', 'site', $row[0])")) {
                   goToHomePage();
               }
               else {
                   goToErrorPage();
               }
            }
            else {
                echo "INSERT INTO sites(site_key, publisher_id, location_id) VALUES($site_key, $publisher_id, $location_id)";
                goToErrorPage();
            }
        }
        else if($_SERVER["REQUEST_METHOD"] == "GET") {
            if(isset($_GET["action"]) && isset($_GET["id"])) {
                $id = $_GET["id"];

                if($_GET["action"] == "view") {
                    // print out everything
                    $result = $db->execute_statement("SELECT * FROM sites WHERE id = $id");
                    if($result && mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_row($result);
                        $headers = array('id', 'site_key', 'site_name');
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
                else if($_GET["action"] == "delete" && $result = $db->execute_statement("DELETE FROM sites WHERE id = $id")) {
                    // perform deletion
                    echo "DELETE FROM display_names WHERE entity_type = 'site' AND entity_id = $id";
                    // $db->execute_statement("DELETE FROM display_names WHERE entity_type = 'site' AND entity_id = $id");
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