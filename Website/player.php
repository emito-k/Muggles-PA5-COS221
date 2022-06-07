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
        <h1>Create Player</h1>
        <hr>
        <br>
        <form>
            <label for="pfp"><b>Upload a profile picture</b></label>
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

            <input type="submit">
        </form>
    </body>
</html>