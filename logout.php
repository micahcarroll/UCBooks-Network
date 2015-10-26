<?php
session_start();

# Destroys session, losing all SESSION information
session_destroy();

# Logout Page
include_once "header.php";
echo <<<_END
  <a href="index.php">Click here to return to home page.</a>
_END;
include_once "footer.php";
?>
