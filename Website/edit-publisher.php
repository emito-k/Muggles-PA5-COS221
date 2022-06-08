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
            $result = $db->execute_statement("SELECT * FROM publishers WHERE id=$id");

            if(mysqli_num_rows($result) == 0) {
                goToErrorPage();
            }

            $row = mysqli_fetch_row($result);

            // print_r($row);
        ?>

        <div class="w3-container" style="margin-left:130px; padding-top:50px;">
            <h1>Create Publisher</h1>
            <hr>
            <br>
            <form action="./publisher.php?action=update&id=<?php echo $id;?>" method="post">
                <label for="publisher_key"><b>Publisher key</b></label>
                <input type="input" value="<?php echo $row[1];?>" placeholder="Enter publisher key" name="publisher_key" required><br><br>

                <label for="publisher_name"><b>Publisher name</b></label>
                <input type="input" value="<?php echo $row[2];?>" placeholder="Enter publisher name" name="publisher_name"><br><br>

                <input type="submit">
            </form>
        </div>
    </body>
</html>