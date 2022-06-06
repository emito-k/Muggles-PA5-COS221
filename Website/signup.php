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

        <h1>Signup</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <br>
        <form>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required><br><br>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required><br><br>

            <label for="password-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="password-repeat" required><br><br>

            <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label><br><br>

            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p><br><br>

            <div class="clearfix">
                <button type="submit" class="signupbtn">Sign Up</button>
            </div>
        </form>
    </body>
</html>