@extends('backend.layouts.dashboard')
@section('title', 'Services')

@section('content')
    <h1 class="text-base lg:text-xl font-bold text-primary-600 mb-4">Partners</h1>

    <form action="">
        <div class="grid grid-cols-1 gap-x-5 gap-y-0">
            <div class="col-span-1">
                <div class="">
                    <div class="form-group">
                        <label class="text-base text-red-800"> Patner Logo</label>
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
                                <img src="{{ asset('assets/images/profiles/avatar-04.jpg') }}" alt="img"
                                    class="rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <div class="flex justify-end mt-6">
                    <button class="btn btn-submit mr-2">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection
