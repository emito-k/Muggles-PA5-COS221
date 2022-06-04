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
            include "./header.php";
        ?>

        <div class="w3-container">
            <div class="page-title">
                <h1>Welcome to the Netball-Network-Webwork!</h1>
            </div>

            <div class="table-container">
                <div class="table-title">
                    <h3>All players</h3>
                </div>
                <button class="w3-button w3-white w3-border">+ Add player</button>
                <table class="w3-table-all w3-small">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Position</th>
                            <th>Gender</th>
                            <th>Team</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mito</td>
                            <td>Khoza</td>
                            <td>Goal Keeper</td>
                            <td>Male</td>
                            <td>Cool beans</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Yashvitha</td>
                            <td>Kanaparty</td>
                            <td>Wind Attacker</td>
                            <td>Femle</td>
                            <td>Cool beans</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Sovaria</td>
                            <td>Naidu</td>
                            <td>Goal Keeper</td>
                            <td>Female</td>
                            <td>Muggles</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Mish</td>
                            <td>Naidoo</td>
                            <td>Mid</td>
                            <td>Male</td>
                            <td>Muggles</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- END OF THE WEB CONTAINER -->
        </div>
    </body>
</html>