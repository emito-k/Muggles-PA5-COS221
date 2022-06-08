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
            <h1>Create Publisher</h1>
            <hr>
            <br>
            <form action="./publisher.php" method="post">
                <label for="publisher_key"><b>Publisher key</b></label>
                <input type="input" placeholder="Enter publisher key" name="publisher_key" required><br><br>

                <label for="publisher_name"><b>Publisher name</b></label>
                <input type="input" placeholder="Enter publisher name" name="publisher_name"><br><br>

                <input type="submit">
            </form>
        </div>
    </body>
</html>