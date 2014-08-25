<?php

require_once('classes/class.core.php');


class profile extends core{
    
    public function profile(){
        
        
    }
    public function emptyProfile(){
        
    $query = "SELECT * FROM profile WHERE id = '$this->id'";
    $result = mysql_query($query) or die(mysql_error());
    
    $row = mysql_fetch_array($result);

    return $row;
    }

        public function profileCheck(){
        $row=  $this->emptyProfile();
        
        if($row["id"]!=$_SESSION["id"]){
            
            $_SESSION["noprofile"];
            header("location:profile.php");
        
        }
        if($row["id"]== $_SESSION["id"]){
        $_SESSION["profile"];
            
        $_SESSION["dob"]=$row["dob"];
        $_SESSION["gender"]=$row["gender"];
        $_SESSION["school"]=$row["school"];
        $_SESSION["city"]=$row["city"];
        $_SESSION["relation"]=$row["relation"];
        $_SESSION["sport"]=$row["sport"];
        $_SESSION["color"]=$row["color"];
        $_SESSION["music"]=$row["music"];
        $_SESSION["interest"]=$row["interest"];
        $_SESSION["about"]=$row["about"];
        header("location:profile.php");
        return TRUE;
     
        }
        
    }
    public function insertProfile(){

        $id =$_SESSION["id"];
        $gender =$_SESSION['gender'];
        $school =$_SESSION['school'];
        $city=$_SESSION['school'];
        $relation=$_SESSION['school'];
        $sport=$_SESSION['school'];
        $color=$_SESSION['color'];
        $music=$_SESSION['music'];
        $interest=$_SESSION['interest'];
        $about=$_SESSION['about'];
        
        
$query3 = "INSERT INTO profile VALUES( '$id', '$gender', '$school', '$city', '$relation', '$sport', '$color', '$music' , '$interest' , '$about')";
mysql_query($query3) or die(mysql_error("inserting people error"));
    
return TRUE;


}
}
//check empty profile
//if empty


//if($this->dob=""||$this->gender="" ||$this->school="" ||$this->relation="" || $this->sport="" || $this->color="" || $this->music="" || $this->interest="" || $this->about="")
//{}
?>
