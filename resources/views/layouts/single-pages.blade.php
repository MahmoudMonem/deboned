<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Deboned') }} - @yield('title', 'Premium Culinary Experience')</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="@yield('description', 'Deboned - A premium culinary destination offering exceptional dining experiences with innovative cuisine and unmatched hospitality.')">
    <meta name="keywords" content="deboned, restaurant, dining, culinary, premium food, gastronomy">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="@yield('og-title', 'Deboned - Premium Culinary Experience')">
    <meta property="og:description" content="@yield('og-description', 'Experience exceptional dining with innovative cuisine and unmatched hospitality.')">
    <meta property="og:image" content="@yield('og-image', asset('images/og-image.jpg'))">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;700;900&display=swap" rel="stylesheet">
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <!-- Font Awesome -->


      <link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">
    
    @yield('styles')
</head>
<body>
    @yield('top')
    
    @include('layouts.single-pages-header')
    
    @yield('content')
    
    @include('layouts.single-pages-footer')
    
    @yield('bottom')
    
    <!-- Core JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>
    
    @yield('scripts')
</body>
</html>