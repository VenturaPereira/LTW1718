<?php
  session_start();


  function setCurrentUser($username) {
    $_SESSION['username'] = $username;
  }

  function log_out(){
    session_destroy();
  }


?>
