@extends('layouts.front')

@section('content')
<!-- Start Banner 
============================================= -->
<div class="banner-area top-pad-50p bg-gradient border-shape responsive-auto-height text-small">
    <div class="item">
        <div class="box-table">
            <div class="box-cell">
                <div class="container">
                    <div class="row">
                        <div class="content double-items">

                            <div class="col-md-7 col-sm-6">
                                <h1 data-animation="animated slideInRight">Best care from the comfort of your home</h1>
                                
                                <a data-animation="animated slideInUp" class="btn btn-light effect btn-md" href="#">View Details</a>
                            </div>

                            <div class="col-md-5 col-sm-6 thumb">
                                <img src="{{ asset('front/assets/img/banner.jpg') }}" alt="Thumb">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Banner -->

<!-- Start Services
============================================= -->
<div class="services-area inc-icon less-info default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="services-items text-center">
                <!-- Single Item -->
                <div class="col-md-3 col-sm-6 equal-height">
                    <div class="item">
                        <a href="#">
                            <i class="flaticon-doctor-1"></i>
                            <h4>Advanced Care</h4>
                        </a>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-3 col-sm-6 equal-height">
                    <div class="item">
                        <a href="#">
                            <i class="flaticon-medicine"></i>
                            <h4>Respite Care</h4>
                        </a>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-3 col-sm-6 equal-height">
                    <div class="item">
                        <a href="#">
                            <i class="flaticon-checkup"></i>
                            <h4>Daily Care</h4>
                        </a>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-3 col-sm-6 equal-height">
                    <div class="item">
                        <a href="#">
                            <i class="flaticon-neurology"></i>
                            <h4>Neuorology Care</h4>
                        </a>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>  
        </div>
    </div>
</div>
<!-- End Services -->

<!-- Start Top Entry
============================================= -->
<div class="top-entry-area border-less text-center">
    <div class="container">
        <div class="row">
            <div class="item-box">
                <!-- Single Item -->
                <div class="col-md-4 single-item">
                    <div class="item">
                        <i class="flaticon-ambulance-1"></i>
                        <h4>Emergency Case</h4>
                        <p>
                            If you need urgent attention, don't use this platform, please head to a hospital closest to you.
                        </p>
                        <!-- <a class="btn btn-theme border btn-sm" href="#">Read More</a> -->
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-4 single-item">
                    <div class="item">
                        <i class="flaticon-24-hours"></i>
                        <h4>Opening Hours</h4>
                        
                        <ul>
                            <li> <span> Mon - Tues :  </span>
                                <div class="pull-right"> 6.00 am - 10.00 pm </div>
                            </li>
                            <li> <span> Wednes - Thurs :</span>
                                <div class="pull-right"> 8.00 am - 6.00 pm </div>
                            </li>
                            <li> <span> Sun : </span>
                                <div class="pull-right closed"> Closed </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-4 single-item">
                    <div class="item">
                        <i class="flaticon-doctor-1"></i>
                        <h4>Options</h4>
                        <p>
                            Choose one Option to Book appointment with a consultant or Consult a doctor online
                        </p>
                        <!-- <a class="btn btn-theme border btn-sm" href="#">Read More</a> -->
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
</div>
<!-- End Top Entry -->

