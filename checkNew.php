<?php

require_once ('classes/class.login.php');

$obj = new create;

$obj->connectDB();

$obj->settingId();

$obj->createSessions();

/* using object to call class function*/
        
if($obj->emptyfields()){
    
    if($obj->checkUsername()or die("username fail!")){
    
          if($obj->checkEmail()or die("check email fail!")){
              
              if($obj->insertPassword()or die("inserting password fail")){
                  
                  if($obj->insertPeople()or die("insert people fail!")){
                    
                    if($obj->createFolder()or die("creating folder fail")){
                        header("location:loginSuccess.php");
                    }
                }
            }
        }
    }
}

  /*    
    

    
    
    
    
    
    
    
    
    
    
/*
session_start();

if ($_POST["myusername"] == "" || $_POST["mypassword"] =="" || $_POST["fname"] =="" || $_POST["lname"] =="" || $_POST["email"] =="")
{
    $_SESSION["error"] = 0;
    header('location: create.php');

}

else{

$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];
$encryptedpass=sha1($mypassword);
$fname =$_POST['fname'];
$lname =$_POST['lname'];
$email =$_POST['email'];

$host="localhost";
$username="root"; 
$password="";
$db_name="socialmedia";

mysql_connect($host, $username, $password)or die("cannot connect");
mysql_select_db("$db_name") or die("cannot conncet to database");

$check=0;
$check1=0;

$query="SELECT * FROM password";
$query2="SELECT * FROM people";

$result = mysql_query($query) or die(msql_error());
$result2 = mysql_query($query2) or die(msql_error());

while($row= mysql_fetch_array($result)){
    if($row["username"] ==$_POST["myusername"])
    {
        $check=1;
           Break;
    }
 
}

while($row= mysql_fetch_array($result2)){
if($row["email"] ==$_POST["email"])
    {
           $check1=1;
           Break;
    }
    
    } 
         if($check == '1'){
             
    $_SESSION["error2"] = 0;
    header('location: create.php');
    
    } 
    
     if($check1 == '1'){
             
    $_SESSION["error3"] = 0;
    header('location: create.php');
    
    } 
}
      if($check == '0'){
       
$query = "SELECT * FROM password";
$query3 = "INSERT INTO password (id , username , salt) VALUES('','$myusername', '$encryptedpass')";
$result3 = mysql_query($query3) or die(mysql_error());
header('location: loginSuccess.php');

   }   
   
   if($check1 == '0'){
       
$query = "SELECT * FROM people";
$query4 = "INSERT INTO people (id , fname , lname ,email ) VALUES('', '$fname', '$lname','$email')";
$result4 = mysql_query($query4) or die(mysql_error());
header('location: loginSuccess.php');

   }
   
       
    if($check1 != 1 && $check != 1){
    
    mysql_connect("$host", "$username", "$password") or die("cannot connect");
    mysql_select_db($db_name) or die("cannot select db");    
    
    $query2 = "INSERT INTO password VALUES ( '', '$myusername', '$encryptedpass')";
    mysql_query($query2) or die(mysql_error());
    
    $query4 = "SELECT id FROM password WHERE username = '$username'";
    $result1 = mysql_query($query4) or die(mysql_error());
    $row4=  mysql_fetch_array($result1);
    $id=$row4["id"];
    
    $query3 = "INSERT INTO people VALUES( '$id', '$fname', '$lname', '$email')";
    mysql_query($query3) or die(mysql_error());
    
    header ('location: loginSuccess.php');
    }
 */  
?>