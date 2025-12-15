<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Browser compatibility -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">

    <!-- Default SEO (Fallback for SPA) -->
    <title>{{ config('app.name', 'Zavisoft') }}</title>

    <meta name="description" content="Zavisoft - Professional software development company">
    <meta name="keywords" content="zavisoft, laravel, vue, software company">

    <!-- Open Graph (Social Sharing) -->
    <meta property="og:title" content="{{ config('app.name', 'Zavisoft') }}">
    <meta property="og:description" content="Zavisoft - Professional software development company">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/og-image.png') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">

    <!-- Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div id="app"></div>
</body>

</html>
