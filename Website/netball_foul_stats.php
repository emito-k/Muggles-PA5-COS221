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
    </style>
    <body>
        <?php
            include "./navbar.php";
        ?>

        <div class="w3-container" style="padding-top:50px;">
            <h1 style="font-family:lucida handwriting; text-align:center;">Netball Foul Stats</h1>
            <hr>
            <br>
            <form style="text-align:center; border:2px solid black; padding:15px;">
                <label for="suf"><b>Fouls Suffered</b></label>
                <input type="number" id="suf" placeholder="Enter Fouls Suffered" name="suf" min="0"><br><br>

                <label for="com"><b>Fouls Committed</b></label>
                <input type="number" id="com" placeholder="Enter Fouls Committed" name="com" min="0"><br><br>

                <label for="tot"><b>Cautions Total</b></label>
                <input type="number" id="tot" placeholder="Enter Cautions Total" name="tot" min="0"><br><br>

                <label for="pen"><b>Cautions Pending</b></label>
                <input type="number" id="pen" placeholder="Enter Cautions Pending" name="pen" min="0"><br><br>

                <label for="pts_tot"><b>Caution Points Total</b></label>
                <input type="number" id="pts_tot" placeholder="Enter Caution Points Total" name="pts_tot" min="1"><br><br>

                <label for="pts_pen"><b>Caution Points Pending</b></label>
                <input type="number" id="pts_pen" placeholder="Enter Caution Points Pending" name="pts_pen" min="1"><br><br>

                <label for="ej_tot"><b>Ejections Total</b></label>
                <input type="number" id="ej_tot" placeholder="Enter Ejections Total" name="ej_tot" min="1"><br><br>

                <div class="clearfix">
                    <button type="submit" class="submitbtn">Submit</button>
                </div>
            </form>
        </div>
    </body>
</html>