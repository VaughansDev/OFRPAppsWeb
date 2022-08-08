<?php
session_start();
if (!isset($_POST['submit'])) {
  header("Location: ../profile.php?updateinfo=error1");
} else {
  require 'dbcon.inc.php';
  $username = $_SESSION['username'];
  $email = $_POST['email'];
  list($discordname, $discriminator) = explode('#', $_POST['discordid']);

  $sql = "UPDATE users SET email = '$hashedpass', discordname = '$discordname', discorddiscrim = '$discriminator'  WHERE username = '$username'";
  $result = $conn->query($sql);
  if ($conn->query($sql) === TRUE) {
    $_SESSION['email'] = $email;
    $_SESSION['discordname'] = $discordname;
    $_SESSION['discorddiscrim'] = $discorddiscrim;
    $_SESSION['discordid'] = $discordname . '#' . $discriminator ;
    header("Location: ../profile.php?updateinfo=success");
  } else {
    header("Location: ../profile.php?updateinfo=error2");
  }
}
