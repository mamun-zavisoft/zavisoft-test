@extends('backend.layouts.dashboard')
@section('title', 'Careers')

@section('content')
    <h1 class="text-base lg:text-xl font-bold text-primary-600 mb-4">Create Job</h1>
    <form action="{{ route('admin.careers.store') }}" method="POST">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-5 gap-y-0">
            <div>
                <div class="form-group">
                    <label>Positions <span class="manitory">*</span></label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                           placeholder="Enter Positions"/>
                    @error('name')
                    <div class="text-danger-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label>Type <span class="manitory">*</span></label>
                    <select class="select" id="type" name="type">
                        <option value="" disabled selected>Choose</option>
                        <option value="Full Time">Full Time</option>
                        <option value="Part Time">Part Time</option>
                        <option value="Internship">Internship</option>
                    </select>

                    @error('type')
                    <div class="text-danger-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label>Location <span class="manitory">*</span></label>
                    <select class="select" id="location_type" name="location_type">
                        <option value="" disabled selected>Choose</option>
                        <option value="Onsite">Onsite</option>
                        <option value="Remote">Remote</option>
                        <option value="Hybrid">Hybrid</option>
                    </select>
                    @error('location_type')
                    <div class="text-danger-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div>
                <div class="form-group">
                    <label>Experience <span class="manitory">*</span></label>
                    <input type="text" id="experience" name="experience" value="{{ old('experience') }}"
                           placeholder="Enter Experience"/>
                    @error('experience')
                    <div class="text-danger-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div>
                <div class="form-group">
                    <label>Vacancy</label>
                    <input type="text" name="vacancy" value="{{ old('vacancy') }}"
                           placeholder="Enter Vacancy"/>
                    @error('vacancy')
                    <div class="text-danger-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div>
                <div class="form-group">
                    <label>Salary Range <span class="manitory">*</span></label>
                    <input type="text" id="salary_range" name="salary_range" value="{{ old('salary_range') }}"
                           placeholder="Enter Salary Range"/>
                    @error('salary_range')
                    <div class="text-danger-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-span-1 md:col-span-2">
            <div class="form-group">
                <label>Job Description <span class="manitory">*</span></label>
                @include('backend.settings.ckeditor', [
                    'name' => 'description',
                    'value' => old('description', $career->description ?? ''),
                    'placeholder' => 'Write job description...',
                ])
                @error('description')
                <div class="text-danger-500 mt-1">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="col-span-1 md:col-span-2">
            <div class="form-group">
                <label>Essential Requirement <span class="manitory">*</span></label>
                @include('backend.settings.ckeditor', [
                    'name' => 'requirement',
                    'value' => old('requirement', $career->requirement ?? ''),
                    'placeholder' => 'Write essential requirements...',
                ])
                @error('requirement')
                <div class="text-danger-500 mt-1">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="col-span-1 md:col-span-2">
            <div class="form-group">
                <label>Key Responsibilities <span class="manitory">*</span></label>
                @include('backend.settings.ckeditor', [
                    'name' => 'responsibilities',
                    'value' => old('responsibilities', $career->responsibilities ?? ''),
                    'placeholder' => 'Write key responsibilities...',
                ])
                @error('responsibilities')
                <div class="text-danger-500 mt-1">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="col-span-1 md:col-span-2">
            <div class="form-group">
                <label>Why Join Zavisoft <span class="manitory">*</span></label>
                @include('backend.settings.ckeditor', [
                    'name' => 'about_company',
                    'value' => old('about_company', $career->about_company ?? ''),
                    'placeholder' => 'Why should you join Zavisoft?',
                ])
                @error('about_company')
                <div class="text-danger-500 mt-1">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="col-span-1 md:col-span-2">
            <div class="flex justify-end mt-6">
                <button class="btn btn-submit py-3 px-8 mr-2">Submit</button>
            </div>
        </div>
    </form>
@endsection
