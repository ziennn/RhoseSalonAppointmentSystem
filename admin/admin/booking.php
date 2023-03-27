<?php
  $s_data = 0;

  error_reporting(0);
  ini_set('display_errors', 0);
  
  if(isset($_POST['search-id'])){
    $search_id = mysqli_real_escape_string($database, $_POST['search-id']);
    $_SESSION['search_id'] = $search_id;
  }


  if($_SESSION['search-id']){
    $id = $_SESSION['search_id'];

    $sql = "SELECT `rs-id`, `rs-name`, `rs-serv`, `rs-price`, `rs-status` FROM `user_reservation` WHERE `rs-id`='$id'";
    $res = mysqli_query($database, $sql);
    $s_data = mysqli_fetch_assoc($res);
  
    
    if(isset($_POST['submit'])){
      $submit = mysqli_real_escape_string($database, $_POST['submit']);
      $_rsql = "UPDATE `user_reservation` SET `rs-status`='$submit' WHERE `rs-id`='$id'";

      $_resr = mysqli_query($database, $_rsql);

      if($_resr){
        echo "<script>alert('Reservation Updated'). $id .</script>";
      }else {
        echo "<script>alert('UN-ABLE TO UPDATE THE SYSTEM')</script>";
      }
    }
  }
?>

<h1 class="txt-dark bg-dark p-10 panel-logo" style="background: #333; color: white;">BOOKINGS</h1>


<style>
  .update-res{
    display: flex;
    flex-flow: row wrap;
    justify-content: space-around;
  }

  .update-div{
    width: 60%;
    height: 400px;
    background: rgba(123,123,123,.2);
    padding: 10px;
  }

  .update-div2{
    width: 30%; 
    border: 1px solid black; 
    padding: 5px;
    border-radius: 10px;
  }

  .div2-form{
    display: flex; 
    flex-flow: column wrap; 
    padding: 5px; 
    justify-content: space-between; 
    align-items: center;
  }

  .update-div label {
    margin-left: 30px;
    text-transform: uppercase;
  }
  
  .update-div p {
    margin-top: 5px;
    margin-left: 80px;
    text-transform: uppercase;
  }

  #On-Going {
    padding: 10px;
    border-radius: 5px;
    background: darkblue;
    color: white;
  }

  #Completed {
    padding: 10px;
    border-radius: 5px;
    background: green;
    color: white;
  }

  #Cancelled {
    padding: 10px;
    border-radius: 5px;
    background: red;
    color: white;
  }
  
  @media (max-width: 500px) {
    .update-res{
      flex-flow: column wrap;
    }
    .update-div{
      width: 100%;
      height: auto;
    }
    .update-div2{
      width: 100%;
      padding: 0px;
    }
    .div2-form{
      flex-flow: row wrap;
    }
    .div2-form input{
      width: auto;
      justify-content: space-around;
      
    }
    #btn-search{
      display: hidden;
    }
  }

</style>

<div class="update-res">
  <div style="width: 100%; text-align: center; margin-bottom: 10px;">
    <form method="POST" >
      <input id="search" style="width: 65%; border-radius: 10px; padding: 5px; text-align: left; text-transform: uppercase; font-weight: bold;" type="text" name="search-id" id="search" placeholder="Search Id">
      <input id="btn-search" style=" border-radius: 10px; padding: 5px;background: #9e1518; color: white;" width="5%" type="submit" name='search' value='Search ID'>
    </form>
  </div>
  <div class="update-div" style="border-radius: 10px">
    <h2 style="border-bottom: 2px solid #9e1518; padding-bottom: 10px; text-align: center; color: #9e1518">Reservation Information</h2>
    <?php
        if($s_data){
     ?>
        <label>RES-id : <p><?php echo $s_data['rs-id'] ?></p></label>
        <br>
        <label>Name : <p><?php echo $s_data['rs-name'] ?></p></label>
        <br>
        <label>Service Name: <p><?php echo $s_data['rs-serv'] ?></p> </label>
        <br>
        <label>Price : <p><?php echo $s_data['rs-price'] ?></p></label>
        <br>
        <label>Status : <p id="<?php echo $s_data['rs-status'] ?>"><?php echo $s_data['rs-status'] ?></p> </label>
  <?php } else { ?>
        <label>RES-id : </label>
        <p><?php ?></p>
        <label>Name : </label>
        <p><?php ?></p>
        <label>Service Name: </label>
        <p><?php?></p>
        <label>Price : </label>
        <p><?php?></p>
        <label>Status : </label>
        <p><?php  ?></p> 
        <div style="margin-top: 60px; border-radius: 5px; text-align:center; color: white; width: 100%; padding: 10px; border: 1px solid black;background: #9e1518 ">RESERVATION NOT FOUND</div>
        <?php } ?>
  </div>

  <div class="update-div2" style=" background: rgba(123,123,123,.2); border: none">
    <h2 style="border-bottom: 2px solid #9e1518; padding-bottom: 10px;text-align: center; color: #9e1518">Update</h2>
    <form class="div2-form"  method="POST">
        <input style="margin-top: 15px" type="submit" name="submit" id="On-Going" value="On-Going">
        <input style="margin-top: 15px" type="submit" name="submit"  placeholder="Completed" id="Completed" value="Completed">
        <input style="margin-top: 15px" type="submit" name="submit" id="Cancelled" value="Cancelled">
    </form>
  </div>
</div>







<br>
<div class="monthly-recap-container">
  <?php 
    $sql = "SELECT * FROM `user_reservation`";
    $res = mysqli_query($database, $sql);
  ?>

  <div class="latest-reservation">
  <h3 class="txt-dark" style="text-align: center; font-weight: bold; color: #9e1518;">RESERVATIONS</h3>
  <table class="txt-dark">
    <tr>
      <th>Res ID</th>
      <th class="x-hidden">Name</th>
      <th class="x-hidden">Service Name</th>
      <th>Status</th>
    </tr>

    <?php if($res->num_rows > 0) { 
      while ($row = $res->fetch_assoc()) { ?>
        <tr>
          <td><?php echo $row['rs-id'] ?></td>
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



</div>