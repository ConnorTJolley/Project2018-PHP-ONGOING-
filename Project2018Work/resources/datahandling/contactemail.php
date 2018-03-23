<?php

session_start();

if(isset($_REQUEST["submit"]))
{
  //Grab data from form
  $name = $_REQUEST["contact_name"];
  $emailfrom = $_REQUEST["contact_email"];
  $subject = $_REQUEST["contact_subject"];
  $message = $_REQUEST["contact_message"];
  
  $emailto = "connorjolley18@gmail.com";
  
  $emailtosubject = "A new contact email has been sent";
  
  
  $message = "A new email has been sent using the online form at: http://datadrivenwebsites-ctjolley.codeanyapp.com/Project2018Work/";
  $message .= "\r\n With the subject of: " . $subject . ".";
  $message .= "\r\n And the message of: " . $message . ".";
  $message .= "\r\n The users email address is: " . $emailfrom . ".";
  
  //Headers
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  // More headers
  $headers .= 'From: ' . $emailfrom . "\r\n";

  $success = mail($emailto,$emailtosubject,$message,$headers);
  
  if($success === 1)
  {
    $_SESSION["EmailSuccess"] = "True";
    //echo($_SESSION["EmailSuccess"]);
    header("Location: ../index.php");
  }
  else
  {
    $_SESSION["EmailSuccess"] = "False";
    //echo($_SESSION["EmailSuccess"]);
    header("Location: ../../index.php");
  }
  
}

?>