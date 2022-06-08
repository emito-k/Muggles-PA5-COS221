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

        <div class="w3-container" style=".padding-top:50px;">
            <h1 style="font-family:lucida handwriting; text-align:center;">Create Event</h1>
            <hr>
            <br>
            <form action="./event.php" method="post" style="text-align:center;">
                <label for="e_name"><b>Event Name</b></label>
                <input type="input" placeholder="Enter Event Name" name="e_name"><br><br>

                <label for="start"><b>Start Date</b></label>
                <input type="date" id="start" name="start" required style="width:210px;"><br><br>

                <label for="end"><b>End Date</b></label>
                <input type="date" id="end" name="end" required style="width:210px;"><br><br>

                <label for="sites"><b>Sites</b></label>
                <input type="input" placeholder="Enter Sites" name="sites" required><br><br>

                <label for="duration"><b>Duration</b></label>
                <input type="input" placeholder="Enter Duration" name="duration" required><br><br>

                <label for="e_nr"><b>Event Number</b></label>
                <input type="number" id="e_nr" placeholder="Enter Event Number" name="e_nr" min="1"><br><br>

                <label for="r_nr"><b>Round Number</b></label>
                <input type="number" id="r_nr" placeholder="Enter Round Number" name="r_nr" min="1"><br><br>

                <input type="submit">
            </form>
        </div>
    </body>
</html>