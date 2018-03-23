<?php

session_start();

function CheckLoggedIn()
{
  if(isset($_SESSION["Logged_In"]))
  {
    if($_SESSION["Logged_In"]=="True")
    {
      //User is logged in
    }
    else
    {
      header("Location: login.php");
    }
  }
}

?>