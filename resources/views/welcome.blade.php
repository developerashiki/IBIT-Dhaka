
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IBIT Dhaka</title>
    <link rel="icon" href="{{ asset('assets/img/logo2.png') }}">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
   

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>


<body class="container body">
    <!-- Spinner Start -->
     <div class="container">
            <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-3 text-start">
                <div class="h-100 d-inline-flex align-items-center me-2">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>555/1 Senpara Parbata, Kafrul, Dhaka</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Sun - Thu : 09.00 AM - 05.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-1 text-end">
                <div class="h-100 d-inline-flex align-items-center me-2">
                    <small class="fa fa-phone-alt text-primary me-1"></small>
                    <small  class="me-1">+8801324-299303, </small>
                     <small> +8801324-299304</small>
                </div>
                
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="https://www.facebook.com/ibitdhaka50110"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square btn-link rounded-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


<section class="header_area">
	<div class="header_banner_area">
		<div class="container">
			<div class="row" style="display:none;display:block">
				<div class="col-2">
					<div class="row">
						<div class="logo_area"><a href="index.html"><img src="{{asset('assets/img/IBIT/logo2.png')}}" alt="" class="img-responsive"></a></div>
					</div>
				</div>
				<div class="col-10">
					<div class="row">
						<div class="header_text"> <a href="index.html"> <h3> ISLAMI BANK INSTITUTE OF TECHNOLOGY-DHAKA (IBIT-Dhaka ) </h3> </a> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        
      
        
        <a href="index.html" class="navbar-brand d-flex align-items-center border-end px-2 py-3 px-lg-2">
            <h6 class="m-0" style="font-size:15px"> <img src="{{asset('assets/img/logo.jpg')}}" height="50px;" > </i> ISLAMI BANK INSTITUTE OF TECHNOLOGY-DHAKA </h6><br></a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0 border-end">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Courses</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="diploma.html" class="dropdown-item"> Diploma in Engineering</a>
                        <a href="short_courses.html" class="dropdown-item"> Short Courses </a>
                        
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tuition Fees</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="tuition_fee.html" class="dropdown-item"> Computer Technology</a>
                        <a href="tuition_fee.html" class="dropdown-item"> Electrical Technology </a>
                        <a href="tuition_fee.html" class="dropdown-item"> Civil Technology </a>
                        <a href="tuition_fee.html" class="dropdown-item"> Telecommunication Technology </a>
                        <a href="tuition_fee.html" class="dropdown-item"> Electro-medical Technology </a>
                    </div>
                </div>
 
                <!--<div class="nav-item dropdown">-->
                <!--    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Short Courses</a>-->
                <!--    <div class="dropdown-menu bg-light m-0">-->
                <!--        <a href="#" class="dropdown-item">Web Design</a>-->
                <!--        <a href="#" class="dropdown-item"> Web Design and Development</a>-->
                <!--        <a href="#" class="dropdown-item"> Computer Office Appplication </a>-->
                <!--        <a href="#" class="dropdown-item"> Graphic design </a>-->
                <!--        <a href="#" class="dropdown-item"> Electrical House Wiring </a>-->
                <!--        <a href="#" class="dropdown-item">  Plumbing & Pipe Fitting </a>-->
                <!--        <a href="#" class="dropdown-item"> AutoCAD (2D, 3D) </a>-->
                <!--    </div>-->
                <!--</div>-->
                
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="http://www.bteb.gov.bd/site/page/14fc21a0-8a2d-400f-8e20-5fbd989a68f5" class="dropdown-item"> Academic</a>
                        <a href="team.html" class="dropdown-item">Teachers </a>
                        <a href="#" class="dropdown-item">Lab </a>
                        <a href="gallery.html" class="dropdown-item"> Photo Gallery </a>
                    </div>
                </div>

                <a href="contact.html" class="nav-item nav-link  ">Contact</a>
            </div>
            <a href="https://www.ibfbd.org/" class="navbar-brand d-flex align-items-center border-left px-lg-2" target="_blank">
            <h6 class="m-0" style="font-size:12px"> <img src="{{asset('assets/img/IBIT/ibf_logo.png')}}" height="55px" > ISLAMI BANK FOUNDATION </h6></a>
          </div>
    </nav>
    <!-- Navbar End -->

    <!-------- Notice ----------->
    <!--<div class="container"> -->
        <div class="row">
            <div class="col-10">
            
 
                <p  class="notice"><marquee behavior="" direction="">{{ $headline->headline }}</marquee></p>
            </div> 
            <div class="col-2">
                 <a href="addmission.html" class="btn btn-primary py-3 d-none d-lg-block"> Online Admission</i></a>
            </div>    
        </div>    
    <!--</div>-->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                @foreach($slide as $key => $slide)

                <div class="carousel-item active">
                    <img class="w-100  banner" src="{{ Storage::url($slide->slide)}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Facts Start -->
    <div class="container-fluid facts py-3 pt-lg-0">
        <div class="container py-3 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-book text-white"></i>
                            </div>
                            <div class="ps-3">
                                <a href="diploma.html"><h5>Easy To Learn </h5>
                                 <span>In Bangladesh, the diploma in engineering is a technical certificate awarded by </span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-users text-white"></i>
                            </div>
                            <div class="ps-3">
                                <a href="team.html"><h5>Expert Instructor</h5>
                                <span>Honest, qualified, and meritorious teachers  </span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-file-alt text-white"></i>
                            </div>
                            <div class="ps-3">
                              <a href="short_courses.html">  <h5> Short Courses</h5>
                                <span>Our course materials are carefully crafted and updated for the best educational experience.</span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


 
    <!-- ------------- notice-area--------------- -->

    <div class="container">
        <div class="notice-area mt-4">
            <div class="row">
                <div class="col-9">
                    <div class="notice-title">
                        <h2 class="text-left font-weight-bold pb-3 content-color">Notice Board</h2>
                    </div>
                    <div class="notice-content">
                        <div class="news">
                            <ul type="square" class="content-color">
                                
                                <li><a href="http://bteb.gov.bd/sites/default/files/files/bteb.portal.gov.bd/notices/1f103c7f_be8e_4c2a_9297_6efc14403267/4724.1.pdf">২০২২-২০২৩ সেশনে ৪ বছর মেয়াদি ডিপ্লোমা ইন ইঞ্জিনিয়ারিং এ ভর্তি চলিতেছেঃ সিভিল টেকনোলজি, কম্পিউটার টেকনোলজি, ইলেকট্রিক্যাল টেকনোলজি</a></li>
                                <li><a href="https://rb.gy/bby03">ডিপ্লোমা ইন ইঞ্জিনিয়ারিং শিক্ষাক্রমের ১ম, ৩য়, ৫ম, ৭ম পর্ব সমাপনী পরীক্ষা-২০২২ এর সংশোধিত সময়সূচি। (সংশোধিত) </a></li>
                                <li><a href="#">ডিপ্লোমা পর্যায়ের শিক্ষাক্রমে সরকারি প্রতিষ্ঠানসমূহে ভর্তি সংক্রান্ত বিজ্ঞপ্তিি</a></li>
                                <li><a href="#">ডিপ্লোমা পর্যায়ের শিক্ষাক্রমে সরকারি প্রতিষ্ঠানসমূহে ভর্তির ক্ষেত্রে মূল নম্বরপত্র জমাদান বিষয়ক বিজ্ঞপ্তি</a></li>
                                <li><a href="http://180.211.164.133/result_arch/index.php">চলমান ফলাফল .....</a></li>
                                                       
                            </ul>
                        </div>
                    </div>
                    <div class="row all_notice">
                        </a><button type="button" class="btn float-right theme-bg text-white my-3"> <a href="all_notice.html"> All Notice </a></button>
                    </div>
                  
                 <!-- Result area start -->
                    <div class="college-content-area pt-3">
                        <div class="row">
                            <div class="col-xl-6 col-md-6 pb-2">
                                <div class="college-content">
                                    <div class="card wow fadeInUp" data-wow-delay="100ms" style="width: 95%; visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                        <div class="card-body">
                                            <h5 class="card-title content-color">Result</h5>
                                            <div class="content">
                                                <img src="img/card_img1.png" alt="">
                                                <ul type="square" class="content-color">
                                                    <li><a href="#"> Civil Technology</a></li>
                                                    <li><a href="#">Computer Technology</a></li>
                                                    <li><a href="#">Electrical Technology</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 pb-2">
                                <div class="college-content">
                                    <div class="card wow fadeInUp" data-wow-delay="500ms" style="width: 95%; visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">
                                        <div class="card-body">
                                            <h5 class="card-title content-color">Routines</h5>
                                            <div class="content">
                                                <img src="img/card_img2.png" alt="">
                                                <ul type="square" class="content-color">
                                                    <li><a href="#"> Civil Technology</a></li>
                                                    <li><a href="#">Computer Technology</a></li>
                                                    <li><a href="#">Electrical Technology</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-md-6 pb-2">
                                <div class="college-content">
                                    <div class="card wow fadeInUp" data-wow-delay="500ms" style="width: 95%; visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">
                                        <div class="card-body">
                                            <h5 class="card-title content-color">Teachers &amp; Staff Info</h5>
                                            <div class="content">
                                                <img src="img/card_img3.png" alt="">
                                                <ul type="square" class="content-color">
                                                    <li><a href="team.html">Teachers info</a></li>
                                                    <li><a href="#">Staff info</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 pb-2">
                                <div class="college-content">
                                    <div class="card wow fadeInUp" data-wow-delay="500ms" style="width: 95%; visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">
                                        <div class="card-body">
                                            <h5 class="card-title content-color">Students Info</h5>
                                            <div class="content">
                                                <img src="img/card_img4.png" alt="">
                                                <ul type="square" class="content-color">
                                                    <li><a href="#"> Civil Technology</a></li>
                                                    <li><a href="#">Computer Technology</a></li>
                                                    <li><a href="#">Electrical Technology</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-md-6 pb-2">
                                <div class="college-content">
                                    <div class="card wow fadeInUp" data-wow-delay="500ms" style="width: 95%; visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">
                                        <div class="card-body">
                                            <h5 class="card-title content-color">Library Info</h5>
                                            <div class="content">
                                                <img src="img/card_img5.png" alt="">
                                                <ul type="square" class="content-color">
                                                    <li><a href="#">Book List</a></li>
                                                    <li><a href="#">Publications</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 pb-2">
                                <div class="college-content">
                                    <div class="card wow fadeInUp" data-wow-delay="500ms" style="width: 95%; visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">
                                        <div class="card-body">
                                            <h5 class="card-title content-color">Administration</h5>
                                            <div class="content">
                                                <img src="img/card_img8.png" alt="">
                                                <ul type="square" class="content-color">
                                                    <li><a href="#">Administrative Council</a></li>
                                                    <li><a href="#">Academic Council</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div>
                        <div class="row">
                            <div class="col-xl-6 col-md-6 pb-2">
                                <div class="college-content">
                                    <div class="card wow fadeInUp" data-wow-delay="500ms" style="width: 95%; visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">
                                        <div class="card-body">
                                            <h5 class="card-title content-color">Complain</h5>
                                            <div class="content">
                                                <img src="img/card_img9.png" alt="">
                                                <ul type="square" class="content-color">
                                                    <li><a href="#">Administrative Council</a></li>
                                                    <li><a href="#">Academic Council</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 pb-2">
                                <div class="college-content">
                                    <div class="card wow fadeInUp" data-wow-delay="500ms" style="width: 95%; visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">
                                        <div class="card-body">
                                            <h5 class="card-title content-color">Extra Curriculum</h5>
                                            <div class="content">
                                                <img src="img/card_img11.png" alt="">
                                                <ul type="square" class="content-color">
                                                    <li><a href="#">Sports</a></li>
                                                    <li><a href="#">Study Tour</a></li>
                                                    <li><a href="#">Cultural Practice</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Person -->
                <div class="col-xl-3 pt-54">
                    <div class="content-right wow fadeInLeft" data-wow-delay="500ms" style="visibility: visible; animation-delay: 500ms; animation-name: fadeInLeft;">
                        <div class="same-content text-center pb-3">
                            <div class="same-content-title">
                                <h2 class="theme-bg">Principal</h2>
                            </div>
                            <div class="content-img">
                                <img src="{{asset('assets/img/Teachers/principal.jpg')}}" alt="demo">
                            </div>
                            <a href="msg-principal.html"> Engr. Abdullah Ibna Karim</a>
                        </div>
                        <div class="same-content text-center pb-3">
                            <div class="same-content-title">
                                <h2 class="theme-bg">National Helpline</h2>
                            </div>
                            <div class="content-img">
                                <img src="{{asset('assets/img/help_line.jpg')}}" alt="demo">
                            </div>
                            <a href="#v-pills-settings-tab"></a>
                        </div>
                        <div class="same-content pb-3">
                            <div class="same-content-title">
                                <h2 class="theme-bg"> BTEB </h2>
                            </div>
                            <div class="same-content-list">
                                <ul>
                                    <li><a href="http://bteb.gov.bd/"><img src="img/content-img/side_li.png" alt="">BTEB Website</a></li>
                                    <li><a href="http://bteb.gov.bd/site/view/notices"><img src="img/content-img/side_li.png" alt="">BTEB Notice Board</a></li>
                                    <li><a href="http://bteb.gov.bd/site/page/6723ed9b-94d5-41a9-80cf-54a3594a171e"><img src="img/content-img/side_li.png" alt="">BTEB Diploma Syllabus</a></li>
                                    <li><a href="http://www.bteb.gov.bd/site/page/14fc21a0-8a2d-400f-8e20-5fbd989a68f5"><img src="img/content-img/side_li.png" alt="">BTEB Academic Calendar</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--<div class="same-content pb-3">-->
                        <!--    <div class="same-content-title">-->
                        <!--        <h2 class="theme-bg">Social Media Links</h2>-->
                        <!--    </div>-->
                        <!--    <div class="same-content-list">-->
                        <!--        <ul>-->
                        <!--            <li><a href="#"><img src="img/content-img/side_li.png" alt="">Lorem ipsum dolor.</a></li>-->
                        <!--            <li><a href="#"><img src="img/content-img/side_li.png" alt="">Lorem ipsum dolor.</a></li>-->
                        <!--            <li><a href="#"><img src="img/content-img/side_li.png" alt="">Lorem ipsum dolor.</a></li>-->
                        <!--            <li><a href="#"><img src="img/content-img/side_li.png" alt="">Lorem ipsum dolor.</a></li>   -->
                        <!--        </ul>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    
    
    </div>

    <!-- About Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden ps-5 pt-5 h-80" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="{{asset('assets/img/Teachers/ibitd.jpg')}}" alt="">
                        <img class="position-absolute top-0 start-0 bg-white pe-1 pb-1" src="{{asset('assets/img/IBIT/campus.jpg')}}" alt="" style="width: 100px; height: 100px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h2 class="text-primary text-uppercase mb-2">About Us</h2>
                        <h1 class="display-6 mb-4"> Introduction to IBIT DHAKA</h1>
                        <p>Islam Bank Institute of Technology, Dhaka is a humanitarian and non-profit organization with a different horizon and unique name 
                            in the world of technical education. Islami Bank Bangladesh Limited's human welfare organization the company started a journey from 
                            Dhaka city in 1995 with the approval of the Bangladesh government </p>
                        <div class="row g-2 mb-4 pb-2">
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Fully Licensed
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Online Tracking
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Afordable Fee 
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Best Jr. Instructors
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <a class="btn btn-primary py-3 px-5" href="about.html">Read More</a>
                            </div>
                            <div class="col-sm-6">
                                <a class="d-inline-flex align-items-center btn btn-outline-primary border-2 p-2" href="tel:+8801324-299303">
                                    <span class="flex-shrink-0 btn-square bg-primary">
                                        <i class="fa fa-phone-alt text-white"></i>
                                    </span>
                                    <span class="px-2">+8801324-299303</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Courses Start -->
    <div class="container-xxl courses my-2 py-3 pb-0">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Tranding Courses</h6>
                <h1 class="display-6 mb-4">Our Courses </h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">Computer Technology</div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, voluptatum.</p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="{{asset('assets/img/lab&classroom/softwarelab1.jpg')}}" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" href="">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">Civil Technology</div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, voluptatum.</p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="{{asset('assets/img/lab&classroom/Civil-Lab.JPG')}}" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" href="">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">Electrical Technology</div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, voluptatum.</p>
                       </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="{{asset('assets/img/lab&classroom/Electrical-Lab.JPG')}}" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" href="">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 my-6 mb-0 wow fadeInUp " data-wow-delay="0.1s">
                    <div class="bg-primary text-center p-5">
                        <h1 class="mb-4"> Contact Us</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="gname" placeholder="Gurdian Name">
                                        <label for="gname">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control border-0" id="gmail" placeholder="Gurdian Email">
                                        <label for="gmail">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="cname" placeholder="Department Name">
                                        <label for="cname">Department</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="cage" placeholder="Section">
                                        <label for="cage">Section</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit"> Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->


    <!-- Short Courses Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-primary text-uppercase mb-2">Why Choose Us!</h6>
                    <h1 class="display-6 mb-4"> We Provide Best Quealityful Teaching </h1>
                    <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, asperiores.</p>
                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Low Courses Fee</h5>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Qualified Trainer</h5>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Low Courses Fee</h5>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0"> Qualified Trainer</h5>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative overflow-hidden pe-5 pt-4 h-100" style="min-height: 500px;">
                        <img class="position-absolute w-100 leaflet" src="img/IBIT/leaflet.jpg" alt="">
                     </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Team Start -->
    <div class="container-xxl py-4">
        <div class="container">
            <div class="text-center mx-auto mb-3 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Meet Our Teachers</h6>
                <h1 class="display-6 mb-4">We Have Great Experience</h1>
            </div>
            <div class="row g-0 team-items">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('assets/img/Teachers/raihan')}}" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-2">
                            <h5 class="mt-2">Raihan Ali</h5>
                            <span> Instructor (Electrical)</span>
                        </div>
                    </div>
                </div>
                                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('assets/img/Teachers/dilarajesmin.jpg')}}" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-2">
                            <h5 class="mt-2">Mofazzel Hossain </h5>
                            <span> Instructor (RS)</span>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('assets/img/Teachers/rasedul.JPG')}}" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-2">
                            <h5 class="mt-2">Md Rashadul Islam </h5>
                            <span> Instructor (Civil)</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('assets/img/Teachers/tanjida.jpg')}}" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-2">
                            <h5 class="mt-2"> Tanjida Manik</h5>
                            <span>Instructor (Computer)</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('assets/img/Teachers/aslam.jpg')}}" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-2">
                            <h5 class="mt-2">Muhammad Aslam</h5>
                            <span> Instructor (Computer)</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('assets/img/Teachers/dilarajesmin.jpg')}}" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-2">
                            <h5 class="mt-2">Dillara Jesmin</h5>
                            <span>Jr. Instructor (Computer)</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('assets/img/Teachers/rakib.jpg')}}" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-2">
                               <h5 class="mt-2"> Rakib Ahsan </h5>
                            <span>Jr. Instructor (Electrical)</span>
                        </div>
                    </div>
                </div>
               <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('assets/img/Teachers/ashikur.jpeg')}}" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-2">
                               <h5 class="mt-2"> Ashikur Rahman </h5>
                            <span>Jr. Instructor (Computer)</span>
                        </div>
                    </div>
                </div>
                               <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('assets/img/Teachers/dilarajesmin.jpg')}}" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-2">
                            <h5 class="mt-2">Fahmida Afroj </h5>
                            <span>Jr. Instructor (RS)</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('assets/img/Teachers/dilarajesmin.jpg')}}" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-2">
                            <h5 class="mt-2">Md. Najim Uddin</h5>
                            <span>Jr. Instructor (Civil)</span>
                        </div>
                    </div>
                </div>
 
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('assets/img/Teachers/dilarajesmin.jpg')}}" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-2">
                            <h5 class="mt-2">Mr. Md. Abed Hossain</h5>
                            <span>Jr. Instructor (Civil)</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('assets/img/Teachers/dilarajesmin.jpg')}}" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-2">
                            <h5 class="mt-2"> Abdul Auwal </h5>
                            <span> Accounting & Finance </span>
                        </div>
                    </div>
                </div>
      

            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-4">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Testimonial</h6>
                <h1 class="display-6 mb-4">What Our Students Say!</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="{{asset('assets/img/testimonial-1.jpg')}}" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <hr class="w-25 mx-auto">
                            <h5>Student Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="{{asset('assets/img/testimonial-2.jpg')}}" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <hr class="w-25 mx-auto">
                            <h5>Student Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="{{asset('assets/img/Teachers/principal.jpg')}}" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <hr class="w-25 mx-auto">
                            <h5>Student Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer my-3 mb-0 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-4">Get In Touch</h4>
                    <h2 class="text-primary mb-4"><img src="img/logo.jpg" height="50px" class="me-2"></i>IBIT-Dhaka</h2>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>555/1 Senpara Parbata, Kafrul, Dhaka</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+8801324-299303</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+8801324-299304</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i><a href="mailto:ibitdhaka@gmail.com"> ibitdhaka@gmail.com </a></p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4"> Google Map </h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.492852465962!2d90.37560611429795!3d23.801067292757228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c72db1e38ef5%3A0x1762c1a6af4440e8!2sIslami%20Bank%20Institute%20Of%20Technology!5e0!3m2!1sen!2sbd!4v1676448919853!5m2!1sen!2sbd"  style="border:0;height:250px; width:220px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h4 class="text-light mb-4">Popular Links</h4>
                    <a class="btn btn-link" href="about.html">About Us</a>
                    <a class="btn btn-link" href="contact.html">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control p-2 border-0" placeholder="Your Email Address">
                            <button class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>
                    <h6 class="text-white mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

     </div>

    <!-------- Copyright Start -------->
    <div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="index.html">IBIT Dhaka</a> , All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a href="https://htmlcodex.com">IBIT Dhaka Developer Team</a>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>