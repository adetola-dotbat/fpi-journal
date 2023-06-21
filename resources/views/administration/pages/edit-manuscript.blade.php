@extends('administration.layout.master', [($bodyClass = 'nk-body bg-lighter npc-default has-sidebar')])
@section('pageName')
    Edit Manuscript
@endsection
@push('style')
    <link rel="stylesheet" href="{{ asset('administration/assets2/bundles/plugins/dropify/css/dropify.css') }}">
    <link rel="stylesheet" href="{{ asset('administration/assets2/bundles/plugins/dropzone/dropzone.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

    <link rel="stylesheet" href="{{ asset('administration/assets/css/style-email.css') }} ">
@endpush
@section('content')
    <div class="nk-content-body">
        <div class="components-preview wide-md mx-auto">
            <div class="nk-block-head nk-block-head-lg wide-sm">
                <div class="nk-block-head-content">
                    <h2 class="nk-block-title fw-normal">Edit Manuscript</h2>
                </div>
            </div>
            <div class="nk-block">
                <div class="card card-bordered">
                    <div class="card-inner">
                        <h4 class="title text-soft mb-4 overline-title">Article On - I must pass the volume title here</h4>
                        <table class="email-wraper">
                            <tbody>
                                <tr>
                                    <td class="py-5">
                                        <table class="email-body">
                                            <tbody>
                                                <form action="{{ route('admin.update.manuscript', $manuscript->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('post')

                                                    <tr>
                                                        <td class="px-3 px-sm-5 pt-3 pt-sm-5 pb-3">
                                                            <h2 class="email-heading">Title: {{ $manuscript->title }}</h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-3 px-sm-5 pb-2">
                                                            <p>From: <input type="text" name="authors"
                                                                    value="{{ $manuscript->authors }}" class="form-control">
                                                            </p>
                                                            <h3>Abstract</h3>
                                                            <textarea name="abstract"class="form-control form-control-sm"> {{ $manuscript->abstract }}</textarea>

                                                            <div class=" pt-5">

                                                                <button class="email-btn" style="border: 0px"
                                                                    type="submit"> Update </button>
                                                                {{-- <a href="{{ route('admin.update.manuscript', $manuscript->id) }}"
                                                                        class="email-btn ">Update</a> --}}
                                                            </div>

                                                        </td>
                                                    </tr>
                                                </form>
                                            </tbody>
                                        </table>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@push('script')
    <script src="{{ asset('administration/assets/js/bundle0226.js?ver=3.1.2') }}"></script>
    <script src="{{ asset('administration/assets/js/scripts0226.js?ver=3.1.2') }}"></script>
    <script src="{{ asset('administration/assets/js/demo-settings0226.js?ver=3.1.2') }}"></script>
    <script src="{{ asset('administration/assets/js/libs/datatable-btns0226.js?ver=3.1.2') }}"></script>

    <script src="{{ asset('administration/assets2/bundles/plugins/dropify/js/dropify.js') }}"></script> <!-- Dropify Plugin Js -->
    <script src="{{ asset('administration/assets2/bundles/plugins/dropzone/dropzone.js') }}"></script> <!-- Dropzone Plugin Js -->
    <script type="text/javascript">
        $(function() {
            $('.dropify').dropify();
        })
    </script>

    <script>
        $(document).ready(function() {
            $('#employee_data').DataTable();
        });
    </script>
@endpush
