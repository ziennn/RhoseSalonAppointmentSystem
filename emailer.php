<?php

//Import PHPMailer classes into the global namespace

//These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\SMTP;

use PHPMailer\PHPMailer\Exception;



//Load Composer's autoloader

require 'vendor/autoload.php';



//Create an instance; passing `true` enables exceptions

$mail = new PHPMailer(true);









if(isset($_POST['submit'])){

    $email = mysqli_escape_string($db, $_POST['email']);

    $submit = (int)mysqli_escape_string($db, $_POST['submit']);



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

    

    

        $mail->addAddress($email);     //Add a recipient

    

        // $mail->addCC('cc@example.com');

        // $mail->addBCC('bcc@example.com');

    

        //Attachments

        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments

        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        

        $subject;

        $html;



        if($submit == 1){

            $subject = "Rhos3 Salon: EMAIL CONFIRMATION";

            $html = "

            <body>

            <div style=' background: pink; width: 400px; height: 300px; text-align:center;'>

            <h1 style='padding: 10px; border-bottom: 1px solid black; '>EMAIL CONFIRMATION</h1>

            <p>Thankyou for Joining our whitelist. You'll be eligible to our discount and promos of our Salon. Don't forget to make an appointment in our website. Always remember beauty never came by chance it is through appointment.</p>

            <a href='salonnirhose.epizy.com' style='color: darkred; font-size: 40px;'>RHOSE SALON</a>



            </div>

            </body>

            ";

        }else{

            $subject = "RhoS3 Salon: APPOINTMENT";

            $html = $html_apt;

        }

    

        //Content

        $mail->isHTML(true);                                  //Set email format to HTML

        $mail->Subject = $subject;

        $mail->Body    = $html;

    

        $mail->send();

        echo 'Message has been sent';

    } catch (Exception $e) {

        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

    }



  }
