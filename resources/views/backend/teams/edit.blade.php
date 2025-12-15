@extends('backend.layouts.dashboard')
@section('title', 'Dashboard')

@section('content')
    <h4>Team Update</h4>
    <div class="p-4 bg-white rounded">
        <form action="{{ route('admin.teams.update', $team) }}" class="space-y-3" id="myForm" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-5 gap-y-0 ">

                <div>
                    <div class="form-group">
                        <label>Name<span class="manitory">*</span></label>
                        <input type="text" name="name" value="{{ $team->name }}" placeholder="Write Name" />
                    </div>
                    @error('name')
                        <div class="text-danger-500 mt-1">{{ $message }}</div>
                    @enderror

                </div>
                <div class="">
                    <div class="form-group">
                        <label>Sl No<span class="manitory">*</span></label>
                         <input type="number" name="sl_no" placeholder="Write Sl No" value="{{ $team->sl_no }}" />
                    </div>
                    @error('sl_no')
                        <div class="text-danger-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <div class="form-group">
                        <label>Designation <span class="manitory">*</span></label>
                        <input type="text" name="designation" value="{{ $team->designation }}"
                            placeholder="Write Designation" />
                    </div>
                    @error('designation')
                        <div class="text-danger-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>

               
                <div>
                    <div class="form-group">
                        <label>LinkedIn Link <span class="manitory"></span></label>
                        <input type="text" name="linkedin" value="{{ $team->linkedin }}"
                            placeholder="Write linkedin link" />
                    </div>
                    @error('linkedin')
                        <div class="text-danger-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>
                @if ($team->sl_no == 0)
                    <div>
                        <div class="form-group">
                            <label>Title<span class="manitory"></span></label>
                            <input type="text" name="title" placeholder="Write Title" value="{{ $team->title }}" />
                        </div>
                        @error('title')
                            <div class="text-danger-500 mt-1">{{ $message }}</div>
                        @enderror

                    </div>
                    <div>
                        <div class="form-group">
                            <label>Short Description<span class="manitory"></span></label>
                            <input type="text" name="short_description" placeholder="Write Sort Description"
                                value="{{ $team->short_description }}" />
                        </div>
                        @error('short_description')
                            <div class="text-danger-500 mt-1">{{ $message }}</div>
                        @enderror

                    </div>
                @endif

                <div class="col-span-1 md:col-span-2">
                    <div class="form-group">
                        <label class="text-base text-red-800"> Image<span class="manitory">*</span></label>
                        <div class="image-upload">
                            <input type="file" name="image" id="image" accept="image/*">
                            <div class="image-uploads flex flex-col items-center justify-center">
                                <img src="{{ asset('assets/images/icons/upload.svg') }}" alt="img">
                                <h4>Drag and drop a file to upload</h4>
                            </div>
                        </div>
                        @error('image')
                            <div class="text-danger-500 mt-1">{{ $message }}</div>
                        @enderror
                        <span id="image-file-name" class="mt-2 text-sm text-gray-600 hidden"></span>
                    </div>

                    <!-- Image Container -->
                    <div class="image-container mt-3">
                        @if (!empty($team->image))
                            <div id="old-image">
                                <img src="{{ asset('storage/' . $team->image) }}" alt="Current Image"
                                    class="w-32 h-32 object-cover rounded border shadow-sm">
                            </div>
                        @endif
                        <div id="new-image-preview" class="hidden">
                            <img id="preview-image" src="" alt="Preview"
                                class="w-32 h-32 object-cover rounded border shadow-sm">
                        </div>
                    </div>
                </div>

                <div class="col-span-1 md:col-span-2">
                    <div class="flex justify-end mt-6">
                        <button class="btn btn-submit mr-2">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const imageInput = document.getElementById('image');
            const fileNameSpan = document.getElementById('image-file-name');
            const oldImageDiv = document.getElementById('old-image');
            const newImagePreviewDiv = document.getElementById('new-image-preview');
            const previewImage = document.getElementById('preview-image');

            imageInput.addEventListener('change', function(e) {
                const file = e.target.files[0];

                if (file) {
                    // Show file name
                    fileNameSpan.textContent = file.name;

                    // Hide old image if exists
                    if (oldImageDiv) {
                        oldImageDiv.classList.add('hidden');
                    }

                    // Show new image preview
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        previewImage.src = e.target.result;
                        newImagePreviewDiv.classList.remove('hidden');
                    };
                    reader.readAsDataURL(file);
                } else {
                    // If user cancels or clears selection
                    fileNameSpan.textContent = '';
                    newImagePreviewDiv.classList.add('hidden');
                    if (oldImageDiv) {
                        oldImageDiv.classList.remove('hidden');
                    }
                }
            });
        });
    </script>
@endpush
