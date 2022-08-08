<?php
  require 'dbcon.inc.php';
  $user = $_SESSION['username'];

  $sql3 = "SELECT * FROM applications";

  if ($result3 = mysqli_query($conn, $sql3)) {
    $admintotalcount = mysqli_num_rows( $result3 );
  }

  $sql4 = "SELECT * FROM applications";

  if ($result4 = mysqli_query($conn, $sql4)) {
    $adminpendingcount = mysqli_num_rows( $result4 );
  }

  $sql5 = "SELECT * FROM applications";

  if ($result5 = mysqli_query($conn, $sql5)) {
    $adminacceptedcount = mysqli_num_rows( $result5 );
  }

  $sql6 = "SELECT * FROM applications";

  if ($result6 = mysqli_query($conn, $sql6)) {
    $adminrejectedcount = mysqli_num_rows( $result6 );
  }

  mysqli_close($conn);
