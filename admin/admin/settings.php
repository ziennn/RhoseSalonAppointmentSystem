<?php
?>
<h1 class="txt-dark bg-dark p-10 panel-logo" style="background: #333; color: white;">SETTINGS</h1>
<section class="settings-cont">
    <button class="accordion" style="background: #ccc; color: #9e1518">ADMIN CREDENTIALS</button>
    <div class="panel">
      <label for="">Username: </label>
      <input type="text" value="admin">
      <label for="">Password: </label>
      <input type="password" value="123456789">
      <button class="update-btn btn-hover" onclick="myClick()" disabled>UPDATE</button>
    </div>
    <button class="accordion"  style="background: #ccc; color: #9e1518">THEME</button>
    <div class="panel" style="text-align: center; height: 200px">

      <h3 style="text-align: center; color: #9e1518">THEMES WILL BE UPDATED SOON</h3>
      <p>Where you can change admin themes whenever you want, and whatever you wanted it to be.</p>

      <!-- <label>Background Color</label>
      <ul class="theme">
        <li class="theme-1"></li>
        <li class="theme-2"></li>
        <li class="theme-3"></li>
        <li class="theme-4"></li>
        <li class="theme-5"></li>
      </ul>
      <button class="update-btn btn-hover">UPDATE</button> -->
    </div>
    <button class="accordion"  style="background: #ccc; color: #9e1518">ABOUT CREATOR</button>
    <div class="panel">
      <p style="text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, dolorum quia impedit sed itaque magnam et saepe beatae. Ea cupiditate officia optio tenetur tempora vel expedita laudantium? Libero praesentium reprehenderit laborum illo non nostrum eum voluptatum voluptas cum, magnam quae quia molestiae perferendis dolorem assumenda.</p>
      <address>
        Email: ace_dev@builder.com <br>
        Contact: 12395823 <br>
        Social: www.ace_dev.com <br>
      </address>
    </div>
    
    <a id="log-out" href="login.php?logOut='1'" >LOG-OUT</a>
    
 </section>


<!-- MODAL -->
<div class="modal" id="target">
   <a id="close-btn" onclick="myClose()">X</a>
    <div class="inner-class"> 
    <h1 class="">PROFILE</h1>
    <form action="" class="form-class">
        <img class="img-profile" src="" alt="">
        <label for="">Picture</label>
        <input type="file">
        <label>Name: </label>
        <input type="text" value="Jhun Carlo Macdon">
        <label for="">User-Name: </label>
        <input type="email" value="jhuncarlomacdon@gmail.com">
        <label for="">Password: </label>
        <input type="password" value="123456789">
        <button class="update-btn btn-hover" onclick="">UPDATE</button>
    </form>
  </div>
</div>
