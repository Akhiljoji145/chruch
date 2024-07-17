<?php
echo'
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Bethlehem Church Parampuzha</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Wittgenstein:wght@600&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Custom Styles -->
        <script src="https://kit.fontawesome.com/8df6689c0d.js" crossorigin="anonymous"></script>
        <style>
            .navbar-brand h3 {
                display: flex;
                align-items: center;
            }
            .navbar-brand img {
                border-radius: 25px;
                margin-right: 10px;
            }
            .btn-primary {
                background-color: #ff6f61;
                border-color: #ff6f61;
            }
            .btn-primary:hover {
                background-color: #ff3e2e;
                border-color: #ff3e2e;
            }
            .service-item {
                transition: transform 0.3s;
            }
            .service-item:hover {
                transform: translateY(-10px);
            }
            .footer-item a {
                color: #adb5bd;
                text-decoration: none;
            }
            .footer-item a:hover {
                color: #fff;
            }
            .copyright span a {
                color: #ff6f61;
                text-decoration: none;
            }
            .copyright span a:hover {
                text-decoration: underline;
            }
            .back-to-top {
                background-color: #ff6f61;
            }
            .background
            {
            	background-image: url("images/header.jpg");
            	background-size: 100% 100%;
            	
            }
            .noti
            {
                font-family: "Wittgenstein", serif;
                font-optical-sizing: auto;
                font-weight: 600;
                font-style: normal;
            }
            .font
            {
                font-family: "Roboto Condensed", sans-serif;
                font-optical-sizing: auto;
                font-weight: 500;
                font-style: normal;
                font-size:22px;
            }
        </style>
    </head>
    <body>
        <!-- Navbar & Hero Start -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a href="index.html" class="navbar-brand p-0">
            <h3 class="text-primary"><img src="images/chruch2.jpg" alt="Logo">&nbsp<span style="color: #FF8C00;font-size:30px;width:150px">Bethlehem Church<br>Parampuzha</span></h3>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="#" style="color:white;" class="nav-item nav-link active">Home</a>
                <a href="#" class="nav-item nav-link">About</a>
                <a href="#" class="nav-item nav-link">Services</a>
                <a href="#" class="nav-item nav-link">Contact Us</a>
            </div>
            <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4">Administrative Login</a>
        </div>
    </nav>


        <!-- Navbar & Hero End -->

        <!-- Carousel Start -->
        <div class="background">
        <div class="container" style="margin-top: 115px; padding-bottom: 20px; background-color: white; border-radius: 20px;">
    <div class="row">
        <div class="col-sm-6 col-md-8 col-lg-8">
            <div class="header-carousel owl-carousel" style="padding-bottom:80px;">
                
                <div class="header-carousel-item">
                    <img src="" class="img-fluid w-100" alt="Image">
                </div>
                
                <div class="header-carousel-item">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/mIbeh_AUFFk"></iframe>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4" style="background-color: #DAD9D9">
            <center>
                <h4 class="noti" style="background-color: #DC3545; padding: 30px; color: white;">Notifications</h4>
            </center>
            <div class="dropdown" style="margin: 20px;">
                

                <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="dropdownMenuButton{{ forloop.counter }}" data-bs-toggle="dropdown" aria-expanded="false" style="margin-bottom:20px;">
                    
                </button>
                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton{{ forloop.counter }}" style="background-color: #f5bda5;">
                    <li>
                        <center><a class="dropdown-item"></a></center>
                    </li>
                </ul>
                
            </div>
        </div>
    </div>
</div>

        <!-- Carousel End -->

        <!-- Services Start -->

            <div class="container py-5"  style="background-color:white;margin-top:40px;border-radius: 40px;">
                <div class="row g-4 justify-content-center">
                    {% for service in services %}
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                                <img src="" class="img-fluid rounded-top w-100" alt="">
                           </div>
                            <div class="service-content rounded-bottom p-4" style="background-color:#E1E1E1;">
                                <div class="service-content-inner">
                                    <center><h5 class="mb-4 font"></h5></center>
                                    <center><a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Book Now</a></center>
                                </div>
                            </div>
                        </div>
                    </div>
                    {% endfor %}


                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                        <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Services More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Bethlehem Church Parampuzha</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus dolorem impedit eos autem dolores laudantium quia, qui similique</p>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-white me-2"></i>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="#"><i class="fa-brands fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Quick Links</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> About Us</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Contact Us</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Our Blog & News</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Services</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> All Services</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Wedding</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Auditorium</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Holy Communion</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Baptism</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Contact Info</h4>
                            <a href=""><i class="fa fa-map-marker-alt me-2"></i>   JGGW+429, Sankranthi, Thiruvanchoor, Kottayam, Perumbaikad, Kerala 686016</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> bethlehemchurch123@example.com</a>
                            <a href=""><i class="fa-solid fa-phone"></i> +9 12345 67890</a>
                            <a href="" class="mb-3"><i class="fa-brands fa-whatsapp"></i> +912 345 67890</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
           <center><span class="text-white"><a href="#"><i class="fas fa-copyright text-light me-2"></i>www.bethlehemchurch.com</a>, All right reserved.</span></center>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
';