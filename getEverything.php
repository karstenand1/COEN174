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

    $sql = "SELECT * FROM Scores INNER JOIN Presentations ON Scores.PID=Presentations.PID";

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
