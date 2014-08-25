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
            <?php
            session_start();
            echo $_SESSION["fname"];
            ?>
            <br>
            <center><font color="yellow"><b></b></font> </center>
        </div>
        
    
        <div id="loginleft2" div class="grid_4">
            
         <a href="index.php"><img  src="images/orange_globe (3).png"><font color="yellow">The Wedge</font></a>
        </div>
        
        <div id="loginleft3" div class="grid_4">
         <br>
         <a href="profile.php"> <input id="submitbutton" type="button" value="Wall"></a>
        <br> 
         <a href="checkProfile.php"> <input id="submitbutton" type="button" value="Profile"></a>
        <br>
        <input id="submitbutton" type="button" value="Friends  ">
        <br>
        <a href="profile.php"><input id="submitbutton" type="button" value="Pictures    "></a>
        <br>
         <a href="profile.php"><input id="submitbutton" type="button" value="Logout          "></a>
         </div>
    </div>
    
<div id="loginright" div class="grid_7">
    <div id="loginright1" div class="grid_8">
        
    </div>
    
      <div id="loginright2" div class="grid_8">
        
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