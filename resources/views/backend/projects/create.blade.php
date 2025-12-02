@extends('backend.layouts.dashboard')
@section('title', 'Projects')

@section('content')
    <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 gap-x-5 gap-y-0 ">
            <div>
                <div class="form-group">
                    <label>Title<span class="manitory">*</span></label>
                    <input type="text" name="title" placeholder="Write Project Title" value="{{old('title')}}"/>
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label>About Project <span class="manitory">*</span></label>
                    <textarea name="about_project" id="" cols="30" rows="10" type="text" placeholder="Write About Project"></textarea>
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label>Business Result <span class="manitory">*</span></label>
                    <textarea name="business_result" id="" cols="30" rows="10" type="text" placeholder="Write Business Result"></textarea>
                </div>
            </div>
            <div class="">
                <div class="form-group">
                    <label class="text-base text-red-800"> Banner Image<span class="manitory">*</span></label>
                    <div class="image-upload">
                        <input type="file" name="banner_image" id="banner-image">
                        <div class="image-uploads flex flex-col items-center justify-center">
                            <img src="{{ asset('assets/images/icons/upload.svg') }}" alt="img">
                            <h4>Drag and drop a file to upload</h4>
                        </div>
                    </div>
                    <span id="banner-file-name" class="mt-2 text-sm text-gray-600"></span>
                </div>
            </div>
            <div class="">
                <div class="form-group">
                    <label class="text-base text-red-800">Gallery Image<span class="manitory">*</span></label>
                    <div class="image-upload">
                        <input type="file" name="gallery_image" id="gallery-image">
                        <div class="image-uploads flex flex-col items-center justify-center">
                            <img src="{{ asset('assets/images/icons/upload.svg') }}" alt="img">
                            <h4>Drag and drop a file to upload</h4>
                        </div>
                    </div>
                    <span id="gallery-file-name" class="mt-2 text-sm text-gray-600"></span>
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label>Challenge<span class="manitory">*</span></label>
                    <textarea name="challenge" id="" cols="30" rows="10" type="text" placeholder="Write Challenge"></textarea>

                </div>
            </div>
            <div>
                <div class="form-group">
                    <label>Solution<span class="manitory">*</span></label>
                    @include('backend.settings.ckeditor', [
                        'name' => 'solution',
                        'value' => old('solution'),
                        'placeholder' => 'Write solution...',
                    ])
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label>Final Impact<span class="manitory">*</span></label>
                    <textarea name="final_impact" id="" cols="30" rows="10" type="text" placeholder="Write Final Impact"></textarea>

                </div>
            </div>
            <div>
                <div class="form-group">
                    <label>Project Contributors<span class="manitory">*</span></label>
                    <input type="text" name="contributors" placeholder="Write Project Contributors (comma separated)" />
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label>Project Platforms<span class="manitory">*</span></label>
                    <input type="text" name="platforms" placeholder="Write Project Platforms" />
                </div>
            </div>
            <div class="">
                <div class="flex justify-end mt-6">
                    <button class="btn btn-submit mr-2">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection
@push('scripts')
    <script>
        document.getElementById('gallery-image').addEventListener('change', function (e) {
            document.getElementById('gallery-file-name').textContent = e.target.files[0]?.name || '';
        });

        document.getElementById('banner-image').addEventListener('change', function (e) {
            document.getElementById('banner-file-name').textContent = e.target.files[0]?.name || '';
        });
    </script>
@endpush
