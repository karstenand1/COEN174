<?php

getvars();

function getvars() {
  $judgeName=$_POST['judgeName'];
  $session=$_POST['session'];
  $room=$_POST['room'];
 $array=[$judgeName, $session, $room];
   echo json_encode($array);
      
}
?>

