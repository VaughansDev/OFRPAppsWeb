<?php
  $sql2 = "SELECT * FROM opp_applications  WHERE appnumber = '$appnumber' AND username = '$username'";
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
        $q9 = $row2['q9'];
        $q10 = $row2['q10'];
        $q11 = $row2['q11'];
        $q12 = $row2['q12'];
        $q13 = $row2['q13'];
        $q14 = $row2['q14'];
        $q15 = $row2['q15'];
        $q16 = $row2['q16'];
        $q17 = $row2['q17'];
        $q18 = $row2['q18'];
        $q19 = $row2['q19'];
        $q20 = $row2['q20'];
        $q21 = $row2['q21'];
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
    </div>
    <div class="row">
      <div class="col-md-6">
        <p>Country & Region?</p>
        <div class="input-group input-group-outline my-3">
          <input type="text" value="<?php echo $q5; ?>" class="form-control">
        </div>
      </div>
      <div class="col-md-6">
        <p>Discord ID:</p>
        <div class="input-group input-group-outline my-3">
          <input type="text" value="<?php echo $q3; ?>" class="form-control">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <p>How old are you?</p>
        <div class="input-group input-group-outline my-3">
          <input type="text" value="<?php echo $q7; ?>" class="form-control">
        </div>
      </div>
      <div class="col-md-6">
        <p>Timezone?</p>
        <div class="input-group input-group-outline my-3">
          <input type="text" value="<?php echo $q6; ?>" class="form-control">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <p>Steam HEX ID:</p>
        <div class="input-group input-group-outline my-3">
          <input type="text" value="<?php echo $q6; ?>" class="form-control">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <p>Why do you want to join OPP? (80 Word Minimum)</p>
        <div class="input-group input-group-outline my-3">
          <input type="text" value="<?php echo $q9; ?>" class="form-control">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <p>What are your duties as OPP in Canada?</p>
        <div class="input-group input-group-outline my-3">
          <input type="text" value="<?php echo $q10; ?>" class="form-control">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <p>What do you have to offer to OPP?</p>
        <div class="input-group input-group-outline my-3">
          <input type="text" value="<?php echo $q11; ?>" class="form-control">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <p>What makes you suitable for this department? (60 Word Minimum)</p>
        <div class="input-group input-group-outline my-3">
          <input type="text" value="<?php echo $q12; ?>" class="form-control">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <p>Do you know what the chain of command is? If so explain it and, do you agree to comply with it?</p>
        <div class="input-group input-group-outline my-3">
          <input type="text" value="<?php echo $q13; ?>" class="form-control">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <p>How long have you been playing on the server? (Put in minutes)</p>
        <div class="input-group input-group-outline my-3">
          <input type="text" value="<?php echo $q8; ?>" class="form-control">
        </div>
      </div>
      <div class="col-md-6">
        <p>Do you agree that you will act respectfully and maturely at any and all times? (Yes/No)</p>
        <div class="input-group input-group-outline my-3">
          <input type="text" value="<?php echo $q14; ?>" class="form-control">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <p>Do you understand that you could receive consequences from your supervisors if you fail to follow the rules? (Yes/No)</p>
        <div class="input-group input-group-outline my-3">
          <input type="text" value="<?php echo $q15; ?>" class="form-control">
        </div>
      </div>
      <div class="col-md-6">
        <p>Do you understand that you can be removed or blacklisted from the department if you receive a certain amount of disciplinary actions? (Yes/No)</p>
        <div class="input-group input-group-outline my-3">
          <input type="text" value="<?php echo $q17; ?>" class="form-control">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <p>Do you agree not to ask staff members or members of the department command staff about this application? (Yes/No)</p>
        <div class="input-group input-group-outline my-3">
          <input type="text" value="<?php echo $q18; ?>" class="form-control">
        </div>
      </div>
      <div class="col-md-6">
        <p>Do you believe you put the necessary effort into this application? (Yes/No)</p>
        <div class="input-group input-group-outline my-3">
          <input type="text" value="<?php echo $q19; ?>" class="form-control">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <p>All applicants are required to read and understand the community policies, have you done so? (Yes/No)</p>
        <div class="input-group input-group-outline my-3">
          <input type="text" value="<?php echo $q16; ?>" class="form-control">
        </div>
      </div>
      <div class="col-md-6">
        <p>Are you able to content 10+ hours every week for OPP? (Yes/No)</p>
        <div class="input-group input-group-outline my-3">
          <input type="text" value="<?php echo $q20; ?>" class="form-control">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <p>You get a call that there is a bank robbery in the part of the city, where both TPD and OPP patrols. There is a Sergeant from the OPP present, and a commander from the TPD, who do you think takes command of the situation in regards of jurisdiction</p>
        <div class="input-group input-group-outline my-3">
          <input type="text" value="<?php echo $q21; ?>" class="form-control">
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
