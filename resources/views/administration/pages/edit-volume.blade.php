@extends('administration.layout.master', [($bodyClass = 'nk-body bg-lighter npc-default has-sidebar')])
@section('pageName')
    Edit Volume
@endsection
@push('style')
    <link rel="stylesheet" href="{{ asset('administration/assets2/bundles/plugins/dropify/css/dropify.css') }}">
    <link rel="stylesheet" href="{{ asset('administration/assets2/bundles/plugins/dropzone/dropzone.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    {{-- tiny script --}}
    <script src="https://cdn.tiny.cloud/1/7q9kiyqjbi7cy7ywr85uvbysu31pknq44p5xtw66ats635k5/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
@endpush
@section('content')
    <div class="nk-content-body">
        <div class="components-preview wide-md mx-auto">
            <div class="nk-block-head nk-block-head-lg wide-sm">
                <div class="nk-block-head-content">
                    <h2 class="nk-block-title fw-normal">Edit Volume</h2>
                </div>
            </div>


            <div class="nk-block nk-block-lg">
                <div class="row g-gs">
                    <div class="col-lg-12">
                        <div class="card card-bordered h-100">
                            <div class="card-inner">
                                <form action="{{ route('admin.update.volume.image', $volume->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @method('post')
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">
                                                    Image</label>
                                                <input type="file" name="image" class="form-file-input dropify"
                                                    required>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-primary">Change
                                                    Image
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mt-4">
                                                <img height="250" width="400"
                                                    src="{{ asset('/storage/volume/' . $volume->image) }}">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                <form action="{{ route('admin.update.volume', $volume->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @method('post')
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label">Title</label>
                                        <input type="text" value="{{ $volume->title }}" name="title"
                                            class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Description</label>
                                        <div class="form-control-wrap">
                                            <textarea class="form-control form-control-sm" name="description">{{ $volume->description }}</textarea>
                                        </div>
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
                                    <h2 class="nk-block-title fw-normal">Volume Table</h2>
                                </div>
                                <div class="table-responsive">
                                    <table id="employee_data" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <td>#</td>
                                                <td>Title</td>
                                                <td>Description</td>
                                                <td>Image</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @forelse ($volumes as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->title }}</td>
                                                    <td>{!! $item->description !!}</td>
                                                    <td> <img width="200" height="100"
                                                            src="{{ asset('/storage/volume/' . $item->image) }}">
                                                    </td>
                                                    <td>
                                                        <div class="dropdown"><a href="#" class="btn btn-primary"
                                                                data-bs-toggle="dropdown" aria-expanded="false"><span>Action
                                                                </span><em class="icon ni ni-chevron-down"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-auto mt-1"
                                                                style="">
                                                                <ul class="link-list-plain">
                                                                    <li><a
                                                                            href="{{ route('admin.edit.volume', $item->id) }}">Edit</a>
                                                                    </li>
                                                                    <li><a
                                                                            href="{{ route('admin.status.volume', $item->id) }}">
                                                                            @if ($item->status == 'pending')
                                                                                Activate
                                                                            @else
                                                                                Inactive
                                                                            @endif
                                                                        </a>
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

    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight |  numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [{
                    value: 'First.Name',
                    title: 'First Name'
                },
                {
                    value: 'Email',
                    title: 'Email'
                },
            ],
        });
    </script>
@endpush
