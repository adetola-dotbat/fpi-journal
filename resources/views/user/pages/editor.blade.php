@extends('user.layout.master')
@section('pageName')
    Editorial Board
@endsection

@section('content')
    <!-- Start Hero -->
    <section style="background-image: url({{ asset('storage/article-bg-image-03.jpg') }})"
        class="relative table w-full py-32 lg:py-36 bg-[url('../../assets/images/real/bg/01.html')] bg-no-repeat bg-center bg-cover">
        <div class="absolute inset-0 bg-black opacity-80"></div>
        <div class="container">
            <div class="grid grid-cols-1 text-center mt-10">
                <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">
                    Editorial Board
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
    {{-- @foreach ($designations as $designation)
        Designation: {{ $designation->designation }}
        <br>
        @foreach ($designation->editors as $editor)
            Editor : {{ $editor->name }}<br>
        @endforeach
    @endforeach --}}
    <!-- Start -->
    <section class="md:py-24 py-16">
        <div class="container">
            @foreach ($designations as $designation)
                <div class="grid grid-cols-1 pb-8 text-center py-32">
                    <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">
                        {{ $designation->designation }}
                    </h3>
                </div>
                <!--end grid-->
                <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">
                    @foreach ($designation->editors as $editor)
                        <div class="lg:col-span-3 md:col-span-6">
                            <div class="group text-center">
                                <div class="relative inline-block mx-auto h-52 w-52 rounded-full overflow-hidden">
                                    <img src="{{ asset('storage/editors/' . $editor->image) }}" class=""
                                        alt="" />
                                    <div
                                        class="absolute inset-0 bg-gradient-to-b from-transparent to-black h-52 w-52 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-500 ease-in-out">
                                    </div>

                                    <ul
                                        class="list-none absolute start-0 end-0 -bottom-20 group-hover:bottom-5 transition-all duration-500 ease-in-out">
                                        <li class="inline">
                                            <a href="#"
                                                class="btn btn-icon btn-sm rounded-full border border-indigo-600 bg-indigo-600 hover:border-indigo-600 hover:bg-indigo-600 text-white"><i
                                                    data-feather="facebook" class="h-4 w-4"></i></a>
                                        </li>
                                        <li class="inline">
                                            <a href="#"
                                                class="btn btn-icon btn-sm rounded-full border border-indigo-600 bg-indigo-600 hover:border-indigo-600 hover:bg-indigo-600 text-white"><i
                                                    data-feather="instagram" class="h-4 w-4"></i></a>
                                        </li>
                                        <li class="inline">
                                            <a href="#"
                                                class="btn btn-icon btn-sm rounded-full border border-indigo-600 bg-indigo-600 hover:border-indigo-600 hover:bg-indigo-600 text-white"><i
                                                    data-feather="linkedin" class="h-4 w-4"></i></a>
                                        </li>
                                    </ul>
                                    <!--end icon-->
                                </div>

                                <div class="content mt-3">
                                    <a href="#"
                                        class="text-lg font-semibold hover:text-indigo-600 transition-all duration-500 ease-in-out">
                                        {{ $editor->name }}</a>
                                    <p class="text-slate-400">{{ $editor->institution }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <!--end grid-->
            @endforeach
        </div>
        <!--end container-->
        <!-- team -->
    </section>
    <!-- End -->
@endsection
