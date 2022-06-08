<?php
// Include the database connection file
include_once("config.php");
?>

<html>
    <head>
        <title>Muggle - NetballNet</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
        <?php
            include "./navbar.php";
            include "./error_handling.php";
            include "./Database.php";

            if(!isset($_GET["id"])) {
                goToErrorPage();
            }

            $id = $_GET["id"];
            $result = $db->execute_statement("SELECT * FROM locations WHERE id=$id");

            if(mysqli_num_rows($result) == 0) {
                goToErrorPage();
            }

            $row = mysqli_fetch_row($result);

            // print_r($row);
        ?>

        <div class="w3-container" style="margin-left:130px; padding-top:50px;">
            <h1>Create Location</h1>
            <hr>
            <br>
            <form action="./location.php?action=update&id=<?php echo $id;?>" method="post">
                <label for="timezone"><b>Timezone</b></label>
                <input type="input" value="<?php echo $row[1];?>" placeholder="Enter Timezone" name="timezone" required><br><br>

                <label for="latitude"><b>Latitude</b></label>
                <input type="input" value="<?php echo $row[2];?>" placeholder="Enter latitude" name="latitude"><br><br>

                <label for="longitude"><b>Longitude</b></label>
                <input type="input" value="<?php echo $row[3];?>" id="longitude" placeholder="Enter longitude Number" name="longitude" min="1"><br><br>

                <label for="country_code"><b>Country code</b></label>
                <input type="input" value="<?php echo $row[4];?>" placeholder="Enter country code" name="country_code" required><br><br>

                <label for="city"><b>City</b></label>
                <input type="input"  value="<?php echo $row[5];?>" id="city" placeholder="Enter Street Number" name="city" min="1"><br><br>
                
                <label for="province"><b>Province</b></label>
                <input type="input" value="<?php echo $row[6];?>" placeholder="Enter province Name" name="province" required><br><br>
                
                <label for="area"><b>Area</b></label>
                <input type="input" value="<?php echo $row[7];?>" placeholder="Enter Area Name" name="area" required><br><br>

                <input type="submit">
            </form>
        </div>
    </body>
</html>