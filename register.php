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
            <h1 class="text-center text-white display-6">Register</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white">Register</li>
            </ol>
        </div>
        <!-- Single Page Header End -->


        <!-- Contact Start -->
        <div class="container-fluid contact py-5">
            <div class="container py-5">
                <div class="p-5 bg-light rounded">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="text-center mx-auto" style="max-width: 700px;">
                                <h1 class="text-primary">Register as a service provider</h1>
                                <!-- <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p> -->
                            </div>
                        </div>

                    
                        <div class="col-lg-12">
                            <form action="#" method="post">
    <input type="text" class="w-100 form-control border-0 py-3 mb-4" placeholder="Your Name" name="a1">
    <input type="tel" class="w-100 form-control border-0 py-3 mb-4" placeholder="Mobile Number" name="a2">
    <input type="email" class="w-100 form-control border-0 py-3 mb-4" placeholder="Enter Your Email" name="a3">
    <input type="text" class="w-100 form-control border-0 py-3 mb-4" placeholder="Qualification" name="a4">
    <input type="text" class="w-100 form-control border-0 py-3 mb-4" placeholder="ID Proof" name="a5">
    <input type="date" class="w-100 form-control border-0 py-3 mb-4" placeholder="Date of Birth" name="a6">
    <input type="text" class="w-100 form-control border-0 py-3 mb-4" placeholder="Work Experience" name="a7">
    <textarea class="w-100 form-control border-0 mb-4" rows="5" placeholder="Your Address" name="a8"></textarea>
    <input type="text" class="w-100 form-control border-0 py-3 mb-4" placeholder="Pin Code" name="a9">
        <select class="w-100 form-control border-0 py-3 mb-4" name="a10">
        <?php
        include "commonfile/config.php";
            echo "<option value=''>Select one of the options</option>";

        $sql12 = "SELECT * FROM `tbl_sub_catagory`";
$result12 = $con->query($sql12);
        // Check if there are any rows returned
        if ($result12->num_rows > 0) {
            // Output data of each row
            while ($row = $result12->fetch_assoc()) {
                // Output dropdown options with sub_id as value and sub_name as display name
                echo "<option value='" . $row["sub_id"] . "'>" . $row["sub_name"] . "</option>";
            }
        } else {
        }
        ?>
    </select>
    <button class="w-100 btn form-control border-secondary py-3 bg-white text-primary" type="submit" name="btn_submit">Submit</button>
</form>

                        </div>
                       <!-- <div class="col-lg-5">
                            <div class="d-flex p-4 rounded mb-4 bg-white">
                                <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Address</h4>
                                    <p class="mb-2">Kopargaon</p>
                                </div>
                            </div>
                            <div class="d-flex p-4 rounded mb-4 bg-white">
                                <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Mail Us</h4>
                                    <p class="mb-2">demo@gmail.com</p>
                                </div>
                            </div>
                            <div class="d-flex p-4 rounded bg-white">
                                <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Telephone</h4>
                                    <p class="mb-2">+91 98765 43210</p>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


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

if (isset($_POST['btn_submit'])) {
    extract($_POST);
    print_r($_POST);

    $sql = "INSERT INTO `tbl_service_provider` (`id`, `name`, `mob_no`, `email_id`, `qualification`, `id_proof`, `date_of_birth`, `work_expresnece`, `address`, `pin_code`,`services`) VALUES (NULL, '$a1', '$a2', '$a3', '$a4', '$a5', '$a6', '$a7', '$a8', '$a9','$a10')";
    if (mysqli_query($con,$sql)) {
        echo '<script>alert("You ..!");</script>';        
    }else{
        echo '<script>alert("Data Saving Failed..!");</script>';        
    }
}


  ?>