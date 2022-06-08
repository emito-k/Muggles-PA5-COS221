<?php
// Include the database connection file
include_once("config.php");
include "./Database.php";
?>

<html>
    <head>
        <title>Muggle - NetballNet</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
        <?php
            include "./navbar.php";

            session_start();
        ?>


        <nav class="w3-sidebar w3-bar-block w3-light-grey" style="width:130px">
            <button class="w3-bar-item w3-button  tablink" onclick="openTab(event, 'Username')"><?php echo $_SESSION["full_name"];?></button>
            <button class="w3-bar-item w3-button  tablink" onclick="openTab(event, 'Player')">Player</button>
            <button class="w3-bar-item w3-button  tablink" onclick="openTab(event, 'Teams')">Teams</button>
            <button class="w3-bar-item w3-button  tablink" onclick="openTab(event, 'Events')">Events</button>
            <button class="w3-bar-item w3-button  tablink" onclick="openTab(event, 'Sites')">Sites</button>
            <button class="w3-bar-item w3-button  tablink" onclick="openTab(event, 'Locations')">Locations</button>
            <button class="w3-bar-item w3-button  tablink" onclick="openTab(event, 'Addresses')">Addresses</button>
            <button class="w3-bar-item w3-button  tablink" onclick="openTab(event, 'Users')">Users</button>
            <button class="w3-bar-item w3-button  tablink" onclick="openTab(event, 'Publishers')">Publishers</button>
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
                            <th>Publisher id</th>
                            <th>gender</th>
                            <th>birth date</th>
                            <th>home town location id</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- ADD PHP HERE -->
                        <?php
                        
                        $result = $db->execute_statement("SELECT entity_id, full_name FROM display_names WHERE entity_type='persons' LIMIT 100");

                        if($result && mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_row($result)) {
                                echo "<tr>";

                                foreach($row as $col) {
                                    echo "<td>$col</td>";
                                }
                                $id = $row[0];
                                echo "<td><a href='./player.php?action=edit&id=$id'><button class='editbtn'>Edit</button></a></td>";
                                echo "<td><a href='./player.php?action=delete&id=$id'><button class='deletebtn'>Delete</button></a></td>";
                                echo "</tr>";
                            }
                        }
                        else {
                            echo "<tr>";
                            echo "<td colspan=100%>No data available. Try creating a new player</td>";
                            echo "</tr>";
                        }

                        ?>
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
                            <th>Team Key</th>
                            <th>Home site id</th>
                            <th>View all</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php                       
                        $result = $db->execute_statement("SELECT id, team_key, home_site_id FROM teams");

                        if($result && mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_row($result)) {
                                echo "<tr>";

                                foreach($row as $col) {
                                    echo "<td>$col</td>";
                                }
                                $id = $row[0];
                                echo "<td><a href='./location.php?action=view&id=$id'><button class='viewbtn'>View all</button></a></td>";
                                echo "<td><a href='./location.php?action=edit&id=$id'><button class='editbtn'>Edit</button></a></td>";
                                echo "<td><a href='./location.php?action=delete&id=$id'><button class='deletebtn'>Delete</button></a></td>";
                                echo "</tr>";
                            }
                        }
                        else {
                            echo "<tr>";
                            echo "<td colspan=100%>No data available. Try creating a new team</td>";
                            echo "</tr>";
                        }
                        ?>
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


            <!-- ADDRESSES INFORMATION -->
            <div class="table-container" id="Addresses">
                <div class="table-title">
                    <h3>Addresses</h3>
                </div>

                <!-- AJAX BUTTONS -->
                <a href="./create-address.php"><button class="w3-button w3-white w3-border">+ Add Address</button></a>

                <table class="w3-table-all w3-small">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Location ID</th>
                            <th>Language</th>
                            <th>Suite</th>
                            <th>Floor</th>
                            <th>Building</th>
                            <th>District</th>
                            <th>Street number</th>
                            <th>Street</th>
                            <th>View all</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        
                        $result = $db->execute_statement("SELECT id, location_id, language, suite, floor, building, district, street_number, street FROM addresses");

                        if($result && mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_row($result)) {
                                echo "<tr>";

                                foreach($row as $col) {
                                    echo "<td>$col</td>";
                                }
                                $id = $row[0];
                                echo "<td><a href='./address.php?action=view&id=$id'><button class='viewbtn'>View</button></a></td>";
                                echo "<td><a href='./edit-address.php?id=$id'><button class='editbtn'>Edit</button></a></td>";
                                echo "<td><a href='./address.php?action=delete&id=$id'><button class='deletebtn'>Delete</button></a></td>";
                                echo "</tr>";
                            }
                        }
                        else {
                            echo "<tr>";
                            echo "<td colspan=100%>No data available. Try creating a new address</td>";
                            echo "</tr>";
                        }

                        ?>
                    </tbody>
                </table>
            </div>

            <!-- SITES INFORMATION -->
            <div class="table-container" id="Sites">
                <div class="table-title">
                    <h3>Sites data</h3>
                </div>

                <!-- AJAX BUTTONS -->
                <p>Be warned, you can't create a site without a publisher...</p>
                <a href="./create-site.php"><button class="w3-button w3-white w3-border">+ Add Site</button></a>

                <table class="w3-table-all w3-small">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Language</th>
                            <th>Site Name</th>
                            <th>Site Key</th>
                            <th>Publisher ID</th>
                            <th>Location ID</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        
                        $result = $db->execute_statement("SELECT * FROM sites");

                        if($result && mysqli_num_rows($result) > 0) {
                            $other = $db->execute_statement("SELECT full_name, language FROM display_names WHERE entity_type = 'site'");

                            while($row = mysqli_fetch_row($result)) {
                                $o = mysqli_fetch_row($other);
                                echo "<td>$row[0]</td>";
                                echo "<td>$o[1]</td>";
                                echo "<td>$o[0]</td>";
                                
                                for($index = 1; $index < count($row); $index++) {
                                    echo "<td>$row[$index]</td>";
                                }

                                $id = $row[0];
                                // echo "<td><a href='./site.php?action=view&id=$id'><button class='viewbtn'>View</button></a></td>";
                                echo "<td><a href='./edit-site.php?id=$id'><button class='editbtn'>Edit</button></a></td>";
                                echo "<td><a href='./site.php?action=delete&id=$id'><button class='deletebtn'>Delete</button></a></td>";
                                echo "</tr>";
                            }
                        }
                        else {
                            echo "<tr>";
                            echo "<td colspan=100%>No data available. Try creating a new location</td>";
                            echo "</tr>";
                        }

                        ?>
                    </tbody>
                </table>
            </div>

            <!-- LOCATIONS INFORMATION -->
            <div class="table-container" id="Locations">
                <div class="table-title">
                    <h3>Locations</h3>
                </div>

                <!-- AJAX BUTTONS -->
                <a href="./create-location.php"><button class="w3-button w3-white w3-border">+ Add Location</button></a>

                <table class="w3-table-all w3-small">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Timezone</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Country code</th>
                            <th>City</th>
                            <th>Province</th>
                            <th>Area</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                        $result = $db->execute_statement("SELECT * FROM locations");

                        if($result && mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_row($result)) {
                                echo "<tr>";

                                foreach($row as $col) {
                                    echo "<td>$col</td>";
                                }
                                $id = $row[0];
                                echo "<td><a href='./location.php?action=view&id=$id'><button class='viewbtn'>View</button></a></td>";
                                echo "<td><a href='./edit-location.php?id=$id'><button class='editbtn'>Edit</button></a></td>";
                                echo "<td><a href='./location.php?action=delete&id=$id'><button class='deletebtn'>Delete</button></a></td>";
                                echo "</tr>";
                            }
                        }
                        else {
                            echo "<tr>";
                            echo "<td colspan=100%>No data available. Try creating a new location</td>";
                            echo "</tr>";
                        }

                        ?>
                    </tbody>
                </table>
            </div>

            <!-- USERS INFORMATION -->
            <div class="table-container" id="Users">
                <div class="table-title">
                    <h3>Users data</h3>
                </div>

                <!-- AJAX BUTTONS -->
                <button class="w3-button w3-white w3-border">+ Remove User</button>

                <table class="w3-table-all w3-small">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        
                        $result = $db->execute_statement("SELECT * FROM users");

                        if($result && mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_row($result)) {
                                echo "<tr>";

                                foreach($row as $col) {
                                    echo "<td>$col</td>";
                                }
                                $id = $row[0];
                                echo "<td><a href='./location.php?action=edit&id=$id'><button class='editbtn'>Edit</button></a></td>";
                                echo "<td><a href='./location.php?action=delete&id=$id'><button class='deletebtn'>Delete</button></a></td>";
                                echo "</tr>";
                            }
                        }
                        else {
                            echo "<tr>";
                            echo "<td colspan=100%>No data available. Try creating a new user</td>";
                            echo "</tr>";
                        }

                        ?>
                    </tbody>
                </table>
            </div>

            <!-- PUBLISHER INFORMATION -->
            <div class="table-container" id="Publishers">
                <div class="table-title">
                    <h3>Publisher's data</h3>
                </div>

                <!-- AJAX BUTTONS -->
                <a href="./create-publisher.php"><button class="w3-button w3-white w3-border">+ Add Publisher</button></a>

                <table class="w3-table-all w3-small">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Publisher key</th>
                            <th>Publisher Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        
                        $result = $db->execute_statement("SELECT * FROM publishers");

                        if($result && mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_row($result)) {
                                echo "<tr>";

                                foreach($row as $col) {
                                    echo "<td>$col</td>";
                                }
                                $id = $row[0];
                                echo "<td><a href='./edit-publisher.php?id=$id'><button class='editbtn'>Edit</button></a></td>";
                                echo "<td><a href='./publisher.php?action=delete&id=$id'><button class='deletebtn'>Delete</button></a></td>";
                                echo "</tr>";
                            }
                        }
                        else {
                            echo "<tr>";
                            echo "<td colspan=100%>No data available. Try creating a new publisher</td>";
                            echo "</tr>";
                        }

                        ?>
                    </tbody>
                </table>
            </div>

            
            <!-- STATISTICS INFORMATION -->
            <div class="table-container" id="Statistics">
                <div class="table-title">
                    <h3>STATISTICS</h3>
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