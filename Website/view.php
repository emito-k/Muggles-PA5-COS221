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
                if($_SERVER["REQUEST_METHOD"] == "GET") {
                    if(!isset($_GET["target"]) || !isset($_GET["id"])) {
                        goToErrorPage();
                    }

                    $id = $_GET["id"];

                    if($_GET["target"] == "address") {
                        // print out everything
                        
                        goToErrorPage();
                        $result = $db->execute_statement("SELECT * FROM addresses WHERE id = $id");
                        if($result && mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_row($result);
                            $headers = array('id', 'location_id', 'language', 'suite', 'floor', 'building', 'street_number', 'street_prefix', 'street', 'street_suffix', 'neighborhood', 'district', 'locality', 'country', 'region', 'postal_code', 'country');
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
                }
                else {
                    goToErrorPage();
                }

                ?>

        </div>
    </body>
</html>