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
        body{
            background-color: #B0B0B0;
        }
    </style>
    <body>
        <?php
            include "./navbar.php";
        ?>

        <div class="w3-container" style="padding-top:50px;">
            <h1>Seems like something went wrong...</h1>
            <hr>
            <br>
            <p>Go back to <a href="index.php"> home page.</a></p>
            <p>Refresh the page.</p>
            <p>Make sure you have a secure internet connection.</p>
        </div>
    </body>
</html>