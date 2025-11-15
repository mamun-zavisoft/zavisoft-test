@extends('backend.layouts.dashboard')
@section('title', 'Page Settings')

@section('content')
    <h1 class="text-base lg:text-xl font-bold text-primary-600 mb-4">Page Settings</h1>
    @php
        $pageTabs = [
            ['id' => 'home', 'label' => 'Home'],
            ['id' => 'about', 'label' => 'About'],
            ['id' => 'contacts', 'label' => 'Contacts'],
            ['id' => 'services', 'label' => 'Services'],
            ['id' => 'projects', 'label' => 'Projects'],
        ];

        $homeTabs = [
            ['id' => 'home-hero', 'label' => 'Hero'],
            ['id' => 'home-slider', 'label' => 'Slider'],
            ['id' => 'home-team-achievements', 'label' => 'Team Achievements'],
        ];

        $aboutTabs = [
            ['id' => 'about-hero', 'label' => 'Hero'],
            ['id' => 'about-slider', 'label' => 'Slider'],
            ['id' => 'about-vision-mission', 'label' => 'Our Vision & Mission'],
        ];

        $inactiveTabClasses = 'hover:text-neutral-600 hover:border-neutral-300 dark:hover:text-neutral-300';
        $subTabHoverClasses = 'hover:text-neutral-600 hover:border-neutral-300 dark:hover:text-neutral-300';
    @endphp

    <div class="p-4 bg-white rounded">
        <div class="page-setting-tabs pb-12">
            <div class="mb-4 border-b border-neutral-200 dark:border-neutral-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="pages-tab-list"
                    data-tabs-toggle="#pages-tab-content" role="tablist">
                    @foreach ($pageTabs as $tab)
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
            <div id="pages-tab-content" class="mt-6 pb-10">
                @foreach ($pageTabs as $tab)
                    <div class="{{ $loop->first ? '' : 'hidden' }}" id="{{ $tab['id'] }}" role="tabpanel"
                        aria-labelledby="{{ $tab['id'] }}-tab">
                        @switch($tab['id'])
                            @case('home')
                                <div class="md:flex">
                                    <ul id="home-page-tab" data-tabs-toggle="#home-page-tab-panels" role="tablist"
                                        class="page-tab-menu flex-column space-y-3 text-sm font-medium text-neutral-500 dark:text-neutral-400 md:me-4 mb-4 md:mb-0">
                                        @foreach ($homeTabs as $homeTab)
                                            <li class="me-2" role="presentation">
                                                <button class="tab-btn inline-block {{ $loop->first ? '' : $subTabHoverClasses }}"
                                                    id="{{ $homeTab['id'] }}-tab" data-tabs-target="#{{ $homeTab['id'] }}"
                                                    type="button" role="tab" aria-controls="{{ $homeTab['id'] }}"
                                                    aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                                                    {{ $homeTab['label'] }}
                                                </button>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div id="home-page-tab-panels" class="page-tab-content">
                                        @foreach ($homeTabs as $homeTab)
                                            <div class="{{ $loop->first ? '' : 'hidden' }}" id="{{ $homeTab['id'] }}"
                                                role="tabpanel" aria-labelledby="{{ $homeTab['id'] }}-tab">
                                                @switch($homeTab['id'])
                                                    @case('home-hero')
                                                        <form action="">
                                                            <div class="grid grid-cols-1">
                                                                <div>
                                                                    <div class="form-group">
                                                                        <label>Title <span class="manitory">*</span></label>
                                                                        <input type="text" name="" placeholder="Enter Title" />
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="form-group">
                                                                        <label>Heading <span class="manitory">*</span></label>
                                                                        <input type="text" name="" placeholder="Write Heading" />
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="form-group">
                                                                        <label>Short Description <span class="manitory">*</span></label>
                                                                        <textarea name="" id="" cols="30" rows="10" type="text" placeholder="Write Description"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="flex justify-end mt-6">
                                                                    <button class="btn btn-submit mr-2">Submit</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    @break

                                                    @case('home-slider')
                                                        <form action="">
                                                            <div class="grid grid-cols-1">
                                                                <div class="form-group">
                                                                    <label class="text-base text-red-800"> Hero Slider Image (Min:6)</label>
                                                                    <div class="image-upload">
                                                                        <input type="file">
                                                                        <div
                                                                            class="image-uploads flex flex-col items-center justify-center">
                                                                            <img src="{{ asset('assets/images/icons/upload.svg') }}"
                                                                                alt="img">
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
                                                                <div class="flex justify-end mt-6">
                                                                    <button class="btn btn-submit mr-2">Submit</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    @break

                                                    @case('home-team-achievements')
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
                                                                <div>
                                                                    <div class="form-group">
                                                                        <label>Happy Customers <span class="manitory">*</span></label>
                                                                        <input type="text" name=""
                                                                            placeholder="Enter Happy Customers" />
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="form-group">
                                                                        <label>Years Experiences <span class="manitory">*</span></label>
                                                                        <input type="text" name=""
                                                                            placeholder="Enter Years Experiences" />
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="form-group">
                                                                        <label>Awards Rewarded <span class="manitory">*</span></label>
                                                                        <input type="text" name=""
                                                                            placeholder="Enter Awards Rewarded" />
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="form-group">
                                                                        <label>Projects Complete <span class="manitory">*</span></label>
                                                                        <input type="text" name=""
                                                                            placeholder="Enter Projects Complete" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-span-1 md:col-span-2">
                                                                    <div class="form-group">
                                                                        <label class="text-base text-red-800"> Banner Image </label>
                                                                        <div class="image-upload">
                                                                            <input type="file">
                                                                            <div
                                                                                class="image-uploads flex flex-col items-center justify-center">
                                                                                <img src="{{ asset('assets/images/icons/upload.svg') }}"
                                                                                    alt="img">
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
                                                                <div class="col-span-1 md:col-span-2">
                                                                    <div class="flex justify-end mt-6">
                                                                        <button class="btn btn-submit mr-2">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    @break
                                                @endswitch
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @break

                            @case('about')
                                <div class="md:flex">
                                    <ul id="about-page-tab" data-tabs-toggle="#about-page-tab-panels" role="tablist"
                                        class="page-tab-menu flex-column space-y-3 text-sm font-medium text-neutral-500 dark:text-neutral-400 md:me-4 mb-4 md:mb-0">
                                        @foreach ($aboutTabs as $aboutTab)
                                            <li class="me-2" role="presentation">
                                                <button class="tab-btn inline-block {{ $loop->first ? '' : $subTabHoverClasses }}"
                                                    id="{{ $aboutTab['id'] }}-tab" data-tabs-target="#{{ $aboutTab['id'] }}"
                                                    type="button" role="tab" aria-controls="{{ $aboutTab['id'] }}"
                                                    aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                                                    {{ $aboutTab['label'] }}
                                                </button>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div id="about-page-tab-panels" class="page-tab-content">
                                        @foreach ($aboutTabs as $aboutTab)
                                            <div class="{{ $loop->first ? '' : 'hidden' }}" id="{{ $aboutTab['id'] }}"
                                                role="tabpanel" aria-labelledby="{{ $aboutTab['id'] }}-tab">
                                                @switch($aboutTab['id'])
                                                    @case('about-hero')
                                                        <form action="">
                                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-5 gap-y-0 ">
                                                                <div>
                                                                    <div class="form-group">
                                                                        <label>Heading One <span class="manitory">*</span></label>
                                                                        <input type="text" name=""
                                                                            placeholder="Write Heading One" />
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="form-group">
                                                                        <label>Heading Two <span class="manitory">*</span></label>
                                                                        <input type="text" name=""
                                                                            placeholder="Write Heading Two" />
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="form-group">
                                                                        <label>Short Description One <span
                                                                                class="manitory">*</span></label>
                                                                        <textarea name="" id="" cols="30" rows="10" type="text"
                                                                            placeholder="Write Description One"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="form-group">
                                                                        <label>Short Description Two<span class="manitory">*</span></label>
                                                                        <textarea name="" id="" cols="30" rows="10" type="text"
                                                                            placeholder="Write Description Two"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-span-1 md:col-span-2">
                                                                    <div class="form-group">
                                                                        <label class="text-base text-red-800"> Company Logo (width : 140 x
                                                                            height :
                                                                            40)</label>
                                                                        <div class="image-upload">
                                                                            <input type="file">
                                                                            <div
                                                                                class="image-uploads flex flex-col items-center justify-center">
                                                                                <img src="{{ asset('assets/images/icons/upload.svg') }}"
                                                                                    alt="img">
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
                                                                <div class="col-span-1 md:col-span-2">
                                                                    <div class="flex justify-end mt-6">
                                                                        <button class="btn btn-submit mr-2">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    @break

                                                    @case('about-slider')
                                                        <form action="">
                                                            <div class="grid grid-cols-1 ">
                                                                <div class="form-group">
                                                                    <label class="text-base text-red-800"> Slider Image (width : 240 x
                                                                        height :
                                                                        240)</label>
                                                                    <div class="image-upload">
                                                                        <input type="file">
                                                                        <div
                                                                            class="image-uploads flex flex-col items-center justify-center">
                                                                            <img src="{{ asset('assets/images/icons/upload.svg') }}"
                                                                                alt="img">
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
                                                                <div class="flex justify-end mt-6">
                                                                    <button class="btn btn-submit mr-2">Submit</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    @break

                                                    @case('about-vision-mission')
                                                        <form action="">
                                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-5 gap-y-0 ">
                                                                <div>
                                                                    <div class="form-group">
                                                                        <label>Title <span class="manitory">*</span></label>
                                                                        <input type="text" name="" placeholder="Write Title" />
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="form-group">
                                                                        <label>Heading <span class="manitory">*</span></label>
                                                                        <input type="text" name=""
                                                                            placeholder="Write Heading" />
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <div class="form-group">
                                                                        <label>Happy Customers <span class="manitory">*</span></label>
                                                                        <input type="number" name=""
                                                                            placeholder="Write Happy Customers Number" />
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <div class="form-group">
                                                                        <label>Project complete <span class="manitory">*</span></label>
                                                                        <input type="number" name=""
                                                                            placeholder="Write Project complete Number" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-span-1 md:col-span-2">
                                                                    <div class="form-group">
                                                                        <label>Short Description <span class="manitory">*</span></label>
                                                                        <textarea name="" id="" cols="30" rows="10" type="text"
                                                                            placeholder="Write Description"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <div class="form-group">
                                                                        <label>Happy Customers <span class="manitory">*</span></label>
                                                                        <textarea name="" id="" cols="30" rows="10" type="text"
                                                                            placeholder="Write Happy Customers Description"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <div class="form-group">
                                                                        <label>Happy Customers <span class="manitory">*</span></label>
                                                                        <textarea name="" id="" cols="30" rows="10" type="text"
                                                                            placeholder="Write Project complete Description"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-span-1 md:col-span-2">
                                                                    <div class="form-group">
                                                                        <label class="text-base text-red-800"> Image </label>
                                                                        <div class="image-upload">
                                                                            <input type="file">
                                                                            <div
                                                                                class="image-uploads flex flex-col items-center justify-center">
                                                                                <img src="{{ asset('assets/images/icons/upload.svg') }}"
                                                                                    alt="img">
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
                                                                <div class="col-span-1 md:col-span-2">
                                                                    <div class="flex justify-end mt-6">
                                                                        <button class="btn btn-submit mr-2">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    @break
                                                @endswitch
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @break

                            @case('contacts')
                                <form action="">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-5 gap-y-0">
                                        <div>
                                            <div class="form-group">
                                                <label>Heading <span class="manitory">*</span></label>
                                                <input type="text" name="" placeholder="Enter Heading" />
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-group">
                                                <label>Short Description <span class="manitory">*</span></label>
                                                <input type="text" name="" placeholder="Enter Description" />
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
                                        <div class="col-span-1 md:col-span-2">
                                            <div class="form-group w-full">
                                                <label>Social Media <span class="manitory">*</span></label>
                                                <div class="flex gap-4">
                                                    <div class="form-group">
                                                        <label>Facebook</label>
                                                        <input type="text" name="" placeholder="Enter Facebook" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Twitter</label>
                                                        <input type="text" name="" placeholder="Enter Twitter" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Instagram</label>
                                                        <input type="text" name="" placeholder="Enter Instagram" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Linkedin</label>
                                                        <input type="text" name="" placeholder="Enter Linkedin" />
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
                            @break

                            @case('services')
                                <form action="">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-5 gap-y-0">
                                        <div>
                                            <div class="form-group">
                                                <label>Heading <span class="manitory">*</span></label>
                                                <input type="text" name="" placeholder="Enter Heading" />
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-group">
                                                <label>Short Description <span class="manitory">*</span></label>
                                                <input type="text" name="" placeholder="Enter Description" />
                                            </div>
                                        </div>
                                        <div class="col-span-1 md:col-span-2">
                                            <div class="flex justify-end mt-6">
                                                <button class="btn btn-submit mr-2">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            @break

                            @case('projects')
                                <form action="">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-5 gap-y-0">
                                        <div>
                                            <div class="form-group">
                                                <label>Heading <span class="manitory">*</span></label>
                                                <input type="text" name="" placeholder="Enter Heading" />
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-group">
                                                <label>Short Description <span class="manitory">*</span></label>
                                                <input type="text" name="" placeholder="Enter Description" />
                                            </div>
                                        </div>
                                        <div class="col-span-1 md:col-span-2">
                                            <div class="flex justify-end mt-6">
                                                <button class="btn btn-submit mr-2">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            @break

                        @endswitch
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
