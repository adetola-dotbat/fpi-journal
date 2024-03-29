@extends('administration.layout.master', [($bodyClass = 'nk-body bg-lighter npc-default has-sidebar')])
@section('pageName')
    Edit Article
@endsection
@push('style')
    <link rel="stylesheet" href="{{ asset('administration/assets2/bundles/plugins/dropify/css/dropify.css') }}">
    <link rel="stylesheet" href="{{ asset('administration/assets2/bundles/plugins/dropzone/dropzone.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

    @if (Session::has('message'))
        @include('toastr.toastrstyle')
    @endif
@endpush
@section('content')
    <div class="nk-content-body">
        <div class="components-preview wide-md mx-auto">
            <div class="nk-block-head nk-block-head-lg wide-sm">
                <div class="nk-block-head-content">
                    <h2 class="nk-block-title fw-normal">Edit Article</h2>
                </div>
            </div>
            <div class="nk-block nk-block-lg">
                <div class="row g-gs">
                    <div class="col-lg-12">
                        <div class="card card-bordered h-100">
                            <div class="card-inner">
                                <form action="{{ route('admin.update.article.file', $article->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @method('post')
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Article</label>
                                                <input type="file" name="file" class="form-file-input dropify"
                                                    required>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-secondary">Change
                                                    Article File
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 text-center mt-5">
                                            <div class="form-group mt-4">
                                                <h1> <a href="{{ asset('/storage/article/' . $article->file) }}"
                                                        target="_blank">View Article</a> </h1>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                <form action="{{ route('admin.update.article', $article->id) }}" method="POST">
                                    @csrf

                                    <div class="form-group">
                                        <label class="form-label">Title</label>
                                        <input type="text" placeholder="Title" name="title"
                                            value="{{ $article->title }}" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Page(s)</label>
                                        <input type="text" placeholder="Page number" name="pages"
                                            value="{{ $article->pages }}" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Author(s)</label>
                                        <input type="text" placeholder="Author" name="author"
                                            value="{{ $article->author }}" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Abstract</label>
                                        <div class="form-control-wrap">
                                            <textarea class="form-control form-control-sm" name="abstract" placeholder="Write your message" required>{{ $article->abstract }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group"><button type="submit" class="btn  btn-secondary">Save
                                        </button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card card-bordered h-100">
                            <div class="card-inner">
                                <div class="nk-block-head-content mb-5">
                                    <h2 class="nk-block-title fw-normal">Article Table</h2>
                                </div>
                                <div class="table-responsive">
                                    <table id="employee_data" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <td>#</td>
                                                <td>Page No.</td>
                                                <td>Title</td>
                                                <td>File</td>
                                                <td>Publish Status</td>
                                                <td>Publish Date </td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($articles as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->pages }}</td>
                                                    <td>{{ $item->title }}</td>
                                                    <td>
                                                        <a href="{{ asset('/storage/article/' . $item->file) }}"
                                                            target="_blank">View Article</a>
                                                    </td>
                                                    <td>{{ $item->publish_status }}</td>
                                                    <td>
                                                        @if ($item->publish_date)
                                                            {{ $item->publish_date }}
                                                        @else
                                                            Pending date
                                                        @endif

                                                    </td>

                                                    <td>
                                                        <div class="dropdown"><a href="#" class="btn btn-secondary"
                                                                data-bs-toggle="dropdown" aria-expanded="false"><span>Action
                                                                </span><em class="icon ni ni-chevron-down"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-auto mt-1"
                                                                style="">
                                                                <ul class="link-list-plain">
                                                                    <li><a
                                                                            href="{{ route('admin.edit.article', $item->id) }}">Edit</a>
                                                                    </li>
                                                                    <li><a
                                                                            href="{{ route('admin.publish.article', $item->id) }}">
                                                                            @if ($item->publish_status == 'pending')
                                                                                Publish
                                                                            @else
                                                                                Unpublish
                                                                            @endif

                                                                        </a>
                                                                    </li>
                                                                    <li><a
                                                                            href="{{ route('admin.delete.article', $item->id) }}">Delete</a>
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
