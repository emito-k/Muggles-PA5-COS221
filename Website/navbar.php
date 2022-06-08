<div class="w3-bar w3-border w3-light-grey" style="position:fixed;">
  
  
  <?php
  session_start();
  
  if(!isset($_SESSION["full_name"])) {
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy(); 
    header("Location: ./login.php");
    die();
  }
  ?>

  <a href="#" class="w3-bar-item w3-button w3-red w3-right">Logout</a>
</div> 
