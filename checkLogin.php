<?php

session_start();

require_once ('classes/class.login.php');

$obj = new login;

$obj->connectDB();

  if($obj ->loginEmpty() or die("Check Empty Fail")){
             
       if($obj->loginPassword() or die("Login fail")){
              header("location:loginSuccess.php");

          }
  }
?>
