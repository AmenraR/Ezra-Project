<?php
session_start();

$host="localhost";
$username="root"; 
$password="";
$db_name="socialmedia";


$loginusername=$_POST["loginusername"];
$loginpassword=$_POST['loginpassword'];
$loginpass= sha1($_POST['loginpassword']);

$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];
$encryptedpass=sha1($mypassword);
$fname =$_POST['fname'];
$lname =$_POST['lname'];
$email =$_POST['email'];

$logincheck=0;
$logincheck1=0;

if($loginusername =="" || $loginpassword ==""){
       $_SESSION["error4"] = 0;
    header('location: index.php');
   }
else{
    $result5 = "SELECT * FROM password WHERE  username='$loginusername'";
    $row3=mysql_fetch_array($result5);
    
        while($row3= mysql_fetch_array($result5)){  //comparing usernames from database from form
if($row["username"] ==$loginusername)
    {
           $logincheck=1;
           Break;
    }
        }
        
        
    $result6 = "SELECT * FROM password WHERE  salt='$loginpass'";
    $row4=mysql_fetch_array($result6);
    
        while($row4= mysql_fetch_array($result6)){ //comparing passwords from database from form
if($row["salt"] ==$loginpass)
    {
           $logincheck1=1;
           Break;
    }
    
}
}

if($logincheck ==1 && $logincheck1 ==1){
    
    header("location: loginSuccess.php");
}

if($logincheck1 != 1 && $logincheck != 1){
    
    mysql_connect("$host", "$username", "$password") or die("cannot connect");
    mysql_select_db($db_name) or die("cannot select db");    
    
    $query2 = "INSERT INTO password VALUES ( '', '$username', '$encryptedpass')";
    mysql_query($query2) or die(mysql_error());
    
    $query4 = "SELECT id FROM password WHERE username = '$username'";
    $result1 = mysql_query($query4) or die(mysql_error());
    $row4=  mysql_fetch_array($result1);
    $id=$row4["id"];
    
    $query3 = "INSERT INTO people VALUES( '$id', '$fname', '$lname', '$email')";
    mysql_query($query3) or die(mysql_error());
    
    header ('location: loginSuccess.php');
}
    ?>