<!-- Start Services 
============================================= -->
<div class="services-area inc-icon carousel-shadow default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2>Centres of <span>Excellence</span></h2>
                    <p>
                        While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="services-items text-center">
                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <div class="info">
                            <h4>
                                <a href="#">Body Surgery</a>
                            </h4>
                            <div class="overlay">
                                <i class="flaticon-medical"></i>
                            </div>
                            <p>
                                Attachment astonished to on appearance imprudence so collecting in excellence. Tiled way blind lived whose new. The for fully had she there leave merit enjoy forth.
                            </p>
                            <a class="btn btn-theme border circle btn-md" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <div class="info">
                            <h4>
                                <a href="#">Dental Care</a>
                            </h4>
                            <div class="overlay">
                                <i class="flaticon-anesthesia"></i>
                            </div>
                            <p>
                                Attachment astonished to on appearance imprudence so collecting in excellence. Tiled way blind lived whose new. The for fully had she there leave merit enjoy forth.
                            </p>
                            <a class="btn btn-theme border circle btn-md" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <div class="info">
                            <h4>
                                <a href="#">Eye Care</a>
                            </h4>
                            <div class="overlay">
                                <i class="flaticon-anatomy"></i>
                            </div>
                            <p>
                                Attachment astonished to on appearance imprudence so collecting in excellence. Tiled way blind lived whose new. The for fully had she there leave merit enjoy forth.
                            </p>
                            <a class="btn btn-theme border circle btn-md" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <div class="info">
                            <h4>
                                <a href="#">Blood Cancer</a>
                            </h4>
                            <div class="overlay">
                                <i class="flaticon-lung-cancer"></i>
                            </div>
                            <p>
                                Attachment astonished to on appearance imprudence so collecting in excellence. Tiled way blind lived whose new. The for fully had she there leave merit enjoy forth.
                            </p>
                            <a class="btn btn-theme border circle btn-md" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <div class="info">
                            <h4>
                                <a href="#">Neurology Sargery</a>
                            </h4>
                            <div class="overlay">
                                <i class="flaticon-thinking"></i>
                            </div>
                            <p>
                                Attachment astonished to on appearance imprudence so collecting in excellence. Tiled way blind lived whose new. The for fully had she there leave merit enjoy forth.
                            </p>
                            <a class="btn btn-theme border circle btn-md" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <div class="info">
                            <h4>
                                <a href="#">Traumatology</a>
                            </h4>
                            <div class="overlay">
                                <i class="flaticon-medicine"></i>
                            </div>
                            <p>
                                Attachment astonished to on appearance imprudence so collecting in excellence. Tiled way blind lived whose new. The for fully had she there leave merit enjoy forth.
                            </p>
                            <a class="btn btn-theme border circle btn-md" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
</div>
<!-- End Services -->

<!-- Start Doctors Tips 
============================================= -->
<div class="doctor-tips-area bg-gray default-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2>Health <span>Tips</span></h2>
                    <p>
                        While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="health-tips-items tips-carousel owl-carousel owl-theme">
                <!-- Single Item -->
                <div class="single-item">
                    <div class="col-md-5">
                        <div class="thumb">
                            <img src="{{ asset('front/assets/img/800x800.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="info">
                            <div class="doctor">
                                <h4>Dr. Jessica Ronal</h4>
                                <h5>MPH, Medicine, Surgery</h5>
                            </div>
                            <h3>How to live a healthy lifestyle?</h3>
                            <p>
                                Frequently partiality possession resolution at or appearance unaffected he me. Engaged its was evident pleased husband. Ye goodness felicity do disposal dwelling no. First am plate jokes to began of cause an scale. Subjects he prospect elegance followed no overcame possible it on. 
                            </p>
                            <h4>Follow the instructions</h4>
                            <ul>
                                <li>Dont just worry about the things you cannot help.</li>
                                <li>Eat Healthy, work better, do gardening.</li>
                                <li>Some relationships can kill you. Avoid them at the most.</li>
                                <li>Focus on the good things that you like</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="single-item">
                    <div class="col-md-5">
                        <div class="thumb">
                            <img src="{{ asset('front/assets/img/800x800.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="info">
                            <div class="doctor">
                                <h4>Dr. Jessica Ronal</h4>
                                <h5>MPH, Medicine, Surgery</h5>
                            </div>
                            <h3>How to live a healthy lifestyle?</h3>
                            <p>
                                Frequently partiality possession resolution at or appearance unaffected he me. Engaged its was evident pleased husband. Ye goodness felicity do disposal dwelling no. First am plate jokes to began of cause an scale. Subjects he prospect elegance followed no overcame possible it on. 
                            </p>
                            <h4>Follow the instructions</h4>
                            <ul>
                                <li>Dont just worry about the things you cannot help.</li>
                                <li>Eat Healthy, work better, do gardening.</li>
                                <li>Some relationships can kill you. Avoid them at the most.</li>
                                <li>Focus on the good things that you like</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="single-item">
                    <div class="col-md-5">
                        <div class="thumb">
                            <img src="{{ asset('front/assets/img/800x800.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="info">
                            <div class="doctor">
                                <h4>Dr. Jessica Ronal</h4>
                                <h5>MPH, Medicine, Surgery</h5>
                            </div>
                            <h3>How to live a healthy lifestyle?</h3>
                            <p>
                                Frequently partiality possession resolution at or appearance unaffected he me. Engaged its was evident pleased husband. Ye goodness felicity do disposal dwelling no. First am plate jokes to began of cause an scale. Subjects he prospect elegance followed no overcame possible it on. 
                            </p>
                            <h4>Follow the instructions</h4>
                            <ul>
                                <li>Dont just worry about the things you cannot help.</li>
                                <li>Eat Healthy, work better, do gardening.</li>
                                <li>Some relationships can kill you. Avoid them at the most.</li>
                                <li>Focus on the good things that you like</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
</div>
<!-- End Doctors Tips -->

<!-- Start Doctors 
============================================= -->
<div class="doctor-area default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2>Meet Our <span>Specialists</span></h2>
                    <p>
                        While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="doctor-items text-center">
                <!-- Single Item -->
                <div class="col-md-4 equal-height">
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('front/assets/img/800x600.png') }}" alt="Thumb">
                            <div class="overlay">
                                <a href="#"><i class="fas fa-plus"></i></a>
                            </div>
                            <div class="social">
                                <ul>
                                    <li class="facebook">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="instagram">
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <h4>Jessica Jones</h4>
                            <h5>Cardiologist</h5>
                            <div class="appoinment-btn">
                                <a href="#">Make appoinment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-4 equal-height">
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('front/assets/img/800x600.png') }}" alt="Thumb">
                            <div class="overlay">
                                <a href="#"><i class="fas fa-plus"></i></a>
                            </div>
                            <div class="social">
                                <ul>
                                    <li class="facebook">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="instagram">
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <h4>Ahel Natasha</h4>
                            <h5>Dental surgeon</h5>
                            <div class="appoinment-btn">
                                <a href="#">Make appoinment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-4 equal-height">
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('front/assets/img/800x600.png') }}" alt="Thumb">
                            <div class="overlay">
                                <a href="#"><i class="fas fa-plus"></i></a>
                            </div>
                            <div class="social">
                                <ul>
                                    <li class="facebook">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="instagram">
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <h4>Gabriela Beckett</h4>
                            <h5>Cosmetic Surgeon</h5>
                            <div class="appoinment-btn">
                                <a href="#">Make appoinment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
</div>
<!-- End Doctors -->

<!-- Start Fun Factor
============================================= -->
<div class="fun-fact-area default-padding shadow light text-center bg-fixed text-light" style="background-image: url({{ asset('front/assets/img/2440x1578.png') }})">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 item">
                <div class="fun-fact">
                    <i class="flaticon-recovered"></i>
                    <div class="timer" data-to="230" data-speed="5000"></div>
                    <span class="medium">Satisfied Patients</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 item">
                <div class="fun-fact">
                    <i class="flaticon-doctor"></i>
                    <div class="timer" data-to="89" data-speed="5000"></div>
                    <span class="medium">Regular Doctors</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 item">
                <div class="fun-fact">
                    <i class="flaticon-department"></i>
                    <div class="timer" data-to="50" data-speed="5000"></div>
                    <span class="medium">Departments</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 item">
                <div class="fun-fact">
                    <i class="flaticon-nurse"></i>
                    <div class="timer" data-to="2348" data-speed="5000"></div>
                    <span class="medium">Servant</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Fun Factor -->

