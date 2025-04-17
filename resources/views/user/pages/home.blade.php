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
    <section class="relative block h-screen swiper-slider-hero" id="home">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach ($slider as $item)
                    <div class="flex items-center overflow-hidden swiper-slide">
                        <div class="slide-inner slide-bg-image flex items-center bg-cover bg-no-repeat;"
                            data-background="{{ asset('storage/slider/' . $item->image) }}">
                            <div class="absolute inset-0 bg-black/70"></div>
                            <div class="container z-10">
                                <div class="grid grid-cols-1">
                                    <div class="text-center">
                                        <h1
                                            class="mb-5 text-4xl font-semibold leading-normal text-white lg:leading-normal lg:text-5xl">
                                            {{ $item->title }}</h1>
                                        <p class="max-w-xl mx-auto text-lg text-white/70">{{ $item->description }}</p>
                                        <div class="mt-6">
                                            <a href="{{ route('manuscript') }}"
                                                class="text-white bg-indigo-600 border-indigo-600 rounded-md btn hover:bg-indigo-700 hover:border-indigo-700">Submit
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
            <div class="text-center rounded-full swiper-button-next"></div>
            <div class="text-center rounded-full swiper-button-prev"></div>
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Hero End -->
    <section class="relative py-16 dark:bg-slate-800 md:py-24">
        <div class="container relative">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="md:col-span-6">
                    <div class="grid items-center grid-cols-12 gap-4">
                        <div class="col-span-7">
                            <div class="grid grid-cols-1 gap-4">
                                <img src="{{ asset('storage/volume/' . $volume->image) }}" class="rounded-lg shadow"
                                    alt="">
                            </div>
                        </div>

                        <div class="col-span-5">
                            <div class="grid grid-cols-1 gap-4">
                                {{-- <img src="{{ asset('storage/volume/' . $volume->image) }}" class="rounded-lg shadow"
                                    alt=""> --}}

                                <div class="rounded-lg w-28 h-28 bg-indigo-600/10"></div>
                                <div class="rounded-lg w-28 h-28 bg-indigo-600/10"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="md:col-span-6">
                    <div class="lg:ms-5">
                        <h6 class="mb-2 text-sm font-bold text-indigo-600 uppercase">
                            @if ($volume->status == 'pending')
                                Coming Soon
                            @else
                                Latest
                            @endif
                        </h6>
                        <h3 class="mb-4 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">
                            {{ $volume->title }}</h3>

                        <p class="max-w-xl mb-6 text-slate-400">{!! $volume->description !!}</p>

                        <div class="flex mt-6">
                            @if ($volume->status == 'activated')
                                <ul class="mt-4 list-none text-slate-400">
                                    <li class="flex mb-1"><i class="text-xl text-indigo-600 uil uil-check-circle me-2"></i>
                                        {{ $article->author }}</li>
                                    <li class="flex mb-1"><i class="text-xl text-indigo-600 uil uil-check-circle me-2"></i>
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

    <section class="py-16 bg-gray-50 md:py-24">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="lg:w-[400px] w-[280px] lg:col-span-5 md:col-span-6 order-1 md:order-2">
                    <img src="{{ asset('storage/volume/' . $volume->image) }}" class="rounded-full" alt="">
                </div>

                <div class="order-2 lg:col-span-7 md:col-span-6 md:order-1">
                    <div class="lg:me-5">
                        <h3 class="mb-6 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">Welcome
                            Message
                        </h3>

                        <p class="max-w-xl text-slate-400">
                            {{ $about->welcome_message }}
                        </p>
                       
                        <div class="mt-6">
                            <a href="{{ route('about') }}"
                                class="text-white bg-indigo-600 border-indigo-600 rounded-md btn hover:bg-indigo-700 hover:border-indigo-700">Read
                                more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>

    <section class="py-16 md:py-24">
        <div class="container">
            <div class="grid grid-cols-1">
                <div class="mt-12 overflow-hidden bg-white rounded-md shadow dark:shadow-gray-800 dark:bg-slate-900">
                    <div class="grid items-center grid-cols-1 md:grid-cols-12">
                        <div class="md:col-span-6">
                            <div style="background-image: url({{ asset('storage/call-for-paper-02.avif') }})"
                                class="w-full bg-top bg-no-repeat bg-cover py-52 bg-slate-400 jarallax" data-jarallax
                                data-speed="0.5"></div>
                        </div>
                        <!--end col-->
                        <div class="md:col-span-6">
                            <div class="p-6">
                                <h3 class="mb-6 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">Call
                                    for paper
                                </h3>

                                <p class="max-w-xl text-slate-400">{!! $paper->description !!}</p>

                                <div class="mt-6">
                                    <a href="{{ route('manuscript') }}"
                                        class="mt-2 text-white bg-indigo-600 border-indigo-600 rounded btn hover:bg-indigo-700 hover:border-indigo-700 me-2">Submit
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
    <section class="py-16 bg-gray-50 md:py-24">
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">Top Picks</h3>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <div class="relative container-fluid">
            <div class="relative flex justify-center mt-8">
                <div class="relative w-full">
                    <div class="tiny-six-item">

                        @foreach ($picks as $pick)
                            <div class="tiny-slide">
                                <div class="relative mx-2 overflow-hidden rounded-md shadow group dark:shadow-gray-800">
                                    <div class="relative">
                                        <img src="{{ asset('storage/volume/' . $pick->volume->image) }}"
                                            class="duration-500 ease-in-out w-72 h-80 group-hover:rotate-3 group-hover:scale-110"
                                            alt="">
                                        <div class="absolute inset-0 bg-gradient-to-t from-black"></div>
                                    </div>

                                    <div class="absolute bottom-6 start-6 end-6">
                                        <a href="{{ asset('storage/article/' . $pick->file) }}"
                                            class="block text-lg font-semibold duration-500 ease-in-out text-white/70 hover:text-white">{{ Str::title($pick->title) }}</a>
                                        <span class="block text-white/60">{{ Str::title($pick->author) }}</span>
                                        <span class="block font-semibold text-white"> {{ $pick->popularity }} <i
                                                class="text-red-600 mdi mdi-heart "></i>
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

    <section class="py-16 md:py-24">
        <div class="container relative">
            <div class="grid items-end grid-cols-1 pb-8 md:grid-cols-12">
                <div class="lg:col-span-8 md:col-span-6 md:text-start ">
                    <h3 class="mb-4 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">Volume</h3>
                    <p class="max-w-xl text-slate-400">List of available articles volume</p>
                </div>

                <div class="hidden lg:col-span-4 md:col-span-6 md:text-end md:block">
                    <a href="{{ route('articles') }}"
                        class="text-indigo-600 duration-500 ease-in-out btn btn-link hover:text-indigo-600 after:bg-indigo-600">See
                        More <i class="align-middle uil uil-arrow-right"></i></a>
                </div>
            </div>
            <!--end grid-->

            <div class="mt-4 sm:flex" id="grid">
                @foreach ($volumes as $item)
                    <div class="p-4 rounded-md lg:w-1/3 sm:w-1/2 picture-item">
                        <div class="">
                            <div class="relative">
                                <div
                                    class="p-5 pb-0 rounded-md shadow dark:shadow-gray-800 bg-indigo-600/5 dark:bg-indigo-600/30">
                                    <img src="{{ asset('storage/volume/' . $item->image) }}"
                                        class="shadow w-72 h-80 rounded-t-md" alt="">
                                </div>
                            </div>

                            <div class="px-3 pt-4">
                                <h5 class="mb-1 text-lg font-semibold"><a href="{{ route('articles') }}" target="_blank"
                                        class="transition-all duration-500 ease-in-out hover:text-indigo-600">{{ $item->title }}</a>
                                </h5>
                                {{-- <span class="text-slate-400">Creative</span> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
                <!--end col-->
            </div>

            <div class="grid grid-cols-1 mt-8 md:grid-cols-12 md:hidden">
                <div class="text-center md:col-span-12">
                    <a href=""
                        class="text-indigo-600 duration-500 ease-in-out btn btn-link hover:text-indigo-600 after:bg-indigo-600">See
                        More <i class="align-middle uil uil-arrow-right"></i></a>
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
