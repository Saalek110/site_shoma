<?php
         $fileList = glob('./*');
     echo'<table border="1">';
foreach($fileList as $filename){//99
          echo'<tr><td>';
         if(is_file($filename)){//88
         echo"<br>naame file hast: ".$filename;
 $filename=  str_replace("./","",$filename);

  
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