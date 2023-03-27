<?php
include('./dbConfig.php');



$_sql = "SELECT * FROM `artist_list`";

$_res = $_connection->query($_sql);



?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h4>Services</h4>
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

</body>
</html>