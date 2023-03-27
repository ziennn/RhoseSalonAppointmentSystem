<?php
?>

<style>
* {
    border: 0;
    margin: 0;
  }
*{
  border: 0;
  margin: 0;
}

.footer-1{
  width: 100%;
  height: 50vh;
  background-color: #9e1518;
  display: flex;
  justify-content: space-evenly;
  flex-flow: row wrap;
}

.footer-1-div{
  width: 30%;
  display: flex;
  flex-flow: column wrap;
}

.ft-1-title{
  font: 20px;
  padding: 10px;
  border-bottom: 2px solid #9e1518;
  text-transform: uppercase;
}

.footer-1-div-container{
  padding: 10px;
}
.footer-1-div-container *{
  margin-top: 10px;
}

.social-icon{
  font-size: 19px;
  font-weight: bold;
  background: rgba(71, 27, 27, 0.424);
  padding: 10px;
  display: flex;
  flex-flow: row wrap;
  align-content: center;
  
}

.social-icon i{
  padding: 5px;
  border: 1px solid black;
}

.social-icon p{
  margin-left: 5px;
  padding: 5px;
}

.div-1-span *{
  width: 30px;
  height: 30px;
  border-radius: 50%;
  text-align: center;
  padding: 20px;
  margin-top: 20px;
  margin-bottom: 20px;
  background: rgba(0,0,0, 0.527);
  transition: all .5s ease;
  color: #9e1518;
  background: wheat;
}

.div-1-span a{
  font-size: 30px;
}

.div-1-span .fa:hover{
  color: wheat;
  background: #524a59;
}


.footer-log-in *{
  padding: 5px;
  font-size: 15px;
  text-transform: uppercase;
}


.f1-input_area {
  width: 80%;
  padding: 10px;
}

.footer-log-in textarea{
  resize: none;
  height: 60px;
  width: 80%;
}

.f1-submit{
  padding: 5px;
  width: 120px;
  background: chocolate;
  transition: all .5s ease;
}
.f1-submit:hover{
  background: rgba(210, 105, 30, 0.582);
}

.f1-copyright{
  text-align: center;
  background-color: transparent;
  color: white;
  font-weight: bold;
  text-transform: capitalize;
  padding: 10px;

}

@media (max-width: 953px) {
  .footer-1{
    text-align: center;
    width: 100%;
    height: inherit;
    flex-flow: row wrap;
  }
  .footer-1-div{
    width: 100%;
    height: 30vh;
    flex-flow: column wrap;
  }
  .footer-1-div-container *{
    margin-top: 2px;
  }
  .social-icon{
    display: flex;
    justify-content: center;
    font-size: 12px;
    font-weight: bold;
    padding: 5px;
    text-align: center;
  }
  .social-icon p{
    margin-left: 0;
  }
  .div-3{
    display: none;
  }
}

/* FOOTER_2 */
.footer{
  width: 100%;
  background-color: black;
}
.footer-2{
  color: white;
  display: flex;
  justify-content: center;
  flex-flow: column wrap;
  text-align: center;
  background: rgba(29, 33, 36, 0.904);
}

.footer-2-div{
  display: flex;
  justify-content: center;
  align-content: center;
  flex-flow: column wrap;
  height: 40vh;
}

.footer-2-div img{
  width: 35%;
  align-items: center;
}

.footer-2-div h4{
  font-size: 40px;
  font-weight: bold;
}

.footer-2-div p{
  padding: 5px;
  width: 400px;
}


@media (max-width: 953px){
  .footer-2-div h4{
    font-size: 30px;
    font-weight: bold;
  }
  .footer-2-div p{
    font-size: small;
    padding: 5px;
    width: 300px;
  }

  .footer-2-div{
    height: 30vh;
  }

  .f1-copyright{
    font-size: 12px;
    font-weight: none;
    text-transform: capitalize;
    background-color: transparent;
    margin-bottom: 40px;
  }

  .footer-2-div img{
    margin-left: 70px;
    width: 50%;
    align-items: center;
  }

  .div-1-span *{
  margin-bottom: -20px;
  width: 20px;
  height: 20px;
  }

  .div-1-span a{
  font-size: 20px;
  }
}

/* footer-3 */
.footer-3 *{
  text-decoration: none;
  list-style: none;
}

.footer-3{
  text-align: center;
  display: flex;
  justify-content: center;
  flex-flow: column wrap;
}

.footer-3-div{
  display: flex;
  justify-content: center;
  flex-flow: column wrap;
  width: 100%;
  height: 30vh;
}

.footer-nav{
  margin-top: 5px;
  display: flex;
  justify-content: center;
  flex-flow: row wrap;
}

.footer-nav *{
  text-transform: uppercase;
  color: #000000;
  font-size: 22px;
}
.footer-nav li{
  padding: 20px;
  font-weight: bold;
}

.div-3-span *{
  margin: 20px;
  width: 40px;
  height: 40px;
  font-size: 50px;
  transition: all .5s ease;
}
.div-3-span *:hover{
  color: blue;
}

@media (max-width: 953px){
  .footer-nav *{
    font-size: 18px;
  }
  
  .div-3-span *{
    font-size: 30px;
  }
}

@media (max-width: 855px){
  .footer-nav *{
    font-size: 18px;
  }
  .div-3-span *{
    font-size: 30px;
  }
  .footer-nav li{
    padding: 12px;
  }
  .footer-2-div img{
    width: 50%;
    align-items: center;
    margin-left: 105px;
  }
    
  .div-1-span *{
    width: 10px;
    height: 10px;    
  }

  .div-1-span a{
    font-size: 17px;
  }
}


</style>