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
                        <h2>VIMONET Background</h2>
                        <p style="text-align: justify;">
                            This project tagged VIMONET was developed by the team of researchers at the Federal University of Technology Minna at the onset of the outbreak of the coronavirus disease (COVID-19) in 2019.</p> 
                            <p style="text-align: justify;">The COVID-19 was declared by the World Health Organization (WHO) as a global pandemic in March 2020. </p>
                            <p style="text-align: justify;">The outbreak did present unprecedented challenges, which exposed the feebleness and inadequacies of many national health care delivery systems. In particular, the pandemic did put the Nigerian health care system under immense pressure ranging from capacity stretch to inadequate protection for health care workers.</p> 
                            <p style="text-align: justify;">Consequently, responding to this public health emergency and successfully minimizing its impact required that every resource and available technology be leveraged. Thus, the need to evolve the Nigerian health care system towards addressing the pandemic and beyond served to motivate the development of a vital sign monitoring system integrated with a real-time e-clinic management platform termed VIMONET (VItal sign MOnitoring NETwork).
                        </p>
                        <p style="text-align: justify;">
                            VIMONET refers to a vital sign monitoring network system being developed by the team of researchers to be deployed for providing enhanced healthcare delivery services during the present COVID-19 era and beyond, when completed.</p> 
                            <p style="text-align: justify;">VIMONET will enhance remote health care services and management in addition to building a database for public health experts. It will comprise a well-structured, real-time online e-clinic with provision for remote consultation and interaction between patients and doctors. It will integrate wearable sensors for measuring vital signs such as temperature, blood pressure, and pulse rate to be transmitted via a Long Range (LoRa) and GSM communication module to a central facility. These vital signs, along with patients' location and information will be relayed to health experts including medical doctors, public health experts, and clinical psychologists for onward diagnosis.
                        </p>
                        <p style="text-align: justify;">
                            This project is funded under the 2020 TETFUND National Research Fund (NRF) Intervention. Mental Health Unit.
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
                                    <p style="text-align: justify;">
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
                                    <p style="text-align: justify;">
                                        To deliver a functional mobile software, a sensor unit, a complete server unit comprising both software and hardware accessories, as well as communication modules to aid health care delivery. </p>
                                        <p style="text-align: justify;">To provide a robust  e-clinic services employable for use by health experts, patients, and specific government agencies such as the Nigeria Centre for Disease Control (NCDC). </p>
                                        <p style="text-align: justify;">To engage the services of medical personnel beyond our shores to provide medical and psychological needs of Nigerians. 
                                    </p>
                                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981"></iframe> -->
                                </div>
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div id="tab3" class="tab-pane fade">
                                <div class="info title">
                                    <h3>Schedule of working hours</h3>
                                    <p style="text-align: justify;">
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