<?php
 require_once('dbConfig.php');

?>
<!DOCTYPE html>
<html lang="en">
  <?php 
    $title  = ' | Contact Us';
    include('./partials/head.php');
  ?>
<body>
  <?php
    include('./partials/nav.php');
  ?>
  <?php
    include('./partials/contact-apt.php');
    include('./partials/join-us.php');
    include('./partials/footer.php');
  ?>

</body>
</html>

<!-- close connection -->
<?php
  mysqli_close($_connection);
?>