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
            include "./Database.php";
            include "./error_handling.php";
        ?>

        <div class="w3-container" style="margin-left:130px; padding-top:50px;">
            <h1>Create Site</h1>
            <hr>
            <br>
            <form action="./site.php" method="post">
                <label for="site_name"><b>Language</b></label>
                <input type="input" placeholder="Enter language" name="language"><br><br>

                <label for="site_key"><b>site key</b></label>
                <input type="number" placeholder="Enter site key" name="site_key" required><br><br>

                <label for="site_name"><b>site name</b></label>
                <input type="input" placeholder="Enter site name" name="site_name"><br><br>

                <label for="publisher_id"><b>Publisher ID</b></label>
                <select name="publisher_id" id="publisher_id">
                    <?php
                    $result = $db->execute_statement("SELECT id, publisher_name FROM publishers");

                    if($result && mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_row($result)) {
                            echo "<option value='$row[0]'>$row[1]</option>";
                        }
                    }
                    else {
                        goToErrorPage();
                    }
                    ?>
                </select><br><br>

                <label for="location_id"><b>Location ID</b></label>
                <select name="location_id" id="location_id">
                    <?php
                    $result = $db->execute_statement("SELECT id, timezone FROM locations");

                    if($result && mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_row($result)) {
                            echo "<option value='$row[0]'>$row[1]</option>";
                        }
                    }
                    else {
                        goToErrorPage(); 
                    }
                    ?>
                </select><br><br>

                <input type="submit">
            </form>
        </div>
    </body>
</html>