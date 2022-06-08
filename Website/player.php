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
            <h1 style="font-family:lucida handwriting; text-align:center; font-weight:bold;">Create Player</h1>
            <hr>
            <br>
            <form style="text-align:center; border:2px solid black; padding:15px;">
                <label for="pfp" style="width:250px;"><b>Upload a profile picture</b></label>
                <input type="file" id="myFile" name="filename"><br><br>

                <label for="name"><b>Name</b></label>
                <input type="input" placeholder="Enter Name" name="name" required><br><br>

                <label for="surname"><b>Surname</b></label>
                <input type="input" placeholder="Enter Surname" name="surname" required><br><br>

                <label for="username"><b>Username</b></label>
                <input type="input" placeholder="Enter Username" name="username" required><br><br>

                <label for="birthday"><b>Birthday</b></label>
                <input type="date" id="birthday" name="birthday" required><br><br>

                <label for="lang"><b>Language</b></label>
                <input type="input" placeholder="Enter Language" name="lang" required><br><br>

                <label for="gender"><b>Gender</b></label>
                <select name="gender" id="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select><br><br>

                <label for="role"><b>Role</b></label>
                <input type="input" placeholder="Enter Role" name="role" required><br><br>

                <label for="pos"><b>Position</b></label>
                <input type="input" placeholder="Enter Position" name="pos" required><br><br>

                <label for="uniform_nr"><b>Uniform Number</b></label>
                <input type="input" placeholder="Enter Uniform Number" name="uniform_nr" required><br><br>

                <label for="height"><b>Height (m)</b></label>
                <input type="number" id="height" placeholder="Enter Height" name="height" min="1"><br><br>

                <label for="weight"><b>Weight (kg)</b></label>
                <input type="number" id="weight" placeholder="Enter Weight" name="weight" min="1"><br><br>

                <hr>
                <h3>Home Town</h3>
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

                <label for="code"><b>Code</b></label>
                <input type="number" id="code" placeholder="Enter Code" name="code" min="1"><br><br>

                <input type="submit">
            </form>
        </div>
    </body>
</html>