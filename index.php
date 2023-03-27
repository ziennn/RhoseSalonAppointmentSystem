<?php
 require_once('dbConfig.php');
 require_once('emailer.php');
?>
<!DOCTYPE html>
<html lang="en">
  <?php 
    $title  = ' | Home';
    include('./partials/head.php');
  ?>
<body>
  <?php include('./partials/whitelist.php'); ?>
  <?php
    include('./partials/nav.php');
  ?>
  <?php
    include('./partials/main.php');
    // include('./partials/service.php');
    // include('./partials/about-us.php');
    include('./partials/service-2.php');
    include('./partials/join-us.php');
    include('./partials/footer.php');
  ?>

</body>
</html>

<!-- close connection -->
<?php
  mysqli_close($_connection);
?>