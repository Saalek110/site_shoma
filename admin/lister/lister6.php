<?php
    
         $fileList = glob('./../*');
     echo'<table border="1">';
foreach($fileList as $filename){//99
          echo'<tr><td>';

         if(is_dir($filename)){//33
         echo"<br>naame folder hast: ".$filename;
 $filename=  str_replace("./../","",$filename);
          echo"<br>naame folder hast: ".$filename;



                   }//33
         if(is_file($filename)){//88
         echo"<br>naame file hast: ".$filename;
 $filename=  str_replace("./../","",$filename);
         echo"<br>naame file hast: ".$filename;
         
  
echo"<br>";
        
            //---------------
             if (file_exists($filename)) {//777

        
                  
              }//777
    echo'</td></tr>';
      }//88   
      }//99
      echo'</table>';

                
                       
      

?>