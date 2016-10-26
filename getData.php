<?php

  modDatabase();

  function modDatabase() {

    ini_set('display_errors','On');
    error_reporting(E_ALL);
    $db_host = "dbserver.engr.scu.edu";
    $db_user = "kanderse";
    $db_pass = "00000918652";
    $db_name = "sdb_kanderse";
    $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      return;
      }

    $sql = "SELECT * FROM Users LIMIT 100";

    // $sql = "SELECT * FROM Comments ORDER BY date_added DESC LIMIT 10";

    $result = $con->query($sql);
    if (!$result)
    {
      die('Error: ' . mysqli_error($con));
    }

    $rows = array();
    while($r = mysqli_fetch_assoc($result)) {
      $rows[] = $r;
    }
    echo json_encode($rows);

    mysqli_close($con);

  }


?>
