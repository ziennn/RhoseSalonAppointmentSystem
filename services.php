<?php
 require_once('dbConfig.php');
 require_once('emailer.php');

?>
<!DOCTYPE html>
<html lang="en">
  <?php 
    $title  = ' | Services';
    include('./partials/head.php');
  ?>
<body>
  <?php
    include('./partials/nav.php');
  ?>
  <?php
    // include('./partials/service.php');
    include('./partials/service-3.php');
    include('./partials/footer.php');
  ?>

</body>
</html>

<!-- close connection -->
<?php
  mysqli_close($_connection);
?>