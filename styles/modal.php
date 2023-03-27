<?php ?>

<!-- modal -->
<style>

      .modal2{
        position: fixed;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, .9); 
        z-index: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        align-content: center;
        transition: all .5s ease;
        top: 0px;
        left: 0px;
      }

      .inner-class{
        padding: 20px;
        border-radius: 20px;
        width: 300px;
        height: auto;
        border: 1px solid white;
        background: #333; 
        color: white;
        display: flex;
        justify-content: space-evenly;
        align-content: center;
        align-items: center;
        flex-flow: row wrap;
        
      }

      .form-class{
        text-align: center;
        color: white;
        display: flex;
        justify-content: space-evenly;
        align-content: center;
        align-items: center;
        flex-flow: column wrap;
        width: 90%;
        
      }
      
      .form-class * {
        width: 80%;
        margin-top: 5px;
        margin-bottom: 5px;
        padding: 5px;
        color: rgba(225, 225, 225, .7);
      }

      
    .form-class input, .form-class textarea{
      color: black;
      text-transform: uppercase;
    }
    #description{
      resize: none;
    }

    #btn-return{
        background: #9e1518;
        border-radius: 20px;
        transition: .5s ease;
    }

    #btn-return:hover{
        
        background-color: #060607;
        box-shadow: -1px 0px 10px 0px #555;
        color: #fff;
        letter-spacing: .1rem;
    }
  </style>

  <!-- modal 2 confirm apointment -->

  <style>

    
  </style>