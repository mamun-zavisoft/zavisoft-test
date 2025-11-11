@extends('backend.layouts.dashboard')
@section('title', 'System Settings')

@section('content')
    <div class="system-settings bg-white p-4 rounded">
        <form action="">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-5 gap-y-0">
                <div>
                    <div class="form-group">
                        <label>Company Name <span class="manitory">*</span></label>
                        <input type="text" name="" placeholder="Enter Name" />
                    </div>
                </div>

                <div>
                    <div class="form-group">
                        <label>Phone <span class="manitory">*</span></label>
                        <input type="number" name="" placeholder="Enter Phone" />
                    </div>
                </div>

                <div>
                    <div class="form-group">
                        <label>Whatsapp Number <span class="manitory">*</span></label>
                        <input type="number" name="" placeholder="Enter Whatsapp Number" />
                    </div>
                </div>

                <div>
                    <div class="form-group">
                        <label>Email <span class="manitory">*</span></label>
                        <input type="email" name="" placeholder="Enter Email" />
                    </div>
                </div>
                <div class="col-span-1 md:col-span-2">
                    <div class="form-group">
                        <label>Address <span class="manitory">*</span></label>
                        <textarea type="text" name="" placeholder="Enter Address" rows="4"></textarea>
                    </div>
                </div>
                <div class="">
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
                                <img src="{{ asset('assets/images/profiles/avatar-04.jpg') }}" alt="img"
                                    class="rounded">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="">
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
                                <img src="{{ asset('assets/images/profiles/avatar-04.jpg') }}" alt="img"
                                    class="rounded">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
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
                                <img src="{{ asset('assets/images/profiles/avatar-04.jpg') }}" alt="img"
                                    class="rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
