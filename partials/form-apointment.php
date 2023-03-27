<?php

require_once('dbConfig.php');


$sql = "SELECT * FROM `service_list`";
$res = $_connection->query($sql);

$_sql = "SELECT * FROM `artist_list`";
$_res = $_connection->query($_sql);


?>


<form class="modal-form" action='getData.php' method="POST">
  <h4>Personal Info</h4>
  <input class="form-item" name="rs-name" type="text" placeholder="Your Name: " required>
  <input class="form-item" name="rs-email" type="email" placeholder="Your Email: " required>
  <input class="form-item" name="rs-tel" type="tel" placeholder="Your Phone: 09**-***-****" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" required>

  <h4>Services</h4>
  <select class="form-item" name="rs-serv" id="" required>
    <?php if ($res->num_rows > 0) {
      while ($row = $res->fetch_assoc()) {
    ?>
        <option value="<?php echo $row['name'] ?>"><?php echo $row['name'] . ' ' . $row['price'] ?></option>
      <?php }
    } else { ?>
      <option value="NONE">NONE</option>
    <?php } ?>
  </select>

  <h4>Senior Artist</h4>
  <select class="form-item" name="rs-artist" id="" required>
    <?php if ($_res->num_rows > 0) {
      while ($row = $_res->fetch_assoc()) {
    ?>
        <option value="<?php echo $row['artist_name'] ?>"><?php echo $row['artist_name']?></option>
      <?php }
    } else { ?>
      <option value="NONE">NONE</option>
    <?php } ?>
  </select>


  <h4>Service Type</h4>
  <select class="form-item" name="rs-serv-type" id="" required>       
            <option value="Home-Services">Home-Service</option>
            <option value="Walk-In">Walk-In</option>
  </select>


  <h4>Prefered Date & Time</h4>
  <label for="date">Select Date</label>
  <input class="form-item" name="rs-date" type="date" required>
  <label for="time">Select Time</label>
  <input class="form-item" name="rs-time" type="time" required>

  <h4>Note</h4>
  <textarea class="form-item" name="" id="" cols="30" rows="10"></textarea>

  <button class="btn-apt" name="rs-btn-submit">Book Now</button>

</form>