<?php
 require_once('dbConfig.php');
 require_once('emailer.php');
?>
<!DOCTYPE html>
<html lang="en">
  <?php 
    $title  = ' | Appointment';
    include('./partials/head.php');
  ?>
<body>
  <?php
    include('./partials/nav.php');
  ?>
  <?php
    include('./partials/apt.php');
    include('./partials/footer.php');
  ?>

</body>
</html>

<!-- close connection -->
<?php
  mysqli_close($_connection);
?>