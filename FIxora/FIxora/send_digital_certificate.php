<?php
$serializedData = $_GET['data'];
$data = unserialize(urldecode($serializedData));

// Use the $data array as needed
//echo '<pre>';
//print_r($data);
extract($data);
//echo '</pre>';
$html = "Dear <b>".$trainee_f_name." ".$trainee_m_name." ".$trainee_l_name."</b>,<br><br>
I trust this email finds you well. Congratulations on successfully completing the ".$program_name." program with TechKing Solutions India! We are pleased to inform you that your digital certificate is now ready for issuance.<br><br>

Here are the details of your certificate:<br>

Certificate Number: <b>".$digital_certificate_number."</b><br><br>

Trainee Information:

<br><br>Trainee ID: ".$trainee_id."
<br>Name: <b>".$trainee_f_name." ".$trainee_m_name." ".$trainee_l_name."</b>
<br>Mobile Number: <b>".$trainee_mob_no."</b>
<br>Email: <b>".$trainee_email."</b>
<br>Date of Enrollment: <b>".$date_of_enrollment."</b>

<br><br>Program Details:

<br><br>Program Name: <b>".$program_name."</b>
<br>Start Date: <b>".$program_start."</b>
<br>End Date: <b>".$program_end."</b>
<br>Duration: <b>".$program_duration."</b>
<br>Venue: <b>".$program_venue."</b>
<br>Program Cost: <b>".$program_cost."</b>

<br><br>Program Coordinator: 
<br><br>Conducted  by :<b>".$p_cond_by."</b>
<br>Conducted  for: <b>".$p_cond_for."</b>

<br><br>To download and validate your digital certificate, please visit:
<br>https://techking.in.net/verify_certificate
<br>and enter the provided certificate number.

<br><br>If you have any questions or require further assistance, feel free to reach out to us. Once again, congratulations on your achievement, and we wish you continued success in your endeavors.

<br><br>Best regards,
<br>Team TechKing Solutions India";
//echo $html;


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'mail/src/Exception.php';
require 'mail/src/PHPMailer.php';
require 'mail/src/SMTP.php';
include 'config.php';
try{
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
   
   
    // Suppress debugging information
    $mail->SMTPDebug = 0;
    $mail->Debugoutput = 'html';
   
   $not= $trainee_f_name." ".$trainee_l_name;
   
    //Recipients
    $mail->setFrom('system.techking@gmail.com', 'Tech King Solutions India');
    $mail->addAddress($trainee_email,$not);     //Add a recipient
    //$mail->addAddress('info@techking.in.net', 'Tech King Solutions India');     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('info@techking.in.net', 'Tech King Solutions India');
   // $mail->addCC('abhijit.abhang.abhang@gmail.com');
    //$mail->addBCC('bcc@example.com');
$path_cert='../../img/digital_certificate/'.$digital_certificate_file_name;
    //Attachments
    $mail->addAttachment($path_cert);         //Add attachments
  //  $mail->addAttachment('../img/trainee_profile_pic/6546be678af80.png');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $sub="Certificate : ".$digital_certificate_number." Issuance for ".$program_name." Program";
    
    $mail->Subject = $sub;
    $mail->Body    = $html;
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
       echo 'Email sent successfully!';

    }catch (Exception $e) {
    echo 'Error sending email: ', $mail->ErrorInfo;
}







?>