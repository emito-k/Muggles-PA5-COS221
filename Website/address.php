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
            $location_id = 1;
            $language = $_POST["lang"];
            $suite = $_POST["suite"];
            $floor = $_POST["floor"];
            $street_number = $_POST["street_nr"];
            $building = $_POST["building"];
            $street = $_POST["street"];
            $street_prefix = $_POST["street_prefix"];
            $street_suffix = $_POST["street_suffix"];
            $neighborhood = $_POST["neighbourhood"];
            $district = $_POST["dis"];
            $locality = $_POST["loc"];
            $region = $_POST["reg"];
            $postal_code = $_POST["code"];
            $country = $_POST["country"];
            $county = $_POST["county"];

            // data checking
            // echo "$language - $suite - $floor - $street_number - $street - $street_prefix - $street_suffix - $neighborhood - $district - $region - $code - $country";
            // echo "INSERT INTO addresses(location_id, language, suite, floor, building, street_number, street_prefix, street, street_suffix, neighborhood, district, locality, county, region, postal_code, country) VALUES($location_id, '$language', '$suite', '$floor', '$building', '$street_number', '$street_prefix', '$street', '$street_suffix', '$neighborhood', '$district', '$locality', '$country', '$region', '$postal_code', '$country')";
            if($_GET["action"] == "update") {
                $id = $_GET["id"];
                if($db->execute_statement("UPDATE addresses SET location_id = $location_id, language = '$language', suite='$suite', floor='$floor', building='$building', street_number='$street_number', street_prefix='$street_prefix', street='$street', street_suffix='$street_suffix', neighborhood='$neighborhood', district='$district', locality='$locality', county='$county', region='$region', postal_code='$postal_code', country='$country' WHERE id=$id")) {
                    goToHomePage();
                }
                else {
                    goToErrorPage();
                }
            }
            else if($db->execute_statement("INSERT INTO addresses(location_id, language, suite, floor, building, street_number, street_prefix, street, street_suffix, neighborhood, district, locality, county, region, postal_code, country) VALUES($location_id, '$language', '$suite', '$floor', '$building', '$street_number', '$street_prefix', '$street', '$street_suffix', '$neighborhood', '$district', '$locality', '$county', '$region', '$postal_code', '$country')")) {
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
                else if($_GET["action"] == "edit") {
                    // update functions
                }
                else if($_GET["action"] == "delete" && $result = $db->execute_statement("DELETE FROM addresses WHERE id = $id")) {
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