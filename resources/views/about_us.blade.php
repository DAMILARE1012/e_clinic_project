@extends('layouts.front')

@section('content')
    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image: url(assets/img/2440x1578.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>About Us</h1>
                </div>
                <div class="col-md-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">About</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start About
    ============================================= -->
    <div class="about-area default-padding">
        <div class="container">
            <div class="row">
                <div class="about-items">
                    <div class="col-md-6 info">
                        <!-- <h4>Has been working since 2000</h4> -->
                        <h2>A Great Place to Receive online Care. Leading Medicine.</h2>
                        <p>
                            However venture pursuit he am mr cordial. Forming musical am hearing studied be luckily. Ourselves for determine attending how led gentleman sincerity. Valley afford uneasy joy she thrown though bed set. In me forming general prudent on country carried. Behaved an or suppose justice. Seemed whence how son rather easily and change missed.
                        </p>
                        
                    </div>
                    <div class="col-md-6 tabs-items">
                        <!-- Tab Nav -->
                        <ul class="nav nav-pills">
                            <li class="active">
                                <a data-toggle="tab" href="#tab1" aria-expanded="true">
                                    <i class="fa fa-eye"></i> Our Vision
                                </a>
                            </li>
                            <li>
                                <li>
                                    <a data-toggle="tab" href="#tab2" aria-expanded="false">
                                        <i class="fa fa-bullseye"></i> Our Mission
                                    </a>
                                </li>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab3" aria-expanded="false">
                                    <i class="fas fa-clock"></i> Opening Hour
                                </a>
                            </li>
                        </ul>
                        <!-- End Tab Nav -->
                        <!-- Start Tab Content -->
                        <div class="tab-content tab-content-info">
                            <!-- Single Item -->
                            <div id="tab1" class="tab-pane fade active in">
                                <div class="info title">
                                    <h3>Vimonet's Vision </h3>
                                    <p>
                                        To significantly improve the management and delivery of quality healthcare services via telemedicine during and after the COVID-19 pandemic in Nigeria.  
                                    </p>
                                    
                                    <a data-animation="animated slideInUp" class="btn btn-theme border btn-md" href="#">Register with us</a>
                                </div>
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div id="tab2" class="tab-pane fade">
                                <div class="info title">
                                    <h3>Vimonet's Mission</h3>
                                    <p>
                                        To deliver a functional mobile software, a sensor unit, a complete server unit comprising both software and hardware accessories, as well as communication modules to aid health care delivery. </p>
                                        <p>To provide a robust  e-clinic services employable for use by health experts, patients, and specific government agencies such as the Nigeria Centre for Disease Control (NCDC). </p>
                                        <p>To engage the services of medical personnel beyond our shores to provide medical and psychological needs of Nigerians. 
                                    </p>
                                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981"></iframe> -->
                                </div>
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div id="tab3" class="tab-pane fade">
                                <div class="info title">
                                    <h3>Schedule of working hours</h3>
                                    <p>
                                        Calling nothing end fertile for venture way boy. Esteem spirit temper too say adieus who direct esteem. It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless on reasonable projecting expression. Way mrs end gave tall walk fact bed. 
                                    </p>
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

                        </div>
                        <!-- End Tab Content -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    @endsection