<?php
  $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  if (strpos($fullurl, "updateinfo=success") == true) {
      echo ('<div class="alert alert-success text-gray 900"><strong><i class="fas fa-check"></i>  Success: </strong> Your Information was updated successfully.</div>');
  }
  elseif (strpos($fullurl, "updateinfo=error1") == true) {
      echo ('<div class="alert alert-danger text-gray 900"><strong><i class="fas fa-times"></i>  Error: </strong>An error occured while trying to update your information, Please try again or wait a little bit..</div>');
  }
  elseif (strpos($fullurl, "updateinfo=error2") == true) {
      echo ('<div class="alert alert-danger text-gray 900"><strong><i class="fas fa-times"></i>  Error: </strong> There was an error updateing your information, Please try again or wait a little bit.</div>');
  }
?>
