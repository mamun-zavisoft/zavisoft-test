<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="icon" href="@/assets/images/icons/favicon.svg" type="image/svg+xml"> --}}
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    <title>{{ config('app.name') }} | @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">

</head>

<body>
    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>

    <div class="main-wrapper">
        <div class="header">
            @include('backend.layouts.includes.dashboard.header')
        </div>
        <div class="sidebar" id="sidebar">
            @include('backend.layouts.includes.dashboard.sidebar')
        </div>

        <main class="page-wrapper">
            <div class="content">
                @yield('content')
            </div>
        </main>
    </div>
</body>

</html>
