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
            <h1 style="font-family:lucida handwriting; text-align:center;">Netball Action Plays</h1>
            <hr>
            <br>
            <form style="text-align:center; border:2px solid black; padding:15px;">
                <label for="play_type"><b>Play Type</b></label>
                <input type="input" placeholder="Enter Play Type" name="play_type" required><br><br>

                <label for="score_attempt_type"><b>Score Attempt Type</b></label>
                <input type="input" placeholder="Enter Score Attempt Type" name="score_attempt_type" required><br><br>

                <label for="play_res"><b>Play Result</b></label>
                <input type="input" placeholder="Enter Play Result" name="play_res" required><br><br>

                <textarea rows="4" cols="50" name="comment">Comment...</textarea><br><br>

                <label for="team_id"><b>Team ID</b></label>
                <input type="number" id="team_id" placeholder="Enter Team ID" name="team_id" min="1"><br><br>

                <label for="play_key"><b>Play Key</b></label>
                <input type="input" placeholder="Enter Play Key" name="play_key" required><br><br>

                <label for="pts"><b>Points</b></label>
                <input type="number" id="pts" placeholder="Enter Points" name="points" min="1"><br><br>

                <label for="p_level"><b>Penalty Level</b></label>
                <input type="number" id="p_level" placeholder="Enter Penalty Level" name="p_level" min="1"><br><br>

                <label for="r_type"><b>Recipient Type</b></label>
                <input type="input" placeholder="Enter Recipient Type" name="r_type" required><br><br>

                <div class="clearfix">
                    <button type="submit" class="submitbtn">Submit</button>
                </div>
            </form><br><br>
        </div>
    </body>
</html>