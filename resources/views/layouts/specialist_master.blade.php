<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title> @yield('title', 'e-Clinic Specialist Page') </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.jpg') }}">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('roots.admin._css')
</head>


<body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
    <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();
    </script>

    <div class="mobile-sticky-body-overlay"></div>

    <div class="wrapper">

        @include('partials.specialist.sidebar_footer')


        <div class="page-wrapper">
            <!-- Header -->
            @include('partials.specialist.header')


            @yield('content')

            @include('partials.admin.footer')

        </div>
    </div>



    @include('roots.admin._javascript')



</body>

</html>

