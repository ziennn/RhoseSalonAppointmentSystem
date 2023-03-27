<?php
include('./server/server.php');
include('./server/userCheck.php');
?>
<?php
  $title = 'Booking';
  include('./partials/head-partials.php');
?>
<body>
    <?php
      include('./partials/nav-partials.php')
    ?>
    <section class="my_sl_container">
      <?php include('./admin/booking.php')
      ?>
    </section>



<script>
  function myClick(id){
    var x = document.getElementById(id).style;
    x.display = 'flex';
  }

  function myClose(id){
    var x = document.getElementById(id).style;
    x.display = 'none';
  }

</script>
</body>