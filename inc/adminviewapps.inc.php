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
        require 'adminviewems.inc.php';
      } elseif ($apptype === 'Toronto Police') {
        require 'adminviewtps.inc.php';
      } elseif ($apptype === 'OFRP Staff') {
        require 'adminviewstaff.inc.php';
      } elseif ($apptype === 'Ontario Provincial Police') {
        require 'adminviewopp.inc.php';
      } else {
        header('location: ../my-applications.php');
      }
    }
  }
} else {
    header('location: ../my-applications.php');
}
