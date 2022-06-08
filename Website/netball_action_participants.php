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
            <h1 style="font-family:lucida handwriting; text-align:center;">Netball Action Participants</h1>
            <hr>
            <br>
            <form style="text-align:center; border:2px solid black; padding:15px;">
                <label for="role"><b>Participant Role</b></label>
                <input type="input" placeholder="Enter Participant Role" name="role" required><br><br>

                <div class="clearfix">
                    <button type="submit" class="submitbtn">Submit</button>
                </div>
            </form><br><br>
        </div>
    </body>
</html>