<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Ezra's Social Media Site</title>
        
        <link href='http://fonts.googleapis.com/css?family=Glass+Antiqua' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Happy+Monkey' rel='stylesheet' type='text/css'>
        <link href="includes/styles.css" rel="stylesheet" type="text/css" />
        <link href="includes/text.css" rel="stylesheet" type="text/css" />
        <link href="includes/reset.css" rel="stylesheet" type="text/css" />
        <link href="includes/960_12_col.css" rel="stylesheet" type="text/css" />
 
    </head>
    <?php
    session_start();
    ?>
    
    <body> 
    	
	<div id="wrap">
        
    		
    	<div id="header" class="container_12 clearfix">
            
            <div id="headerleft" class="grid_6">				

		</div>
            <div id="headerright" class="grid_6">				
 
		</div>
                </div>
            <div id="contenttitle"> 
                <div id="grid_6t"class="grid_6">				 	
                    <a href="index.php"><img  src="images/orange_globe (2).png"><font color="yellow">The Wedge</font></a>
                 </div>
            <div class="grid_6">
              
                <div class="grid_6">
                <form method="post" action="checkLogin.php">
                    <br>
<?php
                    if( isset($_SESSION ["errorlogin"])){
                        echo "Field(s) not correct";
                        unset($_SESSION ["errorlogin"]);
                        }
                        else{
                            echo "";
                        }
?>
                    <b>Member Login:</b>
     
     <br>
       <?php
                    
if( isset($_SESSION ["name"]))
{
echo "<font color=\"red\">" ;
unset($_SESSION ["name"]);
}
    ?>
Username:

        <?php
      if( isset($_SESSION ["name"])){
       echo "</fonts> ";
       unset($_SESSION ["name"]);
        }
        ?>
      <input name="loginusername" type="text" id="loginusername" placeholder="Ex.RonJohnson">
     
       <?php
                    
if( isset($_SESSION ["pass"]))
{
echo "<font color=\"red\"> " ;
unset($_SESSION ["pass"]);
}
    ?>
Password:

        <?php
      if( isset($_SESSION ["pass"])){
       echo "</fonts> ";
       unset($_SESSION ["pass"]);
        }
        ?>
     <input name="loginpassword" type="password" id="loginpassword"placeholder="**********">
   <input id="submitbutton" type="submit" value="Submit">
<br><a href="create.php">Sign Up!</a>
</form>
                 </div>
        </div>
            </div>
            <br>
	<div id="content" class="container_12 clearfix">
            <div id="contentwhole" div class="grid_12">
               
               
                
	</div><!-- end of the CONTENT CODE -->
      </div>
	<div id="footer" div class="container_12 clearfix">
            <br>
     
                &copy;AmenraR inc. All-Lefts reserved
            </div>
            </div>
	</div><!-- end of the FOOTER CODE -->	 		
       
    </body>
</html>
              