<?php
session_start();
?>
<!DOCTYPE html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="rtl">
<head>
<title>saalek110</title>
</head>
<body>
       <?php
    
    require "base/ccoonn.php";
     include "functions/functions.php"; 
     require_once "tools/jdf.php";
  include"css/admin.php";      


    mysqli_set_charset($ccoonn, "utf8");
    
                $hour= jdate('g:i A');   
                $the_week=jdate('l');
              $the_date=jdate('Y/m/d ');


 if (  isset(  $_SESSION["username"] )  )
 {
echo"<center>";
echo"Hi ".$_SESSION["username"];
echo"</center>";
 }//if sess
 if ( $_SESSION["username"]== "admin")
 {

 echo'<table id="bala_tarin_table">';  // first table
echo'<tr>';
 echo'<td id="soton1_az_table_aval">'; 
 $str=writeMsg(21) ;
echo $str;
echo'</td>';
 echo'<td id="soton2_az_table_aval">'; 

echo"Admin page";
echo'</td>';
 echo'<td id="soton3_az_table_aval">'; 
  echo"<center><h4>".$the_date.$the_week.$hour."</h4></center>";                 

echo'</td>';
 echo'<td id="soton4_az_table_aval">'; 
$count=counter("admin");
 $str=writeMsg(12);
    echo $str;
     echo $count;

echo'</td>';

echo'</tr>';
echo'</table>';

 echo'<table id="table_e_satre_dovom">';  // dovomin table
echo'<tr>';
 echo'<td id="sotone_table_dovom">'; 

      writeMsg3("welcome");
      
echo'</td>';
echo'</tr>';
echo'</table>';//-----------------

 echo'<table id="table_bozorge_vasate_safeh">';//table bozorge vasat

echo'<tr>';
 echo'<td id="sotone_avale_table_bozorge_vasat_safhe">'; 


 echo'<table id="table_e_soton_1">'; 
echo'<tr>';
echo'<td>';
echo'soton1';
echo'<img src="images/tools.png" alt="tools" width="100" height="60"/>';
echo'</td>';
echo'</tr>';

echo'<tr>';
echo'<td>';
 $str=writeMsg(28) ;
 echo'<a href="index.php">'.$str.'</a>';
 echo'</td>';
echo'</tr>';

echo'<tr>';
echo'<td>';
 $str=writeMsg(14) ;
//  echo'<a href="login/register.php">'.$str.'</a>';
   echo'</td>';
   echo'</tr>';

echo'<tr>';
echo'<td>';
 $str=writeMsg(17) ;
 // echo'<a href="login/logout.php">'.$str.'</a>';
     echo'</td>';
     echo'</tr>';



echo'<tr>';
echo'<td>';
 $str=writeMsg(11) ;
//echo'<a href="editor/new_post96.php">'.$str.'</a>';
echo'</td>';
echo'</tr>';

echo'<tr>';
echo'<td>';
 $str=writeMsg(10) ;
echo'<a href="admin/add_text.php">'.$str.'</a>';
echo'</td>';
echo'</tr>';

echo'</tr>';
echo'</table>';
	  
echo'</td>';
 echo'<td id="sotone_dovome_table_bozorge_vasat_safhe">'; 

echo'<img src="images/admin_tools.jpg" alt="tools" width="280" height="240"/>';


 $str=writeMsg(27) ;// vasatttttttttttttttttttt
echo $str;


echo"<center>";
 $str=writeMsg(34) ;  // modiriat e payam haa
 echo'<a href="admin/mng_msg.php">'.$str.'</a>';
 echo"<br><br>";
  $str=writeMsg(39) ;  // modiriat e payam haa
   echo'<a href="admin/mng_css.php">'.$str.'</a>';

echo"</center>";

echo'</td>';
 echo'<td id="sotone_sevome_table_bozorge_vasat_safhe">'; 


echo'<table border=1>';
echo'<tr>';
echo'<td>';
echo'soton3';
echo'<img src="images/admin.jpg" alt="admin" width="130" height="100"/>';

echo'</td>';
echo'</tr>';
echo'</table>';
	  
	  
echo'</td>';
echo'</tr>';
echo'</table>';
//------------- end of 3 culomn ---------	  

           echo"<br>";
 echo'<table id="avalin_table_e_footer">';//first footer table
echo'<tr>';
 echo'<td id="sotone_avale_table_avale_footer">'; 
    // $str=writeMsg(19);
   // echo'<a href="http://saalek110.fast-page.org">'.$str.'</a>';
echo'</td>';
 echo'<td id="sotone_dovome_table_avale_footer">'; 

echo"linke digar";
echo'</td>';

echo'</tr>';
echo'</table>';//-----------------
 

 echo'<table style="border:1;width:100%; ">';// first footer table----------
echo'<tr>';
 echo'<td id="sotone_avale_table_dovome_footer">'; 
 if ( $_SESSION["username"]== "admin")
 {

 ?>
 
 <?php
 }//if admin
 echo'</td>';
   echo'<td id="sotone_dovome_table_dovome_footer">'; 
   if ( $_SESSION["username"]== "admin")
 {

 ?>


 <?php
 }//if admin
   echo'</td>';
       echo'<td id="sotone_sevome_table_dovome_footer">'; 
   echo"333";
 echo'</td>';
 echo'</tr>';


echo'<tr>';
   echo'<td>';
echo"admin";
   echo'</td>';

echo'</tr>';

echo'</table>';//-----------------

if(isset($_POST['action_1']))
{
  if (  isset($_POST['edits'])  )
    {
echo"checked";
  $sql = "UPDATE setting SET num=1 WHERE name='show_edit'";

 $result = mysqli_query($ccoonn ,$sql);
    }// if check1  he hed

  if (  !isset($_POST['edits'])  )
{
  $sql = "UPDATE setting SET num=0 WHERE name='show_edit'";
   $result = mysqli_query($ccoonn ,$sql);

}// if not cheched

}// if action 1


       function test_input($data) {
                                                             $data = trim($data);
 $data = stripslashes($data);
     $data = htmlspecialchars($data);
 return $data;
}                                     
 }  // if admin
?>

</body>
</html>