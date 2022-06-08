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
            <h1 style="font-family:lucida handwriting; text-align:center;">Login</h1>
            <hr>
            <br>
            <form style="text-align:center;">
                <label for="username"><b>Username</b></label>
                <input type="input" placeholder="Enter Username" name="username" required><br><br>

                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required><br><br>

                <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                </label><br><br>

                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p><br><br>

                <div class="clearfix">
                    <button type="submit" class="loginbtn">Login</button>
                </div>
            </form>
        </div>
    </body>
</html>