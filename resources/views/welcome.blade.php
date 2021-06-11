<!DOCTYPE html>
<html lang="zxx">

<head>
    <!--Required Meta Tags-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!--Title-->
    <title>პოპო</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/fav-icon/fav_icon.png">
    <!-- Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100;300;400&display=swap" rel="stylesheet">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- WOW CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/wow/css/wow.min.css') }}">
    <!--Owl Carousel Css-->
    <link rel="stylesheet" href="{{ asset('assets/vendor/owl-carousel/css/owl.carousel.min.css') }}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/css/magnific-popup.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Color CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/color.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- Preloader Ends -->

    <!--Header Area-->
    
    <!--Header Area Ends-->

    <!--Navbar Area-->
    <nav class="navigation">
        <div class="nav-container">
            <div class="brand">
                <a href=""><img src="assets/img/logo/logo.svg" alt=""  style="height: 60px"></a>
            </div>
            <nav>
                <div class="nav-mobile"><a id="navbar-toggle" href="#!"><span></span></a></div>
                <ul class="nav-list">
                    <li>
                        <a href="#"><img src="assets/img/nav/nav_home.png" class="img-fluid" alt="Home">მთავარი </a>
                        
                    </li>
                    <li>
                        <a href="#about"><img src="assets/img/nav/about_nav.png" class="img-fluid"
                                alt="About">ჩვენ შესახებ</a>
                    </li>
                    <li>
                        <a href="#events"><img src="assets/img/nav/air_nav.png" class="img-fluid" alt="Services">ივენთები</a>
                    </li>
                    <li>
                        <a href="#offer"> <img src="assets/img/nav/programs_nav.png" class="img-fluid"
                                alt="Programs">შეთავაზებები</a>
                    </li>
                    <!-- <li>
                        <a href="events.html"><img src="assets/img/nav/gallery_nav.png" class="img-fluid" alt="Events">Events</a>
                    </li>
                    <li>
                        <a href="blogs.html"><img src="assets/img/nav/news_nav.png" class="img-fluid" alt="News">News</a>
                    </li>
                    <li>
                        <a href="#!"><img src="assets/img/icons/jewels.png" alt="Contact">Others</a>
                        <ul class="navbar-dropdown">
                            <li>
                                <a href="gallery.html">Gallary</a>
                            </li>
                            <li>
                                <a href="our-teacher.html">Teachers</a>
                            </li>
                            <li>
                                <a href="testimonial.html">Testimonial</a>
                            </li>
                            <li>
                                <a href="error.html">Error</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html"><img src="assets/img/nav/contact_nav.png" alt="Contact">Contact</a>
                    </li> -->
                    <li>
                        <div class="src-key">
                            <i id="search-btn" class="fa fa-search"></i>
                            <div id="search-overlay" class="block">
                                <div class="centered">
                                    <div id='search-box'>
                                        <i id="close-btn" class="fa fa-times"></i>
                                        <form action='/search' id='search-form' method='get' target='_top'>
                                            <input id='search-text' name='q' placeholder='Search' type='text' />
                                            <button id='search-button' type='submit'>
                                                <span>Search</span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
        
    </nav>
    <!--Navbar Area Ends-->

    <!--Banner Area-->
    <section id="banner">
        <div class="banner-element-arae">
            <img src="assets/img/banner/banner-element.png" alt="img">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <!--Banner Content-->
                    <div id="banner-content">
                        <h5>ჩვენ გიყვარს ბავშვები</h5>
                        <h1><b>საუკეთესო ადგილი <span>ბავშვებისთვის.</span></b></h1>
                        <!--Banner Button-->
                        <div id="banner-btn">
                            <a class="btn btn-general btn-banner smooth-scroll" href="#about" title="Read More" role="button">გაიგე მეტი</a>
                        </div>
                    </div>
                    <!--Banner Content-->
                </div>
            </div>
        </div>
    </section>
    <!--Banner Area Ends-->

    <!--About Us Section-->
    <section id="about" class="section-wrapper">
        <div class="container">

            <!--Upper Part-->
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <div class="horizontal-heading">
                        <h6>ჩვენ შესახებ</h6>
                        <h2>მოგესალმებით ბავშვთა სასწავლო<br> და გასართობ პორტალში, Popo.ge</h2>
                    </div>
                </div>
            </div>
            <!--Upper Part Ends-->

            <!--Lower Part-->
            <div class="row">
                <!-- Lower Left Side -->
                <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                    <div id="about-left">

                        <div id="about-left-img" class="wow fadeInLeft animated">
                            <img src="assets/img/about/about_us.jpg" class="img-fluid" alt="About Us image">
                        </div>

                        <div id="about-left-img2" class="wow fadeInRight animated">
                            <img src="assets/img/about/2.png" class="img-fluid" alt="about-img">
                            <div class="video-icon">
                                <a href="https://www.youtube.com/embed/Kb8CW3axqRE" class="banner-video video-link" data-width="1200" data-height="1080"><img src="assets/img/banner/play-button.svg" alt="icon"></a>
                            </div>
                            <div class="img-overlay"></div>
                        </div>

                    </div>
                </div>
                <!-- Lower Left Side Ends -->

                <!--Lower Right Side-->
                <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                    <div class="about-para">
                        <p>ჩვენი პლატფორმა მიზნად ისახავას დაეხმაროს ბავშვებს სწავლაში. მისი დახმარებით ბავშვებს შეუძლიათ ისწავლონ სკოლის საგნები და არა მარტო თამაშით. პორტალზე ამჟამად უკვე არსებობს კურსები რომელიც დაგვეხმარება შევისწავლოთ</p>
                    </div>
                    <!--About List-->
                    <div class="about-list">
                        <ul>
                            <li><i class="fa fa-check-circle "></i> მათემატიკა</li>
                            <li><i class="fa fa-check-circle "></i> ქართული</li>
                            <li><i class="fa fa-check-circle "></i> ინგლისური</li>
                            <li><i class="fa fa-check-circle "></i> ბუნება</li>
                            <li><i class="fa fa-check-circle "></i> ხელოვნება</li>
                        </ul>
                    </div>

                    <div id="about-btn">
                        <a class="btn btn-general btn-about smooth-scroll" href="about.html" title="Discover More" role="button">მეტის ნახვა</a>
                    </div>
                </div>
                <!--Lower Right Side Ends-->

            </div>

            <!--Lower Part Ends-->
        </div>
        <!--About BG Image-->
        <div id="about-bg-img">
            <div class="about-bg-img1">
                <img src="assets/img/about/about_us_element1.png" class="img-fluid" alt="Element 1">
            </div>
            <div class="about-bg-img2">
                <img src="assets/img/about/about_us_element2.png" class="img-fluid" alt="Element 2">
            </div>
            <div class="about-bg-img3">
                <img src="assets/img/about/about_us_element3.png" class="img-fluid" alt="Element 3">
            </div>
            <div class="about-bg-img4">
                <img src="assets/img/about/about_us_element4.png" class="img-fluid" alt="Element 4">
            </div>
            <div class="about-bg-img5">
                <img src="assets/img/about/about_us_element5.png" class="img-fluid" alt="Element 5">
            </div>
        </div>
        <!--About BG Image Ends-->
    </section>
    <!--About Us Section Ends-->

    <!--Offer Section-->
    <section id="offer" class="section-wrapper">
        <div class="container">

            <!-- upper part -->
            <div id="offer_upper">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <div class="horizontal-heading light">
                            <h6>შეთავაზებები</h6>
                            <h2>პოპულარული კურსები<br> თქვენი ბავშვებისთვის</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- upper part Ends -->

            <!-- Lower Part -->
            <div class="row">

                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="offer-items learning-program text-center ">
                        <img src="assets/img/offer/offer_LP_img.png" class="img-fluid" alt="Learning Program">
                        <h6>ინგლისური ენის კურსი</h6>
                        <p>მოცემული კურსის ფარგლებში თქვენი ბავშვი ივარჯიშებს მოსმენის დავალებებში, სფიქინგში და სხვა, პროგრამით გათვლილ, დავალებებში</p>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="offer-items expert-teacher text-center">
                        <img src="assets/img/offer/offer_ET_img.png" class="img-fluid" alt="Expert Teachers">
                        <h6>მათემატიკა</h6>
                        <p>მოცემული კურსის ფარგლებში თქვენი ბავშვს ექნება საშუალება ისწავლოს თვლა, მათემატიკური ოპერაციები, წილადები და ათწილადები. მასალა გასდანაწილებულია ასაკის მიხედვით</p>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="offer-items large-playground text-center">
                        <img src="assets/img/offer/offer_LPLay_img.png" class="img-fluid" alt="Large Playground">
                        <h6>ბუნება</h6>
                        <p> კურსის მიმდინარეობისას თქვენს ბავშვს ექნება საშუალება ინტერაქტიულ რეჟიმში გაეცნონ სხვადასხვა ცხოველებს, მცენარეებს, ფიზიკური მოვლენებსა და სხვა მრავალს. საშუალება ექნებათ ნახონ ანიმაციები.
                        </p>
                    </div>
                </div>

                

            </div>
            <!-- Lower Part Ends -->
        </div>
    </section>
    <!--Offer Section Ends-->

    <!-- Classes Section -->
    <section id="classes" class="section-wrapper">
        <div class="container">
            <!-- upper part -->
            <div id="classes_upper">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <div class="horizontal-heading">
                            <h6>ონლაინ კლასები</h6>
                            <h2 style="font-weight: bold">ისწავლე თამაშით</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- upper part Ends -->

            <!-- Lower Part -->
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 wow fadeInUp animated">
                    <div class="classes-items infant-learning text-center  box-shadow">
                        <a class="test-popup-link" href="assets/img/classes/calss-img1.jpg">
                            <div class="classes-items-img ">
                                <img src="assets/img/classes/nil.jpg" class="img-fluid" alt="Infant Learning">
                                <div class="overlay">
                                    <i class="fa fa-plus"></i>
                                </div>
                            </div>
                        </a>
                        <div class="classes-items-content">

                            <h6> <a href="class-details.html">ისტორია ( 5-6 კლასი)</a></h6>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, culpa qui officiis animi assumenda.</p>
                        </div>
                        <div class="items-footer justify-content-between">
                            <p>ასაკი <span>4 - 10 წელი</span></p>
                            <p>ოდენობა <span>10 გაკვეთილი</span></p>
                            <p>ფასი <span>12 ლარი</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-4 wow fadeInUp animated" data-wow-delay="200ms">
                    <div class="classes-items standard-learning text-center  box-shadow">
                        <a class="test-popup-link" href="assets/img/classes/class-img2.jpg">
                            <div class="classes-items-img">
                                <img src="assets/img/classes/classes_standard_img.jpg" class="img-fluid" alt="Standard Learning">
                                <div class="overlay">
                                    <i class="fa fa-plus"></i>
                                </div>
                            </div>
                        </a>
                        <div class="classes-items-content">
                            <a href="class-details.html">
                                <h6>მათემატიკა</h6>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, culpa qui officiis animi assumenda.</p>
                        </div>
                        <div class="items-footer justify-content-between">
                            <p>ასაკი <span>4 - 14 წელი</span></p>
                            <p>ოდენობა <span>10 გაკვეთილი</span></p>
                            <p>ფასი <span>12 ლარი</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-4 wow fadeInUp animated" data-wow-delay="400ms">
                    <div class="classes-items special-learning text-center  box-shadow">
                        <a class="test-popup-link" href="assets/img/classes/class-img3.jpg">
                            <div class="classes-items-img">
                                <img src="assets/img/classes/classes_special_img.jpg" class="img-fluid" alt="Special Learning">
                                <div class="overlay">
                                    <i class="fa fa-plus"></i>
                                </div>
                            </div>
                        </a>
                        <div class="classes-items-content">
                            <a href="class-details.html">
                                <h6>გეოგრაფია</h6>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, culpa qui officiis animi assumenda.</p>
                        </div>
                        <div class="items-footer justify-content-between">
                            <p>ასაკი <span>6 - 10 წელი</span></p>
                            <p>ოდენობა <span>10 გაკვეთილი</span></p>
                            <p>ფასი <span>12 ლარი</span></p>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Lower Part Ends -->
        </div>
    </section>
    <!-- Classes Section Ends -->

    <!-- Call Us -->
    <section id="call">
        <div class="container">
            <div class="row">
                <!-- Call Content -->
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <div class="call-content">
                        <h2>Enjoy Your Holiday! Call Us</h2>
                        <h2>+00 123 456 789</h2>
                    </div>

                    <div id="call-btn">
                        <a class="btn btn-general btn-call" href="#!" title="Discover More" role="button">Discover
                            More</a>
                    </div>
                </div>
                <!-- Call Content Ends -->
            </div>
        </div>
        <!--Call BG Image-->
        <div id="call-bg-img">
            <div class="call-bg-img1">
                <img src="assets/img/holiday/call-bg-rocket.png" class="img-fluid" alt="Element 1">
            </div>
            <div class="call-bg-img2">
                <img src="assets/img/holiday/call-bg-puff-fish.png" class="img-fluid" alt="Element 2">
            </div>
        </div>
        <!--call BG Image Ends-->
    </section>
    <!-- Call Us Ends -->

    <!--Things for Kids-->
    <section id="activity" class="section-wrapper">
        <div class="container">
            <!--Upper Part-->
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <div class="horizontal-heading">
                        <h6>THINGS FOR KIDS</h6>
                        <h2>Kids Activity</h2>
                    </div>
                </div>
            </div>
            <div class="activity-lower">
                <div class="row">
                    <!--Activity Left-->
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <!--Activity Left Tab 1-->
                        <div class="left-activity">
                            <h6>Creative Activity</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut earum nihil fugiat! Animi molestias blanditiis!</p>
                            <a href="#!">
                                    Read More
                                </a>
                        </div>
                        <!--Activity Left Tab 2-->
                        <div class="left-activity">
                            <h6 class="head-tab2">Creative Activity</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut earum nihil fugiat! Animi molestias blanditiis!</p>
                            <a href="#!">
                                    Read More
                                </a>
                        </div>
                    </div>
                    <!--Activity Right-->
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <!--Activity Right Tab 1-->
                        <div class="right-activity">
                            <h6>Creative Activity</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut earum nihil fugiat! Animi molestias blanditii!</p>
                            <a href="#!">
                                    Read More
                                </a>
                        </div>
                        <!--Activity Right Tab 2-->
                        <div class="right-activity">
                            <h6>Creative Activity</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut earum nihil fugiat! Animi molestias blanditiis!</p>
                            <a href="#!">
                                    Read More
                                </a>
                        </div>
                    </div>
                    <!--Middle Image-->
                    <div class="activity-mid-image">
                        <div class="activity-mid-tab">
                            <img src="assets/img/kids-activity/kids_img.jpg" alt="Things for kids image">
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!--Things for Kids Ends-->

    <!--Events Section-->
    <section id="events" class="section-wrapper">
        <div class="container">

            <!-- upper part -->
            <div id="events_upper">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <div class="horizontal-heading">
                            <h6>OUR EVENTS</h6>
                            <h2>Our Upcoming Events</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- upper part Ends -->

            <!-- Lower Part -->
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 wow fadeInLeft animated">
                    <div class="events-items dental-care text-center  box-shadow">
                        <a class="test-popup-link" href="assets/img/events/events-img1.jpg">
                            <div class="events-items-img">
                                <img src="assets/img/events/dental_event_img.jpg" class="img-fluid" alt="Dental Care">
                                <div class="overlay">
                                    <i class="fa fa-plus"></i>
                                </div>
                            </div>
                        </a>
                        <div class="events-items-content">
                            <h6><a href="event-details.html">Children Dental Care Event</a></h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, culpa qui officiis animi assumenda.</p>
                        </div>
                        <div class="items-footer justify-content-between">
                            <p>Age <span>2 - 3 years</span> </p>
                            <p>Date <span>10th April</span> </p>
                            <p>Venue <span>London</span> </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-4 wow fadeInLeft animated" data-wow-delay="200ms">
                    <div class="events-items music-drawing text-center  box-shadow">
                        <a class="test-popup-link" href="assets/img/events/events-img2.jpg">
                            <div class="events-items-img">
                                <img src="assets/img/events/dental_event_img.jpg" class="img-fluid" alt="Music and Drawing Workshop">
                                <div class="overlay">
                                    <i class="fa fa-plus"></i>
                                </div>
                            </div>
                        </a>
                        <div class="events-items-content">
                            <a href="event-details.html">
                                <h6>Music & Drawing Workshop</h6>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, culpa qui officiis animi assumenda.</p>
                        </div>
                        <div class="items-footer justify-content-between">
                            <p>Age <span>2 - 3 years</span></p>
                            <p>Date <span>10th April</span></p>
                            <p>Venue <span>London</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-4 wow fadeInLeft animated" data-wow-delay="400ms">
                    <div class="events-items health-consciousness text-center box-shadow">
                        <a class="test-popup-link" href="assets/img/events/events-img3.jpg">
                            <div class="events-items-img">
                                <img src="assets/img/events/health_event_img.jpg" class="img-fluid" alt="Health Consciousness">
                                <div class="overlay">
                                    <i class="fa fa-plus"></i>
                                </div>
                            </div>
                        </a>
                        <div class="events-items-content">
                            <a href="event-details.html">
                                <h6>Child Health Consciousness</h6>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, culpa qui officiis animi assumenda.</p>
                        </div>
                        <div class="items-footer justify-content-between">
                            <p>Age <span>2 - 3 years</span></p>
                            <p>Date <span>10th April</span></p>
                            <p>Venue <span>London</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Lower Part Ends -->
        </div>
    </section>
    <!--Events Section Ends-->

    <!--Pricing Section-->
    <section id="pricing" class="section-wrapper">
        <div class="container">
            <!-- upper part -->
            <div id="pricing_upper">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <div class="horizontal-heading">
                            <h6>ფასები</h6>
                            <h2 style="font-weight: bold">
                                <b>
                                    მომავალი ევენთები
                                </b>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- upper part Ends -->
            <!-- Lower Part -->
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 wow fadeInUp animated">
                    <div class="pricing-items single-class text-center box-shadow">
                        <div id="single-pricing" class="pricing-items-value">
                            <h5>20 ₾</h5>
                        </div>
                        <div class="pricing-items-content">
                            <h5>10 გაკვეთილი</h5>
                            <ul>
                                <li>მათემატიკა</li>
                                <li>ქართული</li>
                                <li>ბუნება</li>
                                <li>ისტორია</li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                        <div class="pricing-btn">
                            <a class="btn btn-general btn-pricing" href="pricing-plan.html" title="Get it Now" role="button">ყიდვა</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 wow fadeInUp animated" data-wow-delay="200ms">
                    <div class="pricing-items gold-class text-center  box-shadow">
                        <div id="gold-pricing" class="pricing-items-value">
                            <h5>50 ₾</h5>
                        </div>
                        <div class="pricing-items-content">
                            <h5>40 კასლი</h5>
                            <ul>
                                <li>მათემატიკა</li>
                                <li>ქართული</li>
                                <li>ბუნება</li>
                                <li>ინგლისური</li>
                                <li>ისტორია</li>
                                <li>გეორაფია</li>
                            </ul>
                        </div>
                        <div class="pricing-btn">
                            <a class="btn btn-general btn-pricing" href="pricing-plan.html" title="Get it Now" role="button">ყიდვა</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 wow fadeInUp animated" data-wow-delay="400ms">
                    <div class="pricing-items multi-class text-center  box-shadow">
                        <div id="multi-pricing" class="pricing-items-value">
                            <h5>40 ₾</h5>
                        </div>
                        <div class="pricing-items-content">
                            <h5>30 კლასი</h5>
                            <ul>
                                <li>მათემატიკა</li>
                                <li>ქართული</li>
                                <li>ინგლისური</li>
                                <li>ისტორია</li>
                                <li>ბუნება</li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                        <div class="pricing-btn">
                            <a class="btn btn-general btn-pricing" href="pricing-plan.html" title="Get it Now" role="button">ყიდვა</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Lower Part Ends -->
        </div>
    </section>
    <!--Pricing Section Ends-->

    <!--Team Section-->
    <section id="team" class="section-wrapper">
        <div class="container">
            <!-- upper part -->
            <div id="team_upper">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <div class="horizontal-heading">
                            <h6>ჩვენი გუნდი</h6>
                            <h2 style="font-weight: bold;">გაეცანით ჩვენს გუნდს</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- upper part Ends -->
            <!--Lower Part-->
            <div class="row">
                <!--Team Member 01-->
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="team-members team-member1">
                        <div class="team-member-overlay">
                            <ul class="social-list">
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                            <img src="assets/img/team/team_01.jpg" class="img-fluid" alt="team member">
                        </div>
                        <div class="team-members-content text-center">
                            <a href="teacher-details1.html">
                                <h6>ტორიკაშვილი საბა</h6>
                                <p>პროგრამისტი</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!--Team Member 02-->
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="team-members team-member2">
                        <div class="team-member-overlay">
                            <ul class="social-list">
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                            <img src="assets/img/team/team_02.jpg" class="img-fluid" alt="team member">
                        </div>
                        <div class="team-members-content text-center">
                            <a href="teacher-details1.html">
                                <h6>ბატიაშვილი ვალერი</h6>
                                <p>პროგრამისტი</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!--Team Member 03-->
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="team-members team-member3">
                        <div class="team-member-overlay">
                            <ul class="social-list">
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                            <img src="assets/img/team/3.png" class="img-fluid" alt="team member">
                        </div>
                        <div class="team-members-content text-center">
                            <a href="teacher-details1.html">
                                <h6>გურასპაშვილი სანდრო</h6>
                                <p>დიზაინერი</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Lower Part Ends-->
        </div>
    </section>
    <!--Team Section Ends-->

    <!--Testimonials Section-->
    <section id="testimonial" class="section-wrapper">
        <div class="container">
            <!--Upper Part-->
            <div id="testimonial-upper">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <div class="horizontal-heading">
                            <h6>TESTIMONIALS</h6>
                            <h2>Parents Say About Us</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!--Upper Part Ends-->
            <!--Lower Part-->
            <div id="testimonial-lower">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="testimonial-slider-area owl-carousel owl-theme">
                            <!--testimonial content 01-->
                            <div class="testimonial-content box-shadow">
                                <div class="testimonial-comment">
                                    <i class="fa fa-quote-left"></i>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices Lorem Ipsum is simply dummy text.
                                    </p>
                                </div>
                                <div class="testimonial-author">
                                    <div class="testimonial-author-img">
                                        <img src="assets/img/testimonial/avater.png" alt="avater" />
                                    </div>
                                    <div class="testimonial-author-name">
                                        <h6>Dutch</h6>
                                        <p class="text-muted">CEO, ABC Company</p>
                                    </div>
                                </div>
                            </div>
                            <!--testimonial content 02-->
                            <div class="testimonial-content  box-shadow">
                                <div class="testimonial-comment">
                                    <i class="fa fa-quote-left"></i>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices Lorem Ipsum is simply dummy text.
                                    </p>
                                </div>
                                <div class="testimonial-author">
                                    <div class="testimonial-author-img">
                                        <img src="assets/img/testimonial/avater.png" alt="avater" />
                                    </div>
                                    <div class="testimonial-author-name">
                                        <h6>Arthur</h6>
                                        <p class="text-muted">CEO, ABC Company</p>
                                    </div>
                                </div>
                            </div>
                            <!--testimonial content 03-->
                            <div class="testimonial-content  box-shadow">
                                <div class="testimonial-comment">
                                    <i class="fa fa-quote-left"></i>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices Lorem Ipsum is simply dummy text.
                                    </p>
                                </div>
                                <div class="testimonial-author">
                                    <div class="testimonial-author-img">
                                        <img src="assets/img/testimonial/avater.png" alt="avatar" />
                                    </div>
                                    <div class="testimonial-author-name">
                                        <h6>James</h6>
                                        <p class="text-muted">CEO, ABC Company</p>
                                    </div>
                                </div>
                            </div>
                            <!--testimonial content 04-->
                            <div class="testimonial-content  box-shadow">
                                <div class="testimonial-comment">
                                    <i class="fa fa-quote-left"></i>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices Lorem Ipsum is simply dummy text.
                                    </p>
                                </div>
                                <div class="testimonial-author">
                                    <div class="testimonial-author-img">
                                        <img src="assets/img/testimonial/avater.png" alt="avatar" />
                                    </div>
                                    <div class="testimonial-author-name">
                                        <h6>John</h6>
                                        <p class="text-muted">CEO, ABC Company</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Lower Part Ends-->
        </div>
    </section>
    <!--Testimonials Section Ends-->

    <!--Stats Section-->
    <Section id="stats" class="section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">

                    <!--Stat Contents-->
                    <div class="stats-content">

                        <!--Stats Items 01-->
                        <div class="stats-item text-center">
                            <img src="assets/img/stats/1.png" class="img-fluid" alt="stats img 01">
                            <h5> <span class="counter"> 564</span> +</h5>
                            <p class="text-muted">Children a Year</p>
                        </div>

                        <!--Stats Items 02-->
                        <div class="stats-item text-center">
                            <img src="assets/img/stats/2.png" class="img-fluid" alt="stats img 02">
                            <h5> <span class="counter">55</span></h5>
                            <p class="text-muted">Qualified Teacher</p>
                        </div>

                        <!--Stats Items 03-->
                        <div class="stats-item text-center">
                            <img src="assets/img/stats/3.png" class="img-fluid" alt="stats img 03">
                            <h5> <span class="counter">15</span> +</h5>
                            <p class="text-muted">Years of Experience</p>
                        </div>

                        <!--Stats Items 04-->
                        <div class="stats-item text-center">
                            <img src="assets/img/stats/4.png" class="img-fluid" alt="stats img 04">
                            <h5> <span class="counter">13</span> m</h5>
                            <p class="text-muted">From Twelve Month</p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--Stats BG Image-->
        <div id="stats-bg-img">
            <div class="stats-bg-img1">
                <img src="assets/img/stats/stats-bg-element1.png" class="img-fluid" alt="Element 1">
            </div>
            <div class="stats-bg-img2">
                <img src="assets/img/stats/stats-bg-element2.png" class="img-fluid" alt="Element 2">
            </div>
        </div>
        <!--Stats BG Image Ends-->
    </Section>
    <!--Stats Section Ends-->

    <!--Blog Section-->
    
    <!--Blog Section Ends-->

    <!--Footer Section-->
    <footer id="footer-top">
        <div class="section-wrapper">
            <div class="container">
                <div id="contact-content">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                            <div class="contact-content1">
                                <div class="contact-content-head">
                                    <a href="index.html"><img src="assets/img/contact/logo.svg" alt="Popo Logo" style="height: 60px;"></a>
                                </div>
                                <div class="contact-content1-body">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium. Lorem ipsum dolor sit amet consectetur adipisicing</p>
                                </div>
                                <div class="contact-content1-foot">
                                    <form action="#">
                                        <input type="text" id="email" name="email" placeholder="Email" required>
                                        <input type="submit" id="subscribe" value="Subscribe">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                            <div class="contact-content2">
                                <div class="contact-content1-head">
                                    <h6>OUR GALLARY</h6>
                                    <img src="assets/img/icons/Underline-1.png" alt="underliine img">
                                </div>
                                <div class="contact-content2-body">
                                    <div class="contact-item">
                                        <div class="row">
                                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                                <a href="assets/img/contact/gallery-img7.jpg">
                                                    <img src="assets/img/contact/footer_img7.jpg" class="img-fluid"
                                                        alt="Gallary image 7">
                                                </a>
                                            </div>
                                            <!-- contact Items 08 -->
                                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                                <a href="assets/img/contact/gallery-img8.jpg">
                                                    <img src="assets/img/contact/footer_img8.jpg" class="img-fluid"
                                                        alt="Gallary image 8">
                                                </a>
                                            </div>
                                            <!-- contact Items 09 -->
                                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                                <a href="assets/img/contact/gallery-img9.jpg">
                                                    <img src="assets/img/contact/footer_img9.jpg" class="img-fluid"
                                                        alt="Gallary image 9">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                            <div class="contact-content4">
                                <div class="contact-content1-head">
                                    <h6>LOCATION</h6>
                                    <img src="assets/img/icons/Underline-1.png" alt="underline image">
                                </div>
                                <div class="contact-content4-body">
                                    <ul>
                                        <li><i class="fa fa-map-marker"></i>1101, Your Street Adress, Your State, Your Conuntry
                                        </li>
                                        <li><a href="mailto:"><i class="fa fa-envelope-o"></i>yourmail@mail.com</a></li>
                                        <li><a href="tel:+012-345-678"><i class="fa fa-phone"></i>+012-345-678</a></li>
                                    </ul>
                                </div>
                                <div class="contact-content4-foot">
                                    <ul>
                                        <li><a href="#!"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#!"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#!"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer-Bottom Area-->
        <div id="footer-main">
            <div class="bottom-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="footer-main-left">
                                <p><a href=""><span>And IT Themes</span></a> &#169;&nbsp;2020. All Rights Reserved</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="footer-main-right">
                                <p><a href="#!"><span>Sitemap -</span></a> <a href="#!"><span>Terms of Service -</span></a> <a href="#!"><span>Privacy Policy</span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer-Bottom Area Ends-->
        <!--Footer Elements-->
        <div class="footer-elements">
            <img src="assets/img/icons/element-2.png" class="img-fluid" alt="">
        </div>
    </footer>
    <!--Footer Section Ends-->

    <!--JQuery-->
        <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <!--Bootstrap JS-->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.j') }}s"></script>
    <!-- Easing smooth scroll JS -->
    <script src="{{ asset('assets/vendor/ease-scroll/jquery.easing.1.3.js') }}"></script>
    <!-- WOW JS -->
    <script src="{{ asset('assets/vendor/wow/js/wow.min.js') }}"></script>

    <!--Owl Carousel JS-->
    <script src="{{ asset('assets/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>
    <!--Waypoint JS-->
    <script src="{{ asset('assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <!--Counter Up JS-->
    <script src="{{ asset('assets/vendor/counter-up/jquery.counterup.min.js') }}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset('assets/vendor/magnific-popup/js/jquery.magnific-popup.min.js') }}"></script>
    <!--Custom JS-->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>