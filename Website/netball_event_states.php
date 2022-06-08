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
            <h1 style="font-family:lucida handwriting; text-align:center;">Netball Event Stats</h1>
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

                <label for="min_elapsed"><b>Minutes Elapsed</b></label>
                <input type="input" placeholder="Enter Minutes Elapsed" name="min_elapsed" required><br><br>

                <label for="p_min_elapsed"><b>Period Minute Elapsed</b></label>
                <input type="input" placeholder="Enter Period Minute Elapsed" name="p_min_elapsed" required><br><br>

                <label for="score_team"><b>Score Team</b></label>
                <input type="input" placeholder="Enter Score Team" name="score_team" required><br><br>

                <label for="score_team_opp"><b>Score Team Opposing</b></label>
                <input type="input" placeholder="Enter Score Team Opposing" name="score_team_opp" required><br><br>

                <label for="score_team_home"><b>Score Team Home</b></label>
                <input type="input" placeholder="Enter Score Team Home" name="score_team_home" required><br><br>

                <label for="score_team_away"><b>Score Team Away</b></label>
                <input type="input" placeholder="Enter Score Team Away" name="score_team_away" required><br><br>

                <label for="rec_type"><b>Record Type</b></label>
                <input type="input" placeholder="Enter Record Type" name="rec_type" required><br><br>

                <div class="clearfix">
                    <button type="submit" class="submitbtn">Submit</button>
                </div>
            </form>
        </div>
    </body>
</html>