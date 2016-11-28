<?php

  header("Content-Type: text/csv");
  header("Content-Disposition: attachment; filename=file.csv");
  // Disable caching
  header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1
  header("Pragma: no-cache"); // HTTP 1.0
  header("Expires: 0");

  modDatabase();

  function modDatabase() {

    ini_set('display_errors','On');
    error_reporting(E_ALL);

    $txt_file    = file_get_contents('db.txt');
    $row_data = explode('^', $txt_file);

    $db_host = $row_data[0];
    $db_user = $row_data[1];
    $db_pass = $row_data[2];
    $db_name = $row_data[3];
    $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      return;
      }

    $sql = "SELECT Scores.PID,judgeId,judgeName,DP1,DP2,DP3,DP4,DP5,DP6,DP7,DP8,P1,P2,P3,P4,C1,C2,C3,C4,C5,C6,C7,C8,dept,sessionNo,roomNum,advisor,pTitle FROM Scores INNER JOIN Presentations ON Scores.PID=Presentations.PID";

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

    $fp = fopen('php://output', 'w');
    fputcsv($fp, array_keys($rows[0]));
    foreach ($rows as $val) {
      fputcsv($fp, $val);
    }

    fclose($fp);

    mysqli_close($con);

  }


?>
