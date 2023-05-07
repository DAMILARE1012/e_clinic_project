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
                                <h1 data-animation="animated slideInRight">Quality Health care from the comfort of your home</h1>
                                
                                <a data-animation="animated slideInUp" class="btn btn-light effect btn-md" href="{{ route('register') }}">Register</a>
                            </div>

                            <div class="col-md-5 col-sm-6 thumb">
                                <img src="{{ asset('front/assets/img/banner.png') }}" alt="Thumb">
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
  <div class="services-area bg-gray inc-icon less-info default-padding bottom-less">
    <div class="container">
       <div class="row">
            <div class="services-items text-center">
               
                <div class="col-md-3 col-sm-6 equal-height">
                    <div class="item">
                        <a href="#">
                            <i class="flaticon-doctor-1"></i>
                            <h4>General Medicine</h4>
                        </a>
                    </div>
                </div>
            
                <div class="col-md-3 col-sm-6 equal-height">
                    <div class="item">
                        <a href="#">
                            <i class="flaticon-medicine"></i>
                            <h4>Psychological Support</h4>
                        </a>
                    </div>
                </div>
       
                <div class="col-md-3 col-sm-6 equal-height">
                    <div class="item">
                        <a href="#">
                            <i class="flaticon-checkup"></i>
                            <h4>Laboratory Serivces</h4>
                        </a>
                    </div>
                </div>
      
                <div class="col-md-3 col-sm-6 equal-height">
                    <div class="item">
                        <a href="#">
                            <i class="flaticon-neurology"></i>
                            <h4>Refferal Services</h4>
                        </a>
                    </div>
                </div>
               
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

<!-- End Services -->

<!-- Start Doctors Tips 
============================================= -->
<div class="doctor-tips-area bg-gray default-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2>Health <span>Tips</span></h2>
                </div>
            </div>
        </div>
        <div class="row" style="background-color: white;">
            <div class="col-sm-12">
                <div class="health-tips-items tips-carousel owl-carousel owl-theme">
                    <!-- Single Item -->
                    @foreach($tips as $tip)
                        <div class="single-item" style="padding-top: 110px;">
                            <div class="site-heading text-center">
                                <!-- <h2>Health <span>Tips</span></h2> -->
                                <p class="text-center">{{ $tip->tips }}</p>
                            </div>
                        </div>
                    @endforeach
                    <!-- End Single Item -->
                </div>
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
                    <p>We have a very robust team to cater for all aspect with respect to your health. Be rest assured, you are in good hands!</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="doctor-items text-center">
                <!-- Single Item -->
                <div class="col-md-4 equal-height">
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('assets/images/agatha.jpg') }}" alt="Thumb">
                            <div class="overlay">
                                <a href="#"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="info">
                            <h4>Dr. Agatha Aduro</h4>
                            <h5>Medical Doctor</h5>
                            <div class="appoinment-btn">
                                <!-- <a href="#">Make appoinment</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-4 equal-height">
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('assets/images/eucharia.jpg') }}" alt="Thumb">
                            <div class="overlay">
                                <a href="#"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>

                        <div class="info">
                            <h4>Eucharia U. Ezenwadiugwu (PhD)</h4>
                            <h5>Psychologist</h5>
                            <div class="appoinment-btn">
                                <!-- <a href="#">Make appoinment</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-4 equal-height">
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('assets/images/catherine.jpg') }}" alt="Thumb">
                            <div class="overlay">
                                <a href="#"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="info">
                            <h4>Dr Catherine Wangechi</h4>
                            <h5>Psychologist</h5>
                            <div class="appoinment-btn">
                                <!-- <a href="#">Make appoinment</a> -->
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


<!-- Start Testimonials 
============================================= -->
<div class="testimonials-area carousel-shadow bg-gray default-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2>Patient <span>Testimonials</span></h2>
                    <p>COMING SOON!</p>
                </div>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-md-12">
                <div class="testimonial-items testimonial-carousel owl-carousel owl-theme">
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
                </div>
            </div>
        </div> -->
    </div>
</div>

    <br>
    <div class="site-heading text-center">
        <h2>Our <span>Partners</span></h2>
    </div>
    <div class="pcontainer">
        <div class="row">
            <div class="col-sm-4">

            </div>
            <div class="col-sm-4" style="margin-left: 70px;">
                <div class="pslider">
            <div class="pslide-track">
                <div class="pslide">
                <img src="{{ asset('front/assets/img/tetfund_logo.png') }}" alt="logo">
                </div>
                
            </div>
        </div>  
            </div>
            <div class="col-sm-4">

            </div>
        </div>
         
        
    </div>
    
<!-- End Testimonials -->

@endsection