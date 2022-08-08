<?php


switch ($_SERVER['PHP_SELF']) {

  case "/app/dashboard.php":
    $page = 'User Dashboard';
    break;

  case "/app/profile.php":
    $page = 'Profile';
    break;

  case "/app/my-applications.php":
    $page = 'My Applications';
    break;

  case "/app/view-application.php":
    $page = 'View Application';
    break;

  case "/app/admin-dashboard.php":
    $page = 'View Application';
    break;

  case "/app/submitted-applications.php":
    $page = 'Submitted Applications';
    break;

  case "/app/view-submitted-application.php":
    $page = 'View Application';
    break;

  }

  ?>
