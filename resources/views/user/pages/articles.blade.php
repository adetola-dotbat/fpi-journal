@extends('user.layout.master')
@section('pageName')
    Articles
@endsection

{{-- @push('style')
    <link href="{{ asset('user/assets/libs/tobii/css/tobii.min.css') }}" rel="stylesheet">
@endpush --}}

@section('content')
    <!-- Start Hero -->

    @php
        use Illuminate\Support\Str;
    @endphp
    <section
        class="relative table w-full py-32 lg:py-36 bg-[url('../../assets/images/real/bg/01.html')] bg-no-repeat bg-center bg-cover">
        <div class="absolute inset-0 bg-black opacity-80"></div>
        <div class="container">
            <div class="grid grid-cols-1 text-center mt-10">
                <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">
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
                                class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500"
                                alt="">
                            <div
                                class="absolute inset-2 group-hover:bg-white/90 dark:group-hover:bg-slate-900/90 transition duration-500 z-0 rounded-md">
                            </div>

                            <div class="content transition-all duration-500">
                                <div class="title absolute z-10 hidden group-hover:block bottom-6 start-6">
                                    <p class="text-2xl mb-0">
                                        <strong> {{ Str::title($article->title) }} </strong>
                                    </p>
                                    <p class=" mb-0">
                                        {{ Str::upper($article->author) }}
                                    </p>
                                    <a href="{{ route('like', $article->id) }}"
                                        class="h6 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out"><i
                                            class="mdi mdi-heart text-red-600"></i>Like</a>
                                    <p class="text-slate-400 mb-0"><a
                                            href="{{ asset('storage/article/' . $article->file) }} " target="_blank"
                                            class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Download
                                        </a></p>
                                </div>
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
        <script src="{{ asset('user/assets/libs/shufflejs/shuffle.min.js') }}"></script>
        <script src="{{ asset('user/assets/libs/tobii/js/tobii.min.js') }}"></script>
        <script src="{{ asset('user/assets/libs/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('user/assets/js/plugins.init.js') }}"></script>
        <script src="{{ asset('user/assets/js/app.js') }}"></script>
        <!-- JAVASCRIPTS -->
    @endpush
@endsection
