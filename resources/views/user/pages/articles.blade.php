@extends('user.layout.master')
@section('pageName')
    Articles
@endsection

@push('style')
    @if (Session::has('message'))
        @include('toastr.toastrstyle')
    @endif
@endpush

@section('content')
    <!-- Start Hero -->
    <section style="background-image: url({{ asset('storage/article-bg-image-03.jpg') }})"
        class="relative table w-full py-32 bg-center bg-no-repeat bg-cover lg:py-36">
        <div class="absolute inset-0 bg-black opacity-80"></div>
        <div class="container">
            <div class="grid grid-cols-1 mt-10 text-center">
                <h3 class="z-10 text-3xl font-medium leading-normal text-white md:text-4xl md:leading-normal">
                    Articles
                </h3>
            </div>
            <!--end grid-->
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

    <!-- Start Section-->
    <section class="relative py-16 md:py-24">
        <div class="container">
            <div class="grid grid-cols-1 items-center gap-[30px]">
                <div class="text-center filters-group-wrap">
                    <div class="filters-group">
                        <ul class="mb-0 list-none container-filter-border-bottom filter-options">

                            <li class="relative inline-block mx-2 mb-3 text-lg font-semibold transition duration-500 border-b border-transparent cursor-pointer text-slate-400 active"
                                data-group="all">All</li>
                            @foreach ($volumes as $volume)
                                <li class="relative inline-block mx-2 mb-3 text-lg font-semibold transition duration-500 border-b border-transparent cursor-pointer text-slate-400"
                                    data-group="{{ $volume->title }}">
                                    {{ $volume->title }}</li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
            <!--grid-->

            <div id="grid" class="justify-center mx-auto mt-4 md:flex">
                @foreach ($articles as $article)
                    <div class="p-4 lg:w-1/3 md:w-1/2 picture-item" data-groups='["{{ $article->volume->title }}"]'>
                        <a href="{{ route('articles.view', $article->id) }}">
                            <div class="relative block py-3 overflow-hidden transition-all duration-500 rounded-md group">
                                <img src="{{ asset('storage/volume/' . $article->volume->image) }}"
                                    style="height: 28rem; width:23rem"
                                    class="p-5 pb-0 rounded-md shadow dark:shadow-gray-800 bg-indigo-600/5 dark:bg-indigo-600/30"
                                    alt="">

                                <!--<div-->
                                <!--    class="absolute z-0 transition duration-500 rounded-md inset-2 group-hover:bg-white/90 dark:group-hover:bg-slate-900/90">-->
                                <!--</div>-->

                                <div class="px-3 pt-4">
                                    <h5 class="mb-1 text-lg font-semibold"><a target="_blank"
                                            class="transition-all duration-500 ease-in-out hover:text-red-600">{{ Str::limit(Str::title($article->title), '50', '...') }}</a>
                                    </h5>
                                    <span class="text-slate-400">
                                        {{ Str::limit(Str::title($article->author), '20', '...') }}</span>
                                    <p class="flex justify-between mb-0 text-slate-400 align-center"><a
                                            href="{{ asset('storage/article/' . $article->file) }} " target="_blank"
                                            class="text-white bg-indigo-600 border-indigo-600 rounded-md btn hover:bg-indigo-700 hover:border-indigo-700">Download
                                        </a> <a href="{{ route('like', $article->id) }}"
                                            class="text-lg font-medium duration-500 ease-in-out h6 hover:text-indigo-600"><i
                                                class="text-red-600 mdi mdi-heart"></i>Like</a> </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            {{-- @endforeach --}}
        </div>

        <!--end container-->
    </section>

    @push('script')
        <!-- JAVASCRIPTS -->
        <script src="{{ asset('administration/assets2/bundles/plugins/jquery/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('user/assets/libs/shufflejs/shuffle.min.js') }}"></script>
        <script src="{{ asset('user/assets/libs/tobii/js/tobii.min.js') }}"></script>
        <script src="{{ asset('user/assets/libs/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('user/assets/js/plugins.init.js') }}"></script>
        <script src="{{ asset('user/assets/js/app.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        @if (Session::has('message'))
            @include('toastr.toastrscript')
        @endif
        <!-- JAVASCRIPTS -->
    @endpush
@endsection
