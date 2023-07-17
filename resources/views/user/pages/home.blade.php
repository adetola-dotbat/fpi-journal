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
                            <div class="container">
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
    <section class="relative md:py-24 py-16 overflow-hidden">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="lg:col-span-5 md:col-span-6">

                    <div class="relative">
                        <img src="{{ asset('storage/volume/' . $volume->image) }}"
                            class="rounded-full lg:w-[400px] w-[280px]" alt="">
                        <div class="absolute -end-5 -bottom-16">
                            <img src="{{ asset('storage/volume/' . $volume->image) }}"
                                class="rounded-full lg:w-[280px] w-[200px] border-8 border-white" alt="">
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-7 md:col-span-6 mt-8 md:mt-0">
                    <div class="lg:ms-5">
                        <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">
                            {{ $volume->title }}
                            @if ($volume->status == 'pending')
                                - Coming Soon
                            @endif
                        </h3>

                        <p class="text-slate-400 max-w-xl"> {!! $volume->description !!} </p>
                        @if ($volume->status == 'activated')
                            <ul class="list-none text-slate-400 mt-4">
                                <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i>
                                    {{ $article->author }}</li>
                                <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i>
                                    {{ $article->pages }} Pages</li>

                            </ul>
                            <div class="mt-6">
                                <a href="{{ asset('/storage/article/' . $article->file) }}" target="_blank"
                                    class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md me-2 mt-2"><i
                                        class="uil uil-envelope"></i>Download</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>

    <section>
        <div class="container md:mt-24">
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

    <section class="container md:mt-24">
        <div class="mt-16 rounded-md shadow dark:shadow-gray-800 overflow-hidden bg-white dark:bg-slate-900">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center">
                <div class="md:col-span-6">
                    <div class="w-full bg-slate-400" data-jarallax="">
                        <img src="{{ asset('user/assets/images/excited.jpg') }}" alt="" srcset="">
                    </div>
                </div>
                <!--end col-->
                <div class="md:col-span-6">
                    <div class="p-6">
                        <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Call for paper
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
    </section>
    <section>
        <div class="container relative md:mt-24 mt-16">
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

    <section class="mb-8">
        <div class="container md:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Volumes</h3>
            </div>

            <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                <!-- Start Bid -->
                @foreach ($volumes as $item)
                    <div
                        class="group relative overflow-hidden bg-white rounded-md shadow hover:shadow-lg duration-500 ease-in-out">
                        <div class="relative">
                            <img class="w-72 h-80" src="{{ asset('storage/volume/' . $item->image) }}" alt="">
                            <div
                                class="absolute end-0 top-0 mt-6 me-6 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
                                {{-- <a href="{{ route('like', $item->id) }}"
                                    class="btn btn-icon text-lg bg-white border-0 shadow rounded-full text-red-600/20 hover:text-red-600 focus:text-red-600"><i
                                        class="mdi mdi-heart"></i></a> --}}
                            </div>

                            <div
                                class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center opacity-0 group-hover:opacity-100 scale-0 group-hover:scale-100 duration-500 ease-in-out">
                                <a href="{{ route('articles') }}"
                                    class="btn btn-sm bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">View</a>
                            </div>
                        </div>

                        <div class="p-6 relative">
                            <a href="nft-detail.html"
                                class="text-lg font-semibold hover:text-indigo-600 duration-500 ease-in-out">
                                {{ Str::title($item->title) }}</a>

                            <div class="flex items-center justify-between mt-2">
                                <div class="flex items-center">
                                    @php
                                        $count = 0;
                                        foreach ($item->articles as $article) {
                                            $popularity = (int) $article->popularity;
                                            echo $count += $popularity;
                                            // echo $article->sum('popularity');
                                        }
                                    @endphp
                                    <span class="block font-semibold text-indigo-600"> <i
                                            class="mdi mdi-heart text-red-600 "></i>
                                        likes</span>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- End Bid -->
            </div>
            <!--end grid-->

            <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
                <div class="md:col-span-12 text-center">
                    <a href="{{ route('articles') }}"
                        class="btn btn-link text-slate-400 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Explore
                        All Items <i class="uil uil-arrow-right align-middle"></i></a>
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
