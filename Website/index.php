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


        <nav class="w3-sidebar w3-bar-block w3-light-grey" style="width:130px">
            <button class="w3-bar-item w3-button  tablink" onclick="openTab(event, 'Username')">Username</button>
            <button class="w3-bar-item w3-button  tablink" onclick="openTab(event, 'Player')">Player</button>
            <button class="w3-bar-item w3-button  tablink" onclick="openTab(event, 'Teams')">Teams</button>
            <button class="w3-bar-item w3-button  tablink" onclick="openTab(event, 'Events')">Events</button>
            <button class="w3-bar-item w3-button  tablink" onclick="openTab(event, 'Sites')">Sites</button>
            <button class="w3-bar-item w3-button  tablink" onclick="openTab(event, 'Locations')">Locations</button>
            <button class="w3-bar-item w3-button  tablink" onclick="openTab(event, 'Addresses')">Addresses</button>
            <button class="w3-bar-item w3-button  tablink" onclick="openTab(event, 'Users')">Users</button>
            <button class="w3-bar-item w3-button  tablink" onclick="openTab(event, 'Statistics')">Statistics</button>
            <!-- <button class="w3-bar-item w3-button" onclick="openTab(event, 'Tokyo')">Events</button> -->
        </nav>

        <div class="w3-container" style="margin-left:130px; padding-top:50px;">
            <div class="page-title">
                <h1>Welcome to the Netball-Network-Webwork!</h1>
            </div>

            <!-- PLAYER INFORMATION -->
            <div class="table-container" id="Player">
                <div class="table-title">
                    <h3>Player data</h3>
                </div>

                <!-- AJAX BUTTONS -->
                <button class="w3-button w3-white w3-border" onclick="document.location = './create-player.php'">+ Add player</button>
                
                <!-- TABLE -->
                <table class="w3-table-all w3-small">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- ADD PHP HERE -->
                        <tr class="1">
                            <td>1</td>
                            <td>Mito Khoza</td>
                            <td>Male</td>
                            <td><button type="submit" class="editbtn">Edit</button></td> <!-- edit btn -->
                            <td><button type="submit" class="deletebtn">Delete</button></td></td> <!-- delete btn -->
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Yashvitha Kanaparthy</td>
                            <td>Femle</td>
                            <td><button type="submit" class="editbtn">Edit</button></td>
                            <td><button type="submit" class="deletebtn">Delete</button></td></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Sovaria Naidu</td>
                            <td>Female</td>
                            <td><button type="submit" class="editbtn">Edit</button></td>
                            <td><button type="submit" class="deletebtn">Delete</button></td></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Mish Naidoo</td>
                            <td>Male</td>
                            <td><button type="submit" class="editbtn">Edit</button></td>
                            <td><button type="submit" class="deletebtn">Delete</button></td></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- TEAMS INFORMATION -->
            <div class="table-container" id="Teams">
                <div class="table-title">
                    <h3>Teams data</h3>
                </div>

                <!-- AJAX BUTTONS -->
                <button class="w3-button w3-white w3-border">+ Add Team</button>

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
                            <th>Edit</th>
                            <th>Delete</th>
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
                            <td><button type="submit" class="editbtn">Edit</button></td>
                            <td><button type="submit" class="deletebtn">Delete</button></td></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Cool beans</td>
                            <td>Apinda</td>
                            <td>2</td>
                            <td>1</td>
                            <td>0</td>
                            <td><button type="submit" class="editbtn">Edit</button></td>
                            <td><button type="submit" class="deletebtn">Delete</button></td></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- COACHES INFORMATION -->
            <div class="table-container" id="Events">
                <div class="table-title">
                    <h3>Team Coaches data</h3>
                </div>

                <!-- AJAX BUTTONS -->
                <button class="w3-button w3-white w3-border">+ Remove Coach</button>

                <table class="w3-table-all w3-small">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Team</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- ADD PHP HERE -->
                        <tr>
                            <td>1</td>
                            <td>Muggles</td>
                            <td>Steve</td>
                            <td>Brown</td>
                            <td><button type="submit" class="editbtn">Edit</button></td>
                            <td><button type="submit" class="deletebtn">Delete</button></td></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Cool beans</td>
                            <td>Apinda</td>
                            <td>Tekula</td>
                            <td><button type="submit" class="editbtn">Edit</button></td>
                            <td><button type="submit" class="deletebtn">Delete</button></td></td>
                        </tr>
                    </tbody>
                </table>
            </div>


            <!-- UMPIRE INFORMATION -->
            <div class="table-container" id="Addresses">
                <div class="table-title">
                    <h3>Umpires data</h3>
                </div>

                <!-- AJAX BUTTONS -->
                <button class="w3-button w3-white w3-border">+ Remove Umpire</button>

                <table class="w3-table-all w3-small">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Games watched</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- ADD PHP HERE -->
                        <tr>
                            <td>1</td>
                            <td>Robert</td>
                            <td>Black</td>
                            <td>1</td>
                            <td><button type="submit" class="editbtn">Edit</button></td>
                            <td><button type="submit" class="deletebtn">Delete</button></td></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- MATCHES INFORMATION -->
            <div class="table-container" id="Sites">
                <div class="table-title">
                    <h3>Team Matches data</h3>
                </div>

                <!-- AJAX BUTTONS -->
                <button class="w3-button w3-white w3-border">+ Remove Match</button>

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
                            <th>Edit</th>
                            <th>Delete</th>
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
                            <td><button type="submit" class="editbtn">Edit</button></td>
                            <td><button type="submit" class="deletebtn">Delete</button></td></td>
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
                            <td><button type="submit" class="editbtn">Edit</button></td>
                            <td><button type="submit" class="deletebtn">Delete</button></td></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- GOALS INFORMATION -->
            <div class="table-container" id="Locations">
                <div class="table-title">
                    <h3>Goals</h3>
                </div>

                <!-- AJAX BUTTONS -->
                <button class="w3-button w3-white w3-border">+ Remove Goal</button>

                <table class="w3-table-all w3-small">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Player</th>
                            <th>Team</th>
                            <th>Match</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- ADD PHP HERE -->
                        <tr>
                            <td>1</td>
                            <td>Mito Khoza</td>
                            <td>Cool Beans</td>
                            <td>1</td>
                            <td><button type="submit" class="editbtn">Edit</button></td>
                            <td><button type="submit" class="deletebtn">Delete</button></td></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- TOURNAMENT INFORMATION -->
            <div class="table-container" id="Users">
                <div class="table-title">
                    <h3>Tournament data</h3>
                </div>

                <!-- AJAX BUTTONS -->
                <button class="w3-button w3-white w3-border">+ Remove Tournament</button>

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
                            <th>Edit</th>
                            <th>Delete</th>
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
                            <td><button type="submit" class="editbtn">Edit</button></td>
                            <td><button type="submit" class="deletebtn">Delete</button></td></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- TOURNAMENT INFORMATION -->
            <div class="table-container" id="Statistics">
                <div class="table-title">
                    <h3>Tournament data</h3>
                </div>

                <!-- AJAX BUTTONS -->
                <button class="w3-button w3-white w3-border">+ Remove Tournament</button>

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
                            <th>Edit</th>
                            <th>Delete</th>
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
                            <td><button type="submit" class="editbtn">Edit</button></td>
                            <td><button type="submit" class="deletebtn">Delete</button></td></td>
                        </tr>
                    </tbody>
                </table>
            </div>


            <!-- END OF THE WEB CONTAINER -->
            <?php include "./footer.php"?>
        </div>

        

        <!-- Scripts -->
        <script src="./scripts/sidebar.js"></script>
    </body>
</html>