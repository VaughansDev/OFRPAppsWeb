<?php
session_start();
if (!isset($_POST['submit'])) {
  header("Location: ../profile.php?changepass=error1");
} else {
  require 'dbcon.inc.php';
  $username = $_SESSION['username'];
  $sql = "SELECT * FROM users WHERE username = '$username'";
  $result = $conn->query($sql);
  if (isset($result)) {
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $password = $row['password'];
      $currentpassword = $_POST['currentpassword'];
      if (password_verify($currentpassword, $password)) {
        if ($_POST['newpassword'] === $_POST['confnewpassword']) {
          $hashedpass = password_hash($_POST['newpassword'], PASSWORD_DEFAULT);
        } else {
            header("Location: ../profile.php?changepass=error4");
        }
        $username = $_SESSION['username'];
        $sql = "UPDATE users SET password = '$hashedpass' WHERE username = '$username'";
          if ($conn->query($sql) === TRUE) {
          header("Location: ../profile.php?changepass=success");
        } else {
          header("Location: ../profile.php?changepass=error3");
        }
     } else {
       header("Location: ../profile.php?changepass=error2");
 	   }
  }
  mysqli_close($conn);
} else {
  header("Location: ../profile.php?changepass=error6");
}
} else {
  header("Location: ../profile.php?changepass=error5");
}
}
?>
