<!DOCTYPE html>
<html lang="en">

<head>
    <title> @yield('title', 'e-Clinic Welcome Page') </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.jpg') }}">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="CBN, GIZ, Federal University of Technology Minna">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('roots._css')
</head>

<body>

    @include('partials.nav.header')

    <!-- END nav -->

    @yield('content')

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>

    @include('roots._javascript')

</body>

</html>
