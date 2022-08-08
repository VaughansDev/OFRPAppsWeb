<?php
  require 'dbcon.inc.php';
  $sql2 = "SELECT * FROM ems_applications  WHERE appnumber = '$appnumber' AND username = '$username'";
  $result2 = $conn->query($sql2);
  if (isset($result2)) {
    if ($result2->num_rows > 0) {
      while($row2 = $result2->fetch_assoc()) {
        $status = $row2['status'];
        $appusername = $row2['username'];
        $discordname = $row2['discordname'];
        $discriminator = $row2['discriminator'];
        $discordid = $discordname . '#' . $discriminator;
        $submitdate = $row2['submitdate'];
        $reviewedby = $row2['reviewedby'];
        $q1 = $row2['q1'];
        $q2 = $row2['q2'];
        $q3 = $row2['q3'];
        $q4 = $row2['q4'];
        $q5 = $row2['q5'];
        $q6 = $row2['q6'];
        $q7 = $row2['q7'];
        $q8 = $row2['q8'];
        $apptype = $row2['apptype'];
      }
    }
  }
?>
<div class="container">
  <div style="border-style:solid; border-width:2px; border-radius:5px; margin-top:20px; margin-bottom:20px; padding:20px;">
    <div class="row">
      <div class="col-lg-12 text-center">
        <?php if ($status === 'Accepted') { ?>
        <h5>Application Status: <span class="badge badge-pill badge-lg bg-gradient-success"><?php echo $status; ?></span></h5>
        <?php } elseif ($status === 'Pending Review') { ?>
        <h5>Application Status: <span class="badge badge-pill badge-lg bg-gradient-info"><?php echo $status; ?></span></h5>
        <?php } elseif ($status === 'Rejected') { ?>
        <h5>Application Status: <span class="badge badge-pill badge-lg bg-gradient-danger"><?php echo $status; ?></span></h5>
        <?php } elseif ($status === 'Under Review') { ?>
        <h5>Application Status: <span class="badge badge-pill badge-lg bg-gradient-warning"><?php echo $status; ?></span></h5>
        <?php } elseif ($status === 'On Hold') { ?>
        <h5>Application Status: <span class="badge badge-pill badge-lg bg-gradient-secondary"><?php echo $status; ?></span></h5>
        <?php } ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <h5>Applicant username: <?php echo $appusername; ?></h5>
      </div>
        <div class="col-md-6">
          <h5>DiscordID: <?php echo $discordid; ?></h5>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <h5>Reviewed By: <?php echo $reviewedby; ?></h5>
      </div>
      <div class="col-md-6">
        <h5>Submit Date: <?php echo $submitdate; ?></h5>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <form>
    <div style="border-style:solid; border-width:2px; border-radius:5px; margin-top:20px; margin-bottom:20px; padding:10px;">
    <h5>Questions</h5>
    <div class="row">
      <div class="col-md-6">
        <p>Character First Name:</p>
        <div class="input-group input-group-outline my-3">
          <input type="text" value="<?php echo $q1; ?>" class="form-control">
        </div>
      </div>
      <div class="col-md-6">
        <p>Character Last Name:</p>
        <div class="input-group input-group-outline my-3">
          <input type="text" value="<?php echo $q2; ?>" class="form-control">
        </div>
      </div>
      <div class="col-md-6">
        <p>Discord ID:</p>
        <div class="input-group input-group-outline my-3">
          <input type="text" value="<?php echo $q3; ?>" class="form-control">
        </div>
      </div>
      <div class="col-md-6">
        <p>Steam HEX ID:</p>
        <div class="input-group input-group-outline my-3">
          <input type="text" value="<?php echo $q4; ?>" class="form-control">
        </div>
      </div>
      <div class="col-md-6">
        <p>How old are you?</p>
        <div class="input-group input-group-outline my-3">
          <input type="text" value="<?php echo $q5; ?>" class="form-control">
        </div>
      </div>
      <div class="col-md-6">
        <p>Timezone?</p>
        <div class="input-group input-group-outline my-3">
          <input type="text" value="<?php echo $q6; ?>" class="form-control">
        </div>
      </div>
      <div class="col-lg-12">
        <p>Why do you want to join EMS?</p>
        <div class="input-group input-group-outline my-3">
          <input type="text" value="<?php echo $q7; ?>" class="form-control">
        </div>
      </div>
      <div class="col-lg-12">
        <p>Why should we choose you over other applicants?</p>
        <div class="input-group input-group-outline my-3">
          <input type="text" value="<?php echo $q8; ?>" class="form-control">
        </div>
      </div>
    </div>
    </div>
  </form>
</div>
<div class="container text-center">
  <div class="row">
    <div class="col-lg-3">
    </div>
    <div class="col-lg-6">
      <div style="border-style:solid; border-width:2px; border-radius:5px; margin-bottom:20px; padding:20px;">
        <form action="" method="post">
          <h5>Update Application Status:</h5>
          <button type="button" value="pending" name="updatestatus" class="btn btn-info">Mark as Pending</button>
          <button type="button" value="underreview" name="updatestatus" class="btn btn-warning">Mark as Under Review</button>
          <button type="button" value="accept" name="updatestatus" class="btn btn-success">Accept Application</button>
          <button type="button" value="reject" name="updatestatus" class="btn btn-danger">Reject Application</button>
          <button type="button" value="onhold" name="updatestatus" class="btn btn-secondary">Put On Hold</button>
        </form>
      </div>
    </div>
    <div class="col-lg-3">
    </div>
  </div>
</div>
