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
            include "./error_handling.php";
            include "./Database.php";

            if(!isset($_GET["id"])) {
                goToErrorPage();
            }

            $id = $_GET["id"];
            $result3 = $db->execute_statement("SELECT * FROM sites WHERE id=$id");

            if(mysqli_num_rows($result3) == 0) {
                goToErrorPage();
            }

            $row3 = mysqli_fetch_row($result3);

            $result2 = $db->execute_statement("SELECT language, full_name FROM display_names WHERE entity_type='site' AND entity_id=$id");

            $row2 = mysqli_fetch_row($result2);
            // print_r($row);
        ?>


        <div class="w3-container" style="margin-left:130px; padding-top:50px;">
            <h1>Edit Site</h1>
            <hr>
            <br>
            <form action="./site.php?action=update&id=<?php echo $id;?>" method="post">
                <label for="site_name"><b>Language</b></label>
                <input type="input" value="<?php echo $row2[0];?>" placeholder="Enter language" name="language"><br><br>

                <label for="site_key"><b>site key</b></label>
                <input type="number" value="<?php echo $row3[1];?>" placeholder="Enter site key" name="site_key" required><br><br>

                <label for="site_name"><b>site name</b></label>
                <input type="input" value="<?php echo $row2[1];?>" placeholder="Enter site name" name="site_name"><br><br>

                <label for="publisher_id"><b>Publisher ID</b></label>
                <select name="publisher_id" value=<?php echo $row3[2];?> id="publisher_id">
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
                <select name="location_id" value="<?php echo $row3[3];?>" id="location_id">
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