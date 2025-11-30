@extends('backend.layouts.dashboard')
@section('title', 'Industry Focus')

@section('content')
    <form action="">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-5 gap-y-0">
            <div>
                <div class="form-group">
                    <label>Title <span class="manitory">*</span></label>
                    <input type="text" name="" placeholder="Enter Title" />
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label>Heading <span class="manitory">*</span></label>
                    <input type="text" name="" placeholder="Enter Heading" />
                </div>
            </div>
            <div class="col-span-1 md:col-span-2">
                <div class="form-group">
                    <label>Short Description <span class="manitory">*</span></label>
                    <textarea type="text" name="" placeholder="Enter Short Description" rows="4"></textarea>
                </div>
            </div>
            <div class="col-span-1 md:col-span-2">
                <div class="industry-focus">
                    <div class="flex flex-col">
                        <div class="flex justify-between gap-3">
                            <div class="flex gap-3 flex-1">
                                <div class="form-group flex-shrink">
                                    <div class="image-upload m-0!">
                                        <input type="file">
                                        <div class="image-uploads w-full h-full flex flex-col items-center justify-center">
                                            <img src="{{ asset('assets/images/icons/upload.svg') }}" alt="img"
                                                class="w-7 h-7">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group flex-1">
                                    <input type="text" name="" placeholder="Enter Heading" />
                                </div>
                            </div>
                            <div class="flex-shrink">
                                <button class="w-16 h-10 rounded bg-red-500! text-white">Delete</button>
                            </div>
                        </div>

                        <div class="flex justify-end">
                            <button class="btn btn-submit h-10! py-2! mr-[76px]!">Add more</button>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-span-1 md:col-span-2">
                <div class="flex justify-end mt-6">
                    <button class="btn btn-submit mr-2">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection
