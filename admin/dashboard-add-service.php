<?php
include('./server/server.php');
include('./server/userCheck.php');
?>
<?php
  $title = 'Service';
  include('./partials/head-partials.php');
?>
<body>
    <?php
      include('./partials/nav-partials.php')
    ?>
    <section class="my_sl_container">
      <?php include('./admin/service.php')
      ?>
    </section>
<script>
    const labels = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
  ];
  const data = {
    labels: labels,
    datasets: [{
      label: 'My First dataset',
      backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 99, 132)',
      data: [0, 10, 5, 2, 20, 30, 45],
    }]
  };
  const config ={
    type: 'line',
    data: data,
    options: {},
  }

  const myChart = new Chart(
    document.getElementById('sales-recap'),
    config
  );



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