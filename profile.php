<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Ezra's Social Media Site</title>
 
       <link href='http://fonts.googleapis.com/css?family=Kavoon' rel='stylesheet' type='text/css'>
        <link href="includes/styles.css" rel="stylesheet" type="text/css" />
        <link href="includes/text.css" rel="stylesheet" type="text/css" />
        <link href="includes/reset.css" rel="stylesheet" type="text/css" />
        <link href="includes/960_12_col.css" rel="stylesheet" type="text/css" />
 
    </head>
    
    
    <body> 
    	
	<div id="wrap">
            <br>  
<div id="logincontent" class="container_12 clearfix">
    <div id="loginleft" div class="grid_4">
        
        <div id="loginleft1" div class="grid_4">
            <br>
            <?php
            session_start();
            echo $_SESSION["fname"];
            ?>
            <center><font color="yellow"><b></b></font> </center>
        </div>
        
    
        <div id="loginleft2" div class="grid_4">
            
         <a href="index.php"><img  src="images/orange_globe (3).png"><font color="yellow">The Wedge</font></a>
        </div>
        
        <div id="loginleft3" div class="grid_4">
         <br>
        <a href="loginSuccess.php"><input id="submitbutton" type="button" value="Wall"></a>
        <br> 
        <input id="submitbutton" type="button" value="Profile">
        <br>
        <input id="submitbutton" type="button" value="Friends  ">
        <br>
        <input id="submitbutton" type="button" value="Pictures    ">
        <br>
         <input id="submitbutton" type="button" value="Logout          ">
         </div>
    </div>
    
<div id="loginright" div class="grid_7">
    <div id="loginright1" div class="grid_8">
        
    </div>
    
      <div id="loginright2" div class="grid_8">
          <?php
         
          
           if(isset($_SESSION["noprofile"])){
               echo'
          <center><table><form method="post" action="checkProfile.php">
                      <br>
          Please Enter Information to Include into Your Profile
          <br>
            <tr><td>Date of Birth:</td><td><input name="dob" type="date" id="dob"></td></tr>
            
                <tr><td>Gender:</td><td><select name="gender">
                  <option value="male">Male</option>
                  <option value="fmale">Female</option></select></td></tr>
              
                  <tr><td>School:</td><td><input name="school" type="text" id="school"></td></tr>
              
                  <tr><td>City:</td><td><input name="city" type="text" id="city"></td></tr>

                  <tr><td>Relationship Status:</td><td><select name="relation">
                  <option value="single">Single</option>
                  <option value="fmale">In a Relationship</option>
                  <option value="male">Married</option></select></td></tr>

                  <tr><td>Favorite Sport:</td><td><input name="sport" type="text" id="sport"></td></tr>

                  <tr><td>Favorite Color:</td><td><input name="color" type="text" id="color"></td></tr>

                  <tr><td>Favorite Music:</td><td><input name="music" type="text" id="music"></td></tr>

                  <tr><td>Interests:</td><td><input name="interest" type="text" id="interest"></td></tr>

                  <tr><td>About Me:</td><td><textarea cols="40" rows="5" name="about"></textarea></td></tr>
              </table>
              <br><input id="submitbutton2" type="submit" value="Create">
          </form></center>';
                  
            unset($_SESSION["noprofile"]);
           }
           ?>
              
              <?php
            if(isset($_SESSION["profile"])){
        $_SESSION["dob"];
        $_SESSION["gender"];
        $_SESSION["school"];
        $_SESSION["city"];
        $_SESSION["relation"];
        $_SESSION["sport"];
        $_SESSION["music"];
        $_SESSION["interest"];
        $_SESSION["about"];
        $_SESSION["music"];
        $_SESSION["interest"];
        $_SESSION["about"];
        unset($_SESSION["profile"]);
            }
            ?>
        
    </div>
</div>
</div>
            <div id="loginfooter" class="container_12 clearfix">
                    <div id="footer2" div class="grid_12">
          
                 &copy; AmenraR inc. All-Lefts reserved
     
            
	</div><!-- end of the FOOTER CODE -->	
            </div>
        </div>
 
        </html>