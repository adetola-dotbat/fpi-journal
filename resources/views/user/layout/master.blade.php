<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title> @yield('pageName') | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Tailwind CSS Saas & Software Landing Page Template" />
    <meta name="keywords"
        content="agency, application, business, clean, creative, cryptocurrency, it solutions, modern, multipurpose, nft marketplace, portfolio, saas, software, tailwind css" />
    <meta name="author" content="Shreethemes" />
    <meta name="website" content="https://shreethemes.in/" />
    <meta name="email" content="support@shreethemes.in" />
    <meta name="version" content="1.8.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('user/assets/images/favicon.ico') }}" />
    <!-- Css -->
    <!-- Main Css -->
    <link href="{{ asset('user/assets/libs/tobii/css/tobii.min.css') }}" rel="stylesheet">


    <link href="{{ asset('user/assets/libs/%40iconscout/unicons/css/line.css') }} " type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/tailwind.css') }} " />
    @stack('style')
</head>

<body class="font-nunito text-base text-black">
    <!-- Start Navbar -->
    @include('user.inc.navbar')
    {{-- content --}}
    @yield('content')
    <!-- Footer Start -->
    @include('user.inc.footer')

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top"
        class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 h-9 w-9 text-center bg-indigo-600 text-white leading-9"><i
            class="uil uil-arrow-up"></i></a>
    <!-- Back to top -->


    <!-- JAVASCRIPTS -->
    <script src="{{ asset('user/assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins.init.js') }}"></script>
    <script src="{{ asset('user/assets/js/app.js') }} "></script>
    <!-- JAVASCRIPTS -->

    @stack('script')

</body>



</html>
