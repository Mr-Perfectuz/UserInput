<?php 

$host = "localhost";
$user_name = "anvar";
$user_password = "anvar9449";
$db_name = "userdb";

$con = mysqli_connect($host, $user_name, $user_password, $db_name);

if($con)
echo "Connection  success ... ";
else
echo "Connection Failed ! "


?> 
