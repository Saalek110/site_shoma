<?php
session_start();
?>
<!DOCTYPE html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="rtl">

<head>
<title>msg</title>
<style>
body
{
background-color:rgba(220,220,200,1);
}
</style>
</head>
<body>

<?php

    require "../../base/ccoonn.php";
     include "../../functions/functions.php";

if ( $_SESSION["username"]== "admin")
{


//$link_edit="../editor/edit_post98.php";



echo'<table style="border:1; width:100%;">';  // first table
echo'<tr>';
echo'<td style="background: #55ff99;">';
 $str=writeMsg(21) ;
echo $str;
echo'</td>';
echo'<td style="background: #00ff00;">';
echo"make it free query page";
echo'</td>';
echo'<td style="background: #ddff00;">';
  echo"<center><h4>".$the_date.$the_week.$hour."</h4></center>";                 

echo'</td>';
echo'<td style="background: #aaee00;">';

$count=counter("msg_delete");
 $str=writeMsg(12);
    echo $str;
     echo $count;

echo'</td>';

echo'</tr>';
echo'</table>';

echo'<table style="border:1;width:100%;text-align:center;">';// 2th table----------
echo'<tr>';
echo'<td style="background: #aa8888;">';
 
      writeMsg3("welcome");
      
echo'</td>';
echo'</tr>';
echo'</table>';//-----------------



    mysqli_set_charset($ccoonn, "utf8");



 $comment_number=$_GET['number'];

      // $comment_number=$_POST['free_number'];
       echo"<center>";
       echo"<br>comment number= ".$comment_number;

      $sql = "DELETE FROM s110_nazarat WHERE number=$comment_number ";

         $result = mysqli_query($ccoonn ,$sql);

     echo"<br><br><br>";    
          echo"<br><br><br>";    
               echo"<br><br><br>";    

 $str=writeMsg(36) ;
  echo'<a href="../mng_msg.php">'.$str.'</a>';




     echo"<br><br><br>";    

 $str=writeMsg(29) ;
   echo'<a href="../admin.php">'.$str.'</a>';


echo"</center>";

            }  // if admin   kole safheh                                
   ?>                                                    
</body>
</html>

