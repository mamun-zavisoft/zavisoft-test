@extends('backend.layouts.dashboard')
@section('title', 'Careers')

@section('content')
    <h1 class="text-base lg:text-xl font-bold text-primary-600 mb-4">Update Job</h1>
    <form action="{{ route('admin.careers.update', $data->id) }}" method="POST">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-5 gap-y-0">
            <div>
                <div class="form-group">
                    <label>Positions <span class="manitory">*</span></label>
                    <input type="text" id="name" name="name" value="{{ $data->name }}"
                        placeholder="Enter Positions" />
                    @error('name')
                        <div class="text-danger-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label>Type <span class="manitory">*</span></label>
                    <select class="select" id="type" name="type">
                        <option value="" disabled {{ old('type', $data->type ?? '') == '' ? 'selected' : '' }}>Choose</option>
                        <option value="Full Time" {{ old('type', $data->type ?? '') == 'Full Time' ? 'selected' : '' }}>Full Time</option>
                        <option value="Part Time" {{ old('type', $data->type ?? '') == 'Part Time' ? 'selected' : '' }}>Part Time</option>
                        <option value="Internship" {{ old('type', $data->type ?? '') == 'Internship' ? 'selected' : '' }}>Internship</option>
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
                        <option value="" disabled {{ old('location_type', $data->location_type ?? '') == '' ? 'selected' : '' }}>Choose</option>
                        <option value="Onsite" {{ old('location_type', $data->location_type ?? '') == 'Onsite' ? 'selected' : '' }}>Onsite</option>
                        <option value="Remote" {{ old('location_type', $data->location_type ?? '') == 'Remote' ? 'selected' : '' }}>Remote</option>
                        <option value="Hybrid" {{ old('location_type', $data->location_type ?? '') == 'Hybrid' ? 'selected' : '' }}>Hybrid</option>
                    </select>
                    @error('location_type')
                        <div class="text-danger-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div>
                <div class="form-group">
                    <label>Experience <span class="manitory">*</span></label>
                    <input type="text" id="experience" name="experience" value="{{ $data->experience }}"
                        placeholder="Enter Experience" />
                    @error('experience')
                        <div class="text-danger-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div>
                <div class="form-group">
                    <label>Salary Range <span class="manitory">*</span></label>
                    <input type="text" id="salary_range" name="salary_range" value="{{ $data->salary_range }}"
                        placeholder="Enter Salary Range" />
                    @error('salary_range')
                        <div class="text-danger-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-span-1 md:col-span-2">
                <div class="form-group">
                    <label>Office Address <span class="manitory">*</span></label>
                    <textarea type="text" id="address" name="address" placeholder="Enter Address" rows="4">{{ $data->address }}</textarea>
                    @error('address')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-span-1 md:col-span-2">
                <div class="form-group">
                    <label>Job Description <span class="manitory">*</span></label>
                    @include('backend.settings.ckeditor', [
                        'name' => 'description',
                        'value' => old('description', $data->description ?? ''),
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
                        'value' => old('requirement', $data->requirement ?? ''),
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
                        'value' => old('responsibilities', $data->responsibilities ?? ''),
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
                        'value' => old('about_company', $data->about_company ?? ''),
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

        </div>
    </form>
@endsection
