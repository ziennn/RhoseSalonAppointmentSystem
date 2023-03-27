<?php
?>

<style>

  
  .apt-modal{
    background-color: #D68688; 
    width: 90%;
    background:  rgba(126,68,68,1) 100%;
  }
  .modal { 
    height: auto;
    display: flex;
    flex-flow: column wrap;
    justify-content: center;
    padding: 40px;
    transition: .5s all ease;
    background:  rgba(126,68,68,1) 100%;
  }

  .modal-2 { 
    height: auto;
    display: flex;
    flex-flow: column wrap;
    justify-content: center;
    padding: 40px;
    transition: .5s all ease;
    color: white;
  }

  .modal-inner-div {
    height: 100px;
    text-align: center;
    text-transform: uppercase;
    padding: 20px;
    border-bottom: 1px solid #9e1518;
    
  }

  .modal-inner-div h2 {
    font-weight: bold;
    font-size: 50px;
    color: white;
  -webkit-text-fill-color: transparent; 
  -webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color: white;
  }

  .modal-inner-div p {
    color: white;
  }

  .modal h4 ,.modal-2 h4 {
    font-size: 20px;
    font-weight: bold;
    border-bottom: 1px solid #9e1518;
    margin-top: 25px;
    color: white;
  }


  .modal form, .modal-form, .modal-2 form, .modal-form{
    display: flex;
    flex-flow: column wrap;
    justify-content: center;
    align-content: center;
  }


  .modal form label, .modal-2 form label {
    color: white;
    margin-top: 20px;
  }

  .form-item {
    display: flex;
    flex-flow: row wrap;
    margin-top: 20px;
    width: 80%;
    padding: 10px;
    /*border: 1px solid gray;*/
    border-radius: 20px;
    resize: none;
  }

  #btn-modal {
    text-transform: uppercase;
    color: white;
    padding: 20px;
  }

  #mdl-142:checked~.modal {
    display: block;
    left: 0px;
  }

  .btn-apt {
    background: #9e1518;
    color: white;
    text-transform: uppercase;
    width: 150px;
    padding: 10px;
    margin-top: 20px;
    border-radius: 20px;
    box-shadow: -1px 0px 10px 0px #333;
  }

  .btn-apt:hover{
    background-color: #060607;
    box-shadow: -1px 0px 10px 0px #ccc;
    color: #fff;
    letter-spacing: .1rem;
  }

  @media (max-width: 858px){

    .modal-inner-div h2{
      font-size: 35px;
    }
    
    .modal { 
      justify-content: center;
      padding: 25px;
    }  

    .apt-modal{
      width: 95%;
    }

  }
</style>