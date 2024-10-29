<?php 


$db_name = "------";
$mysql_username = "---------";
$mysql_password = "-------";
$server_name = "-----------";  
$ccoonn = mysqli_connect($server_name, $mysql_username, $mysql_password,$db_name);
if (!$ccoonn)
  {
  die("Connection error: " . mysqli_connect_error());
  }
 
?>
