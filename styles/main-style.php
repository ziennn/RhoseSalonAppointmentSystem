<?php
?>

<style>
  * {
    padding: 0;
    margin: 0;
    font-family: "Barlow Semi Condensed", Arial, Helvetica, sans-serif;
    transition: .2s linear;
  }

  .main_1 {
    background-image: url(https://www.wallpapertip.com/wmimgs/49-495495_sad-and-alone-girl-wallpaper-woman-profile.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    justify-content: center;
    align-content: center;
    flex-flow: column wrap;
    align-items: center;
  }

  .main_1 * {
    margin: 5vh;
    text-align: center;
    color: white;
  }


  .container {
    width: 100%;
    height: 90vh;
    display: flex;
  }

  .main_1_div_1 h1 {
    font-size: 60px;
    font-weight: bold;
    text-transform: uppercase;
  }

  .main_1_div_2 {
    display: flex;
  }

  .m1-btn-1 {
    width: 140px;
    padding: 10px;
    background-color: cadetblue;
    border: none;
    text-transform: uppercase;
  }

  .m1-btn-2 {
    width: 140px;
    padding: 10px;
    background-color: cornflowerblue;
    border: none;
    text-transform: uppercase;
  }



  @media (max-width: 858px) {
    .main_1 {
      flex-flow: row wrap;
    }

    .main_1_div_1 h1 {
      font-size: 40px;
    }
  }

  /* main_2 - ABOUT*/

  .main_2 {
    display: flex;
    width: 100%;
    height: 100vh;
    background:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),
    url(https://beautyninety6.ie/wp-content/uploads/2020/05/Slider-Revolution-Background-3.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    justify-content: flex-start;
    align-content: space-between;
    flex-flow: row wrap;
    align-items: center;
  }

  .main_2_div_1 {
    margin: 10px;
    flex: 100%;
    margin-top: 150px;
    margin-left: 30px;
  }


  .main_2_div_1 p{
    margin-top: 15px;
    font-size: 20px;
    width: 500px;
    text-indent: 20px;
  }

  .main_2 * {
    text-align: left;
    color: white;
  }

  .main_2 h1 {
    font-size: 60px;
    font-weight: bold;
    text-transform: uppercase;
    color: white;
    margin-top: -60px;
    text-indent: 2px;
  -webkit-text-fill-color: transparent; 
  -webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color: white;
  }

  

  .main_2_div_2 {
    width: 100%;
    display: flex;
    justify-content: center;
    align-content: center;
    flex-flow: row wrap;
    margin-top: 10px;
    margin-bottom: 100px;
  }

  /*2 boxes*/
  .main_2_div_2 div {
    width: 200px;
    height: 220px;
    padding: 20px;
    margin: 10px;
    margin-top: -10px;
    background-color: #9e1518;
    opacity: 0.7;
    border-radius: 10px;
  }

  .main_2_div_2 p{
    text-indent: 20px;
    padding: 3px;
    text-align: justify;
  }

  .main_2_div_2 h2{
    text-align: center;
    margin-bottom: 10px;
    font-family: Rubik;
  }

  @media (max-width: 858px) {
    .container{
      width: 100%;
      height: 90vh;

    }
    .main_2 {
      justify-content: flex-end;
      flex-flow: row wrap;
      background-position-x: 60%;
      margin-top: 45px;
    }

    .main_2_div_1 {
      margin-top: 60px;
      margin-left: 20px;
    }

    .main_2_div_1 h1 {
      font-size: 50px;
      margin-top: 50px;
    }

    .main_2_div_1 p{
      width: 250px;
      font-size: 15px;
    }

    .main_2_div_2 h2{
      font-size: 18px;
    }

    .main_2_div_2 * {
      font-size: small;
    }


    .main_2_div_2 div {
      width: 150px;
      height: 200px;
      padding: 10px;
      padding-top: 12px;
      margin-top: 10px;
    }
  }

  /* main_3 */

  .main_3 {
    background-image: url(https://consciousreminder.com/wp-content/uploads/2018/08/ai_plecat_lovers_man_broken_heart_woman_hd-wallpaper-929746-e1535714543840.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    justify-content: flex-start;
    align-content: space-between;
    flex-flow: row wrap;
    align-items: center;

  }

  .main_3_div_1 {
    margin: 20px;
    flex: 100%;
  }

  .main_3_div_1 * {
    margin-top: 30px;
  }

  .main_3 * {
    text-align: right;
    color: black;
  }

  .main_3 h1 {
    font-size: 60px;
    font-weight: bold;
    text-transform: uppercase;
  }

  .main_3_div_2 {
    width: 100%;
    display: flex;
    justify-content: center;
    align-content: center;
    flex-flow: row wrap;
    text-align: center;
  }

  .main_3_div_2 div {
    width: 200px;
    height: 200px;
    padding: 20px;
    margin: 5px;
    background-color: rgba(123, 23, 25, .5);
  }

  @media (max-width: 858px) {
    .main_3 {
      flex-flow: row wrap;
      background-position-x: 50%;
    }

    .main_3_div_1 {
      margin-top: 50px;
    }

    .main_3_div_1 h1 {
      font-size: 40px;
    }

    .main_3_div_2 * {
      font-size: small;
    }

    .main_3_div_2 div {
      width: 150px;
      height: 150px;
    }
  }

  /* main 4 - HOME*/

  .main_4 {
    width: 100%;
    height: 100vh;
    justify-content: center;
    align-content: space-between;
    flex-flow: column wrap;
    align-items: center;
    background: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),
    url(resources/h2-1.jpg);
    background-repeat: no-repeat;
    background-size: cover;
  }

  .main_4_div_1 {
    width: 80vh;
  }

  .main_4 h1 {
    line-height: 80px;
    font-family: Rubik;
    font-size: 90px;
    font-weight: bolder;
    text-transform: uppercase;
    color: white;
  -webkit-text-fill-color: transparent; 
  -webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color: white;
  }

  .main_4 h2 {
    font-size: 30px;
    font-weight: bold;
    text-transform: uppercase;
    color: #ddd;
  }

  .main_4 p{
    font-size: 18px;
    color: #ddd;
  }

  .main_4_div_1 * {
    margin-top: 30px;
    margin-left: 60px;
  }

  .m4-btn-1 {
    width: 100px;
    padding: 15px;
    border-radius: 10px;
    border: none;
    text-transform: uppercase;
    font-weight: bolder;
    font-size: 20px;
    background-color: #9e1518;
    box-shadow: -1px 0px 10px 0px #444;
    color: #fff;
  }

  .m4-btn-1:hover{
    background-color: #060607;
    box-shadow: -1px 0px 10px 0px #555;
    color: #fff;
    letter-spacing: .1rem;
  }

/*-----------------------*/  

  @media (max-width: 858px){
    .main_4 {
      justify-content: flex-end;
      background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),
      url(https://14113-onyx.wpnet.stylenet.com/wp-content/uploads/sites/142/2016/05/burlingame_hair_salon_model.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-position-x: 45%;
      margin-bottom: 30px;
      width: 75vh;
    
    }

    .main_4_div_1 *{
      margin: 80px;
      margin-left: 20px;
    }

    .main_4_div_1 h1 {
      font-size: 75px;
      margin-top: -500px;
      color: #fff;
      font-family: Rubik;
      line-height: 70px;
    }

    .main_4_div_1 h2 {
      margin-top: -60px;
      margin-bottom: 10px;
      color: #ccc;
      font-size: 25px;
    }

    .main_4 p{
      font-size: 15px;
      margin-top: 10px;
      margin-bottom: 5px;
      color: #ccc;
    }

    .main_4_img {
      display: none;
    }

    .main_4_div_1 {
      width: 50vh;
    }

    .m4-btn-1{
    background-color: #9e1518;
    box-shadow: -1px 0px 10px 0px #444;
    color: #fff;
    margin-left: 20px;
    width:70%;
    font-weight: bolder;
    font-size: 12px;
  }

    .m4-btn-1:hover{
    background-color: #060607;
    box-shadow: -1px 0px 10px 0px #555;
    color: #fff;
    
    }
  }
</style>