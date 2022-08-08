<?php
require 'dbcon.inc.php';

$username = $_SESSION['username'];
$appid = $_GET['appid'];

$sql = "SELECT * FROM applications  WHERE id = '$appid'";
$result = $conn->query($sql);
if (isset($result)) {
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

      $appnumber = $row['appnumber'];
      $apptype = $row['apptype'];

      if ($apptype == 'EMS') {
        require 'viewems.inc.php';
      } elseif ($apptype === 'Toronto Police') {
        require 'viewtps.inc.php';
      } elseif ($apptype === 'OFRP Staff') {
        require 'viewstaff.inc.php';
      } elseif ($apptype === 'Ontario Provincial Police') {
        require 'viewopp.inc.php';
      } else {
        header('location: ../my-applications.php');
      }
    }
  }
} else {
    header('location: ../my-applications.php');
}
