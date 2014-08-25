<?php
class core{

    public function connectDB()
    {
        
        $host="localhost";
        $username="root"; 
        $password="";
        $db_name="socialmedia";

        mysql_connect($host, $username, $password)or die("cannot connect");
        mysql_select_db($db_name) or die("cannot conncet to database");
        
        
    }
    
}
?>