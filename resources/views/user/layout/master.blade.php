<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
<!-- Mirrored from shreethemes.in/techwind/layouts/page-job-company-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 May 2023 13:45:04 GMT -->

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

    <!-- Switcher -->
    <div class="fixed top-[30%] -right-2 z-50">
        <span class="relative inline-block rotate-90">
            <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
            <label
                class="label bg-slate-900 shadow cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8"
                for="chk">
                <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                <span class="ball bg-white rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
            </label>
        </span>
    </div>

    <!-- JAVASCRIPTS -->
    <script src="{{ asset('user/assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins.init.js') }}"></script>
    <script src="{{ asset('user/assets/js/app.js') }} "></script>
    <!-- JAVASCRIPTS -->

    @stack('script')
</body>

<!-- Mirrored from shreethemes.in/techwind/layouts/page-job-company-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 May 2023 13:45:04 GMT -->

</html>