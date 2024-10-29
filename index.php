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
  include"css/index.php";      

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
 echo'<table id="bala_tarin_table">';  // first table
echo'<tr>';
 echo'<td id="soton1_az_table_aval">'; 
 $str=writeMsg(21) ;
echo $str;
echo"<div id='blink'>";
echo" hi";
 echo"</div>";
  ?>
   <script type="text/javascript">
 var blink = document.getElementById('blink');
setInterval(function() {
  blink.style.opacity = (blink.style.opacity == 0 ? 1 : 0);
                       }, 700);
</script>
      <?php
echo'</td>';
 echo'<td id="soton2_az_table_aval">'; 
echo"<center><h4>".$the_date.$the_week.$hour."</h4></center>";                 
echo'</td>';
 echo'<td id="soton3_az_table_aval">'; 
$count=counter("index");
 $str=writeMsg(12);
 echo $count;
   echo $str;
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


//  shoroe table e login
 echo'<table id="table_e_soton_1">'; 
echo'<tr>';
echo'<td>';
echo'soton1';
echo'<img src="images/flower2.jpg" alt="robot" width="100" height="60"/>';
echo'</td>';
echo'</tr>';

echo'<tr>';
echo'<td>';
 $str=writeMsg(13) ;
 echo'<a href="login/login.php">'.$str.'</a>';
 echo'</td>';
echo'</tr>';

echo'<tr>';
echo'<td>';
 $str=writeMsg(14) ;
  echo'<a href="login/register.php">'.$str.'</a>';
   echo'</td>';
   echo'</tr>';

echo'<tr>';
echo'<td>';
 $str=writeMsg(17) ;
  echo'<a href="login/logout.php">'.$str.'</a>';
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
//echo'<a href="tools/add_text.php">'.$str.'</a>';
echo'</td>';
echo'</tr>';

echo'</tr>';
echo'</table>';//payane table e login
	  $value=my_setting("soton3");  
	  if ($value=="under-soton-1")
{
 ?>
 <form id='myform' action="<?php echo $_SERVER['PHP_SELF']; ?>"  method = 'POST'>
 <input type="submit" name='action_soton1' value="bere be soton3" style=" font-size:12px; height:40px; width:100px">
      </form>
 <?php
 }// value==under-soton-1
      if ($value=="under-soton-1")  //  soton3  ----------
   include "parts_of_index/soton3.php"; 
// ------- soton 3 ------------------------

echo'</td>';
echo'<td>';

// chaape post ha
   include "parts_of_index/show_posts.php"; 


echo'</td>';
 echo'<td id="sotone_sevome_table_bozorge_vasat_safhe">'; 
$value=my_setting("soton3");  
if ($value=="soton3")
{
 ?>
 <form id='myform' action="<?php echo $_SERVER['PHP_SELF']; ?>"  method = 'POST'>

              <input type="submit" name='action_soton3' value="hazf in soton" style=" font-size:12px; height:40px; width:100px">
              </form>

 <?php
 }// value==under-soton-1
if ($value=="soton3")
   include "parts_of_index/soton3.php"; 



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

echo"s110";
echo'</td>';

echo'</tr>';
echo'</table>';//-----------------
 
 echo'<table id="dovomin_table_e_footer">';//first footer table
echo'<tr>';
 echo'<td id="sotone_avale_table_dovome_footer">'; 

 if ( $_SESSION["username"]== "admin")
 {

 ?>
 <form id='myform' action="<?php echo $_SERVER['PHP_SELF']; ?>"  method = 'POST'>
  <input type="checkbox" id="vehicle1" name="edits" value="Bike">
    <label for="vehicle1"> show edit</label><br>
          <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
            <label for="vehicle3"> ------</label><br><br>
              <input type="submit" name='action_1' value="Submit" style=" font-size:35px; height:55px; width:120px">
              </form>

 <?php
 }//if admin
 echo'</td>';
  echo'<td id="sotone_dovome_table_dovome_footer">'; 

   if ( $_SESSION["username"]== "admin")
 {

 ?>
 <form action="admin.php" method="post">
  <input type="submit" name='action_2' value="Admin" style=" font-size:35px; height:55px; width:140px">
              </form>
<br>
<br>


 <form action="editor/new_post96.php" method="post">
   <input type="submit" name='action_3' value="New post" style=" font-size:35px; height:55px; width:170px">
                 </form>

 <?php
 }//if admin
   echo'</td>';
    echo'<td id="sotone_sevome_table_dovome_footer">'; 

   echo'<img src="images/lion.jpg" alt="lion" width="180" height="140"/>';

 echo'</td>';
 echo'</tr>';




echo'</table>';//-----------------
include"parts_of_index/index_actions.php";


       function test_input($data) {
                                                             $data = trim($data);
 $data = stripslashes($data);
     $data = htmlspecialchars($data);
 return $data;
}                                     

?>

</body>
</html>