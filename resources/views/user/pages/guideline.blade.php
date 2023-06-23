@extends('user.layout.master')
@section('pageName')
    Guideline
@endsection

@section('content')
    <!-- Start Hero -->
    <section
        class="relative table w-full py-32 lg:py-36 bg-[url('../../assets/images/real/bg/01.html')] bg-no-repeat bg-center bg-cover">
        <div class="absolute inset-0 bg-black opacity-80"></div>
        <div class="container">
            <div class="grid grid-cols-1 text-center mt-10">
                <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">
                    Guideline
                </h3>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>

    <section class="relative md:py-24 py-16 overflow-hidden">
        <div class="container">
            <div class="grid grid-cols-1">
                <h5 class="text-2xl font-semibold mb-5">Overview</h5>

                <p class="text-slate-400 mb-3">
                    {!! $guideline->guideline !!}
                </p>
            </div>
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <div class="relative">
        <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-white">
            <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>

    <!-- End Hero -->

    <!-- Start -->


    <!--end section-->
    <!-- End -->
@endsection
