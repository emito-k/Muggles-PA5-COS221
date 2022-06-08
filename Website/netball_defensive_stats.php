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
            <h1 style="font-family:lucida handwriting; text-align:center;">Netball Defensive Stats</h1>
            <hr>
            <br>
            <form style="text-align:center; border:2px solid black; padding:15px;">
                <label for="shots_allowed"><b>Shots Penalty Shot Allowed</b></label>
                <input type="number" id="shots_allowed" placeholder="Enter Shots Penalty Shot Allowed" name="shots_allowed" min="1"><br><br>

                <label for="goals_allowed"><b>Goals Penalty Shot Allowed</b></label>
                <input type="number" id="goals_allowed" placeholder="Enter Goals Penalty Shot Allowed" name="goals_allowed" min="1"><br><br>

                <label for="ave"><b>Goals Against Average</b></label>
                <input type="number" id="ave" placeholder="Enter Goals Against Average" name="ave" min="1"><br><br>

                <label for="tot"><b>Goals Against Total</b></label>
                <input type="number" id="tot" placeholder="Enter Goals Against Total" name="tot" min="1"><br><br>

                <label for="saves"><b>Saves</b></label>
                <input type="number" id="saves" placeholder="Enter Saves" name="saves" min="1"><br><br>

                <label for="per"><b>Save Percentage</b></label>
                <input type="number" id="per" placeholder="Enter Save Percentage" name="per" min="1">%<br><br>

                <label for="cp"><b>Catches Punches</b></label>
                <input type="number" id="cp" placeholder="Enter Catches Punches" name="cp" min="1"><br><br>

                <label for="goal"><b>Shots On Goal Total</b></label>
                <input type="number" id="goal" placeholder="Enter Shots On Goal Total" name="goal" min="1"><br><br>

                <label for="shootout_tot"><b>Shots Shootout Total</b></label>
                <input type="number" id="shootout_tot" placeholder="Enter Shots Shootout Total" name="shootout_tot" min="1"><br><br>

                <label for="shootout_allowed"><b>Shots Shootout Allowed</b></label>
                <input type="number" id="shootout_allowed" placeholder="Enter Shots Shootout Allowed" name="shootout_allowed" min="1"><br><br>

                <label for="blk"><b>Shots Blocked</b></label>
                <input type="number" id="blk" placeholder="Enter Shots Blocked" name="blk" min="0"><br><br>

                <label for="shutouts"><b>Shutouts</b></label>
                <input type="number" id="shutouts" placeholder="Enter Shutouts" name="shutouts" min="1"><br><br>

                <label for="own"><b>Goals Own</b></label>
                <input type="number" id="own" placeholder="Goals Own" name="own" min="1"><br><br>

                <div class="clearfix">
                    <button type="submit" class="submitbtn">Submit</button>
                </div>
            </form>
        </div>
    </body>
</html>