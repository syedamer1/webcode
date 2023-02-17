<?php
session_start();
if (isset($_SESSION))
{
    session_destroy();
    header('Location: loginpage.php');
  } else 
  {
    echo "Session is not set";
  }

?>