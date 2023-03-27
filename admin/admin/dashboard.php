<?php

  $_sql = "select COUNT('rs-id') as total FROM user_reservation";
  $_res = $database->query($_sql);
  $data = mysqli_fetch_assoc($_res);
  $total_reservation = $data['total'];

  // $rs = "res-id-".$data['total']+1;
  

  //monthly recap
  $sql1 = "select COUNT(`rs-status`) as total FROM user_reservation WHERE `rs-status`='completed'";
  $_res1 = $database->query($sql1);
  $data = mysqli_fetch_assoc($_res1);
  $total_completed = $data['total'];

  // total sales 
  $sql2 = "SELECT SUM(`rs-price`) FROM `user_reservation` WHERE `rs-status`='completed'";
  $_res2 = $database->query($sql2);
  $data = mysqli_fetch_assoc($_res2);
  $total_sales = $data['SUM(`rs-price`)'];

  $sql3 = "select COUNT(`rs-status`) as total FROM user_reservation WHERE `rs-status`='cancelled'";
  $_res3 = $database->query($sql3);
  $data = mysqli_fetch_assoc($_res3);
  $total_cancelled = $data['total'];

  $sql_count = "SELECT `user-visit-count` FROM `web-data` WHERE 1";
  $count_res = $database->query($sql_count);
  $count_data = mysqli_fetch_assoc($count_res);
  $_uvc = strval($count_data['user-visit-count']);

?>

<h1 class="txt-dark bg-dark p-10 panel-logo" style="background: #333; color: white;">DASHBOARD</h1>
<div class="ds-container">
  <div>
    <h4>Visitors</h4>
    <p>
      <?php
      echo $_uvc;
      ?>
    </p><?php
    ?>
  </div>
  <div>
    <h4>Reservation</h4>
    <p>
      <?php
        echo $total_reservation;
      ?>
    </p>
  </div>
  <div>
    <h4>Completed Reservation</h4>
    <p>
      <?php
      echo $total_completed;
      ?>
    </p>
  </div>
  <div>
    <h4>Total Sales</h4>
    <p>
      <?php
      echo $total_sales;
      ?>
    </p>
  </div>
</div>

<br>
<div class="monthly-recap-container">
  <!-- <div class="chart"> 
    <label for="sale-recap" class="chart-label">Montly Sale Recap</label>
    <canvas id="sales-recap"></canvas>
  </div> -->
  
  <div class="monthly-goal">
    <label for="prog-contaier" class="chart-label" style="text-align: center; font-weight: bold; color: #9e1518">Monthly Goal</label>
    <div class="prog-container">
      <span class="prog-title">Reservation Count</span>
      <div class="prog">
          <div class="prog-bar"></div>
          <span><?php echo $total_reservation ?>/200</span>
      </div>
    </div>
    <div class="prog-container">
      <span class="prog-title">Completed Reservation</span>
      <div class="prog">
          <div class="prog-bar" style="width: <?php echo ($total_completed/$total_reservation)*100 ?>%; background:green;"></div>
          <span><?php echo $total_completed."/".$total_reservation?></span>
      </div>
    </div>

    <div class="prog-container">
      <span class="prog-title">cancelled Reservation</span>
      <div class="prog">
          <div class="prog-bar" style="width: <?php echo ($total_cancelled/$total_reservation)*100 ?>%;background:orange; "></div>
          <span><?php echo $total_cancelled."/".$total_reservation?></span>
      </div>
    </div>
  </div>

  <!-- <div class="status-recap">
    <div>
      <i>19%</i><br>
      <span>$ 10000</span>
      <h4>TOTAL REVENUE</h4>
    </div>
    <div>
      <i>45%</i><br>
      <span>$ 450000</span>
      <h4>TOTAL PROFIT</h4>
    </div>
    <div>
      <i>1%</i><br>
      <span>80%</span>
      <h4>GOAL COMPLETION</h4>
    </div>
  </div> -->






  <?php 
    $sql = "SELECT * FROM `user_reservation`";
    $res = mysqli_query($database, $sql);
  ?>

  <div class="latest-reservation">
  <h3 class="txt-dark" style="text-align: center; font-weight: bold; color: #9e1518">LATEST RESERVATION</h3>
  <table class="txt-dark">
    <tr>
      <th >Res ID</th>
      <th class="x-hidden">Name</th>
      <th class="x-hidden">Service Name</th>
      <th>Status</th>
    </tr>

    <?php if($res->num_rows > 0) { 
      while ($row = $res->fetch_assoc()) { ?>
        <tr>
          <td  ><?php echo $row['rs-id'] ?></td>
          <td class="x-hidden"><?php echo $row['rs-name'] ?></td>
          <td class="x-hidden"><?php echo $row['rs-serv'] ?></td>
          <td><?php echo $row['rs-status'] ?></td>
        </tr>
    <?php }} else {
        echo $database->error;
        include('404.php');
    }?>

  </table>
  
</div>
<a href="dashboard-add-booking.php" id="view-all-res" >View All Reservation</a>


</div>