@extends('backend.layouts.dashboard')
@section('title', 'Projects')

@section('content')
    <form action="{{ route('admin.project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="grid grid-cols-1 gap-x-5 gap-y-0 ">
            <div>
                <div class="form-group">
                    <label>Title<span class="manitory">*</span></label>
                    <input type="text" name="title" placeholder="Write Project Title" value="{{$project->title}}"/>
                </div>
                @error('title')
                <div class="text-danger-500 mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <div class="form-group">
                    <label>About Project <span class="manitory">*</span></label>
                    <textarea name="about_project" id="" cols="30" rows="10" type="text" placeholder="Write About Project">{{$project->about_project}}</textarea>
                </div>
                @error('about_project')
                <div class="text-danger-500 mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <div class="form-group">
                    <label>Business Result <span class="manitory">*</span></label>
                    <textarea name="business_result" id="" cols="30" rows="10" type="text" placeholder="Write Business Result">{{$project->business_result}}</textarea>
                </div>
                @error('business_result')
                <div class="text-danger-500 mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="">
                <div class="form-group">
                    <label class="text-base text-red-800"> Banner Image<span class="manitory">*</span></label>
                    <div class="image-upload">
                        <input type="file" name="banner_image" id="banner-image">
                        <div class="image-uploads flex flex-col items-center justify-center">
                            <img src="{{ asset('storage/' . $project->banner_image) }}" alt="img" class="w-32 h-32 object-cover rounded mb-2">
                        </div>
                    </div>
                    @error('banner_image')
                    <div class="text-danger-500 mt-1">{{ $message }}</div>
                    @enderror
                    <span id="banner-file-name" class="mt-2 text-sm text-gray-600"></span>
                </div>
            </div>
            <div class="">
                <div class="form-group">
                    <label class="text-base text-red-800">Gallery Image<span class="manitory">*</span></label>
                    <div class="image-upload">
                        <input type="file" name="gallery_image" id="gallery-image">
                        <div class="image-uploads flex flex-col items-center justify-center">
                            <img src="{{ asset('storage/' . $project->gallery_image) }}" alt="img" class="w-32 h-32 object-cover rounded mb-2">
                        </div>
                    </div>
                    @error('gallery_image')
                    <div class="text-danger-500 mt-1">{{ $message }}</div>
                    @enderror
                    <span id="gallery-file-name" class="mt-2 text-sm text-gray-600"></span>
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label>Challenge<span class="manitory">*</span></label>
                    <textarea name="challenge" id="" cols="30" rows="10" type="text" placeholder="Write Challenge">{{$project->challenge}}</textarea>
                    @error('challenge')
                    <div class="text-danger-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label>Solution<span class="manitory">*</span></label>
                    @include('backend.settings.ckeditor', [
                        'name' => 'solution',
                        'value' => $project->solution,
                        'placeholder' => 'Write solution...',
                    ])
                </div>
                @error('solution')
                <div class="text-danger-500 mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <div class="form-group">
                    <label>Final Impact<span class="manitory">*</span></label>
                    <textarea name="final_impact" id="" cols="30" rows="10" type="text" placeholder="Write Final Impact">{{$project->final_impact}}</textarea>
                </div>
                @error('final_impact')
                <div class="text-danger-500 mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <div class="form-group">
                    <label>Project Contributors<span class="manitory">*</span></label>
                    <input type="text" name="contributors" placeholder="Write Project Contributors (comma separated)" value="{{$project->contributors}}"/>
                </div>
                @error('contributors')
                <div class="text-danger-500 mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <div class="form-group">
                    <label>Project Platforms<span class="manitory">*</span></label>
                    <input type="text" name="platforms" placeholder="Write Project Platforms" value="{{$project->platforms}}"/>
                </div>
                @error('platforms')
                <div class="text-danger-500 mt-1">{{ $message }}</div>
                @enderror
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
