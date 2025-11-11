@extends('backend.layouts.dashboard')
@section('title', 'Page Settings')

@section('content')
    <h1 class="text-base lg:text-xl font-bold text-primary-600 mb-4">Page Settings</h1>
    <div class="p-4 bg-white rounded">
        <div class="page-setting-tabs pb-12">
            <div class="mb-4 border-b border-neutral-200 dark:border-neutral-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="pages-tab-content"
                    data-tabs-toggle="#pages-tab-content" role="tablist">
                    <li class="me-2" role="presentation">
                        <button class="tab-btn inline-block p-4 border-b-2 rounded-t-lg" id="home-tab"
                            data-tabs-target="#home" type="button" role="tab" aria-controls="home"
                            aria-selected="false">Home</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="tab-btn inline-block p-4 border-b-2 rounded-t-lg hover:text-neutral-600 hover:border-neutral-300 dark:hover:text-neutral-300"
                            id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about"
                            aria-selected="false">About</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="tab-btn inline-block p-4 border-b-2 rounded-t-lg hover:text-neutral-600 hover:border-neutral-300 dark:hover:text-neutral-300"
                            id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab"
                            aria-controls="contacts" aria-selected="false">Contacts</button>
                    </li>
                    <li role="presentation">
                        <button
                            class="tab-btn inline-block p-4 border-b-2 rounded-t-lg hover:text-neutral-600 hover:border-neutral-300 dark:hover:text-neutral-300"
                            id="services-tab" data-tabs-target="#services" type="button" role="tab"
                            aria-controls="services" aria-selected="false">Services</button>
                    </li>
                    <li role="presentation">
                        <button
                            class="tab-btn inline-block p-4 border-b-2 rounded-t-lg hover:text-neutral-600 hover:border-neutral-300 dark:hover:text-neutral-300"
                            id="projects-tab" data-tabs-target="#projects" type="button" role="tab"
                            aria-controls="projects" aria-selected="false">Projects</button>
                    </li>
                </ul>
            </div>
            <div id="pages-tab-content" class="mt-6 pb-10">
                <div class="hidden" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="md:flex">
                        <ul id="home-page-tab" data-tabs-toggle="#home-page-tab" role="tablist"
                            class="page-tab-menu flex-column space-y space-y-3 text-sm font-medium text-neutral-500 dark:text-neutral-400 md:me-4 mb-4 md:mb-0">
                            <li class="me-2" role="presentation">
                                <button class="tab-btn inline-block" id="home-hero-tab" data-tabs-target="#home-hero"
                                    type="button" role="tab" aria-controls="home-hero"
                                    aria-selected="false">Hero</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button
                                    class="tab-btn inline-block hover:text-neutral-600 hover:border-neutral-300 dark:hover:text-neutral-300"
                                    id="home-slider-tab" data-tabs-target="#home-slider" type="button" role="tab"
                                    aria-controls="home-slider" aria-selected="false">Slider</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button
                                    class="tab-btn inline-block hover:text-neutral-600 hover:border-neutral-300 dark:hover:text-neutral-300"
                                    id="home-team-achievements-tab" data-tabs-target="#home-team-achievements"
                                    type="button" role="tab" aria-controls="home-team-achievements"
                                    aria-selected="false">Team Achievements</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button
                                    class="tab-btn inline-block hover:text-neutral-600 hover:border-neutral-300 dark:hover:text-neutral-300"
                                    id="home-industry-focus-tab" data-tabs-target="#home-industry-focus"
                                    type="button" role="tab" aria-controls="home-industry-focus"
                                    aria-selected="false">Industry Focus</button>
                            </li>

                        </ul>
                        <div id="home-page-tab" class="page-tab-content">
                            <div class="hidden" id="home-hero" role="tabpanel" aria-labelledby="home-hero-tab">
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
                                                <textarea name="" id="" cols="30" rows="10" type="text"
                                                    placeholder="Write Description"></textarea>

                                            </div>
                                        </div>
                                        <div class="flex justify-end mt-6">
                                            <button class="btn btn-submit mr-2">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="hidden" id="home-slider" role="tabpanel" aria-labelledby="home-slider-tab">
                                <form action="">
                                    <div class="grid grid-cols-1">
                                        <div class="form-group">
                                            <label class="text-base text-red-800"> Hero Slider Image (Min:6)</label>
                                            <div class="image-upload">
                                                <input type="file">
                                                <div class="image-uploads flex flex-col items-center justify-center">
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
                            </div>
                            <div class="hidden" id="home-team-achievements" role="tabpanel"
                                aria-labelledby="home-team-achievements-tab">
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
                                                    <div class="image-uploads flex flex-col items-center justify-center">
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
                            </div>
                             <div class="hidden" id="home-industry-focus" role="tabpanel"
                                aria-labelledby="home-industry-focus-tab">
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
                                           @include('backend.settings.industry-focus')
                                        </div>
                                        <div class="col-span-1 md:col-span-2">
                                            <div class="flex justify-end mt-6">
                                                <button class="btn btn-submit mr-2">Submit</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden " id="about" role="tabpanel" aria-labelledby="about-tab">
                    <div class="md:flex">
                        <ul id="about-page-tab" data-tabs-toggle="#about-page-tab" role="tablist"
                            class="page-tab-menu flex-column space-y space-y-3 text-sm font-medium text-neutral-500 dark:text-neutral-400 md:me-4 mb-4 md:mb-0">
                            <li class="me-2" role="presentation">
                                <button class="tab-btn inline-block" id="about-hero-tab" data-tabs-target="#about-hero"
                                    type="button" role="tab" aria-controls="about-hero"
                                    aria-selected="false">Hero</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button
                                    class="tab-btn inline-block hover:text-neutral-600 hover:border-neutral-300 dark:hover:text-neutral-300"
                                    id="about-slider-tab" data-tabs-target="#about-slider" type="button" role="tab"
                                    aria-controls="about-slider" aria-selected="false">Slider</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button
                                    class="tab-btn inline-block hover:text-neutral-600 hover:border-neutral-300 dark:hover:text-neutral-300"
                                    id="about-vision-mission-tab" data-tabs-target="#about-vision-mission" type="button"
                                    role="tab" aria-controls="about-vision-mission" aria-selected="false">Our Vision
                                    & Mission</button>
                            </li>

                        </ul>
                        <div id="about-page-tab" class="page-tab-content">
                            <div class="hidden" id="about-hero" role="tabpanel" aria-labelledby="about-hero-tab">
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
                                                <textarea name="" id="" cols="30" rows="10" type="text"
                                                    placeholder="Write Description"></textarea>

                                            </div>
                                        </div>
                                        <div class="flex justify-end mt-6">
                                            <button class="btn btn-submit mr-2">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="hidden" id="about-slider" role="tabpanel" aria-labelledby="about-slider-tab">
                                <p>about-slider content</p>
                            </div>
                            <div class="hidden" id="about-vision-mission" role="tabpanel"
                                aria-labelledby="about-vision-mission-tab">
                                <p>about-vision-mission content</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden " id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                    <p class="text-sm text-neutral-500 dark:text-neutral-400">This is some placeholder content the <strong
                            class="font-medium text-neutral-800 dark:text-white">contacts tab's associated
                            content</strong>.
                        Clicking
                        another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to
                        control
                        the content visibility and styling.</p>
                </div>
                <div class="hidden " id="services" role="tabpanel" aria-labelledby="services-tab">
                    <p class="text-sm text-neutral-500 dark:text-neutral-400">This is some placeholder content the <strong
                            class="font-medium text-neutral-800 dark:text-white">services tab's associated
                            content</strong>.
                        Clicking
                        another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to
                        control
                        the content visibility and styling.</p>
                </div>
                <div class="hidden " id="projects" role="tabpanel" aria-labelledby="projects-tab">
                    <p class="text-sm text-neutral-500 dark:text-neutral-400">This is some placeholder content the <strong
                            class="font-medium text-neutral-800 dark:text-white">projects tab's associated
                            content</strong>.
                        Clicking
                        another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to
                        control
                        the content visibility and styling.</p>
                </div>
            </div>
        </div>
    </div>





@endsection