<!-- Start Testimonials 
============================================= -->
<div class="testimonials-area carousel-shadow bg-gray default-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2>Patient <span>Testimonials</span></h2>
                    <p>
                        While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="testimonial-items testimonial-carousel owl-carousel owl-theme">
                    <!-- Single Item -->
                    <div class="item">
                        <div class="content">
                            <p>
                                Departure so attention pronounce satisfied daughters am. But shy tedious pressed studied opinion entered windows off. Advantage dependent suspicion convinced provision him yet. Mr immediate remaining conveying allowance do or. 
                            </p>
                        </div>
                        <div class="provider">
                            <div class="thumb">
                                <img src="{{ asset('front/assets/img/800x800.png') }}" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4>Angle Natasha</h4>
                                <h5>patient of <span>surgery</span></h5>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="content">
                            <p>
                                Departure so attention pronounce satisfied daughters am. But shy tedious pressed studied opinion entered windows off. Advantage dependent suspicion convinced provision him yet. Mr immediate remaining conveying allowance do or. 
                            </p>
                        </div>
                        <div class="provider">
                            <div class="thumb">
                                <img src="{{ asset('front/assets/img/800x800.png') }}" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4>John Abraham</h4>
                                <h5>Dental <span>patients</span></h5>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="content">
                            <p>
                                Departure so attention pronounce satisfied daughters am. But shy tedious pressed studied opinion entered windows off. Advantage dependent suspicion convinced provision him yet. Mr immediate remaining conveying allowance do or. 
                            </p>
                        </div>
                        <div class="provider">
                            <div class="thumb">
                                <img src="{{ asset('front/assets/img/800x800.png') }}" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4>Kriti Sairi</h4>
                                <h5>patient of <span>surgery</span></h5>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Testimonials -->

<!-- Start Blog 
============================================= -->
<div class="blog-area default-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2>Recent <span>Blog</span></h2>
                    <p>
                        While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="blog-items">
                <!-- Single Item -->
                <div class="col-md-4 single-item">
                    <div class="item">
                        <div class="thumb">
                            <a href="#">
                                <img src="{{ asset('front/assets/img/800x600.png') }}" alt="Thumb">
                                <div class="post-type">
                                    <i class="fas fa-images"></i>
                                </div>
                            </a>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li><a href="#">Admin</a></li>
                                    <li>15 June, 2019</li>
                                </ul>
                            </div>
                            <h4>
                                <a href="#">increasing in especially inquietude companions acceptance</a>
                            </h4>
                            <p>
                                General enquire picture letters garrets on offices of no on. Say one hearing between excited evening all inhabit thought you.
                            </p>
                            <a class="btn btn-theme circle border btn-sm" href="#">Read More <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-4 single-item">
                    <div class="item">
                        <div class="thumb">
                            <a href="#">
                                <img src="{{ asset('front/assets/img/800x600.png') }}" alt="Thumb">
                                <div class="post-type">
                                    <i class="fas fa-video"></i>
                                </div>
                            </a>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li><a href="#">Admin</a></li>
                                    <li>17 Auguest, 2019</li>
                                </ul>
                            </div>
                            <h4>
                                <a href="#">Middleton as pretended listening he smallness perceived.</a>
                            </h4>
                            <p>
                                General enquire picture letters garrets on offices of no on. Say one hearing between excited evening all inhabit thought you.
                            </p>
                            <a class="btn btn-theme circle border btn-sm" href="#">Read More <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-4 single-item">
                    <div class="item">
                        <div class="thumb">
                            <a href="#">
                                <img src="{{ asset('front/assets/img/800x600.png') }}" alt="Thumb">
                                <div class="post-type">
                                    <i class="fas fa-image"></i>
                                </div>
                            </a>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li><a href="#">Admin</a></li>
                                    <li>25 September, 2019</li>
                                </ul>
                            </div>
                            <h4>
                                <a href="#">Offended packages pleasant remainder recommend engrossed</a>
                            </h4>
                            <p>
                                General enquire picture letters garrets on offices of no on. Say one hearing between excited evening all inhabit thought you.
                            </p>
                            <a class="btn btn-theme circle border btn-sm" href="#">Read More <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->
@endsection