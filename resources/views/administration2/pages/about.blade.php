@extends('administration.layout.master')
@section('pageName')
    About Us
@endsection

@push('style')
    <script src="https://cdn.tiny.cloud/1/7q9kiyqjbi7cy7ywr85uvbysu31pknq44p5xtw66ats635k5/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
@endpush
@section('content')
    <div class="h-[calc(100vh-73px)] overflow-y-auto overflow-x-hidden">
        <div class="p-4 sm:p-7 min-h-[calc(100vh-145px)]">
            <div class="px-2 py-1 mb-4">
                <h2 class="text-lg font-semibold">Input Group</h2>
            </div>
            <div class="grid grid-cols-1 gap-7">
                <div class="border border-black/10 p-5 rounded-md">
                    <div class="border border-black/10 p-5 rounded-md">
                        <div class="mb-5">
                            <p class="text-sm font-semibold mb-2">
                                Logo
                            </p>
                            <form action="{{ url('/admin/about-update-logo') }}" method="POST">
                                @csrf
                                @method('post')
                                <input name="image" type="file" placeholder="Logo"
                                    class="form-input py-2.5 px-4 w-full text-black border border-black/10 rounded-lg placeholder:text-black/20 focus:border-black focus:ring-0 focus:shadow-none;"
                                    required>
                                <div class="pt-5">
                                    <button type="submit" class="btn btn-sm btn-outline-primary"><i
                                            class="bi bi-person-check"></i> Chnage Logo</button>
                                </div>
                            </form>
                        </div>
                        <form action="{{ url('/admin/about-update') }}" method="post">
                            @csrf
                            @method('post')

                            <div class="mb-5">
                                <p class="text-sm font-semibold mb-2">
                                    Address
                                </p>

                                <input name="location" type="text" placeholder="User Name" value="{{ $about->location }}"
                                    class="form-input py-2.5 px-4 w-full text-black border border-black/10 rounded-lg placeholder:text-black/20 focus:border-black focus:ring-0 focus:shadow-none;"
                                    required="">

                            </div>
                            <div class="mb-5">
                                <p class="text-sm font-semibold mb-2">
                                    Company name
                                </p>
                                <input name="name" type="text" placeholder="User Name" value="{{ $about->name }}"
                                    class="form-input py-2.5 px-4 w-full text-black border border-black/10 rounded-lg placeholder:text-black/20 focus:border-black focus:ring-0 focus:shadow-none;"
                                    required="">
                            </div>
                            <div class="mb-5">
                                <p class="text-sm font-semibold mb-2">About</p>
                                <div class="mb-4">
                                    <textarea name="description">
                                {{ $about->description }}
                              </textarea>
                                </div>
                            </div>
                            <div class="mb-5">
                                <p class="text-sm font-semibold mb-2">Welcome Message</p>
                                <div class="mb-4">
                                    <textarea name="welcome_message">
                                {{ $about->welcome_message }}
                              </textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-sm btn-outline-primary"><i
                                        class="bi bi-person-check"></i> Update</button>
                            </div>

                        </form>

                    </div>
                </div>
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
