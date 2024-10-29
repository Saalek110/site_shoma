<?php 


$db_name = "unaux_24381234_saalek121";
$mysql_username = "unaux_24381234";
$mysql_password = "om1b3di1c";
$server_name = "sql111.unaux.com";  
$ccoonn = mysqli_connect($server_name, $mysql_username, $mysql_password,$db_name);
if (!$ccoonn)
  {
  die("Connection error: " . mysqli_connect_error());
  }
 
?>