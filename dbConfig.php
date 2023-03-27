<?php
  session_start();
  
  //$username = 'localhost';
  //$password = 'root';
  //$port = '';
  //$database = 'test';
  
  $server = '**********';
  $username = '**********';
  $password = '**********';
  $database = '**********';


  $error = array();
  // database connection
  $_connection = mysqli_connect($server, $username, $password, $database);
  //$_connection = mysqli_connect($username, $password, $port, $database);

  if($_connection){
    array_push($error, "Error While Connecting To Database");
  }


  // Count
  $sql_count = "SELECT `user-visit-count` FROM `web-data` WHERE 1";
  $count_res = $_connection->query($sql_count);
  $count_data = mysqli_fetch_assoc($count_res);
  $_uvc = strval($count_data['user-visit-count']+1);
  $sql_update = "UPDATE `web-data` SET `user-visit-count`='$_uvc' WHERE 1";
  $update = $_connection->query($sql_update);
  // MAILER


  //Import PHPMailer classes into the global namespace
  //These must be at the top of your script, not inside a function
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

  //Load Composer's autoloader
  require 'vendor/autoload.php';

  //Create an instance; passing `true` enables exceptions
  $mail = new PHPMailer(true);


  $e_confirmed = false;

  if(isset($_POST['j-btn'])){
    $_email = mysqli_real_escape_string($_connection, $_POST['j-email']);

    if($_email != null){
      $sql = "INSERT INTO `email_list`(`emai`) VALUES ('$_email')";
      $res = $_connection->query($sql);

      if($res){
    
        try{
            $mail->isSMTP();                                          
            $mail->Host         = 'smtp.gmail.com';                     
            $mail->SMTPAuth     = true;                                   
            $mail->Username     = '**********';                     
            $mail->Password     = '**********';                           
            $mail->SMTPSecure   = PHPMailer::ENCRYPTION_SMTPS;           
            $mail->Port         = 465;
        
        
            // RECIEPENTS
            $mail->setFrom('rhosehairsalon@gmail.com', 'RHOSE SALON');
        
        
            $mail->addAddress($_email);     //Add a recipient
        
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
        
            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
            
            $subject;
            $html;
    
    
            $subject = "Rhos3 Salon: EMAIL CONFIRMATION";
            $html = "
                <body>
                <div style=' background: pink; width: 400px; height: 300px; text-align:center;'>
                <h1 style='padding: 10px; border-bottom: 1px solid black; '>EMAIL CONFIRMATION</h1>
                <p>Thankyou for Joining our whitelist. You'll be eligible to our discount and promos of our Salon. Don't forget to make an appointment in our website. 
                Always remember beauty never came by chance it is through appointment.</p>
                <a href='salonnirhose.epizy.com' style='color: #9e1518; font-size: 40px;'>RHOSE SALON</a>
    
                </div>
                </body>
            ";
    
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $html;
        
            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

        $e_confirmed = true;
      }else{
        echo "Error While Trying To save Email";
      }
    }
  }


    // confirm apt variable
    $apt_confirmed = False;

    if(isset($_POST['rs-btn-submit'])){ 
      // GET TOTAL RESERVATION
  
      $_sql = "select COUNT('rs-id') as total FROM user_reservation";
      $_res = $_connection->query($_sql);
  
      $data = mysqli_fetch_assoc($_res);
      
  
      // $rs = "res-id-".$data['total']+1;
  
      $rs ='res-id-'.strval($data['total']+1);
  
      $rs_id = $rs;
      
  
      $rs_name = mysqli_real_escape_string($_connection, $_POST['rs-name']);
      $rs_email = mysqli_real_escape_string($_connection, $_POST['rs-email']);
      $rs_artist = mysqli_real_escape_string($_connection, $_POST['rs-artist']);
      $rs_tel = mysqli_real_escape_string($_connection, $_POST['rs-tel']);
      $rs_serve = mysqli_real_escape_string($_connection,$_POST['rs-serv']);
      
      $rs_serv_type = mysqli_real_escape_string($_connection,$_POST['rs-serv-type']);
      $rs_date = mysqli_real_escape_string($_connection, $_POST['rs-date']);
      $rs_time = mysqli_real_escape_string($_connection, $_POST['rs-time']);
  
  

      $s_price = "SELECT `price` FROM `service_list` WHERE serv_id = 5";
      $s_res = $_connection->query($s_price);


      $s_data= mysqli_fetch_assoc($s_res);


      $rs_price = $s_data['price'];

      // save to database;
  
      $sql = "INSERT INTO `user_reservation`(`rs-id`, `rs-name`, `rs-email`, `rs-tel`, `rs-serv`, `rs-price`, `rs-date`, `rs-time`, `rs_serv_type`, `rs-status`) 
      VALUES ('$rs_id','$rs_name','$rs_email','$rs_tel','$rs_serve', '$rs_price','$rs_date','$rs_time','$rs_serv_type', 'On-Going')";
  
  
      $_res = $_connection->query($sql);
  
    
      if($_res){ 
          try{
            $mail->isSMTP();                                          
            $mail->Host         = 'smtp.gmail.com';                     
            $mail->SMTPAuth     = true;                                   
            $mail->Username     = '**********';                     
            $mail->Password     = '**********';                           
            $mail->SMTPSecure   = PHPMailer::ENCRYPTION_SMTPS;           
            $mail->Port         = 465;
        
        
            // RECIEPENTS
            $mail->setFrom('rhosehairsalon@gmail.com', 'RHOSE SALON');
        
        
            $mail->addAddress($rs_email);     //Add a recipient
        
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
        
            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
            
            $subject;
            $html;
  
  
            $subject = "Rhos3 Salon: APPOINTMENT";
            $html = "
                    <body>
                        <div style='
                                        width: 560px;
                                        background: #f2dfdf;
                                        text-align: center;
                                        padding: 10px;'>

                            <h1 style=' color: rgba(0, 0, 0, 0.8);'>
                                        APPOINTMENT CONFIRMED</h1>

                            <h2 style=' color: #9e1518;'>RHOS3 SALON</h2>
                    
                            <div style='text-align: right; 
                                        width: 100; border:
                                        1px solid #9e1518;
                                        padding: 10px;'>

                                <p style='color: black; text-align: left;'>Reciept #: " .$rs_id ."</p>
                                <p style='color: black; text-align: left;'>Date: " . date('Y-m-d') ."</p>
                            </div>
                    
                            <div style='text-align: left; 
                                        width: 100; border:
                                        1px solid #9e1518;
                                        padding: 10px;'>
                    
                                <p style='color: black'>Name: " . $rs_name ."</p>
                                <p style='color: black'>Reservation Date: " . $rs_date ."</p>
                                <p style='color: black'>Reservation Time: ". $rs_time ."</p>
                                <p style='color: black'>Service: " . $rs_serve . "</p>
                                <p style='color: black'>Senior Artist: " . $rs_artist ."</p>
                                <br>
                                <p style='font-size: 8; font-style: italic; color: #9e1518'>Note: This Reciept was send to your Email account.<br>
                                Disregard this message if you're not the one who book this appointment.</p>
                            </div>
                            <br>
                    
                        </div>
                    </body>
                    ";
  
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $html;
        
            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        $apt_confirmed = True;
      }else{ 
            // something went wrong here throw in main
            header('Location: index.php');
          } 
      } 
    
?>  
