<?php



function writeMsg( $number) {


global $ccoonn;

    echo"<br>";
    mysqli_set_charset($ccoonn, "utf8");
    
$sql = "SELECT my_text FROM s110_texts WHERE number=$number ";
$result = mysqli_query($ccoonn ,$sql);

   while($info = mysqli_fetch_array( $result )) 
    { 
  $str=$info['my_text'];
    } 
return $str;

}//func
//========================================================  

function writeMsg2( $number) {


global $ccoonn;

    echo"<br>";
    mysqli_set_charset($ccoonn, "utf8");
  
$sql = "SELECT my_text FROM s110_texts WHERE number=$number ";
$result = mysqli_query($ccoonn ,$sql);

   while($info = mysqli_fetch_array( $result )) 
    { 
  $str=$info['my_text'];
    } 
echo $str;

}//func
//=====================================
function writeMsg3( $text) {


global $ccoonn;

    echo"<br>";
    mysqli_set_charset($ccoonn, "utf8");
  
$sql = "SELECT my_text FROM s110_texts where  comment='$text' ";
$result = mysqli_query($ccoonn ,$sql);

   while($info = mysqli_fetch_array( $result )) 
    { 
 $str=$info['my_text'];
    } 
echo $str;

}//func
//===================================

function counter( $name)    
 {//function
 global $ccoonn;

 $s=0;
$sql= "SELECT count FROM s110_counters where name='$name' ";

 //$sql = "SELECT * from s110_counters WHERE number=$number  ";
 $result = mysqli_query($ccoonn ,$sql);
 while($info = mysqli_fetch_array( $result )) 
    { 
    $s=$info['count'] ;
    } 
$s=$s+1;
$sql = "UPDATE s110_counters SET  count=$s WHERE name='$name' ";
$result = mysqli_query($ccoonn ,$sql);  
return $s;
 }//function counter

//=================================
//============================================================================================
 function msg_cont($conn , $number )
  {// if action
      //  echo"payame shoma sabt shod";
        
$x=0;
 // echo "number= ".$number;
$sql = "SELECT  *  FROM s110_nazarat WHERE post_number=$number";
 $result = mysqli_query($conn ,$sql);
while($info = mysqli_fetch_array( $result ))
        
        {
            $x=$x+1;
               }      
              return $x;
  }//end function msg_cont

 //================ 
 function my_setting( $name)    
 {//function
 global $ccoonn;
    mysqli_set_charset($ccoonn, "utf8");

 $sql= "SELECT value FROM s110_my_setting where name='$name' ";
 $result= mysqli_query($ccoonn ,$sql);
  while($info= mysqli_fetch_array( $result))
          {
           $value=$info['value'];
          }//while

return $value;

 }//function my_setting

?>