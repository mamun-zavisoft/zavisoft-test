@extends('backend.layouts.dashboard')
@section('title', 'System Settings')

@section('content')
    <div class="system-settings bg-white p-4 rounded">
        <form action="">
            <div class="form-group">
                <label class="text-base text-red-800"> Company Logo (width : 140 x height : 40)</label>
                <div class="image-upload">
                    <input type="file">
                    <div class="image-uploads flex flex-col items-center justify-center">
                        <img src="{{ asset('assets/images/icons/upload.svg') }}" alt="img">
                        <h4>Drag and drop a file to upload</h4>
                    </div>
                </div>
                <div class="preview-image">
                    <div class="rounded relative w-16 h-16">
                        <span
                            class="bg-neutral-100 absolute top-[-16px] right-[-14px] w-8 h-8 p-2 cursor-pointer flex items-center justify-center">
                            <img src="{{ asset('assets/images/icons/close-icon.svg') }}" alt="img"
                                class="w-6 h-6 rounded">
                        </span>
                        <img src="{{ asset('assets/images/profiles/avatar-04.jpg') }}" alt="img" class="rounded">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="text-base text-red-800"> Favicon (width : 512 x height : 512)</label>
                <div class="image-upload">
                    <input type="file">
                    <div class="image-uploads flex flex-col items-center justify-center">
                        <img src="{{ asset('assets/images/icons/upload.svg') }}" alt="img">
                        <h4>Drag and drop a file to upload</h4>
                    </div>
                </div>
                <div class="preview-image">
                    <div class="rounded relative w-16 h-16">
                        <span
                            class="bg-neutral-100 absolute top-[-16px] right-[-14px] w-8 h-8 p-2 cursor-pointer flex items-center justify-center">
                            <img src="{{ asset('assets/images/icons/close-icon.svg') }}" alt="img"
                                class="w-6 h-6 rounded">
                        </span>
                        <img src="{{ asset('assets/images/profiles/avatar-04.jpg') }}" alt="img" class="rounded">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="text-base text-red-800"> Footer logo (width : 140 x height : 40)</label>
                <div class="image-upload">
                    <input type="file">
                    <div class="image-uploads flex flex-col items-center justify-center">
                        <img src="{{ asset('assets/images/icons/upload.svg') }}" alt="img">
                        <h4>Drag and drop a file to upload</h4>
                    </div>
                </div>
                <div class="preview-image">
                    <div class="rounded relative w-16 h-16">
                        <span
                            class="bg-neutral-100 absolute top-[-16px] right-[-14px] w-8 h-8 p-2 cursor-pointer flex items-center justify-center">
                            <img src="{{ asset('assets/images/icons/close-icon.svg') }}" alt="img"
                                class="w-6 h-6 rounded">
                        </span>
                        <img src="{{ asset('assets/images/profiles/avatar-04.jpg') }}" alt="img" class="rounded">
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
