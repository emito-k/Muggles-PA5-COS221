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
            $result = $db->execute_statement("SELECT * FROM addresses WHERE id=$id");

            if(mysqli_num_rows($result) == 0) {
                goToErrorPage();
            }

            $row = mysqli_fetch_row($result);

            // print_r($row);
        ?>

        <div class="w3-container" style="margin-left:130px; padding-top:50px;">
            <h1>Edit Address</h1>
            <hr>
            <br>
            <form action="./address.php?action=update&id=<?php echo $id;?>" method="post">
                <label for="lang"><b>Language</b></label>
                <input type="input" value="<?php echo $row[2];?>" placeholder="Enter Language" name="lang" required><br><br>

                <label for="suite"><b>Suite</b></label>
                <input type="input" value="<?php echo $row[3];?>"  placeholder="Enter Suite" name="suite"><br><br>

                <label for="floor"><b>Floor</b></label>
                <input type="number" id="floor" value="<?php echo $row[4];?>"  placeholder="Enter Floor Number" name="floor" min="1"><br><br>

                <label for="building"><b>Building</b></label>
                <input type="input"  value="<?php echo $row[5];?>"  placeholder="Enter Building" name="building" required><br><br>

                <label for="street_nr"><b>Street Number</b></label>
                <input type="number"  value="<?php echo $row[6];?>"  id="street_nr" placeholder="Enter Street Number" name="street_nr" min="1"><br><br>
                
                <label for="street"><b>Street</b></label>
                <input type="input"  value="<?php echo $row[7];?>"  placeholder="Enter Street Name" name="street" required><br><br>
                
                <label for="street_prefix"><b>Street Prefix</b></label>
                <input type="input"  value="<?php echo $row[8];?>"  placeholder="Enter Street Prefix" name="street_prefix" required><br><br>

                <label for="street_suffix"><b>Street Suffix</b></label>
                <input type="input"  value="<?php echo $row[9];?>" placeholder="Enter Street Suffix" name="street_suffix" required><br><br>

                <label for="neighbourhood"><b>Neighbourhood</b></label>
                <input type="input"  value="<?php echo $row[10];?>"  placeholder="Enter Neighbourhood" name="neighbourhood" required><br><br>

                <label for="dis"><b>District</b></label>
                <input type="input"  value="<?php echo $row[11];?>"  placeholder="Enter District" name="dis" required><br><br>

                <label for="loc"><b>Locality</b></label>
                <input type="input"  value="<?php echo $row[12];?>" placeholder="Enter Locality" name="loc" required><br><br>

                <label for="county"><b>County</b></label>
                <input type="input"  value="<?php echo $row[13];?>"  placeholder="Enter County" name="county" required><br><br>

                <label for="reg"><b>Region</b></label>
                <input type="input"  value="<?php echo $row[14];?>" placeholder="Enter Region" name="reg" required><br><br>

                <label for="code"><b>Postal Code</b></label>
                <input type="number" id="code"  value="<?php echo $row[15];?>"  placeholder="Enter Postal Code" name="code" min="1"><br><br>

                <label for="country"><b>Country</b></label>
                <input type="input"  value="<?php echo $row[16];?>" placeholder="Enter Country" name="country" required><br><br>

                <input type="submit">
            </form>
        </div>
    </body>
</html>