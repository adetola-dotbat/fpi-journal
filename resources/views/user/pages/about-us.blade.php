@extends('user.layout.master')
@section('pageName')
    About us
@endsection

@section('content')
    <!-- Start Hero -->
    <section
        class="relative table w-full py-72 bg-[url('../../assets/images/job/job.html')] bg-no-repeat bg-center bg-cover">
        <div class="absolute inset-0 bg-black opacity-80"></div>
    </section>
    <!--end section-->
    <!-- End Hero -->

    <!-- Start -->
    <section class="relative md:py-24 py-16">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                <div class="lg:col-span-4 md:col-span-5">
                    <div class="lg:-mt-[330px] -mt-[299px]">
                        <div class="rounded-md bg-white shadow">
                            <div class="text-center py-8 p-6 border-b border-gray-100">
                                <img src="{{ asset('storage/logo/' . $about->image) }}"
                                    class="h-24 w-24 p-4 shadow-md mx-auto rounded-full block" alt="" />
                                <h5 class="mt-5 text-xl font-semibold mb-0"> {{ $about->name }}</h5>
                            </div>

                            <div class="p-6">
                                <h5 class="font-semibold">Company Details :</h5>
                                <ul class="list-none mt-4">
                                    <li class="flex mt-2 items-center font-medium">
                                        <i data-feather="map-pin" class="h-4 w-4 text-amber-500 me-3"></i><span
                                            class="text-slate-400 me-3">Location :</span>
                                        {{ $about->location }}
                                    </li>
                                    <li class="flex mt-2 items-center font-medium">
                                        <i data-feather="link" class="h-4 w-4 text-amber-500 me-3"></i><span
                                            class="text-slate-400 me-3">Comapny :</span>
                                        {{ $about->name }}
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-8 md:col-span-7">
                    <h4 class="text-xl font-semibold">About us :</h4>
                    <p class="text-slate-400 mt-4">
                        {!! $about->description !!}
                    </p>

                    <h4 class="mt-8 text-xl font-semibold">Welcome Message :</h4>
                    <p class="text-slate-400 mt-4">
                        {!! $about->welcome_message !!}
                    </p>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End -->
@endsection
