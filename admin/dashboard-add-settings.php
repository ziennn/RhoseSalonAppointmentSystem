<?php
include('./server/server.php');
include('./server/userCheck.php');
?>
<?php
  $title = 'Settings';
  include('./partials/head-partials.php');
?>
<body class="">
    <?php
      include('./partials/nav-partials.php')
    ?>
    <section class="my_sl_container">
      <?php include('./admin/settings.php')
      ?>
    </section>
<script>
  var x = document.getElementById('target').style;
  function myClick(){
    x.display = 'flex';
  }

  function myClose(){
    x.display = 'none';
  }

</script>
</body>