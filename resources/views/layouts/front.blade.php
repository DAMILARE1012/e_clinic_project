<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="VIMONET - Medical & Health">

    <!-- ========== Page Title ========== -->
    <title>VIMONET - Medical & Health</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
        @include('roots.front._css')
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600,700,800" rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header 
    ============================================= -->
    @include('front.includes.header')
    <!-- End Header -->

    @yield('content')
    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="f-items default-padding">

                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height item">
                        <div class="f-item">
                            <h4>About</h4>
                            <p>
                                This project tagged VIMONET was developed by the team of researchers at the Federal University of Technology Minna at the onset of the outbreak of the coronavirus disease  (COVID-19) in 2019.
                                <a class="btn btn-info circle border btn-md" href="{{ route('about_us') }} ">Read More</a>
                            </p>
                            <div class="opening-info">
                                <h5>Opening Hours</h5>
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
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height item">
                        <div class="f-item link">
                            <h4>Our Depeartment</h4>
                            <ul>
                                <li>
                                    <a href="#"><i class="fas fa-arrow-right"></i>General Medecine</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-arrow-right"></i> Dental Care and Surgery</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-arrow-right"></i> Eye Treatment</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-arrow-right"></i> Children Chare</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-arrow-right"></i> Nuclear magnetic</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-arrow-right"></i> Traumatology</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-arrow-right"></i> X-ray</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
        
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height item">
                        <div class="f-item contact">
                            <h4>Contact</h4>
                            <ul>
                                <li>
                                    <i class="fas fa-phone"></i> 
                                    <p>Phone <span>+234 803 501 5984</span></p>
                                </li>
                                <li>
                                    <i class="fas fa-envelope"></i> 
                                    <p>Email <span><a href="mailto:contact@vimonet.health">contact@vimonet.health</a></span></p>
                                </li>
                                <li>
                                    <i class="fas fa-map"></i> 
                                    <p>Office <span>Federal University of Technology Minna, Gidan Kwano Campus, Minna, Niger state, Nigeria.</span></p>
                                </li>
                            </ul>
                            <h5>Subscribe Newsletter</h5>
                            <form action="#">
                                <div class="input-group stylish-input-group">
                                    <input type="email" name="email" class="form-control" placeholder="Enter your e-mail here">
                                    <button type="submit">
                                        <i class="fa fa-paper-plane"></i>
                                    </button>  
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom bg-dark text-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; Copyright {{ date('Y') }}. All Rights Reserved by <a href="#">vimonet</a></p>
                    </div>
                    <div class="col-md-6 text-right link">
                        <ul>
                            <li>
                                <a href="#">Terms of user</a>
                            </li>
                            <li>
                                <a href="#">License</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    @include('roots.front._javascript')

</body>
</html>