@extends('administration.layout.master')
@section('pageName')
    Slider
@endsection
@push('style')
    <link rel="stylesheet" href="{{ asset('administration/assets/bundles/plugins/dropify/css/dropify.css') }}">
    <link rel="stylesheet" href="{{ asset('administration/assets/bundles/plugins/dropzone/dropzone.css') }}">
    <link rel="stylesheet" type="text/css" media="screen"
        href="{{ asset('administration/assets/css/simple-datatables.css') }}" />
@endpush
@section('content')
    <div class="h-[calc(100vh-73px)] overflow-y-auto overflow-x-hidden">
        <div class="p-4 sm:p-7 min-h-[calc(100vh-145px)]">
            <div class="">
                <form action="{{ route('admin.slider') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="py-1 mb-4">
                        <h2 class="text-lg font-semibold">Add Slider</h2>
                    </div>
                    <div class="mb-5">
                        <p class="text-sm font-semibold mb-2">
                            Slider Image
                        </p>
                        <input name="image" type="file" placeholder="Logo"
                            class="dropify form-input py-2.5 px-4 w-full text-black border border-black/10 rounded-lg placeholder:text-black/20 focus:border-black focus:ring-0 focus:shadow-none;"
                            required>
                    </div>
                    <div class="mb-5">
                        <p class="text-sm font-semibold mb-2">
                            Title
                        </p>
                        <input name="title" type="text" placeholder="Title"
                            class="form-input py-2.5 px-4 w-full text-black border border-black/10 rounded-lg placeholder:text-black/20 focus:border-black focus:ring-0 focus:shadow-none;"
                            required>
                    </div>
                    <div class="mb-5">
                        <p class="text-sm font-semibold mb-2">
                            Description
                        </p>
                        <textarea name="description"
                            class="form-input py-2.5 px-4 w-full text-black border border-black/10 rounded-lg placeholder:text-black/20 focus:border-black focus:ring-0 focus:shadow-none;"
                            required>
                    </textarea>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-sm btn-outline-primary"><i class="bi bi-person-check"></i>
                            Add</button>
                    </div>
                </form>
            </div>
            <div class="pt-10">
                <div x-data="basic"
                    class="border bg-lightwhite dark:bg-white/5 dark:border-white/10 border-black/10 p-5 rounded-md">
                    <div class="mb-5">
                        <p class="text-sm font-semibold">Slider Table</p>
                    </div>
                    <div class="">
                        <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                            <div class="dataTable-top">
                                <div class="dataTable-dropdown"><label><select class="dataTable-selector">
                                            <option value="5" selected="">5</option>
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select></label></div>
                                <div class="dataTable-search"><input class="dataTable-input" placeholder="Search..."
                                        type="text">
                                </div>
                            </div>
                            <div class="dataTable-container">
                                <table id="myTableStriped"
                                    class="whitespace-nowrap table-striped table-hover table-bordered dataTable-table">
                                    <thead>
                                        <tr>
                                            <th data-sortable="" style="width: 15.9624%;"><a href="#"
                                                    class="dataTable-sorter">ID</a></th>
                                            <th data-sortable="" style="width: 27.6995%;"><a href="#"
                                                    class="dataTable-sorter">First Name</a></th>
                                            <th data-sortable="" style="width: 27.4648%;"><a href="#"
                                                    class="dataTable-sorter">Last Name</a></th>
                                            <th data-sortable="" style="width: 52.3474%;"><a href="#"
                                                    class="dataTable-sorter">Email</a></th>
                                            <th data-sortable="" style="width: 37.5587%;"><a href="#"
                                                    class="dataTable-sorter">Phone</a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Caroline</td>
                                            <td>Jensen</td>
                                            <td>carolinejensen@zidant.com</td>
                                            <td>+1 (821) 447-3782</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Celeste</td>
                                            <td>Grant</td>
                                            <td>celestegrant@polarax.com</td>
                                            <td>+1 (838) 515-3408</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Tillman</td>
                                            <td>Forbes</td>
                                            <td>tillmanforbes@manglo.com</td>
                                            <td>+1 (969) 496-2892</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Daisy</td>
                                            <td>Whitley</td>
                                            <td>daisywhitley@applideck.com</td>
                                            <td>+1 (861) 564-2877</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Weber</td>
                                            <td>Bowman</td>
                                            <td>weberbowman@volax.com</td>
                                            <td>+1 (962) 466-3483</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="dataTable-bottom">
                                <div class="dataTable-info">Showing 1 to 5 of 25 entries</div>
                                <nav class="dataTable-pagination">
                                    <ul class="dataTable-pagination-list">
                                        <li class="active"><a href="#" data-page="1">1</a></li>
                                        <li class=""><a href="#" data-page="2">2</a></li>
                                        <li class=""><a href="#" data-page="3">3</a></li>
                                        <li class=""><a href="#" data-page="4">4</a></li>
                                        <li class=""><a href="#" data-page="5">5</a></li>
                                        <li class="pager"><a href="#" data-page="2"><svg width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5">
                                                    <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('administration.inc.footer')



    </div>

    @push('script')
        <script src="{{ asset('administration/assets/bundles/plugins/dropify/js/dropify.js') }}"></script> <!-- Dropify Plugin Js -->
        <script src="{{ asset('administration/assets/bundles/plugins/dropzone/dropzone.js') }}"></script> <!-- Dropzone Plugin Js -->
        <script type="text/javascript">
            $(function() {
                $('.dropify').dropify();
            })
        </script>

        <script src=" {{ asset('administration/assets/js/simple-datatables.js') }} "></script>
    @endpush
@endsection
