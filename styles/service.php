<?php
?>
<!--service styles -->
<style>
  .se-title {
    text-align: center;
    color: white;
    width: 100%;
  }

  .se-h2 {
    margin-top: 40px;
    font-size: 60px;
    margin-bottom: 10px;
    color: white;
  -webkit-text-fill-color: transparent; 
  -webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color: white;
  }

  .se-p {
    margin-bottom: 20px;
    color: #9e1518;
    font-weight:normal;
  }

  .se-container {
    margin-top: 80px;
    width: 90%;
    height: auto;
    color: white;
  }

  .se {
    height: 800px;
    display: flex;
    flex-flow: row wrap;
    justify-content: center;
    align-content: center;
    align-items: center;
    border-bottom: 1px solid #9e1518;
    background-color: rgba(74, 76, 87, 0.349);
  }

  .se-box {
    width: 400px;
    height: 400px;
    border: 1px solid white;
    text-align: center;
    margin: 10px;
    padding: 10px;
    transition: all .9s ease;
    display: flex;
    flex-flow: row wrap;
    justify-content: center;
    align-content: center;
    background: radial-gradient(circle, rgba(59, 57, 101, 1) 0%, rgba(225, 225, 225, 0.6446953781512605) 100%);
  }

  

  .se-image {
    background: red;
    position: relative;
    width: 250px;
    height: 250px;
  }

  .se-label {
    font-size: 32px;
    padding: 10px;
    color: white;
    text-transform: uppercase;
    font-weight: bold;
  }

  .se-description {
    color: wheat;
    width: 60%;
  }

  .se-box:hover {
    background: rgba(195, 220, 10, .1);
  }

  .se-table {
    width: 100%;
  }

  .se-table * {
    text-transform: uppercase;
    padding: 10px;
    color: white;
  }

  .se-table th {
    font-size: 25px;
  }

  .se-reserve {
    text-transform: uppercase;
    font-weight: bold;
    height: 420px;
    width: 200px;
    background: #e85a4f;
    transition: all .5s ease;
  }

  .se-reserve:hover {
    background: #e8594f8a;
    color: white;
  }


  @media (max-width: 858px) {
    .se-h2 {
      font-size: 50px;
    }

    .se-p {
      padding: 10px;
    }

    .se-box {
      width: 250px;
      height: 250px;
    }

    .se-description {
      width: 90%;
      font-size: 12px;
    }

    .se-table {
      margin-top: 10px;
    }

    .se-table * {
      font-size: small;
    }

    .se-container {
      flex-flow: row wrap;
    }

    .se-reserve {
      width: 350px;
      height: 80px;
    }
  }

  /* serv-3 */

  .serv-list {
    display: flex;
    flex-flow: row wrap;
    justify-content: space-evenly;
    width: 90%;
    height: auto;
    color: white;
  }

  .serv-item {
    width: 350px;
    height: auto;
    text-align: center;
    border: 1px solid white;
    border-radius: 40px 4px 40px 4px;
    padding: 10px;
    /*background: rgba(53, 50, 50, 0.31);*/
    background-color: #292929;
    margin-bottom: 8px;
  }

  .serv-item img {
    width: 300px;
    height: 250px;
    border-radius: 40px 4px 40px 4px;
  }

  .serv-h3 {
    margin-top: 10px;
    text-align: center;
    text-transform: uppercase;
  }

  .serv-link{
    background: #9e1518;
    border-radius: 20px;
    padding: 5px;
    width: 120px;
    color: white;
    padding: 10px;
  }

  .serv-link:hover{

    border: 1px solid white;
  }

  .price-1 {
    padding: 5px;
    width:100%;
  }
</style>