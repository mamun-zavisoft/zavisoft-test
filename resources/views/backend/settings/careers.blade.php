@extends('backend.layouts.dashboard')
@section('title', 'careers')

@section('content')
    <h1 class="text-base lg:text-xl font-bold text-primary-600 mb-4">Careers</h1>
    <form action="">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-5 gap-y-0">
            <div>
                <div class="form-group">
                    <label>Positions <span class="manitory">*</span></label>
                    <input type="text" name="" placeholder="Enter Positions" />
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label>Type</label>
                    <select class="select">
                        <option>Choose</option>
                        <option>Remote</option>
                        <option>Full Time</option>
                        <option>Part Time</option>
                        <option>Intership</option>
                    </select>
                </div>
            </div>

            <div>
                <div class="form-group">
                    <label>Experience <span class="manitory">*</span></label>
                    <input type="number" name="" placeholder="Enter Experience" />
                </div>
            </div>

            <div>
                <div class="form-group">
                    <label>Salary Range <span class="manitory">*</span></label>
                    <input type="text" name="" placeholder="Enter Salary Range" />
                </div>
            </div>
            <div class="col-span-1 md:col-span-2">
                <div class="form-group">
                    <label>Office Address <span class="manitory">*</span></label>
                    <textarea type="text" name="" placeholder="Enter Address" rows="4"></textarea>
                </div>
            </div>
            <div class="col-span-1 md:col-span-2">
                <div class="form-group">
                    <label>Job Description <span class="manitory">*</span></label>
                    @include('backend.settings.ckeditor')
                </div>
                @include('backend.settings.ckeditor')
            </div>
            <div class="col-span-1 md:col-span-2">
                <div class="flex justify-end mt-6">
                    <button class="btn btn-submit mr-2">Submit</button>
                </div>
            </div>

        </div>
    </form>
@endsection
