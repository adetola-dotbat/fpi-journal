@extends('user.layout.master')
@section('pageName')
    Welcome to FPI Article Website
@endsection

@push('style')
    <link href="{{ asset('user/assets/libs/swiper/css/swiper.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('user/assets/libs/tiny-slider/tiny-slider.css') }}" rel="stylesheet">
    @livewireStyles
@endpush
@section('content')
    <!-- Start Hero -->
    <section class="swiper-slider-hero relative block h-screen" id="home">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach ($slider as $item)
                    <div class="swiper-slide flex items-center overflow-hidden">
                        <div class="slide-inner slide-bg-image flex items-center bg-cover bg-no-repeat;"
                            data-background="{{ asset('storage/slider/' . $item->image) }}">
                            <div class="absolute inset-0 bg-black/70"></div>
                            <div class="container z-10">
                                <div class="grid grid-cols-1">
                                    <div class="text-center">
                                        <h1
                                            class="font-semibold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5">
                                            {{ $item->title }}</h1>
                                        <p class="text-white/70 text-lg max-w-xl mx-auto">{{ $item->description }}</p>
                                        <div class="mt-6">
                                            <a href="{{ route('manuscript') }}"
                                                class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Submit
                                                Manuscript</a>
                                        </div>
                                    </div>
                                </div>
                                <!--end grid-->
                            </div>

                            <!--end container-->
                        </div><!-- end slide-inner -->
                    </div> <!-- end swiper-slide -->
                @endforeach
            </div>
            <!-- end swiper-wrapper -->

            <!-- swipper controls -->
            <!-- <div class="swiper-pagination"></div> -->
            <div class="swiper-button-next rounded-full text-center"></div>
            <div class="swiper-button-prev rounded-full text-center"></div>
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Hero End -->
    <section class="relative dark:bg-slate-800 md:py-24 py-16">
        <div class="container relative">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="md:col-span-6">
                    <div class="grid grid-cols-12 gap-4 items-center">
                        <div class="col-span-7">
                            <div class="grid grid-cols-1 gap-4">
                                <img src="{{ asset('storage/volume/' . $volume->image) }}" class="shadow rounded-lg"
                                    alt="">
                            </div>
                        </div>

                        <div class="col-span-5">
                            <div class="grid grid-cols-1 gap-4">
                                {{-- <img src="{{ asset('storage/volume/' . $volume->image) }}" class="shadow rounded-lg"
                                    alt=""> --}}

                                <div class="w-28 h-28 bg-indigo-600/10 rounded-lg"></div>
                                <div class="w-28 h-28 bg-indigo-600/10 rounded-lg"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="md:col-span-6">
                    <div class="lg:ms-5">
                        <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">
                            @if ($volume->status == 'pending')
                                Coming Soon
                            @else
                                Latest
                            @endif
                        </h6>
                        <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">
                            {{ $volume->title }}</h3>

                        <p class="text-slate-400 max-w-xl mb-6">{!! $volume->description !!}</p>

                        <div class="flex mt-6">
                            @if ($volume->status == 'activated')
                                <ul class="list-none text-slate-400 mt-4">
                                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i>
                                        {{ $article->author }}</li>
                                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i>
                                        {{ $article->pages }} Pages</li>

                                </ul>
                            @endif
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!--end container-->
    </section>

    <section class=" bg-gray-50 md:py-24 py-16">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="lg:w-[400px] w-[280px] lg:col-span-5 md:col-span-6 order-1 md:order-2">
                    <img src="{{ asset('storage/editors/' . $editorInCharge->image) }}" class="rounded-full"
                        alt="">
                </div>

                <div class="lg:col-span-7 md:col-span-6 order-2 md:order-1">
                    <div class="lg:me-5">
                        <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Welcome
                            Message
                        </h3>

                        <p class="text-slate-400 max-w-xl">
                            {{ $about->welcome_message }}
                        </p>
                        <i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i>
                        {{ $editorInCharge->name }} - Chief Editor
                        <div class="mt-6">
                            <a href="{{ route('about') }}"
                                class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Read
                                more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>

    <section class=" md:py-24 py-16">
        <div class="container">
            <div class="grid grid-cols-1">
                <div class=" mt-12 rounded-md shadow dark:shadow-gray-800 overflow-hidden bg-white dark:bg-slate-900">
                    <div class="grid md:grid-cols-12 grid-cols-1 items-center">
                        <div class="md:col-span-6">
                            <div style="background-image: url({{ asset('storage/call-for-paper-02.avif') }})"
                                class="w-full py-52 bg-slate-400 bg-no-repeat bg-top bg-cover jarallax" data-jarallax
                                data-speed="0.5"></div>
                        </div>
                        <!--end col-->
                        <div class="md:col-span-6">
                            <div class="p-6">
                                <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Call
                                    for paper
                                </h3>

                                <p class="text-slate-400 max-w-xl">{!! $paper->description !!}</p>

                                <div class="mt-6">
                                    <a href="{{ route('manuscript') }}"
                                        class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded me-2 mt-2">Submit
                                        Manuscript</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end grid-->
        </div>
    </section>
    <section class="bg-gray-50 md:py-24 py-16">
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Top Picks</h3>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <div class="container-fluid relative">
            <div class="flex justify-center relative mt-8">
                <div class="relative w-full">
                    <div class="tiny-six-item">

                        @foreach ($picks as $pick)
                            <div class="tiny-slide">
                                <div class="group relative rounded-md shadow dark:shadow-gray-800 overflow-hidden mx-2">
                                    <div class="relative">
                                        <img src="{{ asset('storage/volume/' . $pick->volume->image) }}"
                                            class="w-72 h-80 group-hover:rotate-3 group-hover:scale-110 duration-500 ease-in-out"
                                            alt="">
                                        <div class="absolute inset-0 bg-gradient-to-t from-black"></div>
                                    </div>

                                    <div class="absolute bottom-6 start-6 end-6">
                                        <a href="{{ asset('storage/article/' . $pick->file) }}"
                                            class="text-white/70 hover:text-white text-lg block font-semibold duration-500 ease-in-out">{{ Str::title($pick->title) }}</a>
                                        <span class="text-white/60 block">{{ Str::title($pick->author) }}</span>
                                        <span class="block font-semibold text-white"> {{ $pick->popularity }} <i
                                                class="mdi mdi-heart text-red-600 "></i>
                                            likes</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <!--end flex-->
        </div>
        <!--end container-->
    </section>

    <section class="md:py-24 py-16">
        <div class="container relative">
            <div class="grid md:grid-cols-12 grid-cols-1 pb-8 items-end">
                <div class="lg:col-span-8 md:col-span-6 md:text-start ">
                    <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Volume</h3>
                    <p class="text-slate-400 max-w-xl">List of available articles volume</p>
                </div>

                <div class="lg:col-span-4 md:col-span-6 md:text-end hidden md:block">
                    <a href="{{ route('articles') }}"
                        class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">See
                        More <i class="uil uil-arrow-right align-middle"></i></a>
                </div>
            </div>
            <!--end grid-->

            <div class="sm:flex mt-4" id="grid">
                @foreach ($volumes as $item)
                    <div class="lg:w-1/3 sm:w-1/2 picture-item p-4 rounded-md">
                        <div class="">
                            <div class="relative">
                                <div
                                    class="shadow dark:shadow-gray-800 p-5 pb-0 rounded-md bg-indigo-600/5 dark:bg-indigo-600/30">
                                    <img src="{{ asset('storage/volume/' . $item->image) }}"
                                        class="w-72 h-80 rounded-t-md shadow" alt="">
                                </div>
                            </div>

                            <div class="pt-4 px-3">
                                <h5 class="mb-1 font-semibold text-lg"><a href="{{ route('articles') }}" target="_blank"
                                        class="hover:text-indigo-600 transition-all duration-500 ease-in-out">{{ $item->title }}</a>
                                </h5>
                                {{-- <span class="text-slate-400">Creative</span> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
                <!--end col-->
            </div>

            <div class="grid md:grid-cols-12 grid-cols-1 md:hidden mt-8">
                <div class="md:col-span-12 text-center">
                    <a href=""
                        class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">See
                        More <i class="uil uil-arrow-right align-middle"></i></a>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>
    @push('script')
        <script src="{{ asset('user/assets/libs/tiny-slider/min/tiny-slider.js') }}"></script>
        <script src="{{ asset('user/assets/libs/swiper/js/swiper.min.js') }}"></script>
        <script src="{{ asset('user/assets/js/plugins.init.js') }}"></script>
        @livewireScripts
    @endpush
@endsection
