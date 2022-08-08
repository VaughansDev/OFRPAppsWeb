<?php
  require 'dbcon.inc.php';
  $user = $_SESSION['username'];

  $sql3 = "SELECT * FROM applications WHERE username = '$user'";

  if ($result3 = mysqli_query($conn, $sql3)) {
    $totalcount = mysqli_num_rows( $result3 );
  }

  $sql4 = "SELECT * FROM applications WHERE username = '$user' AND status = 'Pending Review'";

  if ($result4 = mysqli_query($conn, $sql4)) {
    $pendingcount = mysqli_num_rows( $result4 );
  }

  $sql5 = "SELECT * FROM applications WHERE username = '$user' AND status = 'Accepted'";

  if ($result5 = mysqli_query($conn, $sql5)) {
    $acceptedcount = mysqli_num_rows( $result5 );
  }

  $sql6 = "SELECT * FROM applications WHERE username = '$user' AND status ='Rejected'";

  if ($result6 = mysqli_query($conn, $sql6)) {
    $rejectedcount = mysqli_num_rows( $result6 );
  }

  mysqli_close($conn);
