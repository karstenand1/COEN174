<?php

  checkPassword();

  function checkPassword() {

    $password='giveUsAnA'

    if ($password==$_GET[pw]){
      echo 1;
    }
    else{
      echo 0;
    }

  }
?>
