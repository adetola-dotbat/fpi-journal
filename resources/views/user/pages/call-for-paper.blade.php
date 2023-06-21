@extends('user.layout.master')
@section('pageName')
    About us
@endsection

@section('content')
    <!-- Start Hero -->
    <section
        class="relative table w-full py-32 lg:py-36 bg-[url('../../assets/images/real/bg/01.html')] bg-no-repeat bg-center bg-cover">
        <div class="absolute inset-0 bg-black opacity-80"></div>
        <div class="container">
            <div class="grid grid-cols-1 text-center mt-10">
                <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">
                    Grid View Layout
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

    <!-- Start -->

    <section class="relative md:py-24 py-16">
        <div class="container md:mt-24 mt-16">
            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                <div class="lg:col-span-4 md:col-span-5">
                    <div class="sticky top-20">
                        <ul class="flex-column text-center p-6 bg-white shadow rounded-md" id="myTab"
                            data-tabs-toggle="#myTabContent" role="tablist">
                            <li role="presentation">
                                <button
                                    class="px-4 py-2 text-base font-semibold rounded-md w-full hover:text-indigo-600 transition-all duration-500 ease-in-out"
                                    id="profile-tab" data-tabs-target="#profile" type="button" role="tab"
                                    aria-controls="profile" aria-selected="true">
                                    Wealth Management
                                </button>
                            </li>
                            <li role="presentation">
                                <button
                                    class="px-4 py-2 text-base font-semibold rounded-md w-full mt-3 transition-all duration-500 ease-in-out"
                                    id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                                    aria-controls="dashboard" aria-selected="false">
                                    Retirement Planning
                                </button>
                            </li>
                            <li role="presentation">
                                <button
                                    class="px-4 py-2 text-base font-semibold rounded-md w-full mt-3 transition-all duration-500 ease-in-out"
                                    id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                                    aria-controls="settings" aria-selected="false">
                                    Business Insurance
                                </button>
                            </li>
                            <li role="presentation">
                                <button
                                    class="px-4 py-2 text-base font-semibold rounded-md w-full mt-3 transition-all duration-500 ease-in-out"
                                    id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab"
                                    aria-controls="contacts" aria-selected="false">
                                    Life Insurance
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="lg:col-span-8 md:col-span-7">
                    <div id="myTabContent" class="p-6 bg-white shadow rounded-md">
                        <div class="" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <img src="assets/images/cowork/7.jpg" class="shadow rounded-md" alt="" />
                            <div class="mt-6">
                                <h5 class="text-lg font-semibold mb-4">Wealth Management</h5>
                                <p class="text-slate-400 mb-2">
                                    This is required when, for example, the final text is not
                                    yet available. Dummy text is also known as 'fill text'. It
                                    is said that song composers of the past used dummy texts as
                                    lyrics.
                                </p>
                                <a href="#"
                                    class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">See
                                    More <i class="uil uil-arrow-right align-middle"></i></a>
                            </div>
                        </div>
                        <div class="hidden" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                            <img src="assets/images/cowork/8.jpg" class="shadow rounded-md" alt="" />
                            <div class="mt-6">
                                <h5 class="text-lg font-semibold mb-4">
                                    Retirement Planning
                                </h5>
                                <p class="text-slate-400 mb-2">
                                    This is required when, for example, the final text is not
                                    yet available. Dummy text is also known as 'fill text'. It
                                    is said that song composers of the past used dummy texts as
                                    lyrics.
                                </p>
                                <a href="#"
                                    class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">See
                                    More <i class="uil uil-arrow-right align-middle"></i></a>
                            </div>
                        </div>
                        <div class="hidden" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                            <img src="assets/images/cowork/9.jpg" class="shadow rounded-md" alt="" />
                            <div class="mt-6">
                                <h5 class="text-lg font-semibold mb-4">Business Insurance</h5>
                                <p class="text-slate-400 mb-2">
                                    This is required when, for example, the final text is not
                                    yet available. Dummy text is also known as 'fill text'. It
                                    is said that song composers of the past used dummy texts as
                                    lyrics.
                                </p>
                                <a href="#"
                                    class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">See
                                    More <i class="uil uil-arrow-right align-middle"></i></a>
                            </div>
                        </div>
                        <div class="hidden" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                            <img src="assets/images/cowork/10.jpg" class="shadow rounded-md" alt="" />
                            <div class="mt-6">
                                <h5 class="text-lg font-semibold mb-4">Life Insurance</h5>
                                <p class="text-slate-400 mb-2">
                                    This is required when, for example, the final text is not
                                    yet available. Dummy text is also known as 'fill text'. It
                                    is said that song composers of the past used dummy texts as
                                    lyrics.
                                </p>
                                <a href="#"
                                    class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">See
                                    More <i class="uil uil-arrow-right align-middle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End -->
@endsection
