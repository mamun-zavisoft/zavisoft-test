@extends('backend.layouts.dashboard')
@section('title', 'Services')

@section('content')
    <h1 class="text-base lg:text-xl font-bold text-primary-600 mb-4">Services</h1>
    @php
        $serviceTabs = [
            ['id' => 'ui-ux', 'label' => 'UI/UX Design & Audit'],
            ['id' => 'software-development', 'label' => 'Software Development'],
            ['id' => 'web-application-development', 'label' => 'Web Application Development'],
            ['id' => 'mobile-app-development', 'label' => 'Mobile App Development'],
            ['id' => 'qa-testing', 'label' => 'QA Testing'],
            ['id' => 'database-management', 'label' => 'Database Management'],
        ];
        $inactiveTabClasses = 'hover:text-neutral-600 hover:border-neutral-300 dark:hover:text-neutral-300';
    @endphp

    <div class="p-4 bg-white rounded">
        <div class="service-tabs pb-12">
            <div class="mb-4 border-b border-neutral-200 dark:border-neutral-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="service-tabs"
                    data-tabs-toggle="#services-tab-content" role="tablist">
                    @foreach ($serviceTabs as $tab)
                        <li class="me-2" role="presentation">
                            <button
                                class="tab-btn inline-block p-4 border-b-2 rounded-t-lg {{ $loop->first ? '' : $inactiveTabClasses }}"
                                id="{{ $tab['id'] }}-tab" data-tabs-target="#{{ $tab['id'] }}" type="button"
                                role="tab" aria-controls="{{ $tab['id'] }}"
                                aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                                {{ $tab['label'] }}
                            </button>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div id="services-tab-content" class="mt-6 pb-10">
                @foreach ($serviceTabs as $tab)
                    <div class="{{ $loop->first ? '' : 'hidden' }}" id="{{ $tab['id'] }}" role="tabpanel"
                        aria-labelledby="{{ $tab['id'] }}-tab">
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
                                        <label>Short Description <span class="manitory">*</span></label>
                                        <textarea name="description" id="" cols="30" rows="10" type="text"
                                            placeholder="Write Short Description"></textarea>

                                    </div>
                                </div>

                                <div class="">
                                    <div class="form-group">
                                        <label class="text-base text-red-800"> Service Image</label>
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
                                                    <img src="{{ asset('assets/images/icons/close-icon.svg') }}"
                                                        alt="img" class="w-6 h-6 rounded">
                                                </span>
                                                <img src="{{ asset('assets/images/profiles/avatar-04.jpg') }}"
                                                    alt="img" class="rounded">
                                            </div>
                                        </div>
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
                @endforeach
            </div>
        </div>
    </div>
@endsection
