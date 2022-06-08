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
            include "./Database.php";
        ?>
        <div class="w3-container" style="margin-left:130px; padding-top:50px;">
        <h1>Create Player</h1>
        <hr>
        <br>
        <form method="POST" action="./player.php">
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

            <hr>
            <h3>Home Town</h3>
            <hr>
            <br>
            <label for="location_id"><b>Location ID</b></label>
                <select name="location_id" id="location_id">
                    <?php
                    $result = $db->execute_statement("SELECT id, province, city FROM locations");

                    if($result && mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_row($result)) {
                            echo "<option value='$row[0]'>$row[1] ($row[2])</option>";
                        }
                    }
                    else {
                        goToErrorPage(); 
                    }
                    ?>
                </select><br><br>
            <input type="submit">
        </form>
        </div>
    </body>
</html>