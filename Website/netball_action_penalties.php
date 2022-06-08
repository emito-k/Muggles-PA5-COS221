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
            <h1 style="font-family:lucida handwriting; text-align:center;">Netball Event Stats</h1>
            <hr>
            <br>
            <form style="text-align:center; border:2px solid black; padding:15px;">
                <label for="p_type"><b>Penalty Type</b></label>
                <input type="input" placeholder="Enter Penalty Type" name="p_type" required><br><br>

                <label for="p_level"><b>Penalty Level</b></label>
                <input type="number" id="p_level" placeholder="Enter Penalty Level" name="p_level" min="1"><br><br>

                <label for="c_level"><b>Caution Level</b></label>
                <input type="number" id="c_level" placeholder="Enter Caution Level" name="c_level" min="1"><br><br>

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