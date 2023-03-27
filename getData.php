<?php

  require_once('dbConfig.php');

?>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rhose Salon</title>
  <link rel="shortcut icon" type="image/x-icon" href="resources/Salon.png">

  <style type="text/css">
    
    *{
      border: 0px;
      padding: 0px;
    }

    body{
      display: flex;
      justify-content: center;
      align-items: center;
      align-content: center;
      background: #333;
    }

    .rcpt-confirmation{
      display: flex;
      flex-flow: column wrap;
      justify-content: center;
      align-content: center;
      align-items: center;
      width: 560px;
      background: #f2dfdf;
      text-align: center;
      text-transform: uppercase;
      padding: 10px;
    }

    .rcpt-confirmation h1{
      width: 50%;
      color: rgba(0, 0, 0, 0.8);
    }

    .rcpt-box{
      border: 1px solid #9e1518;
      padding: 10px;
    }

    .rcpt-box *{
      color: black;
    }

    #btn-rcpt{
      padding: 5px;
      width: 120px;
      background: #9e1518;
      transform: 1s ease;
      border: 1px solid black;
      color: white;
      border-radius:20px;
    }


    #btn-rcpt:hover{
      border: 1px solid #060607;
    }
  </style>

</head>
<body>
  

<?php if($apt_confirmed == True) {  ?>
   <section class="rcpt-confirmation">
       <h1>APPOINTMENT CONFIRMED</h1>
       <h2  style="color: #9e1518;">RHOS3 SALON</h2>

       <div style="text-align: left; width: 50%;" class="rcpt-box">
         <p class="reciept-num">Reciept #: <?php echo $rs_id ?></p>
         <p class="date">Date: <?php echo date("Y-m-d") ?></p>
       </div>

       <div style="text-align: left; width: 50%;" class="rcpt-box">
         
         <p class="name">Name: <?php echo $rs_name ?></p>
         <p class="r-date">Reservation Date: <?php echo $rs_date ?></p>
         <p >Reservation Time: <?php echo $rs_time ?></p>
         <p>Salon Artist: <?php echo $rs_artist?></p>
         <p class="service">Service: <?php echo $rs_serve ?></p>
         <p>Service Type: <?php echo $rs_serv_type?></p>
         <br>
         <p style="font-size: 10; font-style: italic;">Note: This Reciept was send to your Email account.</p>
       </div>
       <br>
       <a id="btn-rcpt" href="./index.php">RETURN</a>
     </section>
<?php } ?>
  


</body>
</html>



