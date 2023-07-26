@extends('user.layout.master')
@section('pageName')
    Contact us
@endsection

@section('content')
    <!-- Start Hero -->
    <section class="md:h-screen flex py-36 w-full items-center  bg-center bg-no-repeat bg-cover">
        <div class="absolute inset-0 bg-black/70"></div>
        <div class="container z-10">
            <div class="lg:flex justify-center mt-12">
                <div class="lg:w-11/12 bg-white dark:bg-slate-900 rounded-md shadow-lg dark:shadow-gray-800 overflow-hidden">
                    <div class="grid md:grid-cols-12 grid-cols-1 items-center">
                        <div class="lg:col-span-7 md:col-span-6">
                            <div class="w-full leading-[0] border-0">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15843.923298877267!2d2.9829141970341806!3d6.892896700610783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b0f39af9ffa69%3A0xafda89b113521487!2sFederal%20Polytechnic%2C%20Ilaro!5e0!3m2!1sen!2sng!4v1689674730922!5m2!1sen!2sng"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>

                        <div class="lg:col-span-5 md:col-span-6">
                            <div class="p-6">
                                <h3 class="mb-6 text-2xl leading-normal font-medium">Welcome Message</h3>
                                <p class="text-slate-400">{{ $contact->welcome_message }}</p>

                                <div class="flex items-center mt-6">
                                    <i data-feather="mail" class="w-6 h-6 me-4"></i>
                                    <div class="">
                                        <h5 class="title font-bold mb-0">Email</h5>
                                        <a
                                            class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">{{ $contact->email }}</a>
                                    </div>
                                </div>

                                <div class="flex items-center mt-6">
                                    <i data-feather="phone" class="w-6 h-6 me-4"></i>
                                    <div class="">
                                        <h5 class="title font-bold mb-0">Phone</h5>
                                        <a href="tel:+152534-468-854"
                                            class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">{{ $contact->phone }}</a>
                                    </div>
                                </div>

                                <div class="flex items-center mt-6">

                                    <div class="">
                                        <h5 class="title font-bold mb-0">Location</h5>

                                        <a
                                            class="video-play-icon btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 transition duration-500 lightbox">{{ $contact->location }}</a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>

    @push('script')
        <script src="{{ asset('assets/libs/tobii/js/tobii.min.js') }}"></script>
    @endpush
    <!--end section-->
    <!-- End Hero -->
@endsection
