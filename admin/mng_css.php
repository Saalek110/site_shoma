<?php
session_start();
?>
<!DOCTYPE html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="rtl">

<head>
<title>css</title>
<style>
body
{
background-color:rgba(220,220,200,1);
}
</style>
</head>
<body>

<?php

    require "../base/ccoonn.php";
     include "../functions/functions.php"; 
     require_once "../tools/jdf.php";

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
echo"css admin page";
echo'</td>';
echo'<td style="background: #ddff00;">';
  echo"<center><h4>".$the_date.$the_week.$hour."</h4></center>";                 

echo'</td>';
echo'<td style="background: #aaee00;">';

$count=counter("mng_css");
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
//------------------list gir ---------------------
//------------------------------------------------
echo"<br>";
echo"<center>";
echo"list of css folder";
$fileList = glob('./../css/*');
     echo'<table border="1">';
     foreach($fileList as $filename){//99
      echo'<tr><td>';
      if(is_file($filename)){//88
//  echo"<br>naame file hast: ".$filename;
     $filename=  str_replace("./../css/","",$filename);
 echo"<br>".$filename;
                                                                  echo"<br>";
                                                                      echo '<a href="css_file_edit/css_edit.php?name='.$filename.'">'.$filename.'</a>'; 
                                                                      
     //---------------
 if (file_exists($filename)) {//777

//echo'<a href="../admin.php">'.$str.'</a>';

                              }//777
                     echo'</td></tr>';
                                  }//88   
                              }//99
               echo'</table>';
echo"</center>";
// ----------------- end of list gir ------------------
// ----------------------------------------------------
    mysqli_set_charset($ccoonn, "utf8");
    
 //$sql = "SELECT * FROM s110_nazarat";
//  $result = mysqli_query($ccoonn ,$sql);
   echo"<center>";          
    echo"<table border=1>";  
       // while($info = mysqli_fetch_array( $result))
               {
          //  $ss_number=$info['number'];
       //   $post_number=$info['post_number'];
       //   $poster=$info['poster'];
        //  $nazar=$info['nazar'];
       //   $time=$info['time'];
       //  $approve=$info['approve'];



    echo"<tr>";
 echo'<td style="background: #ddaa88; padding:5px;">';   
 //echo $ss_number;   
   

 echo"</td>";

echo"<td>";
//echo $post_number;
echo"</td>";




//include"../parts_of_index/my_str_replace.php";
echo'<td style="background: #ffcc99; padding-left:10px;padding-right:10px;padding-top:10px;">';   
//echo $poster;  
 echo"</td>";

echo"<td>";
//echo $approve;
echo"</td>";

//$str=writeMsg(32);
  echo"</tr>";      
 }
 echo"</table>";
 
 $str=writeMsg(29) ;
  echo'<a href="../admin.php">'.$str.'</a>';

  echo"</center>";      

/*
?>
 <form id='myform' action="<?php echo $_SERVER['PHP_SELF']; ?>"  method = 'POST'>

  <input type="checkbox" id="vehicle1" name="approve" value="Bike">

    <label for="vehicle1"> approve comments</label><br>

              <input type="submit" name='action_1' value="Submit" style=" font-size:35px; height:55px; width:120px">

                </form>
<?php
*/


if(isset($_POST['action_1']))
{
  if (  isset($_POST['approve'])  )
    {
echo"checked";
  $sql = "UPDATE s110_my_setting SET value='approved' WHERE name='approve'";

 $result = mysqli_query($ccoonn ,$sql);
    }// if check1  cheched

  if (  !isset($_POST['approve'])  )
{
  $sql = "UPDATE s110_my_setting SET value='not-approved' WHERE name='approve'";
   $result = mysqli_query($ccoonn ,$sql);

}// if not cheched


echo("<meta http-equiv='refresh' content='1'>"); //Refresh

}// if action 1


if(isset($_POST['action_free']))
{
	echo"free...";
       $comment_number=$_POST['free_number'];
       echo"<br>comment number= ".$comment_number;
      $sql = "UPDATE nazarat SET approve='free' WHERE number=$comment_number ";
         $result = mysqli_query($ccoonn ,$sql);
// echo("<meta http-equiv='refresh' content='1'>"); //Refresh

            	}//action soton3


            }  // if admin   kole safheh                                
              ?>                                                    
</body>
</html>
