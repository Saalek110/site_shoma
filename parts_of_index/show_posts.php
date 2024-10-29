<?php
$link_edit="editor/edit_post98.php";
    mysqli_set_charset($ccoonn, "utf8");
    
 $sql = "SELECT * FROM s110_posts";
  $result = mysqli_query($ccoonn ,$sql);
   echo"<center>";          
    echo"<table border=0>";  
        while($info = mysqli_fetch_array( $result))
               {
            $my_number=$info['number'];
    echo"<tr>";  
 echo'<td id="sotone_shomareh_post">'; 
 echo $info["number"];   echo"</td>";

include"parts_of_index/my_str_replace.php";
 echo'<td id="sotone_matne_post">'; 
echo $info['news'];  
echo'<table border=0>';
echo'<tr>';
 echo'<td id="sotone_payam_bezarid">'; 
$str=writeMsg(32);
    echo '<a href="msg/a_write_msg.php?number='.$my_number.'">'.$str.'</a>'; 
echo'</td>'; 
 echo'<td id="sotone_chand_nazar">'; 
  $tedad=msg_cont($ccoonn , $my_number );
 if (   $tedad> 0)
 {
     $str=writeMsg(33);
 $ebarat= $tedad." ".$str;  
    echo "<a href='msg/show_msgs.php?number=$my_number'>$ebarat</a>";
 }// if tedad
 echo'</td>';
  echo'<td id="sotone_dokmeye_edit">'; 
      $value=my_setting("show_edit"); 

if ( $_SESSION["username"]== "admin")
{

if ($value=='show-edit-button')
{
  echo'<form id="myform" action='.$link_edit.'  method = "POST">';
     echo'<input type="hidden" id="custId" name="number" 
         value="'.$my_number.'">';
         
  echo'<input type="submit"  name="a_edit" value="edit"  style=" font-size:14px; height:35px; width:60px">';     
     echo"</form>"; 
}// if num
}// if admin
echo'</td>'; echo'</tr>';echo'</table>';
echo"</td>";

          echo"</tr>";
 }
 echo"</table>";
  echo"</center>";      
                                                                 ?>                                                        

