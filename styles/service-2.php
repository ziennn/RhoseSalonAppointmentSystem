<?php
?>
<style>
*{
  padding: 0;
  margin: 0;
  border: none;
}

body{
  /*background-color: #C58279;*/
  background-color: #D68688;
}

.service_2{
  margin-top: 50px;
  margin-bottom: 50px;
  display: flex;
  flex-flow: row wrap;
}


.serv-2-box{
  width: 350px;
  height: auto;
  border: 1px solid white;
  margin: 10px;
  padding: 10px;
  color:white;
  background: #292929;
  border-radius: 40px 4px 40px 4px;
  
}

.serv-2-box:hover{
  box-shadow: 0px 10px 13px -7px #000000,
   -1px -2px 12px 2px rgba(255,255,255,.1);
  cursor: pointer;
}


.serv-2-div {
  text-align: center;
  font-size: 25px;
  border-bottom: 1px solid #9e1518;
}

.serv-2-div * {
  margin: 10px;
  
}

.serv-2-div img{
  width: 80%;
  height: 200px;
  background: gray;
  border-radius: 40px 4px 40px 4px;
}
.serv-2-list {
  display: flex;
  justify-content: flex-start;
  align-content: center;
  align-items: center;
  flex-flow: column wrap;
  height: 240px;
  font-size: 15px;
  
  
}

.serv-2-list div{
  display: flex;
  flex-flow: row wrap;
  justify-content: space-between;
  padding: 10px;
  width: 90%;
  margin: 2px;
  background: #292929;
  
  
}

.serv-2-list tr td{
  margin-left: 10px;
  
}


#book-now{
  padding: 10px;
  width: 140px;
  align-self: center;
  margin-left: 115px;
  background: #9e1518;
  color:  white;
  border-radius: 20px;
}

#book-now:hover{
  background-color: #060607;
  box-shadow: -1px 0px 10px 0px #555;
  color: #fff;
  /*letter-spacing: .1rem;*/
}


.team-title{
  padding: 20px;
  font-size: 50px;
  width: 90%;
  text-align: center;
  font: Rubik;
  -webkit-text-fill-color: transparent; 
  -webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color: white;
  border-bottom: 2px solid #9e1518;
}

@media (max-width: 858px){
  .service_2{
    justify-content: center;
  }
}

</style>