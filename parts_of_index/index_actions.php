<?php

if(isset($_POST['action_soton3']))
{
    echo"checked";
  $sql = "UPDATE s110_my_setting SET value='under-soton-1' WHERE name='soton3' ";
   $result = mysqli_query($ccoonn ,$sql);
   echo("<meta http-equiv='refresh' content='1'>"); //Refresh

    }//action soton3
if(isset($_POST['action_soton1']))
{
    echo"checked";
  $sql = "UPDATE s110_my_setting SET value='soton3' WHERE name='soton3' ";

 $result = mysqli_query($ccoonn ,$sql);
 echo("<meta http-equiv='refresh' content='1'>"); //Refresh

    }//action soton3
if(isset($_POST['action_1']))
{
  if (  isset($_POST['edits'])  )
    {
echo"checked";
  $sql = "UPDATE s110_my_setting SET value='show-edit-button' WHERE name='show_edit'";

 $result = mysqli_query($ccoonn ,$sql);
    }// if check1  cheched

  if (  !isset($_POST['edits'])  )
{
  $sql = "UPDATE s110_my_setting SET value='dont-show-edit-button' WHERE name='show_edit'";
   $result = mysqli_query($ccoonn ,$sql);

}// if not cheched



echo("<meta http-equiv='refresh' content='1'>"); //Refresh


}// if action 1


?>