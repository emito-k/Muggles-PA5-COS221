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

            body{
            background-color: #DEF4FF;
        }
        }
    </style>
    <body>
        <?php
            include "./navbar.php";
        ?>

        <div class="w3-container" style="padding-top:50px;">
            <h1 style="font-family:lucida handwriting; text-align:center; font-weight:bold;">Signup</h1>
            <p style="text-align:center;">Please fill in this form to create an account.</p>
            <hr>
            <br>
            <form style="text-align:center;">
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required><br><br>

                <label for="name"><b>Name</b></label>
                <input type="input" placeholder="Enter Name" name="name" required><br><br>

                <label for="surname"><b>Surname</b></label>
                <input type="input" placeholder="Enter Surname" name="surname" required><br><br>

                <p>Please enter a unique username.</p>
                <label for="username"><b>Username</b></label>
                <input type="input" placeholder="Enter Email" name="email" required><br><br>

                <p>Please ensure that password is 6-8 characters and contains Uppercase and Lowercase letters, Digits and Symbols.</p>
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
        </div>
    </body>
</html>