<?php
  require 'inc/header.php';
?>
    <div class="container-fluid px-2 px-md-4">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
        <span class="mask  bg-gradient-primary  opacity-6"></span>
      </div>
      <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row gx-4 mb-2">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="assets/img/alt-logo.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                <?php echo $_SESSION['username']; ?>
              </h5>
              <p class="mb-0 font-weight-normal text-sm">
                Access Level: <?php echo $_SESSION['permlevel']; ?>
              </p>
              <p class="mb-0 font-weight-normal text-sm">
                Registered Since: <?php echo $_SESSION['regdate']; ?> | Last Login: <?php echo $_SESSION['lastlogin']; ?>
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="row">
            <center>
            <?php
              require 'inc/updateinfoerrors.inc.php';
              require 'inc/changepasserrors.inc.php';
            ?>
            </center>
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <h6 class="mb-0">Your Information</h6>
                </div>
                <div class="card-body p-3">
                  <form role="form" class="text-start">
                    <p>Username:</p>
                    <div class="input-group input-group-outline mb-3">
                      <input type="text" name="username" value="<?php echo $_SESSION['username']; ?>" class="form-control" readonly>
                    </div>
                    <p>First Name:</p>
                    <div class="input-group input-group-outline mb-3">
                      <input type="text" name="firstname" value="<?php echo $_SESSION['firstname']; ?>" class="form-control" readonly>
                    </div>
                    <p>Last Name:</p>
                    <div class="input-group input-group-outline mb-3">
                      <input type="text" name="lastname" value="<?php echo $_SESSION['lastname']; ?>" class="form-control" readonly>
                    </div>
                    <p>Date of Birth:</p>
                    <div class="input-group input-group-outline mb-3">
                      <input type="text" name="dob" value="<?php echo $_SESSION['dob']; ?>" class="form-control" readonly>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-left">
                      <h6 class="mb-0">Update Your Information</h6><br>
                    </div>
                  </div>
                </div>
                <div class="card-body p-3">
                  <form role="form" class="text-start" method="post" action="inc/updateinfo.inc.php">
                    <p>Email:</p>
                    <div class="input-group input-group-outline mb-3">
                      <input type="text" name="email" value="<?php echo $_SESSION['email']; ?>" class="form-control">
                    </div>
                    <p>DiscordID:</p>
                    <div class="input-group input-group-outline mb-3">
                      <input type="text" name="discordid" value="<?php echo $_SESSION['discordid']; ?>" class="form-control">
                    </div>
                    <div class="text-center">
                      <button type="submit" name="submit" value="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Update Information</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <h6 class="mb-0">Change Your Password</h6
                </div>
                <div class="card-body p-3">
                  <form role="form" class="text-start" method="post" action="inc/changepass.inc.php">
                    <p>Current Password:</p>
                    <div class="input-group input-group-outline mb-3">
                      <input type="password" name="currentpassword" class="form-control">
                    </div>
                      <p>New Password:</p>
                    <div class="input-group input-group-outline mb-3">
                      <input type="password" name="newpassword" class="form-control">
                    </div>
                      <p>Confirm New Password:</p>
                    <div class="input-group input-group-outline mb-3">
                      <input type="password" name="confnewpassword" class="form-control">
                    </div>
                    <div class="text-center">
                      <button type="submit" name="submit" value="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Change Password</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
      require 'inc/footer.php';
    ?>
