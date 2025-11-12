@php
    $onHome = Request::is('/');
@endphp

<!-- Navigation Header -->
<nav class="navbar sticky-top" id="navbar">
    <div class="navbar-container">
        <a href="{{ url('/') }}" class="navbar-brand">
          <img src="{{ asset('images/logos/deboned-logo-blue.png') }}" alt="Deboned" class="header-brand-logo">
        </a>
        
        <ul class="navbar-menu">
        <li><a href="{{ $onHome ? '#about' : '/#about' }}">About</a></li>
        <li><a href="{{ $onHome ? '#menu' : '/#menu' }}">Menu</a></li>
        <li><a href="{{ $onHome ? '#locations' : '/#locations' }}">Locations</a></li>
        <li><a href="{{ $onHome ? '#contact' : '/#contact' }}">Franchise</a></li>
        </ul>
        <!--
        <a href="{{ url('/reservations') }}" class="navbar-cta">Book a Table</a>
        -->
        <div class="mobile-menu-toggle" id="mobileMenuToggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</nav>

<!-- Mobile Menu -->
<div class="mobile-menu" id="mobileMenu">
    <ul>

        <li><a href="{{ $onHome ? '#about' : '/#about' }}">About</a></li>
        <li><a href="{{ $onHome ? '#menu' : '/#menu' }}">Menu</a></li>
        <li><a href="{{ $onHome ? '#locations' : '/#locations' }}">Locations</a></li>
        <li><a href="{{ $onHome ? '#contact' : '/#contact' }}">Franchise</a></li>
           <li><a href="{{ $onHome ? '#contact' : '/careers' }}">Careers</a></li>

    </ul>
</div>