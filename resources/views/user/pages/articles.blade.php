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
        class="relative table w-full py-32 lg:py-36 bg-no-repeat bg-center bg-cover">
        <div class="absolute inset-0 bg-black opacity-80"></div>
        <div class="container">
            <div class="grid grid-cols-1 text-center mt-10">
                <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white z-10">
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
    <section class="relative md:py-24 py-16">
        <div class="container">
            <div class="grid grid-cols-1 items-center gap-[30px]">
                <div class="filters-group-wrap text-center">
                    <div class="filters-group">
                        <ul class="mb-0 list-none container-filter-border-bottom filter-options">

                            <li class="inline-block text-lg font-semibold mx-2 mb-3 cursor-pointer relative border-b border-transparent text-slate-400 transition duration-500 active"
                                data-group="all">All</li>
                            @foreach ($volumes as $volume)
                                <li class="inline-block text-lg font-semibold mx-2 mb-3 cursor-pointer relative border-b border-transparent text-slate-400 transition duration-500"
                                    data-group="{{ $volume->title }}">
                                    {{ $volume->title }}</li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
            <!--grid-->

            <div id="grid" class="md:flex justify-center mx-auto mt-4">
                @foreach ($articles as $article)
                    <div class="lg:w-1/3 md:w-1/2 p-4 picture-item" data-groups='["{{ $article->volume->title }}"]'>

                        <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                            <img src="{{ asset('storage/volume/' . $article->volume->image) }}"
                                style="height: 28rem; width:23rem"
                                class="shadow dark:shadow-gray-800 p-5 pb-0 rounded-md bg-indigo-600/5 dark:bg-indigo-600/30"
                                alt="">

                            <!--<div-->
                            <!--    class="absolute inset-2 group-hover:bg-white/90 dark:group-hover:bg-slate-900/90 transition duration-500 z-0 rounded-md">-->
                            <!--</div>-->

                                <div class="pt-4 px-3">
                                <h5 class="mb-1 font-semibold text-lg"><a target="_blank"
                                        class="hover:text-red-600 transition-all duration-500 ease-in-out">{{ Str::title($article->title) }}</a>
                                </h5>
                                <span class="text-slate-400"> {{ Str::title($article->author) }}</span>
                                <p class="text-slate-400 mb-0 flex justify-between align-center"><a
                                        href="{{ asset('storage/article/' . $article->file) }} " target="_blank"
                                        class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Download
                                    </a> <a href="{{ route('like', $article->id) }}"
                                        class="h6 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out"><i
                                            class="mdi mdi-heart text-red-600"></i>Like</a> </p>
                            </div>
                        </div>
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
