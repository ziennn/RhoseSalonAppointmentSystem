<?php
include('./server/server.php');
include('./server/userCheck.php');
?>
<?php
  $title = 'GALLERY';
  include('./partials/head-partials.php');
?>
<body>
    <?php
      include('./partials/nav-partials.php')
    ?>
    <section class="my_sl_container">
      <?php include('./admin/gallery.php')
      ?>
    </section>
</body>