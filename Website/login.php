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

        <h1>Login</h1>
        <hr>
        <br>
        <form>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required><br><br>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required><br><br>

            <div class="clearfix">
                <button type="submit" class="loginbtn">Login</button>
            </div>
        </form>
    </body>
</html>