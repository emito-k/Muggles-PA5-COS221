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

        <div class="w3-container">
            <div class="page-title">
                <h1>Welcome to the Netball-Network-Webwork!</h1>
            </div>

            <!-- PLAYER INFORMATION -->
            <div class="table-container">
                <div class="table-title">
                    <h3>Player data</h3>
                </div>

                <!-- AJAX BUTTONS -->
                <button class="w3-button w3-white w3-border">+ Add player</button>
                <button class="w3-button w3-border">! Edit player</button>
                <button class="w3-button w3-red w3-border">- Remove player</button>

                <!-- TABLE -->
                <table class="w3-table-all w3-small">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Position</th>
                            <th>Gender</th>
                            <th>Team</th>
                            <th>Goals</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- ADD PHP HERE -->
                        <tr>
                            <td>1</td>
                            <td>Mito</td>
                            <td>Khoza</td>
                            <td>Goal Keeper</td>
                            <td>Male</td>
                            <td>Cool beans</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Yashvitha</td>
                            <td>Kanaparty</td>
                            <td>Wind Attacker</td>
                            <td>Femle</td>
                            <td>Cool beans</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Sovaria</td>
                            <td>Naidu</td>
                            <td>Goal Keeper</td>
                            <td>Female</td>
                            <td>Muggles</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Mish</td>
                            <td>Naidoo</td>
                            <td>Mid</td>
                            <td>Male</td>
                            <td>Muggles</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- TEAMS INFORMATION -->
            <div class="table-container">
                <div class="table-title">
                    <h3>Teams data</h3>
                </div>

                <!-- AJAX BUTTONS -->
                <button class="w3-button w3-white w3-border">+ Add Team</button>
                <button class="w3-button w3-border">! Edit Team</button>
                <button class="w3-button w3-red w3-border">- Remove Team</button>

                <!-- TEAMS INFORMATION -->
                <table class="w3-table-all w3-small">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Team Name</th>
                            <th>Coach</th>
                            <th>Number of Players</th>
                            <th>Wins</th>
                            <th>Losses</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- ADD PHP HERE -->
                        <tr>
                            <td>1</td>
                            <td>Muggles</td>
                            <td>Steve</td>
                            <td>2</td>
                            <td>0</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Cool beans</td>
                            <td>Apinda</td>
                            <td>2</td>
                            <td>1</td>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- COACHES INFORMATION -->
            <div class="table-container">
                <div class="table-title">
                    <h3>Team Coaches data</h3>
                </div>

                <!-- AJAX BUTTONS -->
                <button class="w3-button w3-white w3-border">+ Remove Coach</button>
                <button class="w3-button w3-border">! Edit Coach</button>
                <button class="w3-button w3-red w3-border">- Remove Coach</button>

                <table class="w3-table-all w3-small">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Team</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- ADD PHP HERE -->
                        <tr>
                            <td>1</td>
                            <td>Muggles</td>
                            <td>Steve</td>
                            <td>Brown</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Cool beans</td>
                            <td>Apinda</td>
                            <td>Tekula</td>
                        </tr>
                    </tbody>
                </table>
            </div>


            <!-- UMPIRE INFORMATION -->
            <div class="table-container">
                <div class="table-title">
                    <h3>Umpires data</h3>
                </div>

                <!-- AJAX BUTTONS -->
                <button class="w3-button w3-white w3-border">+ Remove Umpire</button>
                <button class="w3-button w3-border">! Edit Umpire</button>
                <button class="w3-button w3-red w3-border">- Remove Umpire</button>

                <table class="w3-table-all w3-small">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Games watched</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- ADD PHP HERE -->
                        <tr>
                            <td>1</td>
                            <td>Robert</td>
                            <td>Black</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- MATCHES INFORMATION -->
            <div class="table-container">
                <div class="table-title">
                    <h3>Team Matches data</h3>
                </div>

                <!-- AJAX BUTTONS -->
                <button class="w3-button w3-white w3-border">+ Remove Match</button>
                <button class="w3-button w3-border">! Edit Match</button>
                <button class="w3-button w3-red w3-border">- Remove Match</button>

                <table class="w3-table-all w3-small">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Team A</th>
                            <th>Team A Score</th>
                            <th>Team B</th>
                            <th>Team B Score</th>
                            <th>Umpire</th>
                            <th>Winner</th>
                            <th>Tournament</th>
                            <th>Stage</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- ADD PHP HERE -->
                        <tr>
                            <td>1</td>
                            <td>Muggles</td>
                            <td>0</td>
                            <td>Cool Beans</td>
                            <td>2</td>
                            <td>Robert Black</td>
                            <td>Cool Beans</td>
                            <td>Fake quidditch</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Muggles</td>
                            <td>1</td>
                            <td>Cool Beans</td>
                            <td>0</td>
                            <td>Robert Black</td>
                            <td>Muggles</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- GOALS INFORMATION -->
            <div class="table-container">
                <div class="table-title">
                    <h3>Goals</h3>
                </div>

                <!-- AJAX BUTTONS -->
                <button class="w3-button w3-white w3-border">+ Remove Goal</button>
                <button class="w3-button w3-border">! Edit Goal</button>
                <button class="w3-button w3-red w3-border">- Remove Goal</button>

                <table class="w3-table-all w3-small">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Player</th>
                            <th>Team</th>
                            <th>Match</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- ADD PHP HERE -->
                        <tr>
                            <td>1</td>
                            <td>Mito Khoza</td>
                            <td>Cool Beans</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- TOURNAMENT INFORMATION -->
            <div class="table-container">
                <div class="table-title">
                    <h3>Tournament data</h3>
                </div>

                <!-- AJAX BUTTONS -->
                <button class="w3-button w3-white w3-border">+ Remove Tournament</button>
                <button class="w3-button w3-border">! Edit Tournament</button>
                <button class="w3-button w3-red w3-border">- Remove Tournament</button>

                <table class="w3-table-all w3-small">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tournament Name</th>
                            <th>Year</th>
                            <th>Winner</th>
                            <th>Runner Up</th>
                            <th>Number of Teams</th>
                            <th>Number of matches</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- ADD PHP HERE -->
                        <tr>
                            <td>1</td>
                            <td>Fake quidditch</td>
                            <td>2022</td>
                            <td>Cool Beans</td>
                            <td>Muggles</td>
                            <td>2</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- END OF THE WEB CONTAINER -->
        </div>

        
        <?php include "./footer.php"?>

    </body>
</html>