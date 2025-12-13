@extends('backend.layouts.dashboard')
@section('title', 'Dashboard')

@section('content')
    <h4 class="mb-3">Team create</h4>
    <div class="p-4 bg-white rounded">
        <form action="{{ route('admin.teams.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-5 gap-y-0 ">

                <div>
                    <div class="form-group">
                        <label>Name<span class="manitory">*</span></label>
                        <input type="text" name="name" placeholder="Write Name" />
                    </div>
                    @error('name')
                        <div class="text-danger-500 mt-1">{{ $message }}</div>
                    @enderror

                </div>
                <div>
                    <div class="form-group">
                        <label>Designation <span class="manitory">*</span></label>
                        <input type="text" name="designation" placeholder="Write Designation" />
                    </div>
                    @error('designation')
                        <div class="text-danger-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <div class="form-group">
                        <label>Facebook Link <span class="manitory">*</span></label>
                        <input type="text" name="facebook" placeholder="Write facebook link" />
                    </div>
                    @error('facebook')
                        <div class="text-danger-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <div class="form-group">
                        <label>LinkedIn Link <span class="manitory">*</span></label>
                        <input type="text" name="linkedin" placeholder="Write linkedin link" />
                    </div>
                    @error('linkedin')
                        <div class="text-danger-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>



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
                        <span id="image-file-name" class="mt-2 text-sm text-gray-600"></span>
                    </div>

                    <!-- Single Preview Container -->
                    <div id="image-preview" class="mt-3 hidden">
                        <img id="preview-image" src="" alt="Preview"
                            class="w-16 h-16 object-cover rounded-lg border shadow-sm">
                    </div>
                </div>

                <div class="col-span-1 md:col-span-2">
                    <div class="flex justify-end mt-6">
                        <button class="btn btn-submit mr-2">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@push('scripts')
    <script>
        document.getElementById('image').addEventListener('change', function(e) {
            const preview = document.getElementById('image-preview');
            const previewImg = document.getElementById('preview-image');

            if (this.files && this.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    previewImg.src = e.target.result;
                    preview.classList.remove('hidden');
                }

                reader.readAsDataURL(this.files[0]);
            } else {
                preview.classList.add('hidden');
            }
        });
    </script>
@endpush
