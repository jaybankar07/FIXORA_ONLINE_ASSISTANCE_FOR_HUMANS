


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>FIXORA</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        <?php

        include "commonfile/navbar.php";

    ?>
        <!-- Navbar End -->


        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->


        <!-- Single Page Header start -->
        <div class="container-fluid page-header py-5">
            <h1 class="text-center text-white display-6">Booking</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white">Booking</li>
            </ol>
        </div>
        <!-- Single Page Header End -->

         <?php


include "commonfile/config.php";
$page_id = $_GET['sub_id'];
$sql = "SELECT * FROM `tbl_sub_catagory` where sub_id  = '$page_id'";

// Execute the query
$result = $con->query($sql);

// Check if the query was successful
if ($result) {
    // Fetch data and display
    while ($row = $result->fetch_assoc()) {
          $visible = $row['visible'];
          $img_path = $row['img'];
       // echo "Category ID: " . $row['id'] . "<br>";
       // echo "Category Name: " . $row['name'] . "<br>";
        // Add more fields as needed
       // echo "<br>";
        $row_id = $row['sub_id'];
        if($visible!=1){

        }else{
    ?>
  <!-- Booking Start -->
<div class="container-fluid contact py-5">
    <div class="container py-5">
        <div class="p-5 bg-light rounded">
            <div class="row g-4">
                <div class="col-12">
                    <div class="text-center mx-auto" style="max-width: 700px;">
                        <h1 class="text-primary">Book Your <?php echo $row['sub_name'];?> Service</h1>
                        <p class="mb-4">Fill in the details below to make a booking. We'll get back to you soon!</p>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <!-- Replace the map iframe with an image -->
                    <img src="img/services/<?php echo $row['img'];?>" alt="Location Image" class="rounded" style="width: 100%; height: 350px; object-fit: cover;">
                </div>
                
                <div class="col-lg-8">
           <form action="#" method="post">
    <input type="text" name="a1" class="w-100 form-control border-0 py-3 mb-4" placeholder="Service Name" value="<?php echo $row['sub_name']; ?>" readonly>
<input type="text" name="a2" class="w-100 form-control border-0 py-3 mb-4" placeholder="Your Name" required>
<input type="tel" name="a3" class="w-100 form-control border-0 py-3 mb-4" placeholder="Mobile Number" required>
<input type="text" name="a4" class="w-100 form-control border-0 py-3 mb-4" placeholder="Address" required>
<input type="email" name="a5" class="w-100 form-control border-0 py-3 mb-4" placeholder="Enter Your Email" required>
<input type="datetime-local" name="a6" class="w-100 form-control border-0 py-3 mb-4" placeholder="Date & Time for Booking" required>

    <button class="w-100 btn form-control border-secondary py-3 bg-white text-primary" name="btn_submit" type="submit">Book Now</button>
</form>

                </div>
          
            </div>
        </div>
    </div>
</div>
<!-- Booking End -->
    
                                 
<?php

}

}
} else {
    // If the query failed, display an error message
    //echo "Error: " . $con->error;
}


?>

        <!-- Footer Start -->
        <?php include "commonfile/footer.php";?>

        <!-- Copyright End -->



        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>
<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'mail/src/Exception.php';
require 'mail/src/PHPMailer.php';
require 'mail/src/SMTP.php';

if(isset($_POST['btn_submit']))
{
    date_default_timezone_set('Asia/Kolkata');

$currentDateTime = date('Y-m-d H:i:s');
$currentTimestamp = strtotime($currentDateTime);
$d1 =  date('ymd');
$d2 = date('His');
$d3 = random_int(10,99);
$d4 = random_int(10,99);
$d5 = $d1."".$d3."".$d2."".$d4;
//echo $d5;
$new_otp = random_int(1111,9999);
echo "Current Date and Time in Kolkata: " . $currentDateTime . "<br>";
    print_r($_POST);
    extract($_POST);

    $sql1="INSERT INTO `tbl_bookings` (`id`, `name`, `mob_no`, `address`, `email_id`, `service_time`, `service_id`, `service_name`, `time_stamp`, `status`, `unique_id`, `otp`) VALUES (NULL, '$a2', '$a3', '$a4', '$a5', '$a6', '$page_id', '$a1', '$currentDateTime','not_verified', '$d5', '$new_otp')";
    if (mysqli_query($con,$sql1)) {
        
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
 $mail->setFrom('system.techking@gmail.com', 'Tech King Solutions India');
    $mail->addAddress($a5,$a2);     //Add a recipient
    //$mail->addAddress('info@techking.in.net', 'Tech King Solutions India');     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('info@techking.in.net', 'Tech King Solutions India');
   // $mail->addCC('abhijit.abhang.abhang@gmail.com');
    //$mail->addBCC('bcc@example.com');
//$path_cert='../../img/digital_certificate/'.$digital_certificate_file_name;
    //Attachments
  //  $mail->addAttachment($path_cert);         //Add attachments
  //  $mail->addAttachment('../img/trainee_profile_pic/6546be678af80.png');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $sub="Otp For Verification ".$d5;
    $html = "Your OTP for Confirmation is ".$new_otp;

    $mail->Subject = $sub;
    $mail->Body    = $html;
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
$mail->SMTPDebug = 0;
    $mail->Debugoutput = 'html';
        
        
    if($mail->send()){
$otp_message = "OTP is sent to your email.";
    echo "<script>alert('$otp_message');</script>";
    // Redirect to verify_otp.php along with $d5 data
    echo "<script>window.location.href='verify_otp.php?uid=$d5';</script>";
    exit; // Exit to prevent further execution of the script
    
        
    }else{
                        echo "Error in email sending";        

    }
//       echo 'Email sent successfully!';
    // Suppress debugging information
    
        
        
        
        
        
        
        
        
        
   }else{
        echo "Data Saving Failed..!";        
    }

}

?>


<?php



?>
