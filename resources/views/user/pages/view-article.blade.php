@extends('user.layout.master')
@section('pageName')
    View Article
@endsection

@section('content')
    <!-- Start Hero -->
    <section style="background-image: url({{ asset('storage/article-bg-image-01.jpg') }})"
        class="relative table w-full py-32 lg:py-36 bg-[url('../../assets/images/real/bg/01.html')] bg-no-repeat bg-center bg-cover">
        <div class="absolute inset-0 bg-black opacity-80"></div>
        <div class="container">

            <div class="grid grid-cols-1 mt-10 text-center">
                <h3 class="text-3xl font-medium leading-normal text-white md:text-4xl md:leading-normal z-1">
                    Article Details
                </h3>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>
    <section class="relative py-16 md:py-24">
        <div class="container">
            <div class="grid grid-cols-1 items-center gap-[30px]">
                <div class="">
                    <div class="flex justify-between">
                        <h4 class="text-3xl font-semibold "> Abstract</h4>
                        <a href="{{ asset('/storage/article/' . $article->file) }}" target="_blank"
                            class="text-white bg-indigo-600 border-indigo-600 rounded-md btn hover:bg-indigo-700 hover:border-indigo-700">Download
                            Paper</a>
                    </div>
                    <h4 class="pt-4 text-2xl font-semibold"> {{ $article->title }}</h4>

                    <p class="pt-4">
                        {!! $article->abstract !!}
                    </p>
                    <h4 class="py-3 font-semibold">Authors: {{ $article->author }}</h4>
                </div>
            </div>
            <!--grid-->

        </div>
        <!--end container-->
    </section>

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
