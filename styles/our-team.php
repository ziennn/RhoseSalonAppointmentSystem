<?php
?>
<style>
  .team-container h2 {
    border-bottom: 2px solid #9e1518;
    padding: 20px;
    margin-bottom: 20px;
    background-color: #060607;
    font-size: 40px;
    text-transform: uppercase;
    color: white;
  -webkit-text-fill-color: transparent; 
  -webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color: white;
  }

  .team-container {
    background-color: #060607;
    display: flex;
    flex-flow: column wrap;
    justify-content: center;
    align-content: center;
    width: 100%;
    height: auto;
    text-align: center;
    color: white;
    padding: 20px;
  }

  /*.team-container * {
    border: 1px solid black;
  }*/

  .team-box {
    width: 100%;
    display: flex;
    flex-flow: row wrap;
    justify-content: space-between;
    align-content: space-between;
    background-color: #060607;
  }

  .team-box img {
    width: 350px;
    height: 350px;
    border-radius: 50%;
    box-shadow: -1px 0px 10px 0px #9e1518;
  }

  .team-people {
    text-align: center;
  }

  .team-people *{
    margin: 10px;
  }

  .team-people h3{
    font-weight: bolder;
  }

  .people-icons i {
    font-size: 25px;
    font-weight: bold;
  }


  @media (max-width: 858px){

    .team-box img {
      width: 250px;
      height: 250px;
      border-radius: 50%;
    }
    .team-container h2 {
      font-size: 30px;
    }

    .team-people {
      text-align: center;
      width: 100%;
    }

    .team-people *{
      margin: 10px;
    }

    .team-people h3{
      font-size: medium;
    }
    .team-people p{
      font-size: 15px;
    }

  }
</style>