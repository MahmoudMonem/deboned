<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
      <title>
    @if(!empty($meta_title))
      {{$meta_title}}
    @else
      {{ config('app.name', 'Deboned') }} | Premium Culinary Experience!
    @endif
  </title>
      <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}" />

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
    
    @include('layouts.header')
    
    @yield('content')
    
    @include('layouts.footer')
    
    @yield('bottom')
    
    <!-- Core JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>
    
    @yield('scripts')

    <script>
// Mobile Menu Toggle
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    const body = document.body;
    
    if (mobileMenuToggle && mobileMenu) {
        // Toggle menu on burger click
        mobileMenuToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            this.classList.toggle('active');
            mobileMenu.classList.toggle('active');
            body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
        });
        
        // Close mobile menu when clicking on a link
        const mobileMenuLinks = mobileMenu.querySelectorAll('a');
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileMenuToggle.classList.remove('active');
                mobileMenu.classList.remove('active');
                body.style.overflow = '';
            });
        });
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const isClickInsideMenu = mobileMenu.contains(event.target);
            const isClickOnToggle = mobileMenuToggle.contains(event.target);
            
            if (!isClickInsideMenu && !isClickOnToggle && mobileMenu.classList.contains('active')) {
                mobileMenuToggle.classList.remove('active');
                mobileMenu.classList.remove('active');
                body.style.overflow = '';
            }
        });
    }
    
    // Navbar scroll effect
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
    
    // Scroll Progress Bar
    const scrollProgress = document.querySelector('.scroll-progress');
    window.addEventListener('scroll', function() {
        const windowHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (window.scrollY / windowHeight) * 100;
        scrollProgress.style.width = scrolled + '%';
    });
});
</script>
</body>
</html>