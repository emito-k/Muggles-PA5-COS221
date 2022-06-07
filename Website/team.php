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
        <h1>Create Team</h1>
        <hr>
        <br>
        <form>
            <label for="pfp"><b>Upload a profile picture</b></label>
            <input type="file" id="myFile" name="filename"><br><br>

            <label for="t_name"><b>Team Name</b></label>
            <input type="input" placeholder="Enter Team Name" name="t_name" required><br><br>

            <hr>
            <h3>Team Location</h3>
            <hr>
            <br>
            <label for="timezone"><b>Time Zone</b></label>
            <select name="timezone" id="timezone">
                <option value="ast">AST</option>
                <option value="est">EST</option>
                <option value="cst">CST</option>
                <option value="mst">MST</option>
                <option value="pst">PST</option>
                <option value="akst">AKST</option>
                <option value="hst">HST</option>
                <option value="utc_11">UTC-11</option>
                <option value="utc_10">UTC+10</option>
            </select><br><br>

            <label for="lat"><b>Latitude</b></label>
            <input type="input" placeholder="Enter Latitude" name="lat" required><br><br>

            <label for="long"><b>Longitude</b></label>
            <input type="input" placeholder="Enter Longitude" name="long" required><br><br>

            <label for="sub"><b>Suburb</b></label>
            <input type="input" placeholder="Enter Suburb" name="sub" required><br><br>

            <label for="city"><b>City</b></label>
            <input type="input" placeholder="Enter City" name="city" required><br><br>

            <label for="prov"><b>State/Province</b></label>
            <input type="input" placeholder="Enter State/Province" name="prov" required><br><br>

            <label for="country"><b>Country</b></label>
            <input type="input" placeholder="Enter Country" name="country" required><br><br>

            <label for="code"><b>Code</b></label>
            <input type="number" id="code" placeholder="Enter Code" name="code" min="1"><br><br>

            <input type="submit">
        </form>
    </body>
</html>