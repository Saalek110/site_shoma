<?php


require "../base/ccoonn.php";
include "functions.php"; 


 $value=my_setting("approve");  // name of function
echo $value;
 
if ( $value=="approved"  ) echo"<br>yes,approve";
?>