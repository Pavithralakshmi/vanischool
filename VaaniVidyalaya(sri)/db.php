<?php

$mysqli = new mysqli('localhost', 'root', 'root', 'vani');
//$mysqli = new mysqli('vanimatric.db.11929993.b29.hostedresource.net', 'vanimatric', 'Password1%', 'vanimatric');
if ($mysqli->connect_errno)
    echo "Error - Failed to connect to MySQL: " . $mysqli->connect_error;
mysqli_query($mysqli, "set character_set_client='utf8'");
mysqli_query($mysqli, "set character_set_results='utf8'");
mysqli_query($mysqli, "set collation_connection='utf8mb4_general_ci'");
date_default_timezone_set("Asia/Kolkata");
$datetime = date("Y-m-d-H:i:s");
//phpinfo();exit;
//  echo $datetime;exit;
?>

