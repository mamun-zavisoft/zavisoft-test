@extends('backend.layouts.dashboard')
@section('title', 'Projects')

@section('content')
    <form action="">
        <div class="grid grid-cols-1 gap-x-5 gap-y-0 ">
            <div>
                <div class="form-group">
                    <label>Heading<span class="manitory">*</span></label>
                    <input type="text" name="" placeholder="Write Heading" />
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label>About Project <span class="manitory">*</span></label>
                    <textarea name="" id="" cols="30" rows="10" type="text" placeholder="Write About Project"></textarea>

                </div>
            </div>
            <div>
                <div class="form-group">
                    <label>Business Result <span class="manitory">*</span></label>
                    <textarea name="" id="" cols="30" rows="10" type="text"
                        placeholder="Write Business Result"></textarea>

                </div>
            </div>
            <div class="">
                <div class="form-group">
                    <label class="text-base text-red-800"> Banner Image</label>
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
            </div>
            <div class="">
                <div class="form-group">
                    <label class="text-base text-red-800">Gallery Image</label>
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
            </div>
            <div>
                <div class="form-group">
                    <label>Challenge<span class="manitory">*</span></label>
                    <textarea name="" id="" cols="30" rows="10" type="text" placeholder="Write Challenge"></textarea>

                </div>
            </div>
            <div>
                <div class="form-group">
                    <label>Solution<span class="manitory">*</span></label>
                    <textarea name="" id="" cols="30" rows="10" type="text" placeholder="Write Solution"></textarea>

                </div>
            </div>
            <div>
                <div class="form-group">
                    <label>Final Impact<span class="manitory">*</span></label>
                    <textarea name="" id="" cols="30" rows="10" type="text" placeholder="Write Final Impact"></textarea>

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
