<?php

function goToErrorPage() {
    header("Location: ./error.php");
    die();
}

function goToHomePage() {
    header("Location: ./index.php");
    die();
}

?>