@extends('backend.layouts.dashboard')
@section('title', 'Services')

@section('content')
    <h1 class="text-base lg:text-xl font-bold text-primary-600 mb-4">Update Services</h1>
    <div class="p-4 bg-white rounded">
        <div class="service-tabs pb-12">
            <div id="services-tab-content" class="mt-6 pb-10">
                <form action="{{ route('admin.service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <div class="grid grid-cols-1 gap-x-5 gap-y-0 ">
                        <div>
                            <div class="form-group">
                                <label>Category<span class="manitory">*</span></label>

                                <select class="select" name="category_id" required>
                                    <option value="" disabled {{ old('category_id', $service->category_id ?? '') ? '' : 'selected' }}>
                                        Select Category
                                    </option>

                                    @foreach($categories as $category)
                                        <option
                                            value="{{ $category->id }}"
                                            {{ old('category_id', $service->category_id ?? '') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <div class="text-danger-500 mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <label>Heading<span class="manitory">*</span></label>
                                <input type="text" name="heading" value="{{$service->heading}}"/>
                            </div>
                            @error('heading')
                            <div class="text-danger-500 mt-1">{{ $message }}</div>
                            @enderror

                        </div>
                        <div>
                            <div class="form-group">
                                <label>Short Description <span class="manitory">*</span></label>
                                <textarea name="short_description" id="" cols="30" rows="10" type="text">{{$service->short_description}}</textarea>

                            </div>
                            @error('short_description')
                            <div class="text-danger-500 mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="">
                            <div class="form-group">
                                <label class="text-base text-red-800"> Service Image <span class="manitory">*</span></label>
                                <div class="image-upload">
                                    <input type="file" name="service_image" id="service_image">

                                    <div class="image-uploads flex flex-col items-center justify-center">
                                        @if(!empty($service->service_image))
                                            <img src="{{ asset('storage/' . $service->service_image) }}"
                                                 alt="Service Image"
                                                 class="w-32 h-32 object-cover rounded mb-2">
                                        @endif
                                    </div>
                                </div>
                                @error('service_image')
                                <div class="text-danger-500 mt-1">{{ $message }}</div>
                                @enderror
                                <span id="file-name" class="mt-2 text-sm text-gray-600"></span>
                            </div>
                        </div>

                        <div class="">
                            <div class="flex justify-end mt-6">
                                <button class="btn btn-submit mr-2">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        document.getElementById('service_image').addEventListener('change', function (e) {
            const fileName = e.target.files[0]?.name || '';
            document.getElementById('file-name').textContent = fileName;
        });
    </script>
@endpush
