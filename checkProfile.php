<?php

require_once('classes/class.profile.php');

$obj = new profile;

$obj->connectDB();

if($obj->profileCheck()){
}
if($obj->insertProfile()){
    echo 'success!';
}


?>
