<?php
  $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  if (strpos($fullurl, "changepass=success") == true) {
      echo ('<div class="alert alert-success text-gray 900"><strong><i class="fas fa-check"></i>  Success: </strong> Your password was changed successfully.</div>');
  }
  elseif (strpos($fullurl, "changepass=error1") == true) {
      echo ('<div class="alert alert-danger text-gray 900"><strong><i class="fas fa-times"></i>  Error: </strong>An error occured while trying to change your password, Please try again or wait a little bit..</div>');
  }
  elseif (strpos($fullurl, "changepass=error2") == true) {
      echo ('<div class="alert alert-danger text-gray 900"><strong><i class="fas fa-times"></i>  Error: </strong> There was an error changeing your password, Please try again or wait a little bit.</div>');
  }
  elseif (strpos($fullurl, "changepass=error3") == true) {
      echo ('<div class="alert alert-danger text-gray 900"><strong><i class="fas fa-times"></i>  Error: </strong>An error occured while trying to change your password, Please try again or wait a little bit..</div>');
  }
  elseif (strpos($fullurl, "changepass=error4") == true) {
      echo ('<div class="alert alert-danger text-gray 900"><strong><i class="fas fa-times"></i>  Error: </strong> There was an error changeing your password, Please try again or wait a little bit.</div>');
  }
  elseif (strpos($fullurl, "changepass=error5") == true) {
      echo ('<div class="alert alert-danger text-gray 900"><strong><i class="fas fa-times"></i>  Error: </strong>An error occured while trying to change your password, Please try again or wait a little bit..</div>');
  }
  elseif (strpos($fullurl, "changepass=error6") == true) {
      echo ('<div class="alert alert-danger text-gray 900"><strong><i class="fas fa-times"></i>  Error: </strong> There was an error changeing your password, Please try again or wait a little bit.</div>');
  }
?>
