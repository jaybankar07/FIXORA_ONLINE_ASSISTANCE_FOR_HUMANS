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
            <h1 class="text-center text-white display-6">Feedback</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white">Feedback</li>
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
                        <h1 class="text-primary">Give Feedback of <?php echo $row['sub_name'];?> Service</h1>
                        <p class="mb-4">Fill in the details below to submit your feedback!</p>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <!-- Replace the map iframe with an image -->
                    <img src="img/services/<?php echo $row['img'];?>" alt="Location Image" class="rounded" style="width: 100%; height: 350px; object-fit: cover;">
                </div>
                
                <div class="col-lg-8">
<form action="#" method="post">
    <input type="text" name="a1" class="w-100 form-control border-0 py-3 mb-4" placeholder="Service Name" value="<?php echo $row['sub_name']; ?>" readonly>
    
    <!-- Second input for Your Name -->
    <input type="text" name="a2" class="w-100 form-control border-0 py-3 mb-4" placeholder="Your Name">
    
    <!-- Third input for 5-star review option -->
    <select name="a3" class="w-100 form-control border-0 py-3 mb-4">
        <option value="">Rate Our Service (1-5 Stars)</option>
        <option value="1">⭐</option>
        <option value="2">⭐⭐</option>
        <option value="3">⭐⭐⭐</option>
        <option value="4">⭐⭐⭐⭐</option>
        <option value="5">⭐⭐⭐⭐⭐</option>
    </select>
    
    <!-- Fourth input for suggestions -->
    <textarea name="a4" class="w-100 form-control border-0 py-3 mb-4" placeholder="Suggestions"></textarea>
    
    <!-- Fifth input for Mobile Number -->
    <input type="tel" name="a5" class="w-100 form-control border-0 py-3 mb-4" placeholder="Mobile Number">
    
    <!-- Sixth input for Address -->

     <button class="w-100 btn form-control border-secondary py-3 bg-white text-primary" name="btn_submit" type="submit">Submit Now</button>
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

if(isset($_POST['btn_submit']))
{
    date_default_timezone_set('Asia/Kolkata');

$currentDateTime = date('Y-m-d H:i:s');
$currentTimestamp = strtotime($currentDateTime);

//echo "Current Date and Time in Kolkata: " . $currentDateTime . "<br>";
   // print_r($_POST);
    extract($_POST);

    $sql1="INSERT INTO `tbl_feedback` (`id`, `service_name`, `name_of_person`, `rating`, `msg`, `mobile_no`, `time_stamp`) VALUES (NULL, '$a1', '$a2', '$a3', '$a4', '$a5', '$currentDateTime')";
    if (mysqli_query($con,$sql1)) {
        echo '<script>alert("Your feedback has been submitted successfully!");</script>';        
    }else{
        echo '<script>alert("Data Saving Failed..!");</script>';        
    }

}

?>

