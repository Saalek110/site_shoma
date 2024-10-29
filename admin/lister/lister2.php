<?php
         $fileList = glob('./*');
     echo'<table border="1">';
foreach($fileList as $filename){//99
          echo'<tr><td>';
          echo"<br>uuuuu".$filename;
         if(is_file($filename)){//88
         echo"<br>naame file hast: ".$filename;
 $filename=  str_replace("./","",$filename);
  //  http://saalek121.fast-page.org/admin/lister1.php
  
  $thelink="http://saalek121.fast-page.org/admin/".$filename;
    echo "<br>".$thelink."<br>";

echo '<a href="' . $thelink . '">'.$filename.'</a>';
echo"<br>";
        
            //---------------
             if (file_exists($filename)) {//777

        
                  
              }//777
    echo'</td></tr>';
      }//88   
      }//99
      echo'</table>';

                
                       
      

?>