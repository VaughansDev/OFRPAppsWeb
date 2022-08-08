  <?php
    require 'dbcon.inc.php';

    $sql2 = "SELECT * FROM news ORDER BY id DESC LIMIT 10";
    $result2 = $conn->query($sql2);
    if (isset($result2)) {
      if ($result2->num_rows > 0) {
      while($row2 = $result2->fetch_assoc()) {

        $newsid = $row2['id'];
        $newsdate = $row2['date'];
        $newstitle = $row2['title'];
        $newsicon = $row2['icon'];
        ?>

        <div class="timeline-block mb-3">
          <span class="timeline-step">
            <i class="material-icons text-success text-gradient"><?php echo $newsicon; ?></i>
          </span>
          <div class="timeline-content">
            <h6 class="text-dark text-sm font-weight-bold mb-0"><?php echo $newstitle; ?></h6>
            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0"><?php echo $newsdate; ?></p>
          </div>
        </div>

       <?php }
       } else { ?>
         <center><p>No news found, Check back later.</p></center>
       <?php
         //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
       }
       $conn->close();
    } else {?>
        <center>An error occured, please refresh the page or try again later.<br>If the problem continues contact VaughanHD#6057 on discord.</center>
    <?php }
  ?>
