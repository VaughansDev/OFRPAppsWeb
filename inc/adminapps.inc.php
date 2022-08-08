<?php
  require 'dbcon.inc.php';

  $username = $_SESSION['username'];

  $sql = "SELECT * FROM applications  WHERE username = '$username'";
  $result = $conn->query($sql);
  if (isset($result)) {
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

      $appid = $row['id'];
      $apptype = $row['apptype'];
      $submitdate = $row['submitdate'];
      $username = $row['username'];
      $status = $row['status'];
      $icon = $row['icon'];
      ?>
  <tr>
    <td>
      <div class="d-flex px-2 py-1">
        <div>
          <i class="material-icons text-secondary opacity-10" style="padding-right:10px;">
            <?php echo $icon; ?>
          </i>
        </div>
          <a href="view-application.php?appid=<?php echo $appid; ?>">
        <div class="d-flex flex-column justify-content-center">
          <h6 class="mb-0 text-sm"><?php echo $apptype; ?></h6>
        </div>
      </a>
      </div>
    </td>
    <td class="align-middle text-center text-sm">
      <span class="text-xs font-weight-bold"><?php echo $username; ?></span>
    </td>
    <td class="align-middle text-center text-sm">
      <span class="text-xs font-weight-bold"><?php echo $submitdate; ?></span>
    </td>
    <td class="align-middle text-center text-sm">
      <?php if ($status === 'Pending Review') {?>
      <span class="text-xs font-weight-bold text-info"><?php echo $status; ?></span>
      <?php } elseif ($status === 'Accepted') {?>
      <span class="text-xs font-weight-bold text-success"><?php echo $status; ?></span>
      <?php } elseif ($status === 'Rejected') {?>
      <span class="text-xs font-weight-bold text-danger"><?php echo $status; ?></span>
      <?php } else { ?>
      <span class="text-xs font-weight-bold"><?php echo $status; ?></span>
      <?php } ?>
    </td>
    <td class="align-middle text-center text-sm">
      <span class="text-xs font-weight-bold">
        <a href="view-submitted-application.php?appid=<?php echo $appid; ?>">
          <button type="button" class="btn btn-info">View Application</button>
        </a>
      </span>
    </td>
  </tr>

     <?php }
     } else { ?>
       <center>No applications found, Submit one <a href="./../index.php">here</a>.</center>
     <?php
   }
     $conn->close();
  } else {?>
      <center>An error occured, please refresh the page or try again later.<br>If the problem continues contact VaughanHD#6057 on discord.</center>
  <?php }
?>
