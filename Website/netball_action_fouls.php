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
            <h1 style="font-family:lucida handwriting; text-align:center;">Netball Action Fouls</h1>
            <hr>
            <br>
            <form style="text-align:center; border:2px solid black; padding:15px;">
                <label for="foul_name"><b>Foul Name</b></label>
                <input type="input" placeholder="Enter Foul Name" name="foul_name" required><br><br>

                <label for="foul_res"><b>Foul Result</b></label>
                <input type="input" placeholder="Enter Foul Result" name="foul_res" required><br><br>

                <label for="foul_type"><b>Foul Type</b></label>
                <input type="input" placeholder="Enter Foul Type" name="foul_type" required><br><br>

                <label for="fouler_id"><b>Fouler ID</b></label>
                <input type="number" id="fouler_id" placeholder="Enter Fouler ID" name="fouler_id" min="1"><br><br>

                <label for="r_type"><b>Recipient Type</b></label>
                <input type="input" placeholder="Enter Recipient Type" name="r_type" required><br><br>

                <label for="r_id"><b>Recipient ID</b></label>
                <input type="number" id="r_id" placeholder="Enter Recipient ID" name="r_id" min="1"><br><br>

                <textarea rows="4" cols="50" name="comment">Comment...</textarea><br><br>

                <div class="clearfix">
                    <button type="submit" class="submitbtn">Submit</button>
                </div>
            </form><br><br>
        </div>
    </body>
</html>