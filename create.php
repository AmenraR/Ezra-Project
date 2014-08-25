<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>The Wedge | A Little Slice of Life</title>
        
        <link href='http://fonts.googleapis.com/css?family=Happy+Monkey' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Glass+Antiqua' rel='stylesheet' type='text/css'>
        <link href="includes/styles.css" rel="stylesheet" type="text/css" />
        <link href="includes/text.css" rel="stylesheet" type="text/css" />
        <link href="includes/reset.css" rel="stylesheet" type="text/css" />
        <link href="includes/960_12_col.css" rel="stylesheet" type="text/css" />
 
    </head>
    
    
    <body> 
    	
	<div id="wrap">
<?php
         session_start();   
?>
    		
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
                <br>
             <div class="grid_6">
                <form method="post" action="checkLogin.php">
                    <b>Member Login:</b>
     <br>
      <?php
                    
if( isset($_SESSION ["name"]))
{
echo '<font color="red">' ;
unset($_SESSION ["name"]);
}
    ?>
Username:

        <?php
      if( isset($_SESSION ["name"])){
       echo "</fonts>' ";
       unset($_SESSION ["name"]);
        }
        ?>
      <input name="myusername" type="text" id="loginusername" placeholder="Ex.RonJohnson">
     
       <?php
                    
if( isset($_SESSION ["pass"]))
{
echo '<font color="red">' ;
unset($_SESSION ["pass"]);
}
    ?>
Password:

        <?php
      if( isset($_SESSION ["pass"])){
       echo "</fonts>' ";
       unset($_SESSION ["pass"]);
        }
        ?>
     <input name="mypassword" type="password" id="loginpassword"placeholder="**********">
   <input id="submitbutton" type="submit" value="Submit">
<br><a href="create.php">Sign Up!</a>
</form> 	

                 </div>
        </div>
            </div>
            <br>
	<div id="content" class="container_12 clearfix">
            <div id="contentwhole" div class="grid_12">
                <br>
                <div class="push_3"><br>
                <div id="contentsmall" div class="grid_6">
                    
                <center><form method="post" action="checkNew.php">
                        
                                <?php
                    
if( isset($_SESSION ["errorUsername"]))
{
echo '<font color="red"><u><b><br>Feild(s) are already in use, please try again</b></u></fonts>' ;
unset($_SESSION ["errorUsername"]); 

}

elseif(isset($_SESSION ["errorEmail"])){
    
    echo '<font color="red"><u><b><br>Feild(s) are already in use, please try again</b></u></fonts>' ;
    unset($_SESSION ["errorEmail"]);
    
}

        else{
       echo "<br><b> Please fill out the following information to get started!</b><br><br> ";
        }
        ?>
                        <table>
<tr><td>
      
        <?php
                    
if( isset($_SESSION ["errorUsername"]))
{
echo '<font color="red"><b>Username: </fonts>' ;
unset($_SESSION ["errorUsername"]);
}
elseif( isset($_SESSION ["erroruser"]))
{
echo '<font color="red"><b>Username:</b></fonts>' ;
unset($_SESSION ["erroruser"]);
}
        else{
       echo "Username: ";
        }
        ?>
        
</td><td><input name="myusername" type="text" id="myusername" placeholder="Ex.RonJohnson"> <br></td></tr>

<tr><td>
        <?php
                    
if( isset($_SESSION ["errorpass"]))
{
echo '<font color="red"><b> </fonts>';
unset($_SESSION ["errorpass"]);
}
    ?>
Password: 

        <?php
      if( isset($_SESSION ["errorpass"])){
       echo "</b></fonts> ";
       unset($_SESSION ["errorpass"]);
        }
        ?>    
    </td> <td><input name="mypassword" type="password" id="mypassword" placeholder="**********"><br></td></tr>

<tr><td>
        
        <?php
                    
if( isset($_SESSION ["errorname"]))
{
echo '<font color="red"><b> </fonts>' ;
unset($_SESSION ["errorname"]);
}
    ?>
First Name: 

        <?php
      if( isset($_SESSION ["errorname"])){
       echo "</b></fonts>' ";
       unset($_SESSION ["errorname"]);
        }
        ?>
    </td><td><input name="fname" type="text" id="fname" placeholder="John"><br></td></tr>

<tr><td>
        
                        <?php
                    
if( isset($_SESSION ["errorlname"]))
{
echo '<font color="red"><b>' ;
unset($_SESSION ["errorlname"]);
}
    ?>
Last Name: 

        <?php
      if( isset($_SESSION ["errorlname"])){
       echo "</b></fonts>' ";
       unset($_SESSION ["errorlname"]);
        }
        ?>
        
    </td> <td><input name="lname" type="text" id="lname" placeholder="Hancock"><br></td></tr>

<tr><td>
        <?php
if( isset($_SESSION ["errorEmail"]))
                      {
                          echo '<font color="red"><b>Email: </b></fonts>' ;
                          unset($_SESSION ["errorEmail"]);
                      }  
                      
elseif( isset($_SESSION ["erroremail"]))
{
echo '<font color="red"><b>Email: </b></fonts>' ;
unset($_SESSION ["erroremail"]);
}

else{
           echo"Email: ";
       }
                    ?>    
 
    
    </td><td><input name="email" type="text" id="email" placeholder="amazing@gmail.com"></td></tr>

                        </table>
                        
<br>
<input id="submitbutton" type="submit" value="Create">
                    </form>
                    </div>
                    </div>
    
	</div><!-- end of the CONTENT CODE -->
      
	<div id="footer" div class="grid_12">
            <br>
          
		 &copy;AmenraR inc. All-Lefts reserved
          
	</div><!-- end of the FOOTER CODE -->	 		
 </div> 
        </div>
        
    </body>
</html>