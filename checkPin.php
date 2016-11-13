<?php

  checkPin();

  function checkPin() {
    $pin=$_GET['pin'];
    $name=strtoupper($_GET['name']);


$found=FALSE;
if (($handle = fopen("/DCNFS/users/web/pages/cle/COEN174/pins.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
      if($data[0]==$pin ){
        if(strtoupper($data[1])==$name){
                $found=TRUE;   
                echo json_encode($data);
              }
      }
     }
     if (!$found){
      echo -1;
     }
    fclose($handle);
}



  }
?>
