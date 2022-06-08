<?php
// Include the database connection file
include_once("config.php");
?>

<html>
    <head>
        <title>Muggle - NetballNet</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <style>
        label{
            display: inline-block;
            width: 150px;
            text-align: right;
        }

        body{
            background-color: #DEF4FF;
        }
    </style>
    <body>
        <?php
            include "./navbar.php";
        ?>

        <div class="w3-container" style="padding-top:50px;">
            <h1 style="font-family:lucida handwriting; text-align:center;">Create Address</h1>
            <hr>
            <br>
            <form action="./address.php" method="post" style="text-align:center;">
                <label for="lang"><b>Language</b></label>
                <input type="input" placeholder="Enter Language" name="lang" required><br><br>

                <label for="suite"><b>Suite</b></label>
                <input type="input" placeholder="Enter Suite" name="suite"><br><br>

                <label for="floor"><b>Floor</b></label>
                <input type="number" id="floor" placeholder="Enter Floor Number" name="floor" min="1"><br><br>

                <label for="building"><b>Building</b></label>
                <input type="input" placeholder="Enter Building" name="building" required><br><br>

                <label for="street_nr"><b>Street Number</b></label>
                <input type="number" id="street_nr" placeholder="Enter Street Number" name="street_nr" min="1"><br><br>
                
                <label for="street"><b>Street</b></label>
                <input type="input" placeholder="Enter Street Name" name="street" required><br><br>
                
                <label for="street_prefix"><b>Street Prefix</b></label>
                <input type="input" placeholder="Enter Street Prefix" name="street_prefix" required><br><br>

                <label for="street_suffix"><b>Street Suffix</b></label>
                <input type="input" placeholder="Enter Street Suffix" name="street_suffix" required><br><br>

                <label for="neighbourhood"><b>Neighbourhood</b></label>
                <input type="input" placeholder="Enter Neighbourhood" name="neighbourhood" required><br><br>

                <label for="dis"><b>District</b></label>
                <input type="input" placeholder="Enter District" name="dis" required><br><br>

                <label for="loc"><b>Locality</b></label>
                <input type="input" placeholder="Enter Locality" name="loc" required><br><br>

                <label for="county"><b>County</b></label>
                <input type="input" placeholder="Enter County" name="county" required><br><br>

                <label for="reg"><b>Region</b></label>
                <input type="input" placeholder="Enter Region" name="reg" required><br><br>

                <label for="code"><b>Postal Code</b></label>
                <input type="number" id="code" placeholder="Enter Postal Code" name="code" min="1"><br><br>

                <label for="country"><b>Country</b></label>
                <input type="input" placeholder="Enter Country" name="country" required><br><br>

                <input type="submit">
            </form>
        </div>
    </body>
</html>