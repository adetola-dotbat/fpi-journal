@extends('administration.layout.master')
@section('pageName')
    Dashboard
@endsection
@push('style')
    <script src="https://cdn.tiny.cloud/1/7q9kiyqjbi7cy7ywr85uvbysu31pknq44p5xtw66ats635k5/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
@endpush

@section('content')
    <div class="h-[calc(100vh-73px)] overflow-y-auto overflow-x-hidden">
        <div class="p-4 sm:p-7 min-h-[calc(100vh-145px)]">
            <div class="px-2 py-1 mb-4">
                <h2 class="text-lg font-semibold">Call for paper</h2>
            </div>
            <div class="grid grid-cols-1 gap-7">
                <form action="/admin/papers" method="POST">
                    @csrf
                    @method('post')
                    <div class="mb-5">
                        <p class="text-sm font-semibold mb-2"></p>
                        <div class="mb-4">
                            <textarea name="description">
                                    {{ $paper->description }}
                        </textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-sm btn-outline-primary"><i class="bi bi-person-check"></i>
                            Update</button>
                    </div>
            </div>
            @include('administration.inc.footer')
        </div>
        @push('script')
            <script>
                tinymce.init({
                    selector: 'textarea',
                    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
                    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
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
    @endsection
