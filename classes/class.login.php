<?php

require_once('classes/class.core.php');

class create extends core{
        
    public $email;
    public $user;
    public $name;
    public $id;

    public function create(){

        $this->id=0;
        $this->email=$_POST["email"];
        $this->user=$_POST["username"];
        $this->fname=$_POST["fname"];
    }    
    
    
    public function retrieveId(){
    $query = "SELECT * FROM password WHERE username = '$this->user'";
    $result = mysql_query($query) or die(mysql_error());
    
    $row = mysql_fetch_array($result);

    return $row;
}

public function settingId(){
        $row= $this->retrieveId();
        $id= $row["id"];
        
        $this->id= $id;
}

public function createSessions(){
    
    $_SESSION["id"]=$this->id;
    $_SESSION["email"]=$this->email;
    $_SESSION["user"]=$this->user;
    $_SESSION["fname"]=$this->fname;
    $_SESSION["lname"]=$this->lname;
    
}


public function createFolder(){
    
    $path1="users/".$this->id."/pictures";
    $path2="users/".$this->id."/propics";
    
    mkdir($path1, 0777, TRUE);
    mkdir($path2, 0777, TRUE);
    
}


    
public function emptyfields(){
    if ($_POST["myusername"] == ""){
        $_SESSION["erroruser"] = 0;
        header('location: create.php');
        }
        
        if($_POST["mypassword"] ==""){
            $_SESSION["errorpass"] = 0;
            header('location: create.php');
            }
            
            if($_POST["fname"] ==""){
                $_SESSION["errorname"] = 0;
                header('location: create.php');
                }   
                
                if($_POST["lname"] ==""){
                    $_SESSION["errorlname"] = 0;
                    header('location: create.php');
                    }   
                    
                    if($_POST["email"] ==""){
                        $_SESSION["erroremail"] = 0;
                        header('location: create.php');
                        }
        
                        else{
                            return TRUE;
                               }   
                        }
    
public function uniqueUsername(){
 
    $query="SELECT username FROM password WHERE username='$this->user'"; 
    $result = mysql_query($query) or die(msql_error("unique user")); 

    $row = mysql_fetch_array($result);

        return $row;
 
}

//*Bussiness Tier
public function checkUsername(){

    $row=  $this->uniqueUsername();
    
    //* If USERNAME EXISTS - ERROR
    if($row["username"]==$this->user){
        $_SESSION["erroruser"] = 0;
        header("location:create.php");
        }
        else{
            return TRUE;
            
        }
}
public function uniqueEmail(){

//*DB tier create
    
    $query2="SELECT email FROM people WHERE email='$this->email'";    
    $result = mysql_query($query2) or die(msql_error('unique email'));
    $row = mysql_fetch_array($result);

    return $row;
}

//*Bussiness Tier
public function checkEmail(){

    $row=  $this->uniqueEmail();
    
    //* If EMAIL EXISTS - ERROR
    if($row["email"]==$this-> email){
        $_SESSION["errorEmail"] = 0;
        header("location:create.php");
    }
    else{
        return TRUE;
    }
   
}

public function retrievingId(){
    
$query4 = "SELECT id FROM password WHERE username = '$this->user'";
$result1 = mysql_query($query4) or die(mysql_error("retrieving id error"));
$row4=  mysql_fetch_array($result1);
$id=$row4["id"];    

return $id;

}

public function insertPeople(){

$id=  $this->retrievingId();

$fname =$_POST['fname'];
$lname =$_POST['lname'];
$email =$_POST['email'];

$query3 = "INSERT INTO people VALUES( '$id', '$fname', '$lname', '$email')";
mysql_query($query3) or die(mysql_error("inserting people error"));
    
return TRUE;


}
public function insertPassword(){
    
$mypassword=$_POST['mypassword'];
$encryptedpass=sha1($mypassword);
    
$query2 = "INSERT INTO password VALUES ( '', '$this->user', '$encryptedpass')";
mysql_query($query2) or die(mysql_error("inserting into password error"));

return TRUE;

    }
}


//_____________________________________________________________________________________


class login extends core{
    
    public $loginuser;
    public $loginpass;
    public $encryptedpass;
    
    public function login(){
    
    $this->loginuser=$_POST['loginusername'];
    $this->loginpass=$_POST['loginpassword'];
    $this->encryptedpass=sha1($this->loginpass);
}
    
    
public function loginEmpty(){

        if($this->loginuser == ""|| $this->loginpass == ""){
            $_SESSION['name']= 0;
            $_SESSION['pass'] = 0;
            header('location:index.php');
        }

        else{
        return TRUE;
        }
}

 public function loginConnect(){
     $query = "SELECT * FROM password WHERE username= '$this->loginuser'";
     $result = mysql_query($query) or die(mysql_error());
    
     $row = mysql_fetch_array($result);

    return $row;
 }
 public function loginUsername(){
     
     $row=$this->loginConnect();
     if($row["username"] == $this->loginuser){
           return TRUE;
     }
     else{
         return FALSE;
     }
 }
 public function loginPassword(){
     $row=$this->loginConnect();
     if($row["password"] == $this->encryptedpass){
         return TRUE;
     }
     else{
         return FALSE;
     }
 } 
}
 ?>