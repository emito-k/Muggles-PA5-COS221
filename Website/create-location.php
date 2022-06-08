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
        ?>

        <div class="w3-container" style="margin-left:130px; padding-top:50px;">
            <h1>Create Location</h1>
            <hr>
            <br>
            <form action="./location.php" method="post">
                <label for="timezone"><b>Timezone</b></label>
                <input type="input" placeholder="Enter Timezone" name="timezone" required><br><br>

                <label for="latitude"><b>Latitude</b></label>
                <input type="input" placeholder="Enter latitude" name="latitude"><br><br>

                <label for="longitude"><b>Longitude</b></label>
                <input type="input" id="longitude" placeholder="Enter longitude Number" name="longitude" min="1"><br><br>

                <label for="country_code"><b>Country code</b></label>
                <input type="input" placeholder="Enter country code" name="country_code" required><br><br>

                <label for="city"><b>City</b></label>
                <input type="input" id="city" placeholder="Enter Street Number" name="city" min="1"><br><br>
                
                <label for="province"><b>Province</b></label>
                <input type="input" placeholder="Enter province Name" name="province" required><br><br>
                
                <label for="area"><b>Area</b></label>
                <input type="input" placeholder="Enter Area Name" name="area" required><br><br>

                <input type="submit">
            </form>
        </div>
    </body>
</html>