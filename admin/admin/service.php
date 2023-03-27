<?php

$sql = "select COUNT('cat_id') as total FROM category";
$res = mysqli_query($database, $sql);

$data = mysqli_fetch_assoc($res);


// new Category
if (isset($_POST['submit'])) {
  $cat_id = 'cat-' . $data['total'] + 1;
  $categ_name = mysqli_real_escape_string($database, $_POST['category']);
  $categ_discript = mysqli_real_escape_string($database, $_POST['description']);

  $status = 'error';

  if (!empty($_FILES["image"]["name"])) {
    $file_name = basename($_FILES["image"]["name"]);
    $file_type = pathinfo($file_name, PATHINFO_EXTENSION);

    $allow_types = array('jpg', 'png', 'jpeg', 'gif');
    if (in_array($file_type, $allow_types)) {
      $image = $_FILES['image']['tmp_name'];
      $imgContent = addslashes(file_get_contents($image));

      $insert = $database->query("INSERT INTO `category`(`cat_id`, `name`, `image`, `discription`) VALUES ('$cat_id','$categ_name','$imgContent','$categ_discript')");

      if ($insert) {
        $status = 'Success';
      } else {
        echo "<script>window.alert('Unable to save the File')</script>";
      }
    } else {
      echo "<script>window.alert('Wrong Format')</script>";
    }
  } else {
    echo "<script>window.alert('File Is Empty')</script>";
  }
}

//  new Service
if (isset($_POST['submit2'])) {

  // check if what is the current service count
  $sql = "select COUNT('serv_id') as total FROM service_list";
  $res = mysqli_query($database, $sql);

  $data = mysqli_fetch_assoc($res);

  $_serv_id = $data['total'] + 1;
  $_serv_name = mysqli_real_escape_string($database, $_POST['serv_name']);
  $_serv_price = mysqli_real_escape_string($database, $_POST['serv_price']);
  $_serv_category = mysqli_real_escape_string($database, $_POST['serv_category']);


  $_validate = "SELECT `name` FROM `service_list` WHERE name = '$_serv_name'";
  $res2 = $database->query($_validate);
  if ($res2->num_rows > 0) {
    echo "<script>window.alert('Data Already Existed')</script>";
  } else {
    if (!empty($_FILES["image"]["name"])) {
      $file_name = basename($_FILES['image']['name']);
      $file_type = pathinfo($file_name, PATHINFO_EXTENSION);

      echo  $file_type;
      $allow_types = array('jpg', 'png', 'jpeg', 'gif');

      if (in_array($file_type, $allow_types)) {
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));



        $insert = "INSERT INTO `service_list`(`serv_id`, `name`, `price`, `discount`, `image`, `category`) VALUES ('$_serv_id','$_serv_name','$_serv_price','0','$imgContent','$_serv_category')";

        $res = $database->query($insert);

        if (!$res) {
          echo "<script>window.alert('Unable to Save New Services')</script>";
        } else {
          echo "<script>window.alert('New Service Has Been Added')</script>";
        }
      } else {
        echo "File Type Error";
      }
    } else {
      echo "File is Empty";
    }
  }
}

?>
<h1 class="txt-white p-10 panel-logo" style="background: #333; color: white;">SERVICES</h1>

<!-- CATEGORY HERE -->
<div class="category-container">

  <?php
  $sql = "SELECT `name` FROM `category`";

  $result = $database->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

      // check if how many service are in that category
      $name = $row['name'];
      $sql_find = "SELECT COUNT('category') as total FROM service_list WHERE category = '$name'";
      $res_find = $database->query($sql_find);
      $res_data = mysqli_fetch_assoc($res_find);

      //show it to html
      echo "<div class='category-admin'>
            <p class='category-label'>" . $row["name"] . "</p> 
              <h2>" . $res_data['total'] . "</h2> 
            <p class='t-sale'>Services</p></div>";
    }
  } else {
    echo "<div class='category-admin'>
            <p class='category-label'>Create A New<br>Category</p></div>";
  }

  ?>

  <div class="category-add" style="position: relative; ">
    <a id="categ-add-btn" onclick="myClick('target')">+</a>
    <p style="color: white;">Add Category</p>
  </div>
</div>

<!-- TABLE HERE -->
<div class="latest-reservation">
  <h3 class="txt-dark" style="text-align: center; font-weight: bold; color: #9e1518">SERVICES</h3>

  <table class="txt-dark">
    <tr>
      <th class="x-hidden">Serv ID</th>
      <th>Name</th>
      <th>Price</th>
      <th class="x-hidden">Discount</th>
      <th>Category</th>
    </tr>
    <?php
    $sql = "SELECT `serv_id`, `name`, `price`, `discount`, `category` FROM `service_list`";

    $res = $database->query($sql);

    if ($res->num_rows > 0) {
      while ($row = $res->fetch_assoc()) {
        echo "<tr>
            <td class='x-hidden'>" . $row['serv_id'] . "</td>
            <td>" . $row['name'] . "</td>
            <td>" . $row['price'] . "</td>
            <td class='x-hidden'>" . $row['discount'] . "</td>
            <td>" . $row['category'] . "</td>
          </tr>";
      }
    }
    ?>
  </table>
  

</div>

<button id="view-all-res" onclick="myClick('target2')">Add New Service</button>

<!-- MODAL HERE AT BOTTOM -->

<div class="modal" id="target">
  <a id="close-btn" onclick="myClose('target')">X</a>
  <div class="inner-class">
    <h1 class="">New Category</h1>
    <form class="form-class" method="POST" enctype="multipart/form-data">
      <label for="">Category</label>
      <input type="text" name="category">
      <label for="">Picture</label>
      <input type="file" name="image">
      <label for="description">Description</label>
      <textarea name="description" id="description" cols="30" rows="10"></textarea>
      <button id="submit" name="submit">Submit</button>
    </form>
  </div>
</div>



<!-- set New Service -->
<div class="modal" id="target2">
  <a id="close-btn" onclick="myClose('target2')">X</a>
  <div class="inner-class">
    <h1 class="">New Services</h1>
    <form class="form-class" method="POST" enctype="multipart/form-data">
      <label for="">Service Name: </label>
      <input type="text" name="serv_name">
      <label for="">Service Price: </label>
      <input type="text" name="serv_price">
      <label for="">Service Image: </label>
      <input type="file" name="image">
      <label for="serv_category">Service Category: </label>
      <select name="serv_category" id="serv_category">
        <?php
        $sql = "SELECT `name` FROM category";
        $result = mysqli_query($database, $sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
            echo "<option>" . $row['name'] . "</option>";
          }
        }
        ?>
      </select>

      <button id="submit" name="submit2">Submit</button>
    </form>
  </div>
</div>