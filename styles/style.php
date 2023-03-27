<?php

?>
<style>
  * {
    margin: 0px;
    padding: 0px;
    text-decoration: none;
    font-family: "Barlow Semi Condensed", Arial, Helvetica, sans-serif;
  }

  body{
    display: flex;
    flex-flow: row wrap;
    justify-content: center;
    /* background-image: url(https://bitsum.com/wp-content/uploads/dark-background-images-5561-5821-hd-wallpapers.jpg); */
    background: white;
    /* background-size: cover;
    background-repeat: no-repeat; */
  }

  #check {
    display: none;
  }

  /*.active,*/
  .nav-item:hover{
        box-shadow: -1px 0px 10px 0px #def2f1 inset;
-webkit-box-shadow: -1px 0px 10px 0px #def2f1 inset;
   -moz-box-shadow: -1px 0px 10px 0px #def2f1 inset;
  }

  .nav-container {
    width: 100%;
    border-bottom: 1px solid white;
    position: fixed;
    top: 0px;
    display: flex;
    flex-flow: row wrap;
    justify-content: space-between;
    align-content: center;
    align-items: center;
    text-transform: uppercase;
    background-color: #060607;
  }

  .navbar {
    padding: 20px;
    display: flex;
    flex-flow: row wrap;
    justify-content: space-between;
    align-content: space-between;
    align-items: center;
  }

  .nav-item {
    text-align: center;
    width: 150px;
    padding: 5px;
    margin: 4px;
    border-radius: 10px;
    transition: .5s ease;
  }

  .nav-link {
    color: whitesmoke;
  }

  #active{
    background: #9e1518;
    color: white;
  }

  .logo {
    font-size: 30px;
    color: #9e1518;
    margin-left: 20px;
    cursor: pointer;
    font-family: Rubik;
  }

  .lg-1 {
    padding: 5px;
  }

  .lg-1 img{
      width: 60%;
    }

  .checkbtn {
    display: none;
    position: fixed;
    right: 10px;
    top: 10px;
    float: right;
    font-size: 30px;
  }

  @media (max-width: 950px) {

    .checkbtn {
      display: block;
      color: white;
      margin-top: 7px;
     
    }

    .lg-1 {
      background-color: #060607;
      margin-right: auto;
    }

    .lg-2 {
      display: none;
    }

    .logo{
      color: #9e1518;
      font-family: Rubik;
    }

    .nav-container {
      justify-content: center;
      align-content: flex-start;
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100vh;
      padding: 10px;
    }

    .navbar {
      margin: 0px;
      padding: 0px;
      transition: all .5s ease;
      position: fixed;
      top: 60px;
      left: 100%;
      justify-content: flex-start;
      align-content: center;
      flex-flow: column wrap;
      height: 100%;
      width: 100%;
      background-color: #060607;
      border-top: 1px solid white;
    }

    .nav-item {
      margin: 0px;
      padding-top: 20px;
      padding-bottom: 20px;
      padding-left: 10px;
      text-align: center;
      margin-top: 20px;
      width: 90%;
      border-radius: 20px;
    }

    .nav-link {
      color: white;
    }
    .nav-link:hover{
      color: #9e1518;
    }

    #check:checked~.navbar {
      left: 0;
    }
  }

  /*@media (max-width: 425px){
    .lg-1 img{
      width: 50%;
      margin-left: 50px;
    }
  }*/
  
</style>