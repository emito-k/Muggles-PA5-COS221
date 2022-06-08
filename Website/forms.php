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
            <h1 style="font-family:lucida handwriting; text-align:center; font-weight:bold;">Event States</h1>
            <hr>
            <br>
            <form style="text-align:center; border:2px solid black; padding:15px;">
                <label for="state"><b>Current State</b></label>
                <input type="input" placeholder="Enter Current State" name="state" required><br><br>

                <label for="seq_nr"><b>Sequence Number</b></label>
                <input type="number" id="seq_nr" placeholder="Enter Sequence Number" name="seq_nr" min="1"><br><br>

                <label for="p_val"><b>Period Value</b></label>
                <input type="number" id="p_val" placeholder="Enter Period Value" name="p_val" min="1"><br><br>

                <label for="elapsed"><b>Period Time Elapsed</b></label>
                <input type="input" placeholder="Enter Period Time Elapsed" name="elapsed" required><br><br>

                <label for="remaining"><b>Period Time Remaining</b></label>
                <input type="input" placeholder="Enter Period Time Remaining" name="remaining" required><br><br>

                <div class="clearfix">
                    <button type="submit" class="submitbtn">Submit</button>
                </div>
            </form><br><br>
            <h1 style="font-family:lucida handwriting; text-align:center; font-weight:bold;">Event Action Plays</h1>
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

                <div class="clearfix">
                    <button type="submit" class="submitbtn">Submit</button>
                </div>
            </form><br><br>
            <h1 style="font-family:lucida handwriting; text-align:center; font-weight:bold;">Event Action Fouls</h1>
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
            <h1 style="font-family:lucida handwriting; text-align:center; font-weight:bold;">Event Action Participants</h1>
            <hr>
            <br>
            <form style="text-align:center; border:2px solid black; padding:15px;">
                <label for="role"><b>Participant Role</b></label>
                <input type="input" placeholder="Enter Participant Role" name="role" required><br><br>

                <div class="clearfix">
                    <button type="submit" class="submitbtn">Submit</button>
                </div>
            </form><br><br>
            <h1 style="font-family:lucida handwriting; text-align:center; font-weight:bold;">Event Action Penalties</h1>
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
            <h1 style="font-family:lucida handwriting; text-align:center; font-weight:bold;">Event Action Substitutions</h1>
            <hr>
            <br>
            <form style="text-align:center; border:2px solid black; padding:15px;">
                <textarea rows="4" cols="50" name="reason">Substitution Reason...</textarea><br><br>

                <textarea rows="4" cols="50" name="comment">Comment...</textarea><br><br>

                <div class="clearfix">
                    <button type="submit" class="submitbtn">Submit</button>
                </div>
            </form><br><br>
        </div>
    </body>
</html>