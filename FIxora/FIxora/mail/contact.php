<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <h2>Contact Form</h2>
    <form action="#" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="a1" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="a2" required>

        <label for="mobile">Mobile Number:</label>
        <input type="tel" id="mobile" name="a3" required>

        <label for="description">Description:</label>
        <textarea id="description" name="a4" rows="4" required></textarea>
        <label for="subj"> Subject</label>
        <input type="tel" id="subj" name="a5" required>

        <button type="submit" name="btn_submit">Submit</button>
    </form>
</body>
</html>


<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';
if(isset($_POST['btn_submit']))
{
    //print_r($_POST);
    extract($_POST);
    echo $a1;





//Load Composer's autoloader
//require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'system.techking@gmail.com';                     //SMTP username
    $mail->Password   = 'wdpiyszleioausbk';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('info@techking.in.net', 'TkSI');
    $mail->addAddress($a2,$a1);     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('info@techkinghosting.com', 'TKH');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
   // $mail->addAttachment('../img/tksi.png');         //Add attachments
  //  $mail->addAttachment('../img/trainee_profile_pic/6546be678af80.png');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $a5;
    $mail->Body    = $a4;
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
}

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function




?>