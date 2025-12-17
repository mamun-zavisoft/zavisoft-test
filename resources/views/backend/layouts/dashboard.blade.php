<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="icon" href="@/assets/images/icons/favicon.svg" type="image/svg+xml"> --}}
    <link rel="icon" href="{{ asset('favicon.webp') }}" type="image/svg+xml">
    <title>@yield('title', 'Zavisoft') | Zavisoft</title>
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flowbite.min.css') }}" />
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin-dist.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <script src="https://cdn.jsdelivr.net/npm/@hotwired/turbo@8.0.20/dist/turbo.es2017-umd.min.js"></script> --}}
</head>

<body>

    <div class="main-wrapper">
        <div class="header">
            @include('backend.layouts.header')
        </div>
        <div class="sidebar bg-white" id="sidebar">
            @include('backend.layouts.sidebar')
        </div>

        <main class="page-wrapper h-screen">
            <div class="content">

                @yield('content')

            </div>
        </main>
    </div>


    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script defer src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

    <!-- Feather Icon JS -->
    <script defer src="{{ asset('assets/js/feather.min.js') }}"></script>
    <script defer src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>
    <script defer src="{{ asset('assets/js/script.js') }}"></script>
    <script defer src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/global-loader.js') }}"></script> --}}


    <div id="toast"
        class="hidden fixed top-20 right-5 z-50 min-w-[220px] max-w-sm rounded-lg shadow-lg px-4 py-3 bg-gray-800 text-white transition-opacity duration-300">
        <span id="toast-message" class="text-sm"></span>
    </div>
    @stack('scripts')

</body>

</html>
