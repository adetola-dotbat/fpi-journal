@extends('administration.layout.master', [($bodyClass = 'nk-body bg-lighter npc-default has-sidebar')])
@section('pageName')
    Designation
@endsection
@push('style')
    <link rel="stylesheet" href="{{ asset('administration/assets2/bundles/plugins/dropify/css/dropify.css') }}">
    <link rel="stylesheet" href="{{ asset('administration/assets2/bundles/plugins/dropzone/dropzone.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
@endpush
@section('content')
    <div class="nk-content-body">
        <div class="components-preview wide-md mx-auto">
            <div class="nk-block-head nk-block-head-lg wide-sm">
                <div class="nk-block-head-content">
                    <h2 class="nk-block-title fw-normal">Designation</h2>
                </div>
            </div>
            <div class="nk-block nk-block-lg">
                <div class="row g-gs">
                    <div class="col-lg-12">
                        <div class="card card-bordered h-100">
                            <div class="card-inner">
                                <form action="{{ route('admin.store.designation') }}" method="POST">
                                    @method('post')
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label">Designation</label>
                                        <input type="text" placeholder="Designation" name="designation"
                                            class="form-control">
                                    </div>
                                    <div class="form-group"><button type="submit" class="btn btn-lg btn-primary">Save
                                        </button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card card-bordered h-100">
                            <div class="card-inner">
                                <div class="nk-block-head-content mb-5">
                                    <h2 class="nk-block-title fw-normal">Designation Table</h2>
                                </div>
                                <div class="table-responsive">
                                    <table id="employee_data" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <td>#</td>
                                                <td>Description</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @forelse ($designations as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->designation }}</td>
                                                    <td>
                                                        <div class="dropdown"><a href="#" class="btn btn-primary"
                                                                data-bs-toggle="dropdown" aria-expanded="false"><span>Action
                                                                </span><em class="icon ni ni-chevron-down"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-auto "
                                                                style="">
                                                                <ul class="link-list-plain">
                                                                    <li><a
                                                                            href="{{ route('admin.edit.designation', $item->id) }}">Edit</a>
                                                                    </li>
                                                                    <li><a
                                                                            href="{{ route('admin.delete.designation', $item->id) }}">Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                @empty
                                                    No data found
                                                </tr>
                                            @endforelse

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
