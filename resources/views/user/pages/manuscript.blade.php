@extends('user.layout.master')
@section('pageName')
    Manuscript
@endsection

@section('content')
    <!-- Start Hero -->
    <section
        class="relative table w-full py-32 lg:py-36 bg-[url('../../assets/images/real/bg/01.html')] bg-no-repeat bg-center bg-cover">
        <div class="absolute inset-0 bg-black opacity-80"></div>
        <div class="container">
            <div class="grid grid-cols-1 text-center mt-10">
                <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">
                    Submit Manuscript
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
        <div class="container">
            <div class="grid lg:grid-cols-12 grid-cols-1" id="reserve-form">
                <div class="lg:col-start-2 lg:col-span-10">
                    <div class="rounded-md shadow dark:shadow-gray-800 bg-white dark:bg-slate-900 p-6">
                        <form action="{{ route('store.manuscript') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            <div class="grid lg:grid-cols-12 gap-6">
                                <div class="lg:col-span-6">
                                    <div class="ltr:text-left rtl:text-right">
                                        <label for="title" class="font-semibold">Title:</label>
                                        <input name="title" id="title" type="text" class="form-input mt-3"
                                            placeholder="Title">
                                    </div>
                                </div>
                                {{-- <div class="lg:col-span-6">
                                    <div class="ltr:text-left rtl:text-right">
                                        <label for="page_no" class="font-semibold">Page No.:</label>
                                        <input name="page_no" id="page_no" type="text" class="form-input mt-3"
                                            placeholder="Page number">
                                    </div>
                                </div> --}}
                                <div class="lg:col-span-6">
                                    <div class="ltr:text-left rtl:text-right">
                                        <label for="authors" class="font-semibold">Authors:</label>
                                        <input name="authors" id="authors" type="text" class="form-input mt-3"
                                            placeholder="Authors">
                                    </div>
                                </div>
                                <div class="lg:col-span-12">
                                    <label class="font-semibold" for="file">Upload file:</label>
                                    <input class="form-input mt-3" id="resumefile" name="file" type="file">
                                </div>
                                <div class="lg:col-span-12">
                                    <div class="ltr:text-left rtl:text-right">
                                        <label for="abstract" class="font-semibold">Abstract:</label>
                                        <textarea name="abstract" id="comments" class="form-input mt-3 h-28" placeholder="Abstract"></textarea>
                                    </div>
                                </div>


                            </div>
                            <button type="submit"
                                class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-4">Send
                                Manuscript</button>
                        </form>
                        <!--end form-->
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
